//MENU FOOTER
$(document).ready(function () {
	$(".page__footer--links__items .accordion").on("click", function () {
		if ($(this).hasClass("isActive")) {
			$(this).removeClass("isActive");
			$(this).next(".accordion_content").slideUp();
		} else {
			$(this).addClass("isActive");
			$(this).next(".accordion_content").slideDown();
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
		$('.sub_menu').removeAttr('style');
	}

	$(window).on("load resize", function () {
		var w = $(window).width();
		if (w < 750) {
		allowed = true;
			$('.sub_menu').removeAttr('style');
			$('.sub_menu').removeAttr('style');
		}
	});

	// NAVBAR TOGGLE
	$(".menu").on("click", function () {
		$(".menu__line").toggleClass("isActive");
		$(".menu_wrapper").toggleClass("isActive");
		$(".accordion_content").toggleClass("isActive");
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

	$('.wpcf7-list-item label input').click(function(){
		if($(this).is(':checked')){
			$(this).parent().addClass('isActive');
		}else{
			$(this).parent().removeClass('isActive');
		}
	})
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
$(document).on('click', 'a[href^="#"]', function (event) {
  event.preventDefault();
  $('html, body').animate({
    scrollTop: $($.attr(this, 'href')).offset().top
  }, 2000);
});

	//Submenu Anchor Link
	function navCompany() {
		$(".menu").click();
	}
	

var ow = window.outerWidth;
var owOutput = (ow > 750) ? '7400' : '4800';


var myIndex = 0;
function scale () {
  var i;
  var inner = document.querySelectorAll('.blob');
   for (i = 0; i < inner.length; i++) {
   inner[i].classList.remove('current');
    }
  myIndex++;
  if (myIndex > inner.length) {
    myIndex = 1
  }
  inner[myIndex - 1].classList.add('isActive');
  inner[myIndex - 1].classList.add('current');
  setTimeout(scale, owOutput);
   }
scale();
var myIndex2 = 0;
setTimeout(function(){
  function removeScale() {
    var inner2 = document.querySelectorAll('.blob');
    myIndex2++;
    if(myIndex2 > inner2.length) {
      myIndex2 = 1;
    }
    inner2[myIndex2 - 1].classList.remove('isActive');
    setTimeout(removeScale, owOutput);
  }
  removeScale();
}, owOutput * 3);
