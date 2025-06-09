

    // code for landscape view
    function doOnOrientationChange() {
        switch (window.orientation) {
            case - 90:
            case 90:
                $("body").addClass('landscape');
                break;
            default:
                $('body').removeClass('landscape');
                break;
        }
    }
    if ($(".desk_banners-new").length > 0) {
        var desktopOffer = new Swiper(".desk_banners-new", {
            slidesPerView: 1,
            centeredSlides: true,
            loop: true,
            pagination: {
                el: ".swiper-pagination",
                clickable: true
            },
            autoplay: {
                delay: 3000,
                disableOnInteraction: false
            }
        });
        var bannerLength = desktopOffer.slides.length;
        if (bannerLength === 3) {
            desktopOffer.autoplay.stop();
            $(".swiper-pagination").hide();
            $(".swiper-button-prev, .swiper-button-next").hide();
            desktopOffer.allowSlideNext = false;
            desktopOffer.allowSlidePrev = false;
            desktopOffer.allowTouchMove = false;
        }
    }
    if ($(".mbl_banner-new").length > 0) {
        var mobileOffer = new Swiper(".mbl_banner-new", {
            slidesPerView: 1,
            centeredSlides: true,
            loop: true,
            pagination: {
                el: ".swiper-pagination",
                clickable: true
            },
            autoplay: {
                delay: 3000,
                disableOnInteraction: false
            }
        });
        var bannerLength = mobileOffer.slides.length;
        if (bannerLength === 3) {
            mobileOffer.autoplay.stop();
            $(".swiper-pagination").hide();
            $(".swiper-button-prev, .swiper-button-next").hide();
            mobileOffer.allowSlideNext = false;
            mobileOffer.allowSlidePrev = false;
            mobileOffer.allowTouchMove = false;
        }
    }

  if ($(".mbl_banner-new-rakhi").length > 0) {
             new Swiper(".mbl_banner-new-rakhi", {
                  slidesPerView: 1,
                  centeredSlides: true,
                  loop: true,
                  pagination: {
                      el: ".swiper-pagination",
                      clickable: true
                  },
                  autoplay: {
                      delay: 3000,
                      disableOnInteraction: false
                  }
              });
          }
    if ($(".desk_banners").length > 0) {
        var desktopBanner = new Swiper(".desk_banners", {
            slidesPerView: 1,
            centeredSlides: true,
            loop: true,
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            autoplay: {
                delay: 3000,
                disableOnInteraction: false
            }
        });
        var bannerLength = desktopBanner.slides.length;
        var isSliderDisabled = (bannerLength === 3);
        if (isSliderDisabled) {
            desktopBanner.autoplay.stop();
            $(".swiper-pagination").hide();
            desktopBanner.allowSlideNext = false;
            desktopBanner.allowSlidePrev = false;
            desktopBanner.allowTouchMove = false;
        } else {
            $(".swiper-button-next, .swiper-button-prev").show();
        }
        $(".swiper-container").click(function () {
            if (isSliderDisabled) {
                desktopBanner.autoplay.stop();
            } else if (!desktopBanner.autoplay.running) {
                desktopBanner.autoplay.start();
            }
        });

    }


  if ($(".mbl_banner").length > 0) {

    var mobileBanner = new Swiper(".mbl_banner", {
        slidesPerView: 1,
        centeredSlides: true,
        loop: true,
        pagination: {
            el: ".swiper-pagination",
        },
        autoplay: {
            delay: 3000,
            disableOnInteraction: false
        },
        on: {
            init: function () {
                $(".first-image-banner").hide(); 
                $(".mobile-homepage-banner").removeClass("hide");
            }
        }
    });

    var bannerLength = mobileBanner.slides.length;
    if (bannerLength === 3) {
        mobileBanner.autoplay.stop();
        $(".swiper-pagination").hide();
        $(".swiper-button-prev, .swiper-button-next").hide();
        mobileBanner.allowSlideNext = false;
        mobileBanner.allowSlidePrev = false;
        mobileBanner.allowTouchMove = false;
    }
   
  }


    window.addEventListener('orientationchange', doOnOrientationChange);
