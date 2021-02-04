(function ($) {
    $('.burger').click(function () {
        $(this).find('span').toggleClass('active');
        $(this).prev().toggleClass('active');
        $(this).closest('body').toggleClass('active');
        $(this).find('.sub-menu').removeClass('open');
    });

    $('.sub-menu').before("<span class='submenu-icon'><i class='arrow arrow-sm down'></i></span>");

    $('.submenu-icon').click(function () {
        $(this).toggleClass('active');
        $(this).next().toggleClass('open');
    })

    if ($('.number-navigation .prev').length) {
        $('.number-navigation .prev').append("<i class='arrow arrow-sm left'></i>");
    }
    if ($('.number-navigation .next').length) {
        $('.number-navigation .next').append("<i class='arrow arrow-sm right'></i>");
    }
})(jQuery);
