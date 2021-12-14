"use strict";

// ADD OPTGROUP ON SELECT
// $(function () {
// 	$("select").append('<optgroup label=""></optgroup>');
// });
$(document).ready(function () {
  //ACCORDION
  $(".accordion").on("click", function () {
    if ($(this).hasClass("active")) {
      $(this).find("img").css({
        transform: "rotate(-135deg)",
        transition: "all 300ms"
      });
      $(this).next(".accordion_content").slideDown();
      $(this).removeClass("active");
    } else {
      $(this).find("img").css({
        transform: "rotate(0deg)",
        transition: "all 300ms"
      });
      $(this).next(".accordion_content").slideUp();
      $(this).addClass("active");
    }
  }); //NAVBAR TOGGLE
  // $(".hamburger").on("click", function () {
  // 	$(this).find("span").toggleClass("toggled");
  // 	$(this).parent(".nav").find(".menu").toggleClass("active");
  // 	$("#overlay").toggleClass("active");
  // });
  // $("#overlay").on("click", function () {
  // 	$(".hamburger span").toggleClass("toggled");
  // 	$(".nav .menu").toggleClass("active");
  // 	$("#overlay").toggleClass("active");
  // });
  //END NAVBAR TOGGLE
});