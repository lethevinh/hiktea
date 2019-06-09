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
        });
        // register main page
        $('[v-page-content]').each(function() {
            console.log("page content render");
            var el = $(this);
            var name = el.attr('v-page-content');
            var template = '<page' + name + '/>'
            new Vue({
                'el': '[v-page-content]',
                template,
                components: $this.config.pages
            });
        });
        return this;
    }
}

export { Page };