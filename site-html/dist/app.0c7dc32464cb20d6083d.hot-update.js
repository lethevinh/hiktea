webpackHotUpdate("app",{

/***/ "./node_modules/vue-loader/lib/index.js?!./src/script/components/item/dialog.vue?vue&type=script&lang=js&":
/*!**************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib??vue-loader-options!./src/script/components/item/dialog.vue?vue&type=script&lang=js& ***!
  \**************************************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var vuex__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! vuex */ "./node_modules/vuex/dist/vuex.esm.js");
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//


/* harmony default export */ __webpack_exports__["default"] = ({
    name: "dialog-add-cart",
    props:{
        product:{},
        dialogFormVisible:{
            type: Boolean,
            default: false
        }
    },
    data: function () {
        return {
            isShow:false,
            form: {
                name: '',
                region: '',
                date1: '',
                date2: '',
                delivery: false,
                topping: [[], [], [], [], [], [], [], [], [], [], [], [], [], []],
                size: '1',
                desc: '',
                quality: 0,
                options: []
            },
            rules: {
                name: [
                    {required: true, message: 'Please input Activity name', trigger: 'blur'},
                    {min: 3, max: 5, message: 'Length should be 3 to 5', trigger: 'blur'}
                ],
                region: [
                    {required: true, message: 'Please select Activity zone', trigger: 'change'}
                ],
                date1: [
                    {type: 'date', required: true, message: 'Please pick a date', trigger: 'change'}
                ],
                date2: [
                    {type: 'date', required: true, message: 'Please pick a time', trigger: 'change'}
                ],
                type: [
                    {
                        type: 'array',
                        required: true,
                        message: 'Please select at least one activity type',
                        trigger: 'change'
                    }
                ],
                resource: [
                    {required: true, message: 'Please select activity resource', trigger: 'change'}
                ],
                desc: [
                    {required: true, message: 'Please input activity form', trigger: 'blur'}
                ]
            },
            formLabelWidth: '120px',
            nameButtonCart: " Thêm vào giỏ ",
            totalCart: 0
        }
    },
    created() {
      console.log(this.product,this.product)
    },
    computed: {
        ...Object(vuex__WEBPACK_IMPORTED_MODULE_0__["mapState"])({
            checkoutStatus: state => state.cart.checkoutStatus
        }),
        ...Object(vuex__WEBPACK_IMPORTED_MODULE_0__["mapGetters"])('modal', {
            cartStatus: 'getCartStatus',
        }),
    },
    watch: {
        product: function (product) {
            this.totalCart = product.price.value;
        },
        'form.quality': function () {
            if (this.product.price) {
                this.calcTotalPrice()
            }
        },
        totalCart: function (total) {
            const formatter = new Intl.NumberFormat('vi-VN', {
                style: 'currency',
                currency: 'VND',
                minimumFractionDigits: 0
            });
            this.nameButtonCart = formatter.format(total) + ' Thêm vào giỏ';
        },
        dialogFormVisible:function (value) {
         this.isShow = value;
        }
    },
    methods: {
        ...Object(vuex__WEBPACK_IMPORTED_MODULE_0__["mapActions"])('modal', [
            'setCartStatus',
            'setCartProduct'
        ]),
        ...Object(vuex__WEBPACK_IMPORTED_MODULE_0__["mapActions"])('cart', [
            'addProductToCart',
        ]),
        addToCart() {
            if(this.product.is_available){
                this.addProductToCart({
                    id: this.product.id,
                    name:this.product.name,
                    quantity: this.form.quality,
                    options: this.form.options,
                    note: this.form.desc,
                    price:this.totalCart
                });
                this.close();
            }
        },
        changeCheckbox(item, option) {
            if (this.$refs['checkbox_' + item.id][0].isChecked === false) {
                var optionA = this.form.options[option.id];
                if (optionA) {
                    optionA.items.push(item);
                    this.form.options[option.id] = optionA;
                } else {
                    this.form.options[option.id] = {
                        idOption: option.id,
                        items: [item]
                    };
                }
            } else {
                var optionA = this.form.options[option.id];
                if (optionA) {
                    const optionItem = optionA.items.find(i => i.id === item.id);
                    if (optionItem) {
                        optionA.items = optionA.items.filter(function (value) {
                            return value.id !== optionItem.id;
                        });
                    }
                    this.form.options[option.id] = optionA;
                }
            }

            this.calcTotalPrice();
        },
        calcTotalPrice() {
            let totalOption = 0;
            this.form.options.forEach(function (option) {
                option.items.forEach(function (item) {
                    totalOption += item.price.value;
                })
            });
            this.totalCart = (this.product.price.value + totalOption) * this.form.quality;
        },
        close(){
             this.isShow =  false;
             this.$emit('dialogFormVisible', false);
        }
    },
});


/***/ }),

/***/ "./src/script/page.ts":
/*!****************************!*\
  !*** ./src/script/page.ts ***!
  \****************************/
/*! exports provided: Page */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* WEBPACK VAR INJECTION */(function($) {/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "Page", function() { return Page; });
/* harmony import */ var vue__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! vue */ "./node_modules/vue/dist/vue.esm.js");
/* harmony import */ var moment__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! moment */ "./node_modules/moment/moment.js");
/* harmony import */ var moment__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(moment__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var _api_request__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./api/request */ "./src/script/api/request.ts");
/* harmony import */ var element_ui__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! element-ui */ "./node_modules/element-ui/lib/element-ui.common.js");
/* harmony import */ var element_ui__WEBPACK_IMPORTED_MODULE_3___default = /*#__PURE__*/__webpack_require__.n(element_ui__WEBPACK_IMPORTED_MODULE_3__);
/* harmony import */ var element_ui_lib_theme_chalk_index_css__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! element-ui/lib/theme-chalk/index.css */ "./node_modules/element-ui/lib/theme-chalk/index.css");
/* harmony import */ var element_ui_lib_theme_chalk_index_css__WEBPACK_IMPORTED_MODULE_4___default = /*#__PURE__*/__webpack_require__.n(element_ui_lib_theme_chalk_index_css__WEBPACK_IMPORTED_MODULE_4__);
/* harmony import */ var _style_element_variables_scss__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! ../style/element-variables.scss */ "./src/style/element-variables.scss");
/* harmony import */ var _style_element_variables_scss__WEBPACK_IMPORTED_MODULE_5___default = /*#__PURE__*/__webpack_require__.n(_style_element_variables_scss__WEBPACK_IMPORTED_MODULE_5__);
/* harmony import */ var _localstorage__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! ./localstorage */ "./src/script/localstorage.ts");
/* harmony import */ var _components_item_cart_button_vue__WEBPACK_IMPORTED_MODULE_7__ = __webpack_require__(/*! ./components/item/cart-button.vue */ "./src/script/components/item/cart-button.vue");
/* harmony import */ var _components_item_dialog_vue__WEBPACK_IMPORTED_MODULE_8__ = __webpack_require__(/*! ./components/item/dialog.vue */ "./src/script/components/item/dialog.vue");
/* harmony import */ var element_ui_lib_locale_lang_en__WEBPACK_IMPORTED_MODULE_9__ = __webpack_require__(/*! element-ui/lib/locale/lang/en */ "./node_modules/element-ui/lib/locale/lang/en.js");
/* harmony import */ var element_ui_lib_locale_lang_en__WEBPACK_IMPORTED_MODULE_9___default = /*#__PURE__*/__webpack_require__.n(element_ui_lib_locale_lang_en__WEBPACK_IMPORTED_MODULE_9__);
/* harmony import */ var element_ui_lib_locale__WEBPACK_IMPORTED_MODULE_10__ = __webpack_require__(/*! element-ui/lib/locale */ "./node_modules/element-ui/lib/locale/index.js");
/* harmony import */ var element_ui_lib_locale__WEBPACK_IMPORTED_MODULE_10___default = /*#__PURE__*/__webpack_require__.n(element_ui_lib_locale__WEBPACK_IMPORTED_MODULE_10__);
/* harmony import */ var _store__WEBPACK_IMPORTED_MODULE_11__ = __webpack_require__(/*! ./store */ "./src/script/store/index.ts");








vue__WEBPACK_IMPORTED_MODULE_0__["default"].component(_components_item_cart_button_vue__WEBPACK_IMPORTED_MODULE_7__["default"].name, _components_item_cart_button_vue__WEBPACK_IMPORTED_MODULE_7__["default"]);

vue__WEBPACK_IMPORTED_MODULE_0__["default"].component(_components_item_dialog_vue__WEBPACK_IMPORTED_MODULE_8__["default"].name, _components_item_dialog_vue__WEBPACK_IMPORTED_MODULE_8__["default"]);


element_ui_lib_locale__WEBPACK_IMPORTED_MODULE_10___default.a.use(element_ui_lib_locale_lang_en__WEBPACK_IMPORTED_MODULE_9___default.a);
vue__WEBPACK_IMPORTED_MODULE_0__["default"].use(element_ui__WEBPACK_IMPORTED_MODULE_3___default.a);
// Vue.locale('en', locale)
vue__WEBPACK_IMPORTED_MODULE_0__["default"].prototype.$http = _api_request__WEBPACK_IMPORTED_MODULE_2__["default"];

_store__WEBPACK_IMPORTED_MODULE_11__["default"].subscribe(function (mutation, state) {
    if (mutation.type.indexOf('cart') != -1) {
        _localstorage__WEBPACK_IMPORTED_MODULE_6__["default"].setItem('store', JSON.stringify(state));
    }
});
var Page = /** @class */ (function () {
    function Page(config) {
        if (config === void 0) { config = {}; }
        this.default = {
            googleApiKey: null,
            googleAnalyticsKey: null,
            reCaptchaSiteKey: null,
            reCaptchaLanguage: null,
            disableAOSonMobile: true,
            smoothScroll: false,
            googleAnalyticsId: null
        };
        this.config = config;
    }
    Page.prototype.init = function () {
        console.log('init');
        var $this = this;
        //register Filter
        this.registerFilter();
        // register shortcode
        $('[v-shortcode]').each(function () {
            console.log("short code render");
            var el = $(this);
            var name = el.attr('v-shortcode');
            var template = '<' + name + '/>';
            new vue__WEBPACK_IMPORTED_MODULE_0__["default"]({
                el: '[v-shortcode="' + name + '"]',
                template: template,
                store: _store__WEBPACK_IMPORTED_MODULE_11__["default"],
                components: $this.config.components
            });
        });
        // register main page
        $('[v-page-content]').each(function () {
            console.log("page content render");
            var el = $(this);
            var name = el.attr('v-page-content');
            var template = '<page' + name + '/>';
            new vue__WEBPACK_IMPORTED_MODULE_0__["default"]({
                el: '[v-page-content]',
                store: _store__WEBPACK_IMPORTED_MODULE_11__["default"],
                template: template,
                components: $this.config.pages,
                beforeCreate: function () {
                    this.$store.commit('initialiseStore');
                }
            });
        });
        // register cart
        new vue__WEBPACK_IMPORTED_MODULE_0__["default"]({
            el: '.cart_wrap',
            template: '<cart/>',
            store: _store__WEBPACK_IMPORTED_MODULE_11__["default"],
            components: $this.config.components,
            beforeCreate: function () {
                this.$store.commit('initialiseStore');
            },
            beforeMount: function () {
                this.$store.commit('initialiseStore');
            },
        });
        return this;
    };
    Page.prototype.registerFilter = function () {
        vue__WEBPACK_IMPORTED_MODULE_0__["default"].filter('formatDate', function (value, format) {
            if (format === void 0) { format = 'MM/DD/YYYY hh:mm'; }
            if (value) {
                return moment__WEBPACK_IMPORTED_MODULE_1__(String(value)).format(format);
            }
        });
        vue__WEBPACK_IMPORTED_MODULE_0__["default"].filter('currency', function (value) {
            var formatter = new Intl.NumberFormat('vi-VN', {
                style: 'currency',
                currency: 'VND',
                minimumFractionDigits: 0
            });
            return formatter.format(value);
        });
    };
    return Page;
}());


/* WEBPACK VAR INJECTION */}.call(this, __webpack_require__(/*! jquery */ "./node_modules/jquery/dist/jquery.js")))

/***/ })

})
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vc3JjL3NjcmlwdC9jb21wb25lbnRzL2l0ZW0vZGlhbG9nLnZ1ZSIsIndlYnBhY2s6Ly8vLi9zcmMvc2NyaXB0L3BhZ2UudHMiXSwibmFtZXMiOltdLCJtYXBwaW5ncyI6Ijs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7OztBQStCQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTs7QUFFQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FB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QzNCLENBQUMsQ0FBQztZQUNILE9BQU8sU0FBUyxDQUFDLE1BQU0sQ0FBQyxLQUFLLENBQUMsQ0FBQztRQUNuQyxDQUFDLENBQUMsQ0FBQztJQUNQLENBQUM7SUFFTCxXQUFDO0FBQUQsQ0FBQztBQUVlIiwiZmlsZSI6ImFwcC4wYzdkYzMyNDY0Y2IyMGQ2MDgzZC5ob3QtdXBkYXRlLmpzIiwic291cmNlc0NvbnRlbnQiOlsiPHRlbXBsYXRlPlxuICAgIDxkaXY+XG4gICAgICAgIDxlbC1kaWFsb2cgdi1pZj1cInByb2R1Y3RcIiA6dGl0bGU9XCJwcm9kdWN0Lm5hbWVcIiA6dmlzaWJsZT1cImlzU2hvd1wiIEBjbG9zZT1cImNsb3NlXCIgOmFwcGVuZC10by1ib2R5PVwidHJ1ZVwiPlxuICAgICAgICAgICAgPGVsLWZvcm0gOm1vZGVsPVwiZm9ybVwiIDpydWxlcz1cInJ1bGVzXCIgcmVmPVwiZm9ybVwiIGxhYmVsLXdpZHRoPVwiNjBweFwiIGNsYXNzPVwiZGVtby1mb3JtXCI+XG4gICAgICAgICAgICAgICAgPHRlbXBsYXRlIHYtZm9yPVwiKG9wdGlvbixpbmRleCkgaW4gcHJvZHVjdC5vcHRpb25zXCI+XG4gICAgICAgICAgICAgICAgICAgIDxlbC1kaXZpZGVyIGNvbnRlbnQtcG9zaXRpb249XCJsZWZ0XCI+e3tvcHRpb24ubmFtZX19PC9lbC1kaXZpZGVyPlxuICAgICAgICAgICAgICAgICAgICA8ZWwtZm9ybS1pdGVtPlxuICAgICAgICAgICAgICAgICAgICAgICAgPGVsLWNoZWNrYm94LWdyb3VwIHYtbW9kZWw9XCJmb3JtLnRvcHBpbmdbaW5kZXhdXCIgOm5hbWU9XCJvcHRpb24uaWRcIiA6cmVmPVwiJ2dyb3VwXycrb3B0aW9uLmlkXCJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA6bWF4PVwib3B0aW9uLm9wdGlvbl9pdGVtcy5tYXhfc2VsZWN0XCI+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgPGVsLWNoZWNrYm94IHYtZm9yPVwidG9wcGluZyBpbiBvcHRpb24ub3B0aW9uX2l0ZW1zLml0ZW1zXCJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgOmNoZWNrZWQ9XCJ0b3BwaW5nLmlzX2RlZmF1bHRcIlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBAY2hhbmdlPVwiY2hhbmdlQ2hlY2tib3godG9wcGluZyxvcHRpb24pXCIgOmtleT1cInRvcHBpbmcuaWRcIlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA6bGFiZWw9XCJ0b3BwaW5nLm5hbWUgKyAnKCArICcrdG9wcGluZy5wcmljZS50ZXh0KycpJ1wiXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDpyZWY9XCInY2hlY2tib3hfJyt0b3BwaW5nLmlkXCI+PC9lbC1jaGVja2JveD5cbiAgICAgICAgICAgICAgICAgICAgICAgIDwvZWwtY2hlY2tib3gtZ3JvdXA+XG4gICAgICAgICAgICAgICAgICAgIDwvZWwtZm9ybS1pdGVtPlxuICAgICAgICAgICAgICAgIDwvdGVtcGxhdGU+XG4gICAgICAgICAgICAgICAgPGVsLWRpdmlkZXIgY29udGVudC1wb3NpdGlvbj1cImxlZnRcIj5HaGkgQ2jDujwvZWwtZGl2aWRlcj5cbiAgICAgICAgICAgICAgICA8ZWwtZm9ybS1pdGVtPlxuICAgICAgICAgICAgICAgICAgICA8ZWwtaW5wdXQgdHlwZT1cInRleHRhcmVhXCIgcm93cz1cIjRcIiB2LW1vZGVsPVwiZm9ybS5kZXNjXCI+PC9lbC1pbnB1dD5cbiAgICAgICAgICAgICAgICA8L2VsLWZvcm0taXRlbT5cbiAgICAgICAgICAgIDwvZWwtZm9ybT5cbiAgICAgICAgICAgIDxzcGFuIHNsb3Q9XCJmb290ZXJcIiBjbGFzcz1cImRpYWxvZy1mb290ZXJcIj5cbiAgICAgICAgICAgICAgICA8ZWwtaW5wdXQtbnVtYmVyIHYtbW9kZWw9XCJmb3JtLnF1YWxpdHlcIiA6bWluPVwiMVwiPjwvZWwtaW5wdXQtbnVtYmVyPlxuICAgICAgICAgICAgICAgIDxlbC1idXR0b24gdHlwZT1cInByaW1hcnlcIiBAY2xpY2s9XCJhZGRUb0NhcnQoKVwiPnt7bmFtZUJ1dHRvbkNhcnR9fTwvZWwtYnV0dG9uPlxuICAgICAgICAgICAgPC9zcGFuPlxuICAgICAgICA8L2VsLWRpYWxvZz5cbiAgICA8L2Rpdj5cbjwvdGVtcGxhdGU+XG5cbjxzY3JpcHQ+XG4gICAgaW1wb3J0IHttYXBHZXR0ZXJzLCBtYXBTdGF0ZSwgbWFwQWN0aW9uc30gZnJvbSAndnVleCc7XG4gICAgZXhwb3J0IGRlZmF1bHQge1xuICAgICAgICBuYW1lOiBcImRpYWxvZy1hZGQtY2FydFwiLFxuICAgICAgICBwcm9wczp7XG4gICAgICAgICAgICBwcm9kdWN0Ont9LFxuICAgICAgICAgICAgZGlhbG9nRm9ybVZpc2libGU6e1xuICAgICAgICAgICAgICAgIHR5cGU6IEJvb2xlYW4sXG4gICAgICAgICAgICAgICAgZGVmYXVsdDogZmFsc2VcbiAgICAgICAgICAgIH1cbiAgICAgICAgfSxcbiAgICAgICAgZGF0YTogZnVuY3Rpb24gKCkge1xuICAgICAgICAgICAgcmV0dXJuIHtcbiAgICAgICAgICAgICAgICBpc1Nob3c6ZmFsc2UsXG4gICAgICAgICAgICAgICAgZm9ybToge1xuICAgICAgICAgICAgICAgICAgICBuYW1lOiAnJyxcbiAgICAgICAgICAgICAgICAgICAgcmVnaW9uOiAnJyxcbiAgICAgICAgICAgICAgICAgICAgZGF0ZTE6ICcnLFxuICAgICAgICAgICAgICAgICAgICBkYXRlMjogJycsXG4gICAgICAgICAgICAgICAgICAgIGRlbGl2ZXJ5OiBmYWxzZSxcbiAgICAgICAgICAgICAgICAgICAgdG9wcGluZzogW1tdLCBbXSwgW10sIFtdLCBbXSwgW10sIFtdLCBbXSwgW10sIFtdLCBbXSwgW10sIFtdLCBbXV0sXG4gICAgICAgICAgICAgICAgICAgIHNpemU6ICcxJyxcbiAgICAgICAgICAgICAgICAgICAgZGVzYzogJycsXG4gICAgICAgICAgICAgICAgICAgIHF1YWxpdHk6IDAsXG4gICAgICAgICAgICAgICAgICAgIG9wdGlvbnM6IFtdXG4gICAgICAgICAgICAgICAgfSxcbiAgICAgICAgICAgICAgICBydWxlczoge1xuICAgICAgICAgICAgICAgICAgICBuYW1lOiBbXG4gICAgICAgICAgICAgICAgICAgICAgICB7cmVxdWlyZWQ6IHRydWUsIG1lc3NhZ2U6ICdQbGVhc2UgaW5wdXQgQWN0aXZpdHkgbmFtZScsIHRyaWdnZXI6ICdibHVyJ30sXG4gICAgICAgICAgICAgICAgICAgICAgICB7bWluOiAzLCBtYXg6IDUsIG1lc3NhZ2U6ICdMZW5ndGggc2hvdWxkIGJlIDMgdG8gNScsIHRyaWdnZXI6ICdibHVyJ31cbiAgICAgICAgICAgICAgICAgICAgXSxcbiAgICAgICAgICAgICAgICAgICAgcmVnaW9uOiBbXG4gICAgICAgICAgICAgICAgICAgICAgICB7cmVxdWlyZWQ6IHRydWUsIG1lc3NhZ2U6ICdQbGVhc2Ugc2VsZWN0IEFjdGl2aXR5IHpvbmUnLCB0cmlnZ2VyOiAnY2hhbmdlJ31cbiAgICAgICAgICAgICAgICAgICAgXSxcbiAgICAgICAgICAgICAgICAgICAgZGF0ZTE6IFtcbiAgICAgICAgICAgICAgICAgICAgICAgIHt0eXBlOiAnZGF0ZScsIHJlcXVpcmVkOiB0cnVlLCBtZXNzYWdlOiAnUGxlYXNlIHBpY2sgYSBkYXRlJywgdHJpZ2dlcjogJ2NoYW5nZSd9XG4gICAgICAgICAgICAgICAgICAgIF0sXG4gICAgICAgICAgICAgICAgICAgIGRhdGUyOiBbXG4gICAgICAgICAgICAgICAgICAgICAgICB7dHlwZTogJ2RhdGUnLCByZXF1aXJlZDogdHJ1ZSwgbWVzc2FnZTogJ1BsZWFzZSBwaWNrIGEgdGltZScsIHRyaWdnZXI6ICdjaGFuZ2UnfVxuICAgICAgICAgICAgICAgICAgICBdLFxuICAgICAgICAgICAgICAgICAgICB0eXBlOiBbXG4gICAgICAgICAgICAgICAgICAgICAgICB7XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgdHlwZTogJ2FycmF5JyxcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICByZXF1aXJlZDogdHJ1ZSxcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICBtZXNzYWdlOiAnUGxlYXNlIHNlbGVjdCBhdCBsZWFzdCBvbmUgYWN0aXZpdHkgdHlwZScsXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgdHJpZ2dlcjogJ2NoYW5nZSdcbiAgICAgICAgICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICAgICAgXSxcbiAgICAgICAgICAgICAgICAgICAgcmVzb3VyY2U6IFtcbiAgICAgICAgICAgICAgICAgICAgICAgIHtyZXF1aXJlZDogdHJ1ZSwgbWVzc2FnZTogJ1BsZWFzZSBzZWxlY3QgYWN0aXZpdHkgcmVzb3VyY2UnLCB0cmlnZ2VyOiAnY2hhbmdlJ31cbiAgICAgICAgICAgICAgICAgICAgXSxcbiAgICAgICAgICAgICAgICAgICAgZGVzYzogW1xuICAgICAgICAgICAgICAgICAgICAgICAge3JlcXVpcmVkOiB0cnVlLCBtZXNzYWdlOiAnUGxlYXNlIGlucHV0IGFjdGl2aXR5IGZvcm0nLCB0cmlnZ2VyOiAnYmx1cid9XG4gICAgICAgICAgICAgICAgICAgIF1cbiAgICAgICAgICAgICAgICB9LFxuICAgICAgICAgICAgICAgIGZvcm1MYWJlbFdpZHRoOiAnMTIwcHgnLFxuICAgICAgICAgICAgICAgIG5hbWVCdXR0b25DYXJ0OiBcIiBUaMOqbSB2w6BvIGdp4buPIFwiLFxuICAgICAgICAgICAgICAgIHRvdGFsQ2FydDogMFxuICAgICAgICAgICAgfVxuICAgICAgICB9LFxuICAgICAgICBjcmVhdGVkKCkge1xuICAgICAgICAgIGNvbnNvbGUubG9nKHRoaXMucHJvZHVjdCx0aGlzLnByb2R1Y3QpXG4gICAgICAgIH0sXG4gICAgICAgIGNvbXB1dGVkOiB7XG4gICAgICAgICAgICAuLi5tYXBTdGF0ZSh7XG4gICAgICAgICAgICAgICAgY2hlY2tvdXRTdGF0dXM6IHN0YXRlID0+IHN0YXRlLmNhcnQuY2hlY2tvdXRTdGF0dXNcbiAgICAgICAgICAgIH0pLFxuICAgICAgICAgICAgLi4ubWFwR2V0dGVycygnbW9kYWwnLCB7XG4gICAgICAgICAgICAgICAgY2FydFN0YXR1czogJ2dldENhcnRTdGF0dXMnLFxuICAgICAgICAgICAgfSksXG4gICAgICAgIH0sXG4gICAgICAgIHdhdGNoOiB7XG4gICAgICAgICAgICBwcm9kdWN0OiBmdW5jdGlvbiAocHJvZHVjdCkge1xuICAgICAgICAgICAgICAgIHRoaXMudG90YWxDYXJ0ID0gcHJvZHVjdC5wcmljZS52YWx1ZTtcbiAgICAgICAgICAgIH0sXG4gICAgICAgICAgICAnZm9ybS5xdWFsaXR5JzogZnVuY3Rpb24gKCkge1xuICAgICAgICAgICAgICAgIGlmICh0aGlzLnByb2R1Y3QucHJpY2UpIHtcbiAgICAgICAgICAgICAgICAgICAgdGhpcy5jYWxjVG90YWxQcmljZSgpXG4gICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgfSxcbiAgICAgICAgICAgIHRvdGFsQ2FydDogZnVuY3Rpb24gKHRvdGFsKSB7XG4gICAgICAgICAgICAgICAgY29uc3QgZm9ybWF0dGVyID0gbmV3IEludGwuTnVtYmVyRm9ybWF0KCd2aS1WTicsIHtcbiAgICAgICAgICAgICAgICAgICAgc3R5bGU6ICdjdXJyZW5jeScsXG4gICAgICAgICAgICAgICAgICAgIGN1cnJlbmN5OiAnVk5EJyxcbiAgICAgICAgICAgICAgICAgICAgbWluaW11bUZyYWN0aW9uRGlnaXRzOiAwXG4gICAgICAgICAgICAgICAgfSk7XG4gICAgICAgICAgICAgICAgdGhpcy5uYW1lQnV0dG9uQ2FydCA9IGZvcm1hdHRlci5mb3JtYXQodG90YWwpICsgJyBUaMOqbSB2w6BvIGdp4buPJztcbiAgICAgICAgICAgIH0sXG4gICAgICAgICAgICBkaWFsb2dGb3JtVmlzaWJsZTpmdW5jdGlvbiAodmFsdWUpIHtcbiAgICAgICAgICAgICB0aGlzLmlzU2hvdyA9IHZhbHVlO1xuICAgICAgICAgICAgfVxuICAgICAgICB9LFxuICAgICAgICBtZXRob2RzOiB7XG4gICAgICAgICAgICAuLi5tYXBBY3Rpb25zKCdtb2RhbCcsIFtcbiAgICAgICAgICAgICAgICAnc2V0Q2FydFN0YXR1cycsXG4gICAgICAgICAgICAgICAgJ3NldENhcnRQcm9kdWN0J1xuICAgICAgICAgICAgXSksXG4gICAgICAgICAgICAuLi5tYXBBY3Rpb25zKCdjYXJ0JywgW1xuICAgICAgICAgICAgICAgICdhZGRQcm9kdWN0VG9DYXJ0JyxcbiAgICAgICAgICAgIF0pLFxuICAgICAgICAgICAgYWRkVG9DYXJ0KCkge1xuICAgICAgICAgICAgICAgIGlmKHRoaXMucHJvZHVjdC5pc19hdmFpbGFibGUpe1xuICAgICAgICAgICAgICAgICAgICB0aGlzLmFkZFByb2R1Y3RUb0NhcnQoe1xuICAgICAgICAgICAgICAgICAgICAgICAgaWQ6IHRoaXMucHJvZHVjdC5pZCxcbiAgICAgICAgICAgICAgICAgICAgICAgIG5hbWU6dGhpcy5wcm9kdWN0Lm5hbWUsXG4gICAgICAgICAgICAgICAgICAgICAgICBxdWFudGl0eTogdGhpcy5mb3JtLnF1YWxpdHksXG4gICAgICAgICAgICAgICAgICAgICAgICBvcHRpb25zOiB0aGlzLmZvcm0ub3B0aW9ucyxcbiAgICAgICAgICAgICAgICAgICAgICAgIG5vdGU6IHRoaXMuZm9ybS5kZXNjLFxuICAgICAgICAgICAgICAgICAgICAgICAgcHJpY2U6dGhpcy50b3RhbENhcnRcbiAgICAgICAgICAgICAgICAgICAgfSk7XG4gICAgICAgICAgICAgICAgICAgIHRoaXMuY2xvc2UoKTtcbiAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICB9LFxuICAgICAgICAgICAgY2hhbmdlQ2hlY2tib3goaXRlbSwgb3B0aW9uKSB7XG4gICAgICAgICAgICAgICAgaWYgKHRoaXMuJHJlZnNbJ2NoZWNrYm94XycgKyBpdGVtLmlkXVswXS5pc0NoZWNrZWQgPT09IGZhbHNlKSB7XG4gICAgICAgICAgICAgICAgICAgIHZhciBvcHRpb25BID0gdGhpcy5mb3JtLm9wdGlvbnNbb3B0aW9uLmlkXTtcbiAgICAgICAgICAgICAgICAgICAgaWYgKG9wdGlvbkEpIHtcbiAgICAgICAgICAgICAgICAgICAgICAgIG9wdGlvbkEuaXRlbXMucHVzaChpdGVtKTtcbiAgICAgICAgICAgICAgICAgICAgICAgIHRoaXMuZm9ybS5vcHRpb25zW29wdGlvbi5pZF0gPSBvcHRpb25BO1xuICAgICAgICAgICAgICAgICAgICB9IGVsc2Uge1xuICAgICAgICAgICAgICAgICAgICAgICAgdGhpcy5mb3JtLm9wdGlvbnNbb3B0aW9uLmlkXSA9IHtcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICBpZE9wdGlvbjogb3B0aW9uLmlkLFxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIGl0ZW1zOiBbaXRlbV1cbiAgICAgICAgICAgICAgICAgICAgICAgIH07XG4gICAgICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICB9IGVsc2Uge1xuICAgICAgICAgICAgICAgICAgICB2YXIgb3B0aW9uQSA9IHRoaXMuZm9ybS5vcHRpb25zW29wdGlvbi5pZF07XG4gICAgICAgICAgICAgICAgICAgIGlmIChvcHRpb25BKSB7XG4gICAgICAgICAgICAgICAgICAgICAgICBjb25zdCBvcHRpb25JdGVtID0gb3B0aW9uQS5pdGVtcy5maW5kKGkgPT4gaS5pZCA9PT0gaXRlbS5pZCk7XG4gICAgICAgICAgICAgICAgICAgICAgICBpZiAob3B0aW9uSXRlbSkge1xuICAgICAgICAgICAgICAgICAgICAgICAgICAgIG9wdGlvbkEuaXRlbXMgPSBvcHRpb25BLml0ZW1zLmZpbHRlcihmdW5jdGlvbiAodmFsdWUpIHtcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgcmV0dXJuIHZhbHVlLmlkICE9PSBvcHRpb25JdGVtLmlkO1xuICAgICAgICAgICAgICAgICAgICAgICAgICAgIH0pO1xuICAgICAgICAgICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgICAgICAgICAgdGhpcy5mb3JtLm9wdGlvbnNbb3B0aW9uLmlkXSA9IG9wdGlvbkE7XG4gICAgICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICB9XG5cbiAgICAgICAgICAgICAgICB0aGlzLmNhbGNUb3RhbFByaWNlKCk7XG4gICAgICAgICAgICB9LFxuICAgICAgICAgICAgY2FsY1RvdGFsUHJpY2UoKSB7XG4gICAgICAgICAgICAgICAgbGV0IHRvdGFsT3B0aW9uID0gMDtcbiAgICAgICAgICAgICAgICB0aGlzLmZvcm0ub3B0aW9ucy5mb3JFYWNoKGZ1bmN0aW9uIChvcHRpb24pIHtcbiAgICAgICAgICAgICAgICAgICAgb3B0aW9uLml0ZW1zLmZvckVhY2goZnVuY3Rpb24gKGl0ZW0pIHtcbiAgICAgICAgICAgICAgICAgICAgICAgIHRvdGFsT3B0aW9uICs9IGl0ZW0ucHJpY2UudmFsdWU7XG4gICAgICAgICAgICAgICAgICAgIH0pXG4gICAgICAgICAgICAgICAgfSk7XG4gICAgICAgICAgICAgICAgdGhpcy50b3RhbENhcnQgPSAodGhpcy5wcm9kdWN0LnByaWNlLnZhbHVlICsgdG90YWxPcHRpb24pICogdGhpcy5mb3JtLnF1YWxpdHk7XG4gICAgICAgICAgICB9LFxuICAgICAgICAgICAgY2xvc2UoKXtcbiAgICAgICAgICAgICAgICAgdGhpcy5pc1Nob3cgPSAgZmFsc2U7XG4gICAgICAgICAgICAgICAgIHRoaXMuJGVtaXQoJ2RpYWxvZ0Zvcm1WaXNpYmxlJywgZmFsc2UpO1xuICAgICAgICAgICAgfVxuICAgICAgICB9LFxuICAgIH1cbjwvc2NyaXB0PlxuXG48c3R5bGUgc2NvcGVkPlxuXG48L3N0eWxlPiIsImltcG9ydCBWdWUgZnJvbSAndnVlJztcbmltcG9ydCAqIGFzIG1vbWVudCBmcm9tICdtb21lbnQnXG5pbXBvcnQgaHR0cCBmcm9tICcuL2FwaS9yZXF1ZXN0J1xuaW1wb3J0IEVsZW1lbnRVSSBmcm9tICdlbGVtZW50LXVpJztcbmltcG9ydCAnZWxlbWVudC11aS9saWIvdGhlbWUtY2hhbGsvaW5kZXguY3NzJztcbmltcG9ydCAnLi4vc3R5bGUvZWxlbWVudC12YXJpYWJsZXMuc2NzcydcbmltcG9ydCBsb2NhbFN0b3JhZ2UgZnJvbSAnLi9sb2NhbHN0b3JhZ2UnO1xuaW1wb3J0IGJ1dHRvbkFkZENhcnQgZnJvbSAnLi9jb21wb25lbnRzL2l0ZW0vY2FydC1idXR0b24udnVlJztcblZ1ZS5jb21wb25lbnQoYnV0dG9uQWRkQ2FydC5uYW1lLGJ1dHRvbkFkZENhcnQpO1xuaW1wb3J0IGRpYWxvZ0FkZENhcnQgZnJvbSAnLi9jb21wb25lbnRzL2l0ZW0vZGlhbG9nLnZ1ZSc7XG5WdWUuY29tcG9uZW50KGRpYWxvZ0FkZENhcnQubmFtZSxkaWFsb2dBZGRDYXJ0KTtcbmltcG9ydCBsYW5nIGZyb20gJ2VsZW1lbnQtdWkvbGliL2xvY2FsZS9sYW5nL2VuJ1xuaW1wb3J0IGxvY2FsZSBmcm9tICdlbGVtZW50LXVpL2xpYi9sb2NhbGUnXG5sb2NhbGUudXNlKGxhbmcpO1xuVnVlLnVzZShFbGVtZW50VUkpO1xuLy8gVnVlLmxvY2FsZSgnZW4nLCBsb2NhbGUpXG5WdWUucHJvdG90eXBlLiRodHRwID0gaHR0cDtcbmltcG9ydCBzdG9yZSBmcm9tICcuL3N0b3JlJztcblxuc3RvcmUuc3Vic2NyaWJlKChtdXRhdGlvbiwgc3RhdGUpID0+IHtcbiAgICBpZiAobXV0YXRpb24udHlwZS5pbmRleE9mKCdjYXJ0JykgIT0gLTEpe1xuICAgICAgICBsb2NhbFN0b3JhZ2Uuc2V0SXRlbSgnc3RvcmUnLCBKU09OLnN0cmluZ2lmeShzdGF0ZSkpO1xuICAgIH1cbn0pO1xuY2xhc3MgUGFnZSB7XG4gICAgbmFtZTogJ0VkaXRvciBXZWJhc2VsaW5lIFNpdGUnO1xuICAgIHZlcnNpb246ICcwLjAuMSc7XG4gICAgY29uZmlnOiB7XG4gICAgICAgIGNvbXBvbmVudHM6IHt9LFxuICAgICAgICBwYWdlczoge31cbiAgICB9O1xuICAgIGRlZmF1bHQ6IGFueSA9IHtcbiAgICAgICAgZ29vZ2xlQXBpS2V5OiBudWxsLFxuICAgICAgICBnb29nbGVBbmFseXRpY3NLZXk6IG51bGwsXG4gICAgICAgIHJlQ2FwdGNoYVNpdGVLZXk6IG51bGwsXG4gICAgICAgIHJlQ2FwdGNoYUxhbmd1YWdlOiBudWxsLFxuICAgICAgICBkaXNhYmxlQU9Tb25Nb2JpbGU6IHRydWUsXG4gICAgICAgIHNtb290aFNjcm9sbDogZmFsc2UsXG4gICAgICAgIGdvb2dsZUFuYWx5dGljc0lkOiBudWxsXG4gICAgfTtcblxuICAgIGNvbnN0cnVjdG9yKGNvbmZpZzogYW55ID0ge30pIHtcbiAgICAgICAgdGhpcy5jb25maWcgPSBjb25maWc7XG4gICAgfVxuXG4gICAgaW5pdCgpIHtcbiAgICAgICAgY29uc29sZS5sb2coJ2luaXQnKTtcbiAgICAgICAgdmFyICR0aGlzID0gdGhpcztcbiAgICAgICAgLy9yZWdpc3RlciBGaWx0ZXJcbiAgICAgICAgdGhpcy5yZWdpc3RlckZpbHRlcigpO1xuICAgICAgICAvLyByZWdpc3RlciBzaG9ydGNvZGVcbiAgICAgICAgJCgnW3Ytc2hvcnRjb2RlXScpLmVhY2goZnVuY3Rpb24oKSB7XG4gICAgICAgICAgICBjb25zb2xlLmxvZyhcInNob3J0IGNvZGUgcmVuZGVyXCIpO1xuICAgICAgICAgICAgdmFyIGVsID0gJCh0aGlzKTtcbiAgICAgICAgICAgIHZhciBuYW1lID0gZWwuYXR0cigndi1zaG9ydGNvZGUnKTtcbiAgICAgICAgICAgIHZhciB0ZW1wbGF0ZSA9ICc8JyArIG5hbWUgKyAnLz4nO1xuICAgICAgICAgICAgbmV3IFZ1ZSh7XG4gICAgICAgICAgICAgICAgZWw6ICdbdi1zaG9ydGNvZGU9XCInICsgbmFtZSArICdcIl0nLFxuICAgICAgICAgICAgICAgIHRlbXBsYXRlLFxuICAgICAgICAgICAgICAgIHN0b3JlLFxuICAgICAgICAgICAgICAgIGNvbXBvbmVudHM6ICR0aGlzLmNvbmZpZy5jb21wb25lbnRzXG4gICAgICAgICAgICB9KTtcbiAgICAgICAgfSk7XG4gICAgICAgIC8vIHJlZ2lzdGVyIG1haW4gcGFnZVxuICAgICAgICAkKCdbdi1wYWdlLWNvbnRlbnRdJykuZWFjaChmdW5jdGlvbigpIHtcbiAgICAgICAgICAgIGNvbnNvbGUubG9nKFwicGFnZSBjb250ZW50IHJlbmRlclwiKTtcbiAgICAgICAgICAgIHZhciBlbCA9ICQodGhpcyk7XG4gICAgICAgICAgICB2YXIgbmFtZSA9IGVsLmF0dHIoJ3YtcGFnZS1jb250ZW50Jyk7XG4gICAgICAgICAgICB2YXIgdGVtcGxhdGUgPSAnPHBhZ2UnICsgbmFtZSArICcvPic7XG4gICAgICAgICAgICBuZXcgVnVlKHtcbiAgICAgICAgICAgICAgICBlbDogJ1t2LXBhZ2UtY29udGVudF0nLFxuICAgICAgICAgICAgICAgIHN0b3JlLFxuICAgICAgICAgICAgICAgIHRlbXBsYXRlLFxuICAgICAgICAgICAgICAgIGNvbXBvbmVudHM6ICR0aGlzLmNvbmZpZy5wYWdlcyxcbiAgICAgICAgICAgICAgICBiZWZvcmVDcmVhdGUoKSB7XG4gICAgICAgICAgICAgICAgICAgIHRoaXMuJHN0b3JlLmNvbW1pdCgnaW5pdGlhbGlzZVN0b3JlJyk7XG4gICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgfSk7XG4gICAgICAgIH0pO1xuXG4gICAgICAgIC8vIHJlZ2lzdGVyIGNhcnRcbiAgICAgICAgbmV3IFZ1ZSh7XG4gICAgICAgICAgICBlbDogJy5jYXJ0X3dyYXAnLFxuICAgICAgICAgICAgdGVtcGxhdGU6JzxjYXJ0Lz4nLFxuICAgICAgICAgICAgc3RvcmUsXG4gICAgICAgICAgICBjb21wb25lbnRzOiAkdGhpcy5jb25maWcuY29tcG9uZW50cyxcbiAgICAgICAgICAgIGJlZm9yZUNyZWF0ZSgpIHtcbiAgICAgICAgICAgICAgICB0aGlzLiRzdG9yZS5jb21taXQoJ2luaXRpYWxpc2VTdG9yZScpO1xuICAgICAgICAgICAgfSxcbiAgICAgICAgICAgIGJlZm9yZU1vdW50KCkge1xuICAgICAgICAgICAgICAgIHRoaXMuJHN0b3JlLmNvbW1pdCgnaW5pdGlhbGlzZVN0b3JlJyk7XG4gICAgICAgICAgICB9LFxuICAgICAgICB9KTtcbiAgICAgICAgcmV0dXJuIHRoaXM7XG4gICAgfVxuXG4gICAgcmVnaXN0ZXJGaWx0ZXIoKXtcbiAgICAgICAgVnVlLmZpbHRlcignZm9ybWF0RGF0ZScsIGZ1bmN0aW9uKHZhbHVlLCBmb3JtYXQgPSAnTU0vREQvWVlZWSBoaDptbScpIHtcbiAgICAgICAgICAgIGlmICh2YWx1ZSkge1xuICAgICAgICAgICAgICAgIHJldHVybiBtb21lbnQoU3RyaW5nKHZhbHVlKSkuZm9ybWF0KGZvcm1hdCk7XG4gICAgICAgICAgICB9XG4gICAgICAgIH0pO1xuXG4gICAgICAgIFZ1ZS5maWx0ZXIoJ2N1cnJlbmN5JywgZnVuY3Rpb24gKHZhbHVlKSB7XG4gICAgICAgICAgICBjb25zdCBmb3JtYXR0ZXIgPSBuZXcgSW50bC5OdW1iZXJGb3JtYXQoJ3ZpLVZOJywge1xuICAgICAgICAgICAgICAgIHN0eWxlOiAnY3VycmVuY3knLFxuICAgICAgICAgICAgICAgIGN1cnJlbmN5OiAnVk5EJyxcbiAgICAgICAgICAgICAgICBtaW5pbXVtRnJhY3Rpb25EaWdpdHM6IDBcbiAgICAgICAgICAgIH0pO1xuICAgICAgICAgICAgcmV0dXJuIGZvcm1hdHRlci5mb3JtYXQodmFsdWUpO1xuICAgICAgICB9KTtcbiAgICB9XG5cbn1cblxuZXhwb3J0IHsgUGFnZSB9OyJdLCJzb3VyY2VSb290IjoiIn0=