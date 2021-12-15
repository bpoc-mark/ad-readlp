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

	let allowed = false
	var w = $(window).width();
	if (w < 750) {
	  allowed = true;
	}

	// NAVBAR TOGGLE
	$(".menu").on("click", function () {
		$(".menu__line").toggleClass("isActive");
		$(".menu_wrapper").toggleClass("isActive");
	});
	$(".menu_wrapper .nav__list .nav__list--item a").on("click", function (e) {
		e.preventDefault();
		if(allowed){
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
});
