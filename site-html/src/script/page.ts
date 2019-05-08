import PerfectScrollbar from 'perfect-scrollbar';
import Shuffle from 'shufflejs/src/shuffle';
import Lity = require("lity");
import 'slick-carousel';
var imagesLoaded = require('imagesloaded');
imagesLoaded.makeJQueryPlugin($);

class Page {
    name: 'Osa Html Theme';
    version: '2.1.1';
    body: any;
    navbar: any;
    header: any;
    footer: any;
    configs: any;
    vendors: string[] = [];
    defaults: any = {
        googleApiKey: null,
        googleAnalyticsKey: null,
        reCaptchaSiteKey: null,
        reCaptchaLanguage: null,
        disableAOSonMobile: true,
        smoothScroll: false,
        googleAnalyticsId: null
    };

    constructor(options: any) {

        if (typeof options === 'string') {
            return this.defaults[options];
        }
        this.configs = options;
        $.extend(true, this.defaults, options);
        this.body = $('body');
        this.navbar = $('.navbar');
        this.header = $('.header');
        this.footer = $('.footer');
    }

    init() {
        // Custom
        this.registerVendor('Jquery');
        this.registerVendor('Video');
        this.registerVendor('Shuffle');
        this.registerVendor('Lity');
        this.registerVendor('Slick');

        //Default
        // this.initServiceWorker();
        this.initVendors();
        this.initBind();
        this.initDrawer();
        this.initFont();
        this.initForm();
        this.initMailer();
        this.initModal();
        this.initNavbar();
        this.initOffcanvas();
        this.initPopup();
        this.initScroll();
        this.initSection();
        this.initSidebar();
        this.initVideo();
        this.initThemeSettings();
    }

    initServiceWorker() {
        // check if service worker API is available
        if ('serviceWorker' in navigator) {
            // register service worker
            navigator.serviceWorker.register('service-worker-c.js').then(function(registration) {
                console.log('ServiceWorker registration successful with scope: ', registration.scope);
            }).catch(function(err) {
                console.log('ServiceWorker registration failed: ', err);
            });
        }
    }

    initVendors() {
        if (this.vendors.length < 0) {
            return;
        }
        var page: any = this;
        this.vendors.forEach(function(vendor) {
            if (typeof page["init" + vendor] !== "undefined" && typeof page["init" + vendor] === 'function') {
                var fn = page["init" + vendor];
                fn();
            } else {
                console.warn('not find function ' + 'init' + vendor);
            }
        });
    }

    registerVendor(name: string) {
        this.vendors.push(name);
    }

    getDataOptions(el: any, castList: any) {
        var options: any = {};

        $.each($(el).data(), function(key, value) {

            key = page.dataToOption(key.toString());

            // Escape data-provide
            if (key == 'provide') {
                return;
            }

            if (castList != undefined) {
                var type = castList[key];
                switch (type) {
                    case 'bool':
                        value = Boolean(value);
                        break;

                    case 'num':
                        value = Number(value);
                        break;

                    case 'array':
                        value = value.split(',');
                        break;

                    default:

                }
            }

            options[key] = value;
        });

        return options;
    }


    getURLParameter(paramName) {
        var searchString = window.location.search.substring(1),
            i, val, params = searchString.split("&");

        for (i = 0; i < params.length; i++) {
            val = params[i].split("=");
            if (val[0] == paramName) {
                return unescape(val[1]);
            }
        }
        return null;
    }

    // Get target of an action from element.
    //
    // It can be 'data-target' or 'href' attribute.
    // We support 'next' and 'prev' values to target next or previous element. In this case, we return jQuery element.
    //
    getTarget(e: any) {
        var target;
        if (e.hasDataAttr('target')) {
            target = e.data('target');
        } else {
            target = e.attr('href');
        }

        if (target == 'next') {
            target = $(e).next();
        } else if (target == 'prev') {
            target = $(e).prev();
        }

        if (target == undefined) {
            return false;
        }

        return target;
    };

    // Get URL of an action from element.
    //
    // It can be 'data-url' or 'href' attribute.
    //
    getURL(e: any) {
        var url;
        if (e.hasDataAttr('url')) {
            url = e.data('url');
        } else {
            url = e.attr('href');
        }

        return url;
    };



    // Convert fooBarBaz to foo-bar-baz
    //
    optionToData(name: string) {
        return name.replace(/([A-Z])/g, "-$1").toLowerCase();
    }


    // Convert foo-bar-baz to fooBarBaz
    //
    dataToOption(name: string) {
        return name.replace(/-([a-z])/g, function(x) { return x[1].toUpperCase(); });
    }

    initBind() {
        $('[data-bind-radio]').each(function() {
            var e = $(this),
                radio = e.data('bind-radio'),
                value = $('input[name="' + radio + '"]:checked').val();
            e.text(e.dataAttr(value, e.text()).toString());

            $('input[name="' + radio + '"]').on('change', function() {
                var value = $('input[name="' + radio + '"]:checked').val();
                $('[data-bind-radio="' + radio + '"]').each(function() {
                    var e = $(this);
                    e.text(e.dataAttr(value, e.text()).toString());
                });
            });
        });

        // Set href attribute
        //
        $('[data-bind-href]').each(function() {
            var e = $(this),
                radio = e.data('bind-href'),
                value = $('input[name="' + radio + '"]:checked').val();

            e.attr('href', e.dataAttr(value, '').toString());

            $('input[name="' + radio + '"]').on('change', function() {
                var value = $('input[name="' + radio + '"]:checked').val();
                $('[data-bind-href="' + radio + '"]').each(function() {
                    var e = $(this);
                    e.attr('href', e.dataAttr(value, '').toString());
                });
            });
        });
    }

    initDrawer() {
        $(document).on('click', '.drawer-toggler, .drawer-close, .backdrop-drawer', function() {
            $('body').toggleClass('drawer-open');
        });
    }

    initFont() {
        var fonts: any = [];

        $('[data-font]').each(function() {
            var tag = $(this),
                font = tag.data('font'),
                part = font.split(':');

            fonts.push(font);
            tag.css({ 'font-family': part[0], 'font-weight': part[1] });
        });

        if (fonts.length > 0) {
            $("head").append("<link href='https://fonts.googleapis.com/css?family=" + fonts.join('|') + "' rel='stylesheet'>");
        }
    }

    initForm() {

        /**
         * Add/remove .focus to .input-group
         */
        $(document).on('focusin', '.input-group', function() {
            $(this).addClass('focus');
        });

        $(document).on('focusout', '.input-group', function() {
            $(this).removeClass('focus');
        });


        // Upload
        //
        $(document).on('click', '.file-browser', function() {
            var browser = $(this);
            var file = browser.closest('.file-group').find('[type="file"]');
            if (browser.hasClass('form-control')) {
                setTimeout(function() {
                    file.trigger('click');
                }, 300);
            } else {
                file.trigger('click');
            }
        });

        // Event to change file name after file selection
        $(document).on('change', '.file-group [type="file"]', function() {
            var input = $(this);
            var filename = input.val().toString().split('\\').pop();
            input.closest('.file-group').find('.file-value').val(filename).text(filename).focus();
        });

    }

    initMailer() {
        var validEmail = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

        $('[data-form="mailer"]').each(function() {

            var form = $(this);
            var email = form.find('[name="email"]');
            var message = form.find('[name="message"]');

            form.on('submit', function() {

                form.children('.alert-danger').remove();

                if (email.length) {
                    if (email.val().toString().length < 1 || !validEmail.test(email.val().toString())) {
                        email.addClass('is-invalid');
                        return false;
                    }
                }


                if (message.length) {
                    if (message.val().toString().length < 1) {
                        message.addClass('is-invalid');
                        return false;
                    }
                }


                $.ajax({
                        type: "POST",
                        url: form.attr('action'),
                        data: form.serializeArray(),
                    })
                    .done(function(data) {
                        var response = $.parseJSON(data);
                        if ('success' == response.status) {
                            form.find('.alert-success').fadeIn(1000);
                            form.find(':input').val('');
                        } else {
                            form.prepend('<div class="alert alert-danger">' + response.message + '</div>');
                            console.log(response.reason)
                        }
                    });

                return false;
            });

            email.on('focus', function() {
                $(this).removeClass('is-invalid');
            });

            message.on('focus', function() {
                $(this).removeClass('is-invalid');
            });

        });
    }


    initMap() {
        var $this = this;
        $('[data-provide~="map"]').each(function() {
            var tag = $(this),
                setting = {
                    lat: '',
                    lng: '',
                    zoom: 13,
                    markerLat: '',
                    markerLng: '',
                    markerIcon: '',
                    markers: '',
                    style: '',
                    removeControls: false,
                };

            setting = $.extend(setting, $this.getDataOptions(tag, null));

            var map = new google.maps.Map(tag[0], {
                center: {
                    lat: Number(setting.lat),
                    lng: Number(setting.lng)
                },
                zoom: Number(setting.zoom),
                disableDefaultUI: setting.removeControls,
            });

            // Multiple locations
            //
            if (setting.markers != '') {

                var locations = JSON.parse("[" + setting.markers.replace(/'/g, '"') + "]"),
                    infowindow = new google.maps.InfoWindow(),
                    marker: any, i;

                for (i = 0; i < locations.length; i++) {
                    var markerIcon = setting.markerIcon;

                    if (locations[i].length > 3 && locations[i][3] != '') {
                        markerIcon = locations[i][3];
                    }

                    marker = new google.maps.Marker({
                        position: {
                            lat: Number(locations[i][0]),
                            lng: Number(locations[i][1])
                        },
                        map: map,
                        animation: google.maps.Animation.DROP,
                        icon: markerIcon
                    });

                    if (locations[i].length > 2 && locations[i][2] != '') {
                        google.maps.event.addListener(marker, 'click', (function(marker, i) {
                            return function() {
                                infowindow.setContent(locations[i][2]);
                                infowindow.open(map, marker);
                            }
                        })(marker, i));
                    }

                }

            }

            // Single location
            //
            else {

                marker = new google.maps.Marker({
                    position: {
                        lat: Number(setting.markerLat),
                        lng: Number(setting.markerLng)
                    },
                    map: map,
                    animation: google.maps.Animation.DROP,
                    icon: setting.markerIcon
                });

                if (tag.is('[data-info]')) {
                    var infowindow = new google.maps.InfoWindow({
                        content: tag.dataAttr('info', '').toString()
                    });

                    marker.addListener('click', function() {
                        infowindow.open(map, marker);
                    });
                }

            }


            switch (setting.style) {
                case 'light':
                    map.set('styles', [{ "featureType": "water", "elementType": "geometry", "stylers": [{ "color": "#e9e9e9" }, { "lightness": 17 }] }, { "featureType": "landscape", "elementType": "geometry", "stylers": [{ "color": "#f5f5f5" }, { "lightness": 20 }] }, { "featureType": "road.highway", "elementType": "geometry.fill", "stylers": [{ "color": "#ffffff" }, { "lightness": 17 }] }, { "featureType": "road.highway", "elementType": "geometry.stroke", "stylers": [{ "color": "#ffffff" }, { "lightness": 29 }, { "weight": 0.2 }] }, { "featureType": "road.arterial", "elementType": "geometry", "stylers": [{ "color": "#ffffff" }, { "lightness": 18 }] }, { "featureType": "road.local", "elementType": "geometry", "stylers": [{ "color": "#ffffff" }, { "lightness": 16 }] }, { "featureType": "poi", "elementType": "geometry", "stylers": [{ "color": "#f5f5f5" }, { "lightness": 21 }] }, { "featureType": "poi.park", "elementType": "geometry", "stylers": [{ "color": "#dedede" }, { "lightness": 21 }] }, { "elementType": "labels.text.stroke", "stylers": [{ "visibility": "on" }, { "color": "#ffffff" }, { "lightness": 16 }] }, { "elementType": "labels.text.fill", "stylers": [{ "saturation": 36 }, { "color": "#333333" }, { "lightness": 40 }] }, { "elementType": "labels.icon", "stylers": [{ "visibility": "off" }] }, { "featureType": "transit", "elementType": "geometry", "stylers": [{ "color": "#f2f2f2" }, { "lightness": 19 }] }, { "featureType": "administrative", "elementType": "geometry.fill", "stylers": [{ "color": "#fefefe" }, { "lightness": 20 }] }, { "featureType": "administrative", "elementType": "geometry.stroke", "stylers": [{ "color": "#fefefe" }, { "lightness": 17 }, { "weight": 1.2 }] }]);
                    break;

                case 'dark':
                    map.set('styles', [{ "featureType": "all", "elementType": "labels.text.fill", "stylers": [{ "saturation": 36 }, { "color": "#000000" }, { "lightness": 40 }] }, { "featureType": "all", "elementType": "labels.text.stroke", "stylers": [{ "visibility": "on" }, { "color": "#000000" }, { "lightness": 16 }] }, { "featureType": "all", "elementType": "labels.icon", "stylers": [{ "visibility": "off" }] }, { "featureType": "administrative", "elementType": "geometry.fill", "stylers": [{ "color": "#000000" }, { "lightness": 20 }] }, { "featureType": "administrative", "elementType": "geometry.stroke", "stylers": [{ "color": "#000000" }, { "lightness": 17 }, { "weight": 1.2 }] }, { "featureType": "landscape", "elementType": "geometry", "stylers": [{ "color": "#000000" }, { "lightness": 20 }] }, { "featureType": "poi", "elementType": "geometry", "stylers": [{ "color": "#000000" }, { "lightness": 21 }] }, { "featureType": "road.highway", "elementType": "geometry.fill", "stylers": [{ "color": "#000000" }, { "lightness": 17 }] }, { "featureType": "road.highway", "elementType": "geometry.stroke", "stylers": [{ "color": "#000000" }, { "lightness": 29 }, { "weight": 0.2 }] }, { "featureType": "road.arterial", "elementType": "geometry", "stylers": [{ "color": "#000000" }, { "lightness": 18 }] }, { "featureType": "road.local", "elementType": "geometry", "stylers": [{ "color": "#000000" }, { "lightness": 16 }] }, { "featureType": "transit", "elementType": "geometry", "stylers": [{ "color": "#000000" }, { "lightness": 19 }] }, { "featureType": "water", "elementType": "geometry", "stylers": [{ "color": "#000000" }, { "lightness": 17 }] }])
                    break;

                default:
                    if (Array.isArray(setting.style)) {
                        map.set('styles', setting.style);
                    }
            }

        });

    }

    initModal() {

        var body = this.body;

        /**
         * Autoshow
         */
        $('.modal[data-autoshow]').each(function() {
            var modal = $(this),
                delay = parseInt(modal.dataAttr('autoshow', null).toString());
            setTimeout(function() { modal.modal('show') }, delay);
        });


        /**
         * Exit
         */
        $('.modal[data-exitshow]').each(function() {
            var modal = $(this),
                delay = parseInt(modal.dataAttr('delay', 0).toString()),
                target = modal.dataAttr('exitshow', null);

            if ($(target).length) {
                $(document).one('mouseleave', target, function() {
                    setTimeout(function() { modal.modal('show') }, delay);
                });
            }

        });
    }

    navbarToggle() {
        var body = this.body,
            navbar = this.navbar;

        body.toggleClass('navbar-open');
        if (body.hasClass('navbar-open')) {
            navbar.prepend('<div class="backdrop backdrop-navbar"></div>');
        }
    }

    navbarClose() {
        this.body.removeClass('navbar-open');
        $('.backdrop-navbar').remove();
    }


    initNavbar() {
        var page = this;
        /**
         * Toggle navbar
         */
        $(document).on('click', '.navbar-toggler', function() {
            page.navbarToggle();
        });


        /**
         * Tapping on the backdrop will close the navbar
         */
        $(document).on('click', '.backdrop-navbar', function() {
            page.navbarClose();
        });


        /**
         * Toggle menu open on small screen devices
         */
        $(document).on('click', '.navbar-open .nav-navbar > .nav-item > .nav-link', function() {
            $(this).closest('.nav-item').siblings('.nav-item').find('> .nav:visible').slideUp(333, 'linear');
            $(this).next('.nav').slideToggle(333, 'linear');
        });
    }

    initOffcanvas() {
        /**
         * Toggle
         */
        $(document).on('click', '[data-toggle="offcanvas"]', function() {
            var target = $(this).data('target'),
                offcanvas = $(target);

            if (target !== undefined && offcanvas.length) {
                if (offcanvas.hasClass('show')) {
                    $('.backdrop-offcanvas').remove();
                    offcanvas.removeClass('show');
                } else {
                    offcanvas.before('<div class="backdrop backdrop-offcanvas"></div>');
                    offcanvas.addClass('show');
                    setTimeout(function() { offcanvas.find('input:text:visible:first').focus(); }, 300);
                }
            }
        });


        /**
         * Dismiss
         */
        $(document).on('click', '.offcanvas [data-dismiss], .backdrop-offcanvas', function() {
            $('.offcanvas.show').removeClass('show');
            $('.backdrop-offcanvas').remove();
        });


        /**
         * Esc key
         */
        $(document).on('keyup', function(e) {
            if ($('.offcanvas.show').length && e.keyCode == 27) { // esc keycode
                $('.offcanvas.show').removeClass('show');
                $('.backdrop-offcanvas').remove();
            }
        });
    }

    initPopup() {
        var body = this.body;

        /**
         * Toggle
         */
        $(document).on('click', '[data-toggle="popup"]', function() {
            var target = $(this).data('target'),
                popup = $(target);

            if (target !== undefined && popup.length) {
                if (popup.hasClass('show')) {
                    popup.removeClass('show');
                } else {
                    popupShow(popup);
                }
            }
        });


        /**
         * Dismiss
         */
        $(document).on('click', '.popup [data-dismiss]', function() {
            $(this).closest('.popup').removeClass('show');
        });


        /**
         * Autoshow
         */
        $('.popup[data-autoshow]').each(function() {
            var popup = $(this),
                delay = parseInt(popup.dataAttr('autoshow', null).toString());
            setTimeout(function() { popupShow(popup) }, delay);
        });


        /**
         * Exit
         */
        $('.popup[data-exitshow]').each(function() {
            var popup = $(this),
                delay = parseInt(popup.dataAttr('delay', 0).toString()),
                target = popup.dataAttr('exitshow', null);

            if ($(target).length) {
                $(document).one('mouseleave', target, function() {
                    setTimeout(function() { popupShow(popup) }, delay);
                });
            }

        });


        /**
         * Show
         */
        var popupShow = function(popup: any) {

            var autohide = parseInt(popup.dataAttr('autohide', 0)),
                once_key = popup.dataAttr('once', '');

            // Check if it was a once popup
            if (once_key != '') {
                if (localStorage.getItem(once_key) == 'displayed') {
                    return;
                }

                var once_btn = popup.find('[data-once-button="true"]');
                if (once_btn.length) {
                    once_btn.on('click', function() {
                        localStorage.setItem(once_key, 'displayed');
                    });
                } else {
                    localStorage.setItem(once_key, 'displayed');
                }
            }

            popup.addClass('show');
            setTimeout(function() { popup.find('input:text:visible:first').focus(); }, 300);

            if (autohide > 0) {
                setTimeout(function() { popup.removeClass('show') }, autohide);
            }
        }
    }

    initRecaptcha() {
        var page = this;
        $('[data-provide~="recaptcha"]').each(function() {

            var options: any = {
                sitekey: page.defaults.reCaptchaSiteKey,
            }

            options = $.extend(options, page.getDataOptions($(this), []));

            if (options.enable) {
                options.callback = function() {
                    $(options.enable).removeAttr('disabled');
                };

                options['expired-callback'] = function() {
                    $(options.enable).attr('disabled', 'true');
                };
            }

            grecaptcha.render($(this)[0], options);
        });
    }

    initScroll() {
        var body = this.body,
            footer = this.footer,
            hasHeader = this.header.length,
            navbarHeight = this.navbar.outerHeight(),
            headerHeight = this.header.innerHeight(),
            scrollOffsetTop = 0,
            prevOffsetTop = 0,
            page = this;


        var windowScrollActions = function() {
            var window_top = parseInt($(window).scrollTop().toString());

            // .body-scrolled
            //
            if (window_top > 1) {
                body.addClass('body-scrolled');
            } else {
                body.removeClass('body-scrolled');
            }

            // .navbar-scrolled
            //

            if (window_top > navbarHeight) {
                body.addClass('navbar-scrolled');
            } else {
                body.removeClass('navbar-scrolled');
            }


            // .header-scrolled
            //
            if (window_top > headerHeight - navbarHeight - 1) {
                body.addClass('header-scrolled');
            } else {
                body.removeClass('header-scrolled');
            }

            // Sticky elements
            //
            $('[data-sticky="true"]').each(function() {
                var tag = $(this),
                    top = tag.offset().top;

                if (!tag.hasDataAttr('original-top')) {
                    tag.attr('data-original-top', top);
                }

                var stick_start = parseInt(tag.dataAttr('original-top', null).toString()),
                    stick_end = footer.offset().top - tag.outerHeight();

                if (window_top > stick_start) { // && window_top <= stick_end) {
                    tag.addClass('stick');
                } else {
                    tag.removeClass('stick');
                }
            });

            // Smart navbar
            //
            $('[data-navbar="smart"]').each(function() {
                var tag = $(this);

                //toggleFixClass(tag);
                if (window_top < prevOffsetTop) {
                    toggleStickClass(tag);
                } else {
                    tag.removeClass('stick');
                }
            });

            // Sticky navbar
            //
            $('[data-navbar="sticky"]').each(function() {
                var tag = $(this);
                toggleStickClass(tag);
            });

            // Fixed navbar
            //
            $('[data-navbar="fixed"]').each(function() {
                var tag = $(this);
                if (body.hasClass('body-scrolled')) {
                    tag.addClass('stick');
                } else {
                    tag.removeClass('stick');
                }
            });

            // Sticky sidebar
            //
            $('.sidebar-sticky').each(function() {
                var tag = $(this);
                toggleStickClass(tag);
            });

            // Fadeout effect
            //
            $('.header.fadeout').css('opacity', (1 - window_top - 200 / window.innerHeight));


            prevOffsetTop = window_top;
        }


        var smoothlyScrollTo = function(pos: any) {
            $('html, body').animate({ scrollTop: pos }, 600);
        }


        var toggleFixClass = function(tag: any) {
            if (body.hasClass('navbar-scrolled')) {
                tag.addClass('fix');
            } else {
                tag.removeClass('fix');
            }
        }

        var toggleStickClass = function(tag: any) {
            var requiredClass = 'navbar-scrolled';
            if (hasHeader) {
                requiredClass = 'header-scrolled';
            }

            if (body.hasClass(requiredClass)) {
                tag.addClass('stick');
            } else {
                tag.removeClass('stick');
            }
        }
        if ($('[data-navbar="fixed"], [data-navbar="sticky"], [data-navbar="smart"]').length) {
            scrollOffsetTop = navbarHeight;
        }

        $(document).on('click', "a[href='#']", function() {
            return false;
        });


        // Back to top
        //
        $(document).on('click', '.scroll-top', function() {
            smoothlyScrollTo(0);
            return false;
        });


        // Smooth scroll for anchors
        //
        $(document).on('click', "a[href^='#']", function() {
            if ($(this).attr('href').length < 2) {
                return;
            }
            var link0: any = $(this);

            if (link0.hasDataAttr('toggle')) {
                return;
            }

            var target = $($(this).attr('href'));
            if (target.length) {
                var targetTop = target.offset().top,
                    windowTop = $(window).scrollTop();

                // We don't need offsetTop for scroll down with smart navbar
                //
                if (targetTop > windowTop && $('.navbar[data-navbar="smart"]').length) {
                    smoothlyScrollTo(targetTop);
                } else {
                    smoothlyScrollTo(targetTop - scrollOffsetTop);
                }

                if (body.hasClass('navbar-open')) {
                    page.navbarClose();
                }
                return false;
            }
        });


        // Smoothscroll to anchor in page load
        //
        var hash = location.hash.replace('#', '');
        if (hash != '') {
            var el = $("#" + hash);
            if (el.length > 0) {
                smoothlyScrollTo(el.offset().top - scrollOffsetTop);
            }
        }


        // Actions which are related to the page scroll position
        windowScrollActions();

        $(window).on('scroll', function() {
            windowScrollActions()
        });



        // In page navigation
        //
        if ($('.nav-page').length) {

            var tooltip_pos = 'left',
                tooltip_offset = '0, 12';

            if ($('.nav-page.nav-page-left').length) {
                tooltip_pos = 'right';
                tooltip_offset = '0, 12';
            }

            var spy_offset = parseInt($('.nav-page').dataAttr('spy-offset', 200).toString());

            // Enable tooltip
            /*$('.nav-page .nav-link').tooltip({
                container: 'body',
                placement: tooltip_pos,
                offset: tooltip_offset,
                trigger: "hover"
            });*/


            // Enable Scroll Spy
            $('body').scrollspy({
                target: '.nav-page',
                offset: spy_offset
            });

        }


        // Sticky sidebar width
        //
        $('.sidebar-sticky').each(function() {
            var tag = $(this),
                width = tag.closest('div').width();
            tag.css('width', width);

            if (body.width() / width < 1.8) {
                tag.addClass('is-mobile-wide');
            }
        });

    }

    initSection() {

    }

    initSidebar() {
        var body = this.body;

        $(document).on('click', '.sidebar-toggler, .sidebar-close, .backdrop-sidebar', function() {
            body.toggleClass('sidebar-open');
            if (body.hasClass('sidebar-open')) {
                body.prepend('<div class="backdrop backdrop-sidebar"></div>')
            } else {
                $('.backdrop-sidebar').remove();
            }
        });

        // Sidebar nav
        //
        var navItemShow = $('.nav-sidebar .nav-item.show');
        navItemShow.find('> .nav-link .nav-angle').addClass('rotate');
        navItemShow.find('> .nav').css('display', 'block');
        navItemShow.removeClass('show');

        var navSidebarIsAccordion = false;
        if ('true' == $('.nav-sidebar').dataAttr('accordion', 'false').toString()) {
            navSidebarIsAccordion = true;
        }

        $(document).on('click', '.nav-sidebar > .nav-item > .nav-link', function() {
            var link = $(this);
            link.next('.nav').slideToggle();
            if (navSidebarIsAccordion) {
                link.closest('.nav-item').siblings('.nav-item').children('.nav:visible').slideUp().prev('.nav-link').children('.nav-angle').removeClass('rotate');
            }
            link.children('.nav-angle').toggleClass('rotate');
        });


        // Perfect scrollbar
        //
        $('.sidebar-body').each(function(e) {
            var ps = new PerfectScrollbar($(this)[0], {
                wheelSpeed: 0.4,
                minScrollbarLength: 20
            });
        })
    }

    initVideo() {
        // Video-wrapper
        //
        $(document).on('click', '.video-wrapper .btn', function() {
            var wrapper = $(this).closest('.video-wrapper');
            wrapper.addClass('reveal');

            if (wrapper.find('video').length) {
                var video: any = wrapper.find('video').get(0);
                video.play();
            }


            if (wrapper.find('iframe').length) {
                var iframe: any = wrapper.find('iframe');
                var src = iframe.attr('src');

                if (src.indexOf('?') > 0)
                    iframe.get(0).src += "&autoplay=1";
                else
                    iframe.get(0).src += "?autoplay=1";
            }
        });


        // Object-fit polyfill
        //
        // window.objectFitPolyfill($('.bg-video'));
    }

    initJquery() {
        /**
         * We will register the CSRF Token as a common header with jQuery so that
         * all outgoing HTTP requests automatically have it attached. This is just
         * a simple convenience so we don't have to attach every token manually.
         */

        let token: any = document.head.querySelector('meta[name="csrf-token"]');

        if (token) {
            $.ajaxSetup({
                headers: { 'X-CSRF-TOKEN': token.content }
            });
        }
    }

    initShuffle() {
        if (undefined === Shuffle || 0 === $('[data-provide="shuffle"]').length) {
            return;
        }

        $('[data-provide="shuffle"]').each(function() {
            var list = $(this).find('[data-shuffle="list"]');
            var filter = $(this).find('[data-shuffle="filter"]');
            var search = $(this).find('[data-shuffle="search"]');
            var options = {
                itemSelector: '[data-shuffle="item"]',
                sizer: '[data-shuffle="sizer"]',
                delimeter: ',',
                speed: 500,
            };

            var shuffleInstance = new Shuffle(list, options);

            if (filter.length) {

                $(filter).find('[data-shuffle="button"]').each(function() {
                    $(this).on('click', function() {
                        var btn = $(this);
                        var isActive = btn.hasClass('active');
                        var btnGroup = btn.data('group');

                        $(this).closest('[data-shuffle="filter"]').find('[data-shuffle="button"].active').removeClass('active');

                        var filterGroup;
                        if (isActive) {
                            btn.removeClass('active');
                            filterGroup = Shuffle.ALL_ITEMS;
                        } else {
                            btn.addClass('active');
                            filterGroup = btnGroup;
                        }

                        shuffleInstance.filter(filterGroup);
                    });
                });

            }

            if (search.length) {
                search.on('keyup', function() {
                    var value: any = $(this).val();
                    var searchText = value.toLowerCase();
                    shuffleInstance.filter(function(element, shuffle) {
                        var itemText = element.textContent.toLowerCase().trim();
                        return itemText.indexOf(searchText) !== -1;
                    });
                });
            }

            $(this).imagesLoaded(function() {
                shuffleInstance.layout()
            });

        });
    }

    initLity() {
        $(document).on('click', '[data-provide~="lightbox"]', Lity);
    }

    initSlick() {

        $('[data-provide~="slider"]').each(function() {
            var tag = $(this),
                options: any = {
                    speed: 1000,
                    arrows: false,
                    centerPadding: '0',
                };
            options = $.extend(options, page.getDataOptions(tag, []));

            if (options.slidesToShow !== undefined || options.centerMode !== undefined) {
                var scrollOn768 = 1;
                if (options.slidesToScroll !== undefined) {
                    if (options.slidesToScroll > 1) {
                        scrollOn768 = 2;
                    }
                }

                options.responsive = [{
                        breakpoint: 768,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: scrollOn768,
                        }
                    },
                    {
                        breakpoint: 576,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1,
                            centerPadding: '0px',
                        }
                    }
                ];
            }
            tag.not('.slick-initialized').slick(options);
        });
    }


    initThemeSettings() {

        $('.scw-trigger').click(function() {
            $('.c-layout-quick-sidebar').css('right', 0);
        });
        
        $('.c-header .ti-close').click(function() {
            $('.c-layout-quick-sidebar').css('right', -350);
        });

        $('.c-settings .c-color').on('click', function() {
            var val = $(this).attr('data-color');
            // remove class color other
            if (typeof $('body').attr('class') != undefined) {
                $('body').attr('class').split(' ').forEach(function(item) {
                    if (item.indexOf('color-') != -1) {
                        $('body').removeClass(item);
                    }
                });
            }

            $('body').addClass('color-' + val);
            $('.c-settings .c-color').removeClass('c-active');
            $(this).addClass('c-active');
        });

        $('.c-setting_header-type').on('click', function() {
            var val = $(this).attr('data-value');
            if (val == 'fluid') {
                $('.c-layout-header .c-topbar > .container').removeClass('container').addClass('container-fluid');
                $('.c-layout-header .c-navbar > .container').removeClass('container').addClass('container-fluid');
            } else {
                $('.c-layout-header .c-topbar > .container-fluid').removeClass('container-fluid').addClass('container');
                $('.c-layout-header .c-navbar > .container-fluid').removeClass('container-fluid').addClass('container');
            }
            $('.c-setting_header-type').removeClass('active');
            $(this).addClass('active');
        });

        $('.c-setting_header-mode').on('click', function() {
            var val = $(this).attr('data-value');
            if (val == 'static') {
                $('body').removeClass('c-layout-header-fixed').addClass('c-layout-header-static');
            } else {
                $('body').removeClass('c-layout-header-static').addClass('c-layout-header-fixed');
            }
            $('.c-setting_header-mode').removeClass('active');
            $(this).addClass('active');
        });

        $('.c-setting_font-style').on('click', function() {
            var val = $(this).attr('data-value');

            if (val == 'light') {
                $('.c-font-uppercase').addClass('c-font-uppercase-reset').removeClass('c-font-uppercase');
                $('.c-font-bold').addClass('c-font-bold-reset').removeClass('c-font-bold');

                $('.c-fonts-uppercase').addClass('c-fonts-uppercase-reset').removeClass('c-fonts-uppercase');
                $('.c-fonts-bold').addClass('c-fonts-bold-reset').removeClass('c-fonts-bold');
            } else {
                $('.c-font-uppercase-reset').addClass('c-font-uppercase').removeClass('c-font-uppercase-reset');
                $('.c-font-bold-reset').addClass('c-font-bold').removeClass('c-font-bold-reset');

                $('.c-fonts-uppercase-reset').addClass('c-fonts-uppercase').removeClass('c-fonts-uppercase-reset');
                $('.c-fonts-bold-reset').addClass('c-fonts-bold').removeClass('c-fonts-bold-reset');
            }

            $('.c-setting_font-style').removeClass('active');
            $(this).addClass('active');
        });

        $('.c-setting_megamenu-style').on('click', function() {
            var val = $(this).attr('data-value');
            if (val == 'dark') {
                $('.c-mega-menu').removeClass('c-mega-menu-light').addClass('c-mega-menu-dark');
            } else {
                $('.c-mega-menu').removeClass('c-mega-menu-dark').addClass('c-mega-menu-light');
            }
            $('.c-setting_megamenu-style').removeClass('active');
            $(this).addClass('active');
        });

    }

}

import { configs } from "./site-configs";
var page = new Page(configs);

declare var window: any;

window.page = page;

export { Page, page };