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
	$(".menu_wrapper .nav__list .nav__list--item:nth-child(-n+4) a").on("click", function (e) {
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
	// END NAVBAR TOGGLE

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
