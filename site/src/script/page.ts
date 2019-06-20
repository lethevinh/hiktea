import Vue from 'vue';
import * as moment from 'moment'
import http from './api/request'
import ElementUI from 'element-ui';
import 'element-ui/lib/theme-chalk/index.css';
import '../style/element-variables.scss'
import localStorage from './localstorage';
import buttonAddCart from './components/item/cart-button.vue';
Vue.component(buttonAddCart.name,buttonAddCart);
import dialogAddCart from './components/item/dialog.vue';
Vue.component(dialogAddCart.name,dialogAddCart);
import lang from 'element-ui/lib/locale/lang/en'
import locale from 'element-ui/lib/locale'
locale.use(lang);
Vue.use(ElementUI);
// Vue.locale('en', locale)
Vue.prototype.$http = http;
import store from './store';

store.subscribe((mutation, state) => {
    if (mutation.type.indexOf('cart') != -1){
        localStorage.setItem('store', JSON.stringify(state));
    }
});
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
                components: $this.config.pages,
                beforeCreate() {
                    this.$store.commit('initialiseStore');
                }
            });
        });

        // register cart
        new Vue({
            el: '.cart_wrap',
            template:'<cart/>',
            store,
            components: $this.config.components,
            beforeCreate() {
                this.$store.commit('initialiseStore');
            },
            beforeMount() {
                this.$store.commit('initialiseStore');
            },
        });
        return this;
    }

    registerFilter(){
        Vue.filter('formatDate', function(value, format = 'MM/DD/YYYY hh:mm') {
            if (value) {
                return moment(String(value)).format(format);
            }
        });

        Vue.filter('currency', function (value) {
            const formatter = new Intl.NumberFormat('vi-VN', {
                style: 'currency',
                currency: 'VND',
                minimumFractionDigits: 0
            });
            return formatter.format(value);
        });
    }

}

export { Page };