(function ($) {
  $(document).ready(function () {
    "use strict";

    // NAVBAR NOTIFIY
    $('.navbar-notify').click(function () {
      $(".notify-dropdown").toggle();
    });


    // HAMBURGER MENU
    $('.hamburger-menu').on('click', function (e) {
      $(".hamburger-menu .hamburger").toggleClass('opened');
      $(".mobile-menu").toggleClass('active');
      $("body").toggleClass("overflow");
    });


    // NAVBAR SEARCH
    $('.navbar-search').on('click', function (e) {
      $(".search-box").toggleClass('active');
      $("body").toggleClass("overflow");
    });


    // MAIN SPACER
    $(window).on('resize', function () {
      var mastHeight = $('.page-header, .slider').outerHeight();
      $('main').css('margin-top', mastHeight);
    });

    $(window).trigger('resize');

  });
  // END DOCUMENT READY


  var swiper = new Swiper('.carousel-tv-shows', {
    slidesPerView: 5,
    spaceBetween: 30,
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    breakpoints: {
      1024: {
        slidesPerView: 4
      },
      768: {
        slidesPerView: 3
      },
      640: {
        slidesPerView: 2
      },
      320: {
        slidesPerView: 1
      }
    }
  });


  // SLIDER
  var interleaveOffset = 0.5;
  var swiperOptions = {
    loop: true,
    speed: 500,
    parallax: true,
    autoplay: {
      delay: 5000,
      disableOnInteraction: false,
    },
    grabCursor: true,
    watchSlidesProgress: true,
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
      renderBullet: function (index, className) {
        return '<span class="' + className + '"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 30"><circle r="13" cy="15" cx="15"></circle></svg></span>';
      },
    },
    on: {
      progress: function () {
        var swiper = this;
        for (var i = 0; i < swiper.slides.length; i++) {
          var slideProgress = swiper.slides[i].progress;
          var innerOffset = swiper.width * interleaveOffset;
          var innerTranslate = slideProgress * innerOffset;
          swiper.slides[i].querySelector(".slide-inner").style.transform =
            "translate3d(" + innerTranslate + "px, 0, 0)";
        }
      },
      touchStart: function () {
        var swiper = this;
        for (var i = 0; i < swiper.slides.length; i++) {
          swiper.slides[i].style.transition = "";
        }
      },
      setTransition: function (speed) {
        var swiper = this;
        for (var i = 0; i < swiper.slides.length; i++) {
          swiper.slides[i].style.transition = speed + "ms";
          swiper.slides[i].querySelector(".slide-inner").style.transition =
            speed + "ms";
        }
      }
    }
  };

  var swiper = new Swiper(".main-slider", swiperOptions);


  // DATA BACKGROUND IMAGE
  var pageSection = $("*");
  pageSection.each(function (indx) {
    if ($(this).attr("data-background")) {
      $(this).css("background", "url(" + $(this).data("background") + ")");
    }
  });

  // DATA BACKGROUND COLOR
  var pageSection = $("*");
  pageSection.each(function (indx) {
    if ($(this).attr("data-background")) {
      $(this).css("background", $(this).data("background"));
    }
  });


})(jQuery);
