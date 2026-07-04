/**
 * ==========================================================================
 * TCW Theme - Navigation
 * ==========================================================================
 */

document.addEventListener('DOMContentLoaded', () => {

	const header = document.querySelector('.site-header');
	const menuToggle = document.querySelector('.menu-toggle');
	const navigation = document.querySelector('.primary-navigation');

	/* ==========================================================
	   Sticky Header
	========================================================== */

	const updateHeader = () => {
		if (!header) return;

		if (window.scrollY > 30) {
			header.classList.add('is-scrolled');
		} else {
			header.classList.remove('is-scrolled');
		}
	};

	updateHeader();
	window.addEventListener('scroll', updateHeader);

	/* ==========================================================
	   Mobile Menu
	========================================================== */

	if (menuToggle && navigation) {

		menuToggle.addEventListener('click', () => {

			menuToggle.classList.toggle('is-active');
			navigation.classList.toggle('is-open');
			document.body.classList.toggle('menu-open');

		});

	}

	/* ==========================================================
	   Close Mobile Menu on Link Click
	========================================================== */

	if (navigation) {

		navigation.querySelectorAll('a').forEach(link => {

			link.addEventListener('click', () => {

				if (window.innerWidth <= 991) {

					navigation.classList.remove('is-open');

					if (menuToggle) {
						menuToggle.classList.remove('is-active');
					}

					document.body.classList.remove('menu-open');

				}

			});

		});

	}

	/* ==========================================================
	   Escape Key Closes Menu
	========================================================== */

	document.addEventListener('keydown', (event) => {

		if (
			event.key === 'Escape' &&
			navigation &&
			navigation.classList.contains('is-open')
		) {

			navigation.classList.remove('is-open');

			if (menuToggle) {
				menuToggle.classList.remove('is-active');
			}

			document.body.classList.remove('menu-open');

		}

	});

	/* ==========================================================
	   Dropdown Menus (Touch Support)
	========================================================== */

	document.querySelectorAll('.menu-item-has-children > a').forEach(link => {

		link.addEventListener('click', (event) => {

			if (window.innerWidth <= 991) {

				event.preventDefault();

				link.parentElement.classList.toggle('submenu-open');

			}

		});

	});

});