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

      // start pop-up portfolio
      if (targ.parents().hasClass('pop-up-portfolio__close') || targ.hasClass('pop-up-portfolio__close')) {
        $('#pop-up-portfolio').remove();
      }
      // end pop-up portfolio

      // start pop-up portfolio send
      if (targ.parents().hasClass('pop-up-portfolio__send') || targ.hasClass('pop-up-portfolio__send')) {
        $('#pop-up-portfolio').remove();
      }
      // end pop-up portfolio send
    });

    // start accordion
    $('.diamond-accordion__chevrone').on('click', function () {
      $(this).toggleClass('diamond-accordion__chevrone-up diamond-accordion__chevrone-down');
      $(this).parents('.diamond-accordion__item').find('.diamond-accordion__item-text').toggleClass('diamond-accordion__item-text_active');
    });
    // end accordion

    // start top slider
    // $('.top-slider__inner').slick({
    //   dots: true,
    //   arrows: false,
    //   // autoplay: true,
    //   fade: true,
    //   cssEase: 'linear',
    //   autoplaySpeed: 3500,
    //   speed: 500,
    //   responsive: [
    //     {
    //       breakpoint: 2000,
    //       settings: {
    //         autoplay: true,
    //       },
    //     },
    //     {
    //       breakpoint: 600,
    //       settings: {
    //         autoplay: false,
    //       },
    //     },
    //   ],
    // });
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

    // start
    $('.about-top-slider__inner').slick({
      fade: true,
      prevArrow: $('.about-slider__arrow-prev'),
      nextArrow: $('.about-slider__arrow-next'),
    });
    // end

    // start
    $('.history-back').on('click', function () {
      window.history.back();
    });
    // end

    // start
    $('.diamond-thumbnail__arrow_prtfl').on('click', function () {
      let dataId = $(this).parents('.portfolio__item').attr('data-id');
      let srcImg1 = $(this).parents('.portfolio__item').find('.diamond-thumbnail__img img').attr('src');
      let srcImg2 = $(this).parents('.portfolio__item').next().find('.diamond-thumbnail__img img').attr('src');
      let text = $(this).parents('.portfolio__item').find('.diamond-thumbnail__title').text().trim();

      function openPopUp() {
        $('body').append('<div id="pop-up-portfolio"></div>');
        $('#pop-up-portfolio').append('<div class="pop-up-portfolio__close"></div>');
        $('#pop-up-portfolio').append('<div class="pop-up-portfolio__inner"></div>');
        // for (let i = 0; i < 2; i++) {
        $('.pop-up-portfolio__inner').append(`<div class="pop-up-portfolio__item">
            <div class="pop-up-portfolio__img">
            <img src=${srcImg1}>
            </div>
            </div>`);
        $('.pop-up-portfolio__inner').append(`<div class="pop-up-portfolio__item">
            <div class="pop-up-portfolio__img">
            <img src=${srcImg2}>
            </div>
            </div>`);
        // }
        $('#pop-up-portfolio').append(`<div class="pop-up-portfolio__title">
            <div class="pop-up-portfolio__prev"></div>
            ${text}
            <div class="pop-up-portfolio__next"></div>
            <div class="pop-up-portfolio__send">
            <a href="#feedback">
            Подробнее
            </a>
            </div>
            </div>`);

        $('.pop-up-portfolio__inner').slick({
          prevArrow: $('.pop-up-portfolio__prev'),
          nextArrow: $('.pop-up-portfolio__next'),
        });
      }
      openPopUp();
    });

    // start top slider swiper
    const swiper = new Swiper('.swiper', {
      loop: true,
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
      on: {
        slideChange: function () {
          const slides = this.slides;
          removeAnimations(slides);
          for (let i = 0; i < slides.length; i++) {
            slides[i].classList.add(`animation-${((this.realIndex + i) % 5) + 1}`);
          }
        },
      },
    });

    function removeAnimations(slides) {
      for (let i = 0; i < slides.length; i++) {
        for (let j = 1; j <= 5; j++) {
          slides[i].classList.remove(`animation-${j}`);
        }
      }
    }
    // end top slider swiper

    // start faq

    // end faq
    $('.diamond-accordion__item:first-child').find('.diamond-accordion__item-text').addClass('diamond-accordion__item-text_active');
    // end
    // ===============================
  });
  // start remove mob menu
  $(window).on('pageshow', function (event) {
    $('.header-menu').removeClass('header-menu_active');
    $('header').removeClass('header_white');
  });
  // end remove mob menu
})(jQuery);
