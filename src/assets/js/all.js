//MENU FOOTER
$(document).ready(function () {
	$(".accordion").on("click", function () {
		if ($(this).hasClass("active")) {
			$(this)
				.find("img")
				.attr(
					"src",
					"http://localhost:3000/wp-content/themes/ad-readlp/release/image/minus_sign.png"
				);
			$(this).next(".accordion_content").slideDown();
			$(this).removeClass("active");
		} else {
			$(this)
				.find("img")
				.attr(
					"src",
					"http://localhost:3000/wp-content/themes/ad-readlp/release/image/plus_sign.png"
				);
			$(this).next(".accordion_content").slideUp();
			$(this).addClass("active");
		}
	});

	$(window).on("load scroll", function () {
		var t = $(this).scrollTop();
		if (t > 100) {
			$(".page__header").addClass("isScroll");
		} else {
			$(".page__header").removeClass("isScroll");
		};
	});

	let allowed = false
	var w = $(window).width();
	if (w < 750) {
	  allowed = true;
	  $('.sub_menu').removeAttr('style');
	}

	// NAVBAR TOGGLE
	$(".menu").on("click", function () {
		$(".menu__line").toggleClass("isActive");
		$(".menu_wrapper").toggleClass("isActive");
		$(".page__header").toggleClass("isActive");
	});

	// MENU LINK NAVBAR TOGGLE
	$(".spLink").on("click", function (e) {
		if(allowed){
			e.preventDefault();
			if($(this).hasClass("isActive")){
				$(this).removeClass("isActive");
				$(this).next(".sub_menu").slideUp();
			}else {
				$(this).addClass("isActive");
				$(this).next(".sub_menu").slideDown();
			}
		}
	});
	
	// ACCORDION TOGGLE
	$(".c-accordion__head--title").on("click", function () {
		if($(this).hasClass("isActive")){
			$(this).parent().next('.c-accordion__content').slideUp();
			$(this).removeClass("isActive");
		}
		else{
			$(this).parent().next('.c-accordion__content').slideDown();
			$(this).addClass("isActive");
		}
	});
});

// TOP PAGE SLIDER JS
const swiper1 = new Swiper('.top_swiper', {
	direction: 'horizontal',
	loop: false,
	slidesPerView: 3,
	spaceBetween: 40,
	breakpoints: {
		// when window width is >= 320px
		320: {
		  slidesPerView: 1.2,
		  spaceBetween: 20
		},
		// when window width is >= 750px
		750: {
			slidesPerView: 1.5,
			spaceBetween: 20,
		},
		// when window width is >= 1000px
		1000: {
			slidesPerView: 3,
			spaceBetween: 40,
		},
	},
	navigation: {
		nextEl: '.swiper-button-next',
		prevEl: '.swiper-button-prev',
	},
});