"use strict";

// ADD OPTGROUP ON SELECT
// $(function () {
// 	$("select").append('<optgroup label=""></optgroup>');
// });
$(document).ready(function () {
  //ACCORDION
  $(".accordion__header-cont").on("click", function () {
    if ($(this).hasClass("active")) {
      $(this).find("p").text("close");
      $(this).find("img").css({
        transform: "rotate(0deg)",
        transition: "all 300ms"
      });
      $(this).next(".accordion__content").slideDown();
      $(this).removeClass("active");
    } else {
      $(this).find("p").text("open");
      $(this).find("img").css({
        transform: "rotate(180deg)",
        transition: "all 300ms"
      });
      $(this).next(".accordion__content").slideUp();
      $(this).addClass("active");
    }
  }); //NAVBAR TOGGLE

  $(".hamburger").on("click", function () {
    $(this).find("span").toggleClass("toggled");
    $(this).parent(".nav").find(".menu").toggleClass("active");
    $("#overlay").toggleClass("active");
  });
  $("#overlay").on("click", function () {
    $(".hamburger span").toggleClass("toggled");
    $(".nav .menu").toggleClass("active");
    $("#overlay").toggleClass("active");
  }); //END NAVBAR TOGGLE
  //POPOUT ON SCROLLED

  $(window).on("scroll", function () {
    $(".setAnime").each(function () {
      var viewPos = $(this).offset().top,
          viewScrollTop = $(window).scrollTop(),
          viewHeight = $(window).height();

      if (viewScrollTop > viewPos - viewHeight + viewHeight / 4) {
        $(this).addClass("animated");
      } else {
        $(this).removeClass("animated");
      }
    });
  }); //END POPOUT
});