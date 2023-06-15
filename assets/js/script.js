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
  });
})(jQuery);
