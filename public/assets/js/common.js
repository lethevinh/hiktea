let $ = jQuery;
jQuery(document).ready(function() {
    "use strict";
    $(document).on('click', '.filte-cate', function(e) {
        $(".filter-container").addClass("show_block");
    });
    $(document).on('click', '.close_filter', function(e) {
        $(".filter-container").removeClass("show_block");
    });
    $(document).on('click', '#sort-by ul', function(e) {
        $('#sort-by ul ul').toggleClass('show_block');
    });
    jQuery('.toggle').click(function() {
        if (jQuery('.submenu').is(":hidden")) {
            jQuery('.submenu').slideDown("fast");
        } else {
            jQuery('.submenu').slideUp("fast");
        }
        return false;
    });
    /* Phone Menu  */
    jQuery(".topnav").accordion({
        accordion: false,
        speed: 300,
        closedSign: '+',
        openedSign: '-'
    });
    $("#nav > li").hover(function() {
        var el = $(this).find(".level0-wrapper");
        el.hide();
        el.css("left", "0");
        el.stop(true, true).delay(150).fadeIn(300, "easeOutCubic");
    }, function() {
        $(this).find(".level0-wrapper").stop(true, true).delay(300).fadeOut(300, "easeInCubic");
    });
    var scrolled = false;
    jQuery("#nav li.level0.drop-menu").mouseover(function() {
        if (jQuery(window).width() >= 740) {
            jQuery(this).children('ul.level1').fadeIn(100);
        }
        return false;
    }).mouseleave(function() {
        if (jQuery(window).width() >= 740) {
            jQuery(this).children('ul.level1').fadeOut(100);
        }
        return false;
    });
    /*jQuery("#nav li.level0.drop-menu li").mouseover(function () {
        if (jQuery(window).width() >= 740) {
            jQuery(this).children('ul').css({
                top : 0,
                left: "165px"
            });
            var offset = jQuery(this).offset();
            if (offset && (jQuery(window).width() < offset.left + 325)) {
                jQuery(this).children('ul').removeClass("right-sub");
                jQuery(this).children('ul').addClass("left-sub");
                jQuery(this).children('ul').css({
                    top : 0,
                    left: "-167px"
                });
            } else {
                jQuery(this).children('ul').removeClass("left-sub");
                jQuery(this).children('ul').addClass("right-sub");
            }
            jQuery(this).children('ul').fadeIn(100);
        }
    }).mouseleave(function () {
        if (jQuery(window).width() >= 740) {
            jQuery(this).children('ul').fadeOut(100);
        }
    });*/
    jQuery("#new-collection-slider .slider-items").owlCarousel({
        items: 5,
        /*10 items above 1000px browser width*/
        itemsDesktop: [1024, 5],
        /*5 items between 1024px and 901px*/
        itemsDesktopSmall: [900, 3],
        /*3 items betweem 900px and 601px*/
        itemsTablet: [600, 2],
        /*2 items between 600 and 0;*/
        itemsMobile: [320, 1],
        navigation: true,
        navigationText: ["<a class=\"flex-prev\"></a>", "<a class=\"flex-next\"></a>"],
        slideSpeed: 500,
        pagination: false
    });
    jQuery("#best-seller-slider .slider-items").owlCarousel({
        items: 4,
        /*10 items above 1000px browser width*/
        itemsDesktop: [1024, 4],
        /*5 items between 1024px and 901px*/
        itemsDesktopSmall: [900, 3],
        /*3 items betweem 900px and 601px*/
        itemsTablet: [600, 2],
        /*2 items between 600 and 0;*/
        itemsMobile: [320, 1],
        navigation: true,
        navigationText: ["<a class=\"flex-prev\"></a>", "<a class=\"flex-next\"></a>"],
        slideSpeed: 500,
        pagination: false
    });
    jQuery("#featured-product-slider .slider-items").owlCarousel({
        items: 4,
        /*10 items above 1000px browser width*/
        itemsDesktop: [1024, 4],
        /*5 items between 1024px and 901px*/
        itemsDesktopSmall: [900, 3],
        /*3 items betweem 900px and 601px*/
        itemsTablet: [600, 2],
        /*2 items between 600 and 0;*/
        itemsMobile: [320, 1],
        navigation: true,
        navigationText: ["<a class=\"flex-prev\"></a>", "<a class=\"flex-next\"></a>"],
        slideSpeed: 500,
        pagination: false
    });
    jQuery("#featured-slider .slider-items").owlCarousel({
        items: 4,
        /*10 items above 1000px browser width*/
        itemsDesktop: [1024, 4],
        /*5 items between 1024px and 901px*/
        itemsDesktopSmall: [900, 3],
        /*3 items betweem 900px and 601px*/
        itemsTablet: [600, 2],
        /*2 items between 600 and 0;*/
        itemsMobile: [320, 1],
        navigation: true,
        navigationText: ["<a class=\"flex-prev\"></a>", "<a class=\"flex-next\"></a>"],
        slideSpeed: 500,
        pagination: false
    });
    jQuery("#recommend-slider .slider-items").owlCarousel({
        items: 6,
        /*10 items above 1000px browser width*/
        itemsDesktop: [1024, 4],
        /*5 items between 1024px and 901px*/
        itemsDesktopSmall: [900, 3],
        /*3 items betweem 900px and 601px*/
        itemsTablet: [600, 2],
        /*2 items between 600 and 0;*/
        itemsMobile: [320, 1],
        navigation: true,
        navigationText: ["<a class=\"flex-prev\"></a>", "<a class=\"flex-next\"></a>"],
        slideSpeed: 500,
        pagination: false
    });
    jQuery("#brand-logo-slider .slider-items").owlCarousel({
        autoplay: true,
        items: 4,
        /*10 items above 1000px browser width*/
        itemsDesktop: [1024, 4],
        /*5 items between 1024px and 901px*/
        itemsDesktopSmall: [900, 3],
        /*3 items betweem 900px and 601px*/
        itemsTablet: [600, 2],
        /*2 items between 600 and 0;*/
        itemsMobile: [320, 1],
        navigation: true,
        navigationText: ["<a class=\"flex-prev\"></a>", "<a class=\"flex-next\"></a>"],
        slideSpeed: 500,
        pagination: false
    });
    jQuery("#category-desc-slider .slider-items").owlCarousel({
        autoplay: true,
        items: 1,
        /*10 items above 1000px browser width*/
        itemsDesktop: [1024, 1],
        /*5 items between 1024px and 901px*/
        itemsDesktopSmall: [900, 1],
        /*3 items betweem 900px and 601px*/
        itemsTablet: [600, 1],
        /*2 items between 600 and 0;*/
        itemsMobile: [320, 1],
        navigation: true,
        navigationText: ["<a class=\"flex-prev\"></a>", "<a class=\"flex-next\"></a>"],
        slideSpeed: 500,
        pagination: false
    });
    jQuery("#more-views-slider .slider-items").owlCarousel({
        autoplay: true,
        items: 5,
        /*10 items above 1000px browser width*/
        itemsDesktop: [1024, 4],
        /*5 items between 1024px and 901px*/
        itemsDesktopSmall: [900, 3],
        /*3 items betweem 900px and 601px*/
        itemsTablet: [600, 2],
        /*2 items between 600 and 0;*/
        itemsMobile: [320, 1],
        navigation: true,
        navigationText: ["<a class=\"flex-prev\"></a>", "<a class=\"flex-next\"></a>"],
        slideSpeed: 500,
        pagination: false
    });
    jQuery("#related-products-slider .slider-items").owlCarousel({
        items: 4,
        /*10 items above 1000px browser width*/
        itemsDesktop: [1024, 4],
        /*5 items between 1024px and 901px*/
        itemsDesktopSmall: [900, 3],
        /*3 items betweem 900px and 601px*/
        itemsTablet: [600, 2],
        /*2 items between 600 and 0;*/
        itemsMobile: [320, 1],
        navigation: true,
        navigationText: ["<a class=\"flex-prev\"></a>", "<a class=\"flex-next\"></a>"],
        slideSpeed: 500,
        pagination: false
    });
    jQuery("#upsell-products-slider .slider-items").owlCarousel({
        items: 4,
        /*10 items above 1000px browser width*/
        itemsDesktop: [1024, 4],
        /*5 items between 1024px and 901px*/
        itemsDesktopSmall: [900, 3],
        /*3 items betweem 900px and 601px*/
        itemsTablet: [600, 2],
        /*2 items between 600 and 0;*/
        itemsMobile: [320, 1],
        navigation: true,
        navigationText: ["<a class=\"flex-prev\"></a>", "<a class=\"flex-next\"></a>"],
        slideSpeed: 500,
        pagination: false
    });
    jQuery("#more-views-slider .slider-items").owlCarousel({
        autoplay: true,
        items: 3,
        /*10 items above 1000px browser width*/
        itemsDesktop: [1024, 4],
        /*5 items between 1024px and 901px*/
        itemsDesktopSmall: [900, 3],
        /*3 items betweem 900px and 601px*/
        itemsTablet: [600, 2],
        /*2 items between 600 and 0;*/
        itemsMobile: [320, 1],
        navigation: true,
        navigationText: ["<a class=\"flex-prev\"></a>", "<a class=\"flex-next\"></a>"],
        slideSpeed: 500,
        pagination: false
    });
    jQuery("ul.accordion li.parent, ul.accordion li.parents, ul#magicat li.open").each(function() {
        jQuery(this).append('<em class="open-close">&nbsp;</em>');
    });
    jQuery('ul.accordion, ul#magicat').accordionNew();
    jQuery("ul.accordion li.active, ul#magicat li.active").each(function() {
        jQuery(this).children().next("div").css('display', 'block');
    });
});

function slideEffectAjax() {
    var ww = $(window).width();
    if (ww > 960) {
        $('.top-cart-contain').mouseenter(function() {
            $(this).find(".top-cart-content").stop(true, true).slideDown();
        });
        $('.top-cart-contain').mouseleave(function() {
            $(this).find(".top-cart-content").stop(true, true).slideUp();
        });
    } else {
        $('.top-cart-contain').click(function() {
            $(this).find(".top-cart-content").toggle(300);
        });
    }
}
$(document).ready(function() {
    slideEffectAjax();
});
/*Double click go to link menu*/
var wDW = $(window).width();
if (wDW < 1199) {
    $('#left-menu li:has(ul)').doubleTapToGo();
    $('#nav li:has(ul)').doubleTapToGo();
}
/*Mega Menu */
var isTouchDevice = ('ontouchstart' in window) || (navigator.msMaxTouchPoints > 0);
jQuery(window).on("load", function() {
    if (isTouchDevice) {
        jQuery('#nav a.level-top').click(function(e) {
            $t = jQuery(this);
            $parent = $t.parent();
            if ($parent.hasClass('parent')) {
                if (!$t.hasClass('menu-ready')) {
                    jQuery('#nav a.level-top').removeClass('menu-ready');
                    $t.addClass('menu-ready');
                    return false;
                } else {
                    $t.removeClass('menu-ready');
                }
            }
        });
    }
    /*on load*/
    jQuery().UItoTop();
});

/* UItoTop */
(function($) {
    jQuery.fn.UItoTop = function(options) {
        var defaults = {
            text: '',
            min: 200,
            inDelay: 600,
            outDelay: 400,
            containerID: 'toTop',
            containerHoverID: 'toTopHover',
            scrollSpeed: 1200,
            easingType: 'linear'
        };
        var settings = $.extend(defaults, options);
        var containerIDhash = '#' + settings.containerID;
        var containerHoverIDHash = '#' + settings.containerHoverID;
        jQuery('body').append('<a href="#" id="' + settings.containerID + '">' + settings.text + '</a>');
        jQuery(containerIDhash).hide().click(function() {
            jQuery('html, body').animate({ scrollTop: 0 }, settings.scrollSpeed, settings.easingType);
            jQuery('#' + settings.containerHoverID, this).stop().animate({ 'opacity': 0 }, settings.inDelay, settings.easingType);
            return false;
        }).prepend('<span id="' + settings.containerHoverID + '"></span>').hover(function() {
            jQuery(containerHoverIDHash, this).stop().animate({
                'opacity': 1
            }, 600, 'linear');
        }, function() {
            jQuery(containerHoverIDHash, this).stop().animate({
                'opacity': 0
            }, 700, 'linear');
        });
        jQuery(window).scroll(function() {
            var sd = $(window).scrollTop();
            if (typeof document.body.style.maxHeight === "undefined") {
                jQuery(containerIDhash).css({
                    'position': 'absolute',
                    'top': $(window).scrollTop() + $(window).height() - 50
                });
            }
            if (sd > settings.min)
                jQuery(containerIDhash).fadeIn(settings.inDelay);
            else
                jQuery(containerIDhash).fadeOut(settings.Outdelay);
        });
    };
})(jQuery);
jQuery.extend(jQuery.easing, {
    easeInCubic: function(x, t, b, c, d) {
        return c * (t /= d) * t * t + b;
    },
    easeOutCubic: function(x, t, b, c, d) {
        return c * ((t = t / d - 1) * t * t + 1) + b;
    }
});
(function(jQuery) {
    jQuery.fn.extend({
        accordion: function() {
            return this.each(function() {
                function activate(el, effect) {
                    jQuery(el).siblings(panelSelector)[(effect || activationEffect)](((effect == "show") ? activationEffectSpeed : false), function() {
                        jQuery(el).parents().show();
                    });
                }
            });
        }
    });
})
(jQuery);
jQuery(function($) {
    $('.accordion').accordion();
    $('.accordion').each(function(index) {
        var activeItems = $(this).find('li.active');
        activeItems.each(function(i) {
            $(this).children('ul').css('display', 'block');
            if (i == activeItems.length - 1) {
                $(this).addClass("current");
            }
        });
    });
});
/*  Responsive Menu  */
(function($) {
    $.fn.extend({
        accordion: function(options) {
            var defaults = {
                accordion: 'true',
                speed: 300,
                closedSign: '[+]',
                openedSign: '[-]'
            };
            var opts = $.extend(defaults, options);
            var $this = $(this);
            $this.find("li").each(function() {
                if ($(this).find("ul").length != 0) {
                    $(this).find("a:first").after("<em>" + opts.closedSign + "</em>");
                    if ($(this).find("a:first").attr('href') == "#") {
                        $(this).find("a:first").click(function() {
                            return false;
                        });
                    }
                }
            });
            $this.find("li em").click(function() {
                if ($(this).parent().find("ul").length != 0) {
                    if (opts.accordion) {
                        /*Do nothing when the list is open*/
                        if (!$(this).parent().find("ul").is(':visible')) {
                            parents = $(this).parent().parents("ul");
                            visible = $this.find("ul:visible");
                            visible.each(function(visibleIndex) {
                                var close = true;
                                parents.each(function(parentIndex) {
                                    if (parents[parentIndex] == visible[visibleIndex]) {
                                        close = false;
                                        return false;
                                    }
                                });
                                if (close) {
                                    if ($(this).parent().find("ul") != visible[visibleIndex]) {
                                        $(visible[visibleIndex]).slideUp(opts.speed, function() {
                                            $(this).parent("li").find("em:first").html(opts.closedSign);
                                        });
                                    }
                                }
                            });
                        }
                    }
                    if ($(this).parent().find("ul:first").is(":visible")) {
                        $(this).parent().find("ul:first").slideUp(opts.speed, function() {
                            $(this).parent("li").find("em:first").delay(opts.speed).html(opts.closedSign);
                        });
                    } else {
                        $(this).parent().find("ul:first").slideDown(opts.speed, function() {
                            $(this).parent("li").find("em:first").delay(opts.speed).html(opts.openedSign);
                        });
                    }
                }
            });
        }
    });
})(jQuery);
/* Sidebar Dropdown */
(function(jQuery) {
    jQuery.fn.extend({
        accordionNew: function() {
            return this.each(function() {
                var jQueryul = jQuery(this),
                    elementDataKey = 'accordiated',
                    activeClassName = 'active',
                    activationEffect = 'slideToggle',
                    panelSelector = 'ul, div',
                    activationEffectSpeed = 'fast',
                    itemSelector = 'li';
                if (jQueryul.data(elementDataKey))
                    return false;
                jQuery.each(jQueryul.find('ul, li>div'), function() {
                    jQuery(this).data(elementDataKey, true);
                    jQuery(this).hide();
                });
                jQuery.each(jQueryul.find('em.open-close'), function() {
                    jQuery(this).click(function(e) {
                        activate(this, activationEffect);
                        return void(0);
                    });
                    jQuery(this).bind('activate-node', function() {
                        jQueryul.find(panelSelector).not(jQuery(this).parents()).not(jQuery(this).siblings()).slideUp(activationEffectSpeed);
                        activate(this, 'slideDown');
                    });
                });
                var active = (location.hash) ? jQueryul.find('a[href=' + location.hash + ']')[0] : jQueryul.find('li.current a')[0];
                if (active) {
                    activate(active, false);
                }

                function activate(el, effect) {
                    jQuery(el).parent(itemSelector).siblings().removeClass(activeClassName).children(panelSelector).slideUp(activationEffectSpeed);
                    jQuery(el).siblings(panelSelector)[(effect || activationEffect)](((effect == "show") ? activationEffectSpeed : false), function() {
                        if (jQuery(el).siblings(panelSelector).is(':visible')) {
                            jQuery(el).parents(itemSelector).not(jQueryul.parents()).addClass(activeClassName);
                        } else {
                            jQuery(el).parent(itemSelector).removeClass(activeClassName);
                        }
                        if (effect == 'show') {
                            jQuery(el).parents(itemSelector).not(jQueryul.parents()).addClass(activeClassName);
                        }
                        jQuery(el).parents().show();
                    });
                }
            });
        }
    });
})(jQuery);

// Add cart


function currency(value) {
    const formatter = new Intl.NumberFormat('vi-VN', {
        style: 'currency',
        currency: 'VND',
        minimumFractionDigits: 0
    });
    return formatter.format(value);
}
const CONST_KEY_CART = '_shop_cart';

function resetCartButton() {
    let elCartBar = $('.top-cart-contain');
    elCartBar.html(`<div class="top_phone_number mini-cart" id="cart" style="margin-left: 4px;">
        <a data-toggle="dropdown" data-loading-text="Đang tải" class="basket dropdown-toggle">
            <div class="text" id="cart-total-phone">
                <p class="phone-box"><strong><span>0914.880.818 <br> 0901777965</span></strong></p>
            </div>
        </a>
    </div>
    <div class="top_phone_number mini-cart" id="cart">
        <a data-toggle="dropdown" data-loading-text="Đang tải" class="basket dropdown-toggle">
            <div class="phone-img">
                <i class="fa fa-shopping-cart"></i>
            </div>
            <div class="text" id="cart-total">
                <p class="phone-box"><strong><span>0 sản phẩm </span></strong></p>
                <p class="email-box"><strong><span> 0đ</span></strong></p>
            </div>
        </a>
        <div class="top-cart-content arrow_box dropdown-menu" style="display: none;">
            <ul id="cart-sidebar" class="mini-products-list">
                <li class="item">
                    <p class="text-center" style="padding: 15px; font-size: 16px;">Giỏ hàng của bạn trống!</p>
                </li>
            </ul>
        </div>
    </div>`)
}
async function updateCartButton() {
    let cart = await getCart();
    $('#cart-total .phone-box strong span').html(cart.count + ' sản phẩm ');
    $('#cart-total .email-box strong span').html(currency(cart.total));

    if (cart.items.length > 0) {
        let elCartBar = $('.top-cart-content');
        elCartBar.find('#cart-sidebar').html('');
        elCartBar.find('.footer_form').html('');
        cart.items.forEach(item => {
            elCartBar.find('#cart-sidebar').append(`<li class="item">
                                                            <a class="product-image" href="${item.link}">
                                    <img src="${item.image}" alt="${item.name} " title="${item.name} " width="80"></a>
                                                        <div class="detail-item">
                                <div class="product-details">
                                    <a href="javascript:void(0);" onclick="removeCart(${item.id});" title="Xóa" class="fa fa-remove">&nbsp;</a>

                                    <p class="product-name">
                                        <a href="${item.link}" title="${item.name} ">
                                            ${item.name}                                                                                                                                </a>
                                    </p>
                                </div>
                                <div class="product-details-bottom">
                                    <span class="price">${currency(item.price)}</span>
                                    <span class="title-desc">x</span>
                                    <strong>${item.qty}</strong>
                                </div>
                            </div>
                        </li>`)
        });
        elCartBar.append(`<div class="footer_form">
                    <div class="">
                                                    <li>
                                <div class="top-subtotal">
                                    Thành tiền<span class="price">${currency(cart.total)}</span>
                                </div>
                            </li>
                                                    <li>
                                <div class="top-subtotal">
                                    Phí giao hàng tận nơi<span class="price">0đ</span>
                                </div>
                            </li>
                                                    <li>
                                <div class="top-subtotal">
                                    Tổng số<span class="price">${currency(cart.total)}</span>
                                </div>
                            </li>
                                                <li style="margin-left:-15px;margin-right:-15px;">
                            <div class="actions">
                                <button class="btn-checkout" type="button" onclick="window.location.href='/thanh-toan.html'">
                                    <span> Thanh toán</span></button>
                                <button class="view-cart" type="button" onclick="window.location.href='/gio-hang.html'">
                                    <span> Giỏ hàng</span>
                                </button>
                            </div>
                        </li>
                    </div>
                </div>`);
    } else {
        resetCartButton();
    }
}

async function getCart() {
    let cart = await localStorage.getItem(CONST_KEY_CART);
    cart = cart !== null ? JSON.parse(cart) : { items: [], count: 0, total: 0 };
    return cart;
}
async function updateCart(cart) {
    await localStorage.setItem(CONST_KEY_CART, JSON.stringify(cart));
}

async function removeCart(id) {
    // console.log(id)
    let cart = await getCart();
    cart.items = cart.items.filter(item => item.id != id);
    cart.count = cart.items.length;
    cart.total = cart.items.reduce((pre, item) => pre + parseFloat(item.total), 0);
    await updateCart(cart);
    await updateCartButton();
    await updateCartPage();
}

async function addToCart(product) {
    let cart = await getCart();
    let items = cart.items;
    let item = items.find(item => item.id === product.id);
    if (item) {
        items = items.map((item) => {
            if (item.id === product.id) {
                item.qty = parseInt(item.qty) + parseInt(product.qty);
                item.total = parseFloat(item.price) * parseInt(item.qty);
            }
            return item;
        })
    } else {
        items.push(product);
    }
    //
    cart = {
        items,
        count: items.length,
        total: cart.items.reduce((pre, item) => pre + parseFloat(item.total), 0)
    };
    await localStorage.setItem(CONST_KEY_CART, JSON.stringify(cart));
    await updateCartButton();
    alert("Bạn đã thêm giỏ hàng thành công sản phẩm " + product.name)
}

async function updateToCart(product) {
    let cart = await getCart();
    cart.items = cart.items.map(item => {
        if (item.id == product.id) {
            item = product;
        }
        return item;
    });
    cart = {
        items: cart.items,
        count: cart.items.length,
        total: cart.items.reduce((pre, item) => pre + parseFloat(item.total), 0)
    };
    await updateCart(cart);
    await updateCartPage();
    await updateCartButton();
}

async function updateCartCheckout() {
    let cart = await getCart();

    $('#checkout_form .col-sm-4 .panel:first .panel-heading .panel-title')
        .html('<i class="fa fa-shopping-cart" aria-hidden="true"></i>Đơn hàng (' + cart.count + ' sản phẩm)')

    $('#orderItem').html('');
    cart.items.forEach(item => {
        $('#orderItem').append(`<tr class="group-type-1 item-child-0">
    <td>
        <div class="table_order_items-cell-thumbnail">
            <div class="thumbnail">
                <a target="_blank" rel="noopener" href="https://usmartcindy.com/tay-cha-co-the-shea-moisture-ground-coffee-scrub" title="${item.name}">
                    <img src="${item.image}" alt="${item.name}" width="84">
                </a>
            </div>
        </div>
        <div class="table_order_items-cell-detail">
            <div class="table_order_items-cell-title">
                <div class="table_order_items_product_name">
                    <a target="_blank" rel="noopener" href="https://usmartcindy.com/tay-cha-co-the-shea-moisture-ground-coffee-scrub" title="${item.name}">
                        <span class="title">${item.name}</span></a>
                </div>
            </div>
        </div>
        <div class="table_order_items-cell-price">
            <div class="tt-price">${currency(item.price)}</div>
            <div class="quantity">x${item.qty}</div>
            <div class="tt-price">${currency(item.total)}</div>
        </div>
    </td>
</tr>`);
    });

    $('.orderSummary').html(`
        <tr class="row-total-amount">
        <td class="text-left">Thành tiền</td>
        <td class="text-right">
            <strong class="">${currency(cart.total)}</strong>
        </td>
    </tr>
    <tr class="row-total-amount">
        <td class="text-left">Phí giao hàng tận nơi</td>
        <td class="text-right">
            <strong class="">0đ</strong>
        </td>
    </tr>
    <tr class="row-total-amount">
        <td class="text-left">Tổng số</td>
        <td class="text-right">
            <strong class="text-danger">${currency(cart.total)}</strong>
        </td>
    </tr>
    `);
}

async function updateCartPage() {
    let cart = await getCart();
    let cartContent = $('#cart_content tbody');
    cartContent.html('');
    cart.items.forEach(item => {
        cartContent.append(`<tr data-id="${item.id}" data-sku="${item.sku_id}">
    <td class="text-center">
        <img src="${item.image}" alt="${item.name} " title="${item.name} " width="100">
    </td>
    <td class="text-left">
        <a href="${item.link}">${item.name} </a>
    </td>
    <td class="text-right">${currency(item.price)} </td>
    <td class="text-left">
        <div class="input-group btn-block">
            <input type="text" name="quantity[${item.id}]" value="${item.qty} " size="1" class="form-control">
            <span class="input-group-btn">
                <button type="button" data-toggle="tooltip" title="" class="btn btn-primary btn_cart_update" data-original-title="Cập nhật"><i class="fa fa-refresh"></i></button>
            </span>
        </div>
    </td>
    <td class="text-right">
        ${currency(item.total)}  </td>
    <td class="text-center">
        <button type="button" data-toggle="tooltip" title="" class="btn btn-danger" onclick="removeCart(${item.id});" data-original-title="Xóa"><i class="fa fa-times-circle"></i></button>
    </td>
</tr>`);
    });
    $('#cart_total').html('');
    if (cart.total) {
        $('#cart_total').html(`<tbody>
                                    <tr>
                                        <td class="text-right">Thành tiền:</td>
                                        <td class="text-right"><strong>${currency(cart.total)}</strong></td>
                                    </tr>
                                    <tr>
                                        <td class="text-right">Phí giao hàng tận nơi:</td>
                                        <td class="text-right"><strong>0đ</strong></td>
                                    </tr>
                                    <tr>
                                        <td class="text-right">Tổng số:</td>
                                        <td class="text-right"><strong>${currency(cart.total)}</strong></td>
                                    </tr>
                                </tbody>`);
    }
}


async function thanhtoan(argument) {
    let data = $('form#checkout_form').serializeArray();
    let params = []
    data.forEach(item => {
        params[item.name] = item.value
    })
    let cart = await getCart();
    params['cart'] = cart;
    console.log(params)
    let res = await $.post('/api/cart/add', { ...params }, 'json');
    console.log(res)
}
$(document).ready(function() {

    $('#button-cart').on('click', async function(e) {
        e.stopPropagation();
        e.preventDefault();
        let product = $('.product-view');
        let image = product.find('.large-image img').attr('src');
        let id = product.find('input[name="product_id"]').val();
        let sku_id = product.find('input[name="sku_id"]').val();
        let name = product.find('.product-name h1').html();
        let price = product.find('.regular-price .price').html().replace(',', '').replace("đ", '');
        let qty = parseInt(product.find('#input-quantity').val());
        let link = $('[rel="canonical"]').attr('href');
        let product1 = {
            id,
            name,
            price: parseFloat(price),
            total: parseFloat(price) * qty,
            image,
            qty,
            link,
            sku_id
        };
        await addToCart(product1);
    });
    $('#button-buy-this').on('click', function() {
        $('#button-cart').trigger('click');
        setTimeout(function() {
            window.location.href = window.location.origin + "/thanh-toan.html";
        }, 100);

    });
    $('.add_to_cart').click(async function(e) {
        e.stopPropagation();
        e.preventDefault();
        let linkProduct = $(this);
        let sku_id = linkProduct.data('sku');
        let elProduct = $(this).parents('.item-inner');
        let id = linkProduct.attr('href').split('&')[1].replace('product_id=', '')
        let price = elProduct.find('.price').html().replace(',', '').replace("đ", '');
        let name = elProduct.find('.item-title a').html();
        let image = elProduct.find('.thumb-wrapper img').attr('src');
        let link = elProduct.find('.item-title a').attr('href');

        let product = {
            id,
            name,
            price: parseFloat(price),
            total: parseFloat(price),
            image,
            qty: 1,
            link,
            sku_id
        };

        await addToCart(product);
    });

    $(document).on('click', '.btn_cart_update', function(e) {
        e.stopPropagation();
        e.preventDefault();
        let product = $(this).parents('tr');
        let id = product.data('id')
        let sku_id = product.data('sku')
        let price = product.find('td:nth-child(3)').html().replace('.', '').replace(" đ", '');
        let name = product.find('td:nth-child(2) a').html();
        let image = product.find('td:first img').attr('src');
        let link = product.find('td:nth-child(2) a').attr('href');
        let qty = parseInt(product.find('td:nth-child(4) input[name^=quantity]').val());
        let product1 = {
            id,
            name,
            price: parseFloat(price),
            total: parseFloat(price) * qty,
            image,
            qty,
            link,
            sku_id
        };
        updateToCart(product1);
    });
    $('.btn_checkout').click(() => {
        thanhtoan();
    })

    // load cart
    updateCartButton();
    updateCartCheckout();
    updateCartPage();
});

$(document).ready(function() {
    if ($('#request-invoice').is(":checked") == true) {
        $('#container-form-invoice').show();
    } else {
        $('#container-form-invoice').hide();
    }
});

function showHideInvoice() {
    var toggle_invoice = $('#request-invoice').is(":checked");

    if (toggle_invoice == true) {
        $('#container-form-invoice').css('display', 'block');
    } else {
        $('#container-form-invoice').css('display', 'none');
    }
}

$(document).ready(function() {

    $('.payment-method-toggle').hide();
    $('input[name=payment_method]').click(function() {
        $('.payment-method-toggle').hide();
        $('#payment-method-info-' + $(this).val()).toggle();
        /* Cap nhat cac loai phi */
        // updateFee();
    });

    var country_id = $('#input-countryid').val();
    var zone_id = '0';
    var ward_id = '0';
    if (typeof countries !== 'undefined') {
        if (countries && countries[country_id]) {
            $('#load-ajax-zone').html('');

            html = '<select name="zone_id" id="input-zoneid" onchange="getWard()" class="form-control">';

            if (countries[country_id]) {
                for (i = 0; i < countries[country_id].length; i++) {
                    if (countries[country_id][i]['zone_id'] == zone_id) {
                        html += '<option value="' + countries[country_id][i]['zone_id'] + '"';
                        html += ' selected="selected">' + countries[country_id][i]['name'] + '</option>';
                    } else {
                        html += '<option value="' + countries[country_id][i]['zone_id'] + '"';
                        html += '>' + countries[country_id][i]['name'] + '</option>';
                    }
                }
            }

            html += "</select>";

            $('#load-ajax-zone').html(html);
            getWard();
        } else {
            $('#load-ajax-zone').html('<select name="zone_id" onchange="getWard()" id="input-zoneid" class="form-control"></select>');
        }

        var e = document.getElementById('input-payment-countryid');
        if (e) {
            var payment_country_id = e.options[e.selectedIndex].value;
            var payment_zone_id = '0';
        }

        if (countries[payment_country_id]) {
            $('#load-ajax-payment-zone').html('');

            html = '<select name="payment_zone_id" id="input-payment-zoneid" class="form-control">';

            if (countries[payment_country_id]) {
                for (i = 0; i < countries[payment_country_id].length; i++) {
                    if (countries[payment_country_id][i]['zone_id'] == payment_zone_id) {
                        html += '<option value="' + countries[payment_country_id][i]['zone_id'] + '"';
                        html += ' selected="selected">' + countries[payment_country_id][i]['name'] + '</option>';
                    } else {
                        html += '<option value="' + countries[payment_country_id][i]['zone_id'] + '"';
                        html += '>' + countries[payment_country_id][i]['name'] + '</option>';
                    }
                }
            }

            html += "</select>";

            $('#load-ajax-payment-zone').html(html);
        } else {
            $('#load-ajax-payment-zone').html('<select name="payment_zone_id" id="input-payment-zoneid" class="form-control"></select>');
        }
    }






    $('select[name=\'country_id\']').bind('change', function() {
        var e = document.getElementById("input-countryid");
        var country_id = e.options[e.selectedIndex].value;
        var zone_id = '0';
        if (countries[country_id]) {
            $('#load-ajax-zone').html('');
            html = '<select name="zone_id" onchange="getWard()" id="input-zoneid" class="form-control">';

            if (countries[country_id]) {
                for (i = 0; i < countries[country_id].length; i++) {
                    if (countries[country_id][i]['zone_id'] == zone_id) {
                        html += '<option value="' + countries[country_id][i]['zone_id'] + '"';
                        html += ' selected="selected">' + countries[country_id][i]['name'] + '</option>';
                    } else {
                        html += '<option value="' + countries[country_id][i]['zone_id'] + '"';
                        html += '>' + countries[country_id][i]['name'] + '</option>';
                    }
                }
            }

            html += "</select>";

            $('#input-zone').html(html);
            getWard();
        }
    });

    $('select[name=\'payment_country_id\']').bind('change', function() {
        var e = document.getElementById("input-payment-countryid");
        var payment_country_id = e.options[e.selectedIndex].value;
        var payment_zone_id = '0';

        if (countries[payment_country_id]) {
            $('#load-ajax-payment-zone').html('');

            html = '<select name="payment_zone_id" id="input-payment-zoneid" class="form-control">';

            if (countries[payment_country_id]) {
                for (i = 0; i < countries[payment_country_id].length; i++) {
                    if (countries[payment_country_id][i]['zone_id'] == payment_zone_id) {
                        html += '<option value="' + countries[payment_country_id][i]['zone_id'] + '"';
                        html += ' selected="selected">' + countries[payment_country_id][i]['name'] + '</option>';
                    } else {
                        html += '<option value="' + countries[payment_country_id][i]['zone_id'] + '"';
                        html += '>' + countries[payment_country_id][i]['name'] + '</option>';
                    }
                }
            }

            html += "</select>";

            $('#load-ajax-payment-zone').html(html);
        } else {
            $('#load-ajax-payment-zone').html('<select name="payment_zone_id" id="input-payment-zoneid" class="form-control"></select>');
        }
    });


    $('.home.owl-carousel').owlCarousel({
        autoplay: true,
        autoplayTimeout: 4000,
        autoplayHoverPause: true,
        stopOnHover: true,
        navigation: true,
        paginationSpeed: 1000,
        goToFirstSpeed: 2000,
        singleItem: true,
        autoHeight: true,
        transitionStyle: "fade",
        items: 1,
        loop: true,
        margin: 0,
        padding: 0
    });
});

function getWard() {
    /* Load fee */
    var e = document.getElementById("input-zoneid");
    if (!e) {
        return;
    }
    var select_zone_id = e.options[e.selectedIndex].value;
    var ward_id = '0';
    var e = document.getElementById("input-countryid");
    var country_id = e.options[e.selectedIndex].value;
    let zones = countries[country_id];
    let zone = zones.find(item => item.zone_id === select_zone_id);

    if (zone && zone['wards']) {
        $('#load-ajax-ward').html('');

        html = '<select name="ward_id" onchange="loadListShipping()" id="input-wardid" class="form-control">';

        if (zone['wards']) {
            for (i = 0; i < zone['wards'].length; i++) {
                if (zone['wards'][i]['ward_id'] == ward_id) {
                    html += '<option value="' + zone['wards'][i]['ward_id'] + '"';
                    html += ' selected="selected">' + zone['wards'][i]['name'] + '</option>';
                } else {
                    html += '<option value="' + zone['wards'][i]['ward_id'] + '"';
                    html += '>' + zone['wards'][i]['name'] + '</option>';
                }
            }
        }

        html += "</select>";

        $('#load-ajax-ward').html(html);
    } else {
        $('#load-ajax-ward').html('<select name="ward_id" onchange="loadListShipping()" id="input-wardid" class="form-control"></select>');
    }
}
$(document).ready(function() {
    if ($('#is-delivery-address').is(":checked") == true) {
        $('#container-form-address-ship').css('display', 'none');
    } else {
        $('#container-form-address-ship').css('display', 'block');
    }
});

function showHideDeliveryAddress() {
    var toggle_info_payment = $('#is-delivery-address').is(":checked");

    if (toggle_info_payment == true) {
        $('#container-form-address-ship').css('display', 'none');
    } else {
        $('#container-form-address-ship').css('display', 'block');
    }
}
//
console.log($('#content .owl-carousel'))
