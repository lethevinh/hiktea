import Vue from 'vue';
import branch from './components/branch.vue';
import 'owl.carousel/dist/assets/owl.carousel.css';
import 'owl.carousel';
var Page = /** @class */ (function () {
    function Page() {
        this.default = {
            googleApiKey: null,
            googleAnalyticsKey: null,
            reCaptchaSiteKey: null,
            reCaptchaLanguage: null,
            disableAOSonMobile: true,
            smoothScroll: false,
            googleAnalyticsId: null
        };
    }
    Page.prototype.init = function () {
        console.log('init');
        $('[v-shortcode]').each(function () {
            var el = $(this);
            var name = el.attr('v-shortcode');
            new Vue({
                el: ,
                template: '<branch/>'
            });
            new Vue(branch).$mount('[v-shortcode="' + name + '"]););
        });
        return this;
    };
    Page.prototype.run = function () {
    };
    return Page;
}());
var page = new Page();
window.hEditor = page;
export { Page, page };
//# sourceMappingURL=page.js.map