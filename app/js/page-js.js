$(function() {
    //---------menu----
    $('.hamburger--collapse').click(function() {
        $(this).toggleClass('is-active');
        $('.header__nav').toggleClass('header__nav-active');
    });

    //---------scroll----
    $(".media__list").on("click","a", function (event) {
      event.preventDefault();
        var id  = $(this).attr('href'),
        top = $(id).offset().top;
      $('body,html').animate({scrollTop: top - 90}, 'slow', 'swing');
    });

});