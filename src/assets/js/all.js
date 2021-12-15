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
});
