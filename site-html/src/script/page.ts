import Vue from 'vue';
import * as moment from 'moment'
import http from './api/request'
import ElementUI from 'element-ui';
import 'element-ui/lib/theme-chalk/index.css';
Vue.use(ElementUI);

Vue.prototype.$http = http;
import store from './store';

class Page {
    name: 'Editor Webaseline Site';
    version: '0.0.1';
    config: {
        components: {},
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
        this.config = config;
    }

    init() {
        console.log('init');
        var $this = this;
        //register Filter
        this.registerFilter();
        // register shortcode
        $('[v-shortcode]').each(function() {
            console.log("short code render");
            var el = $(this);
            var name = el.attr('v-shortcode');
            var template = '<' + name + '/>';
            new Vue({
                el: '[v-shortcode="' + name + '"]',
                template,
                store,
                components: $this.config.components
            });
        });
        // register main page
        $('[v-page-content]').each(function() {
            console.log("page content render");
            var el = $(this);
            var name = el.attr('v-page-content');
            var template = '<page' + name + '/>';
            new Vue({
                el: '[v-page-content]',
                store,
                template,
                components: $this.config.pages
            });
        });

        // register cart
        new Vue({
            el: '.cart_wrap',
            template:'<cart/>',
            store,
            components: $this.config.components
        });

        // add dialog
        $('body').append('<div id="v-dialog"></div>');
        new Vue({
            el: '#v-dialog',
            template:'<modal/>',
            store,
            components: $this.config.components
        });
        return this;
    }

    registerFilter(){
        Vue.filter('formatDate', function(value, format = 'MM/DD/YYYY hh:mm') {
            if (value) {
                return moment(String(value)).format(format);
            }
        });

        Vue.filter('currency', function (value, currency = '', decimals) {
            const digitsRE = /(\d{3})(?=\d)/g;
            value = parseFloat(value);
            if (!isFinite(value) || (!value && value !== 0)) return '';
            currency = currency != null ? currency : '$';
            decimals = decimals != null ? decimals : 2;
            let stringified = Math.abs(value).toFixed(decimals);
            var _int = decimals
                ? stringified.slice(0, -1 - decimals)
                : stringified;
            var i = _int.length % 3;
            var head = i > 0
                ? (_int.slice(0, i) + (_int.length > 3 ? ',' : ''))
                : '';
            var _float = decimals
                ? stringified.slice(-1 - decimals)
                : '';
            var sign = value < 0 ? '-' : '';
            return sign + currency + head +
                _int.slice(i).replace(digitsRE, '$1,') +
                _float
        });
    }

}

export { Page };