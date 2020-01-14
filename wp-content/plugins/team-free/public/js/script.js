jQuery(document).ready(function ($) {
  $(".page-loading-image").css("visibility", "visible");

  if ($(".sptp-carousel").length > 0) {
    $(".sptp-carousel").each(function () {
      var sptpID = $(this)
        .closest(".sptp-section")
        .attr("id");
      var sptpCarousel = $("#" + sptpID + " .sptp-main-carousel").data(
        "carousel"
      );
      if (sptpCarousel != "undefined" && sptpCarousel.autoplay) {
        var swiper = new Swiper("#" + sptpID + " .sptp-main-carousel", {
          speed: sptpCarousel.speed,
          slidesPerView: sptpCarousel.items,
          spaceBetween: sptpCarousel.spaceBetween,
          autoplay: {
            delay: sptpCarousel.autoplay_speed
          },
          preloadImages: false,
          loop: sptpCarousel.loop,
          lazy: sptpCarousel.lazy,
          autoHeight: sptpCarousel.autoHeight,
          pagination: {
            el: "#" + sptpID + " .sptp-main-carousel .swiper-pagination",
            clickable: true
          },
          navigation: {
            nextEl: "#" + sptpID + " .sptp-main-carousel .sptp-button-next",
            prevEl: "#" + sptpID + " .sptp-main-carousel .sptp-button-prev"
          },
          breakpoints: {
            320: {
              slidesPerView: sptpCarousel.breakpoints.mobile
            },
            414: {
              slidesPerView: sptpCarousel.breakpoints.tablet
            },
            768: {
              slidesPerView: sptpCarousel.breakpoints.laptop
            },
            1024: {
              slidesPerView: sptpCarousel.breakpoints.desktop
            }
          },
          ally: {
            enabled: sptpCarousel.enabled,
            prevSlideMessage: sptpCarousel.prevSlideMessage,
            nextSlideMessage: sptpCarousel.nextSlideMessage,
            firstSlideMessage: sptpCarousel.firstSlideMessage,
            lastSlideMessage: sptpCarousel.lastSlideMessage,
            paginationBulletMessage: sptpCarousel.paginationBulletMessage
          },
          keyboard: {
            enabled: true
          }
        });
      } else {
        var swiper = new Swiper("#" + sptpID + " .sptp-main-carousel", {
          speed: sptpCarousel.speed,
          slidesPerView: sptpCarousel.items,
          spaceBetween: sptpCarousel.spaceBetween / 2,
          autoplay: sptpCarousel.autoplay,
          // autoplayDisableOnInteraction: false,
          preloadImages: false,
          loop: sptpCarousel.loop,
          lazy: sptpCarousel.lazy,
          autoHeight: sptpCarousel.autoHeight,
          pagination: {
            el: "#" + sptpID + " .sptp-main-carousel .swiper-pagination",
            clickable: true
          },
          navigation: {
            nextEl: "#" + sptpID + " .sptp-main-carousel .sptp-button-next",
            prevEl: "#" + sptpID + " .sptp-main-carousel .sptp-button-prev"
          },
          breakpoints: {
            320: {
              slidesPerView: sptpCarousel.breakpoints.mobile
            },
            414: {
              slidesPerView: sptpCarousel.breakpoints.tablet
            },
            768: {
              slidesPerView: sptpCarousel.breakpoints.laptop
            },
            1024: {
              slidesPerView: sptpCarousel.breakpoints.desktop
            }
          },
          ally: {
            enabled: sptpCarousel.enabled,
            prevSlideMessage: sptpCarousel.prevSlideMessage,
            nextSlideMessage: sptpCarousel.nextSlideMessage,
            firstSlideMessage: sptpCarousel.firstSlideMessage,
            lastSlideMessage: sptpCarousel.lastSlideMessage,
            paginationBulletMessage: sptpCarousel.paginationBulletMessage
          }
        });
      }
      if (sptpCarousel.stop_onhover) {
        $("#" + sptpID + " .sptp-main-carousel").hover(
          function () {
            swiper.autoplay.stop();
          },
          function () {
            swiper.autoplay.start();
          }
        );
      }
    });
  }

 $(".page-loading-image").css("visibility", "hidden");

});
