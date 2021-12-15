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

	// NAVBAR TOGGLE
	$(".menu").on("click", function () {
		$(".menu__line").toggleClass("isActive");
	});
	$(".menu_wrapper .nav__list .nav__list--item a").on("click", function (e) {
		e.preventDefault();
		$(this).toggleClass("isActive");
		$(".sub_menu").toggle();
	});
	// END NAVBAR TOGGLE
});
