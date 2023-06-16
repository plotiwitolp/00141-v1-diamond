(function ($) {
  $(document).ready(function () {
    // start open main menu
    $('.header__burger_open').on('click', function () {
      $('.header-menu').addClass('header-menu_active');
      $('header').addClass('header_white');
    });
    // end open main menu

    $('body').on('click', function (e) {
      let targ = $(e.target);

      // start close main menu
      if (targ.parents().hasClass('header__burger_close') || (!targ.parents().hasClass('header-menu') && !targ.parents().hasClass('header__burger_open'))) {
        $('.header-menu').removeClass('header-menu_active');
        $('header').removeClass('header_white');
      } else {
        return;
      }
      // end close main menu
    });

    // start accordion
    $('.diamond-accordion__chevrone').on('click', function () {
      $(this).toggleClass('diamond-accordion__chevrone-up diamond-accordion__chevrone-down');
      $(this).parents('.diamond-accordion__item').find('.diamond-accordion__item-text').toggleClass('diamond-accordion__item-text_active');
    });
    // end accordion

    // start top slider
    $('.top-slider__inner').slick({
      dots: true,
      arrows: false,
      autoplay: true,
      fade: true,
      cssEase: 'linear',
      autoplaySpeed: 3500,
      speed: 500,
    });
    // end top slider

    // start our clients slider
    $('.client-slider__inner').slick({
      dots: false,
      arrows: true,
      autoplay: false,
      slidesToShow: 5,
      infinite: true,
      prevArrow: $('.client-slider__arrow-prev'),
      nextArrow: $('.client-slider__arrow-next'),
      responsive: [
        {
          breakpoint: 834,
          settings: {
            slidesToShow: 4,
          },
        },
        {
          breakpoint: 689,
          settings: {
            slidesToShow: 3,
          },
        },
      ],
    });
    // end  our clients slider

    // start reviews slider
    $('.reviews-slider__inner').slick({
      dots: false,
      arrows: true,
      autoplay: false,
      // slidesToShow: 1,
      infinite: true,
      prevArrow: $('.reviews-slider__arrow-prev'),
      nextArrow: $('.reviews-slider__arrow-next'),
      responsive: [
        {
          breakpoint: 770,
          settings: 'unslick',
        },
      ],
    });
    // end  reviews slider
  });
})(jQuery);
