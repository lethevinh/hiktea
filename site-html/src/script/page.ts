import Vue from 'vue';
import * as moment from 'moment'

class Page {
    name: 'Editor Webaseline Site';
    version: '0.0.1';
    config: {
        conponents: {},
        pages: {}
    };
    default: any = {
        googleApiKey: null,
        googleAnalyticsKey: null,
        reCaptchaSiteKey: null,
        reCaptchaLanguage: null,
        disableAOSonMobile: true,
        smoothScroll: false,
        googleAnalyticsId: null
    };

    constructor(config: any = {}) {
        console
        this.config = config;
    }

    init() {
        console.log('init');

        Vue.filter('formatDate', function(value, format = 'MM/DD/YYYY hh:mm') {
            if (value) {
                return moment(String(value)).format(format);
            }
        });
        var $this = this;
        // register shortcode
        $('[v-shortcode]').each(function() {
            console.log("shortcode render");
            var el = $(this);
            var name = el.attr('v-shortcode');
            var template = '<' + name + '/>'

            new Vue({
                'el': '[v-shortcode="' + name + '"]',
                template,
                components: $this.config.conponents
            });
            //new Vue(branch).$mount('[v-shortcode="' + name + '"]');
        });
        // register main page
        $('.page-content').each(function() {

            console.log("page content render");

            var url = window.location;
            var pageName = url.pathname.replace('.html', '').replace('/', '').replace('-', '');
            var template = '<page' + pageName + '/>'
            new Vue({
                'el': '[v-content="page"]',
                template,
                components: $this.config.pages
            });
        });
        return this;
    }

    run() {

    }
}

declare var window: any;

export { Page };