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
});
