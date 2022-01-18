// Swiper Declarations:

const swiper_nav = new Swiper(".MncSwiperNav", {
	spaceBetween: 10,
	slidesPerView: 5,
	freeMode: true,
	watchSlidesVisibility: true,
	watchSlidesProgress: true,
	grabCursor: true,
	loop: true
});
const swiper_gallery = new Swiper(".MncSwiperMain", {
	spaceBetween: 10,
	mousewheel: true,
	loop: true,
	speed: 600,
	navigation: {
		nextEl: ".swiper-button-next",
		prevEl: ".swiper-button-prev",
	},
	thumbs: {
		swiper: swiper_nav,
	},
});
const swiper_posts = new Swiper(".MncSwiperPosts", {
	spaceBetween: 10,
	loop: true,
	speed: 600,
	navigation: {
		nextEl: ".swiper-button-next",
		prevEl: ".swiper-button-prev",
	},
	pagination: {
		el: ".swiper-pagination",
		clickable: true,
	}
});

document.addEventListener("alpine:init", () => {

	Alpine.data("mncswiperhome", () => ({
		swiper: null,
		showtrigger: false,
		init() {
			this.swiper = new Swiper(this.$refs.refswiper, {
				spaceBetween: 10,
				loop: true,
				mousewheel:true,
				speed: 600,
				keyboard: {
					enabled: true,
				},
				pagination: {
					el: '.swiper-pagination',
					clickable: true,
				}
			});
		}
	}));

	Alpine.data("mncswiperquartier", () => ({
		thumbs: null,
		showtrigger: false,
		init() {
			this.thumbs = new Swiper(this.$refs.refthumbs, {
				spaceBetween: 20,
				slidesPerView: 5,
				freeMode: true,
				watchSlidesProgress: true,
			});
			this.swiper = new Swiper(this.$refs.refswiper, {
				spaceBetween: 10,
				mousewheel: false,
				loop: true,
				speed: 600,
				keyboard: {
					enabled: true,
				},
				thumbs: {
					swiper: this.thumbs,
				},
			});
		}
	}));

});

// JQuery:
// (function ($) {
// 	'use strict';
//
// 	$(document).on('favorites-cleared', function (event, button) {
// 		location.reload()
// 	});
//
// })(jQuery);

