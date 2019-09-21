$(document).ready(function() {
    $('.grid_item .image_popup').on('click', function() {
        $(this).find('.link_popup').magnificPopup('open');
    });
    $('.link_container_image').each(function() {
        $(this).magnificPopup({
            delegate: '.image_popup',
            type: 'image',
            gallery: {
                enabled: true
            }
        });
    });
    $('.link_container_video').each(function() {
        $(this).magnificPopup({
            delegate: '.image_popup',
            type: 'iframe',
            gallery: {
                enabled: true
            }
        });
    });
});
$(document).ready(() => {
    // click active menu
    $('.widget.menu ul li a').click(function(e) {
        e.preventDefault();
        $('.widget.menu ul li a').removeClass('active');
        $(this).addClass('active');
    });

    // click scroll to menu
    $('.widget.menu ul li a')
        .click(function(event) {
            // On-page links
            if (
                location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') &&
                location.hostname == this.hostname
            ) {
                // Figure out element to scroll to
                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                // Does a scroll target exist?
                if (target.length) {
                    // Only prevent default if animation is actually gonna happen
                    event.preventDefault();
                    var scrollTop = target.offset().top - 150;
                    $('html, body').animate({
                        scrollTop: scrollTop
                    }, 2000, function() {
                        // Callback after animation
                        // Must change focus!
                        var $target = $(target);
                        $target.focus();
                        if ($target.is(":focus")) { // Checking if the target was focused
                            return false;
                        } else {
                            $target.attr('tabindex', '-1'); // Adding tabindex for elements not focusable
                            $target.focus(); // Set focus again
                        };
                    });
                }
            }
        });

    // Scroll active menu
    // Cache selectors
    var topMenu = $(".menu_sidebar"),
        topMenuHeight = topMenu.outerHeight() + 15,
        // All list items
        menuItems = topMenu.find("a"),
        // Anchors corresponding to menu items
        scrollItems = menuItems.map(function() {
            var item = $($(this).attr("href"));
            if (item.length) { return item; }
        });
    $(window).scroll(function() {
        // Get container scroll position
        var fromTop = $(this).scrollTop() + topMenuHeight;

        // Get id of current scroll item
        var cur = scrollItems.map(function() {
            if ($(this).offset().top < fromTop)
                return this;
        });
        // Get the id of the current element
        cur = cur[cur.length - 1];
        var id = cur && cur.length ? cur[0].id : "";
        // Set/remove active class
        menuItems.removeClass('active');
        menuItems
            .parent()
            .end().filter("[href='#" + id + "']").addClass("active");
    });
console.log('ssssss')
    var owlSliderHome = $('#owl_slide');
    owlSliderHome.on("initialized.owl.carousel", () => {
        setTimeout(() => {
            $(".owl-item.active .owl-slide-animated").addClass("is-transitioned");
            $("section").show();
        }, 200);
    });

    const $owlCarousel = owlSliderHome.owlCarousel({
        nav : false,
        dotsSpeed : 400,
        dots : true,
        mouseDrag: false,
        loop: true,
        items: 1,
        autoplayHoverPause: true,
        autoplay: true,
        autoplayTimeout: 3000
    });

    $owlCarousel.on("changed.owl.carousel", e => {
        $(".owl-slide-animated").removeClass("is-transitioned");

        const $currentOwlItem = $(".owl-item").eq(e.item.index);
        $currentOwlItem.find(".owl-slide-animated").addClass("is-transitioned");

        const $target = $currentOwlItem.find(".owl-slide-text");
        doDotsCalculations($target);
    });

    $owlCarousel.on("resize.owl.carousel", () => {
        setTimeout(() => {
            setOwlDotsPosition();
        }, 50);
    });

    /*if there isn't content underneath the carousel*/
//$owlCarousel.trigger("refresh.owl.carousel");

    setOwlDotsPosition();

    function setOwlDotsPosition() {
        const $target = $(".owl-item.active .owl-slide-text");
        doDotsCalculations($target);
    }

    function doDotsCalculations(el) {
        const height = el.height();
        const {top, left} = el.position();
        const res = height + top + 20;

        $(".owl-carousel .owl-dots").css({
            top: `${res}px`,
            left: `${left}px`
        });
    }

    owlSliderHome.on('changed.owl.carousel translated.owl.carousel initialized.owl.carousel', function(event) {
        $("#owl_slide .owl-item .hrv-banner-caption").css('display','none');
        $("#owl_slide .owl-item .hrv-banner-caption").removeClass('hrv-caption')
        $("#owl_slide .owl-item.active .hrv-banner-caption").css('display','block');

        var heading = $('#owl_slide .owl-item.active .hrv-banner-caption').clone().removeClass();
        $('#owl_slide .owl-item.active .hrv-banner-caption').remove();
        $('#owl_slide .owl-item.active>.item').append(heading);
        $('#owl_slide .owl-item.active>.item>div').addClass('hrv-banner-caption hrv-caption');
    });
    var owlSliderDot = $('#owl_slide .owl-dot');
    owlSliderDot.each(function(){
        var indexTemp = parseInt($(this).index());
        var index = 0;
        if(index < 10){
            index = "0" + (indexTemp + 1);
        }else{
            index = (indexTemp + 1);
        }
        $(this).html("<span class='dot-border'></span><span class='dot-number'>"+index+"</span>");
    });
    $('#owl_slide .owl-dots').wrap('<div class="container wrap-dots"></div>');
    /* Slider view more scroll */
    $('.fixed-scroll-down').on('click', function(e) {
        var height = $(window).scrollTop() + $(window).height();
        $('html, body').animate({
            scrollTop: height
        }, 1000);
    });

    $('.carousel_slide3').each(function() {
        var $carousel = $(this);
        $carousel.owlCarousel({
            loop: $carousel.data("loop"),
            margin: $carousel.data("margin"),
            mouseDrag: $carousel.data("mouse-drag"),
            touchDrag: $carousel.data("touch-drag"),
            dots: $carousel.data("dots"),
            center: $carousel.data("center"),
            rewind: $carousel.data("rewind"),
            autoplay: $carousel.data("autoplay"),
            nav: $carousel.data("nav"),
            navText: ['<i class="ion-ios-arrow-back"></i>', '<i class="ion-ios-arrow-forward"></i>'],
            autoplayTimeout: $carousel.data("autoplay-timeout"),
            responsive: {
                0: {
                    items: 1,
                },
                380: {
                    items: 1,
                },
                576: {
                    items: 2,
                },
                1000: {
                    items: 3,
                },
                1199: {
                    items: 3
                }
            }
        });
    });

});
