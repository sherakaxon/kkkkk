$(function () {
    $('.open-menu').click(function () {
        $('.menu-links').css({
            transform: 'translate(0% ,0%)'
        });
    });
    $('.close-menu').click(function () {
        $('.menu-links').css({
            transform: 'translate(0% ,-100%)'
        });
    });

    $('.slide-btn2').click(function () {
        $('.slide-img2').css({
            display: 'block'
        });
        $('.slide-img1').css({
            display: 'none'
        });
        $('.slide-img3').css({
            display: 'none'
        });
    });
    $('.slide-btn1').click(function () {
        $('.slide-img2').css({
            display: 'none'
        });
        $('.slide-img1').css({
            display: 'block'
        });
        $('.slide-img3').css({
            display: 'none'
        });
    });
    $('.slide-btn3').click(function () {
        $('.slide-img2').css({
            display: 'none'
        });
        $('.slide-img1').css({
            display: 'none'
        });
        $('.slide-img3').css({
            display: 'block'
        });
    });
})