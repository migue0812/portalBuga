//Parallax 
$(document).ready(function () {

    $(window).scroll(function () {
        var barra = $(window).scrollTop();
        var posicion = barra * 0.10;
        $('body').css({
            'background-position': '0 -' + posicion + 'px'
        });
    });
});

$(function () {
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    });
});

$(window).load(function () {
    $('#preloader').fadeOut('slow');
    $('body').css({'overflow': 'visible'});
});

$(document).ready(function () {
    $('#texto').click(function () {
        $(this).toggleClass('.resaltar');
    });
});