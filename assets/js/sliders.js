/**
 * ==========================================================================
 * TCW Theme - Sliders
 * ==========================================================================
 */

document.addEventListener('DOMContentLoaded', () => {

	// Exit if Swiper is not available.
	if (typeof Swiper === 'undefined') {
		console.warn('TCW: Swiper library not found.');
		return;
	}

	/* ==========================================================
	   Testimonials Slider
	========================================================== */

	const testimonials = document.querySelector('.testimonials-slider');

	if (testimonials) {

		new Swiper(testimonials, {
			slidesPerView: 1,
			spaceBetween: 30,
			speed: 600,
			loop: true,

			pagination: {
				el: '.swiper-pagination',
				clickable: true,
			},

			navigation: {
				nextEl: '.swiper-button-next',
				prevEl: '.swiper-button-prev',
			},

			breakpoints: {
				768: {
					slidesPerView: 2
				},
				1200: {
					slidesPerView: 3
				}
			}
		});

	}

	/* ==========================================================
	   Logo Carousel
	========================================================== */

	const logos = document.querySelector('.logo-slider');

	if (logos) {

		new Swiper(logos, {
			slidesPerView: 2,
			spaceBetween: 24,
			speed: 5000,
			loop: true,
			allowTouchMove: false,

			autoplay: {
				delay: 0,
				disableOnInteraction: false,
			},

			breakpoints: {
				576: {
					slidesPerView: 3
				},
				768: {
					slidesPerView: 4
				},
				1200: {
					slidesPerView: 6
				}
			}
		});

	}

	/* ==========================================================
	   Resources Slider
	========================================================== */

	const resources = document.querySelector('.resources-slider');

	if (resources) {

		new Swiper(resources, {
			slidesPerView: 1,
			spaceBetween: 32,
			speed: 600,

			pagination: {
				el: '.swiper-pagination',
				clickable: true,
			},

			breakpoints: {
				768: {
					slidesPerView: 2
				},
				1200: {
					slidesPerView: 3
				}
			}
		});

	}

	/* ==========================================================
	   Generic Slider
	   Usage:
	   <div class="swiper js-swiper">
	========================================================== */

	document.querySelectorAll('.js-swiper').forEach(slider => {

		if (
			slider.classList.contains('logo-slider') ||
			slider.classList.contains('testimonials-slider') ||
			slider.classList.contains('resources-slider')
		) {
			return;
		}

		new Swiper(slider, {
			slidesPerView: 1,
			spaceBetween: 24,
			speed: 600,

			pagination: {
				el: slider.querySelector('.swiper-pagination'),
				clickable: true
			},

			navigation: {
				nextEl: slider.querySelector('.swiper-button-next'),
				prevEl: slider.querySelector('.swiper-button-prev')
			}
		});

	});

});