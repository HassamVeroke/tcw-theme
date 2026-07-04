/**
 * ==========================================================================
 * TCW Theme - Animations
 * ==========================================================================
 */

document.addEventListener('DOMContentLoaded', () => {

	/* ==========================================================
	   Respect Reduced Motion Preference
	========================================================== */

	const prefersReducedMotion = window.matchMedia(
		'(prefers-reduced-motion: reduce)'
	).matches;

	if (prefersReducedMotion) {
		return;
	}

	/* ==========================================================
	   Reveal Elements on Scroll
	========================================================== */

	const revealItems = document.querySelectorAll(
		'.reveal, .feature-card, .testimonial-card, .stat-card'
	);

	if (revealItems.length) {

		const revealObserver = new IntersectionObserver((entries, observer) => {

			entries.forEach(entry => {

				if (entry.isIntersecting) {

					entry.target.classList.add('revealed');
					observer.unobserve(entry.target);

				}

			});

		}, {
			threshold: 0.15,
			rootMargin: '0px 0px -60px 0px'
		});

		revealItems.forEach(item => revealObserver.observe(item));

	}

	/* ==========================================================
	   Animated Counter
	========================================================== */

	const counters = document.querySelectorAll('[data-counter]');

	if (counters.length) {

		const counterObserver = new IntersectionObserver((entries, observer) => {

			entries.forEach(entry => {

				if (!entry.isIntersecting) {
					return;
				}

				const counter = entry.target;

				const target = parseInt(
					counter.dataset.counter,
					10
				);

				const duration = 1500;
				const startTime = performance.now();

				const animate = (currentTime) => {

					const progress = Math.min(
						(currentTime - startTime) / duration,
						1
					);

					counter.textContent = Math.floor(
						progress * target
					).toLocaleString();

					if (progress < 1) {
						requestAnimationFrame(animate);
					} else {
						counter.textContent = target.toLocaleString();
					}

				};

				requestAnimationFrame(animate);

				observer.unobserve(counter);

			});

		}, {
			threshold: 0.5
		});

		counters.forEach(counter => counterObserver.observe(counter));

	}

	/* ==========================================================
	   Floating Hero Cards
	========================================================== */

	const floatingItems = document.querySelectorAll('.floating-card');

	floatingItems.forEach((card, index) => {

		card.style.animation =
			`tcwFloat ${4 + (index * 0.5)}s ease-in-out infinite`;

	});

	/* ==========================================================
	   Fade Hero Content
	========================================================== */

	const hero = document.querySelector('.hero-content');

	if (hero) {

		requestAnimationFrame(() => {

			hero.classList.add('hero-visible');

		});

	}

});