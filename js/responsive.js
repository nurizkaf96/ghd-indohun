$(document).ready(function () {
    $(window).scroll(function () {
        if ($(this).scrollTop() > 10) {
            $('nav').addClass('scrolled');
        }
        else {
            $('nav').removeClass('scrolled');
        }
    });
    var width = $(window).width();
    $(window).resize(function () {
        if (width <= '720px') {
            $('nav').addClass('scrolled');
        }
    });
})