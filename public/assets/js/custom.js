/*===============*/
/*$('.owl-carousel').owlCarousel({
    loop      : true,
    margin    : 0,
    nav       : true,
    responsive: {
        0   : {
            items: 1
        },
        600 : {
            items: 3
        },
        1000: {
            items: 6
        }
    }
});*/
$(".owl-prev").html('<i class="fa fa-caret-left" aria-hidden="true"></i>');
$(".owl-next").html('<i class="fa fa-caret-right" aria-hidden="true"></i>');
$('[data-countdown]').each(function () {
    var $this     = $(this),
        finalDate = $(this).data('countdown');
    $this.countdown(finalDate, function (event) {
        $this.html(event.strftime('<div><span class="days">%D</div><span class="clocks">:</span><div><span class="hours ">%H</span></div><span class="clocks">:</span><div><span class="minutes ">%M</span></div><span class="clocks">:</span><div><span class="seconds">%S</span></div>'));
    });
});
/*Masonry*/
(function ($) {
    var $container = $('.masonry-container');
    $container.imagesLoaded(function () {
        $container.masonry({
            columnWidth : '.item',
            itemSelector: '.item'
        });
    });
})(jQuery);
/*=========================================*/
function stickmenu() {
    var header_height = $('header').height();
    var menu_height = $('#menu_header').height();
    if ($(window).scrollTop() > header_height) {
        $('#menu_header').addClass("sticky");
        $('header').css('margin-bottom', menu_height);
    } else {
        $('#menu_header').removeClass("sticky");
        $('header').css('margin-bottom', 0);
    }
}
/*=========================================*/
/*$('.nav-menu').addClass('active');*/
/*move cart in mobile to menu*/
/*if ($(window).width() < 992) {
    $('#cart_mobile').append($('.header-mid .cart .top-cart-contain'));
    $('#search_mobile').append($('#search'));
} else {
    $('.header-mid .cart').append($('#cart_mobile .top-cart-contain'));
    $('.header-mid .search').append($('#search'));
}
$(window).resize(function () {
    if ($(window).width() < 992) {
        $('#cart_mobile').append($('.header-mid .cart .top-cart-contain'));
        $('#search_mobile').append($('#search'));
    } else {
        $('.header-mid .cart').append($('#cart_mobile .top-cart-contain'));
        $('.header-mid .search').append($('#search'));
    }
});*/
/*sticky menu*/
stickmenu();
$(window).scroll(function () {
    stickmenu();
});
$('.best-seller-pro a[data-toggle="tab"]').on('show.bs.tab', function (e) {
    var $container = $('.best-seller-pro .masonry-container');
    $container.imagesLoaded(function () {
        $container.masonry({
            columnWidth : '.active .item',
            itemSelector: '.active .item'
        });
    });
});
/*display style in category*/
$(".tab-collection .list-list").click(function () {
    $('.tab-collection li a').removeClass('active');
    $(this).addClass('active');
    $(".tabcontent").css('display', 'none');
    $('#list').css('display', 'block');
});
$(".tab-collection .grid-grid").click(function () {
    $('.tab-collection li a').removeClass('active');
    $(this).addClass('active');
    $(".tabcontent").css('display', 'none');
    $('#grid').css('display', 'block');
});

$('#menu_header .level0.parent a[href="' + window.location.href + '"]').closest('.level0.parent').addClass('active');