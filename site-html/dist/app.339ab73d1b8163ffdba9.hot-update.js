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


/* harmony default export */ __webpack_exports__["default"] = ({
    name: "modal",
    data: function () {
        return {
            dialogFormVisible: false,
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
    computed: {
        ...Object(vuex__WEBPACK_IMPORTED_MODULE_0__["mapState"])({
            checkoutStatus: state => state.cart.checkoutStatus
        }),
        ...Object(vuex__WEBPACK_IMPORTED_MODULE_0__["mapGetters"])('modal', {
            cartStatus: 'getCartStatus',
            product: 'getCartProduct',
        })
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
            this.addProductToCart({
                id: this.product.id,
                quantity: this.form.quality,
                topping: this.form.topping,
                size: this.form.size,
                note: this.form.desc
            });
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
    },
});


/***/ }),

/***/ "./src/script/jquery.ts":
false

})
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vc3JjL3NjcmlwdC9jb21wb25lbnRzL2l0ZW0vZGlhbG9nLnZ1ZSJdLCJuYW1lcyI6W10sIm1hcHBpbmdzIjoiOzs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7QUE4QkE7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBOztBQUVBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBIiwiZmlsZSI6ImFwcC4zMzlhYjczZDFiODE2M2ZmZGJhOS5ob3QtdXBkYXRlLmpzIiwic291cmNlc0NvbnRlbnQiOlsiPHRlbXBsYXRlPlxuICAgIDxkaXY+XG4gICAgICAgIDxlbC1kaWFsb2cgOnRpdGxlPVwicHJvZHVjdC5uYW1lXCIgOnZpc2libGU9XCJjYXJ0U3RhdHVzXCIgQGNsb3NlPVwic2V0Q2FydFN0YXR1cyhmYWxzZSlcIj5cbiAgICAgICAgICAgIDxlbC1mb3JtIDptb2RlbD1cImZvcm1cIiA6cnVsZXM9XCJydWxlc1wiIHJlZj1cImZvcm1cIiBsYWJlbC13aWR0aD1cIjYwcHhcIiBjbGFzcz1cImRlbW8tZm9ybVwiPlxuICAgICAgICAgICAgICAgIDx0ZW1wbGF0ZSB2LWZvcj1cIihvcHRpb24saW5kZXgpIGluIHByb2R1Y3Qub3B0aW9uc1wiPlxuICAgICAgICAgICAgICAgICAgICA8ZWwtZGl2aWRlciBjb250ZW50LXBvc2l0aW9uPVwibGVmdFwiPnt7b3B0aW9uLm5hbWV9fTwvZWwtZGl2aWRlcj5cbiAgICAgICAgICAgICAgICAgICAgPGVsLWZvcm0taXRlbT5cbiAgICAgICAgICAgICAgICAgICAgICAgIDxlbC1jaGVja2JveC1ncm91cCB2LW1vZGVsPVwiZm9ybS50b3BwaW5nW2luZGV4XVwiIDpuYW1lPVwib3B0aW9uLmlkXCIgOnJlZj1cIidncm91cF8nK29wdGlvbi5pZFwiXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgOm1heD1cIm9wdGlvbi5vcHRpb25faXRlbXMubWF4X3NlbGVjdFwiPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxlbC1jaGVja2JveCB2LWZvcj1cInRvcHBpbmcgaW4gb3B0aW9uLm9wdGlvbl9pdGVtcy5pdGVtc1wiXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIEBjaGFuZ2U9XCJjaGFuZ2VDaGVja2JveCh0b3BwaW5nLG9wdGlvbilcIiA6a2V5PVwidG9wcGluZy5pZFwiXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDpsYWJlbD1cInRvcHBpbmcubmFtZSArICcoICsgJyt0b3BwaW5nLnByaWNlLnRleHQrJyknXCJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgOnJlZj1cIidjaGVja2JveF8nK3RvcHBpbmcuaWRcIj48L2VsLWNoZWNrYm94PlxuICAgICAgICAgICAgICAgICAgICAgICAgPC9lbC1jaGVja2JveC1ncm91cD5cbiAgICAgICAgICAgICAgICAgICAgPC9lbC1mb3JtLWl0ZW0+XG4gICAgICAgICAgICAgICAgPC90ZW1wbGF0ZT5cbiAgICAgICAgICAgICAgICA8ZWwtZGl2aWRlciBjb250ZW50LXBvc2l0aW9uPVwibGVmdFwiPkdoaSBDaMO6PC9lbC1kaXZpZGVyPlxuICAgICAgICAgICAgICAgIDxlbC1mb3JtLWl0ZW0+XG4gICAgICAgICAgICAgICAgICAgIDxlbC1pbnB1dCB0eXBlPVwidGV4dGFyZWFcIiByb3dzPVwiNFwiIHYtbW9kZWw9XCJmb3JtLmRlc2NcIj48L2VsLWlucHV0PlxuICAgICAgICAgICAgICAgIDwvZWwtZm9ybS1pdGVtPlxuICAgICAgICAgICAgPC9lbC1mb3JtPlxuICAgICAgICAgICAgPHNwYW4gc2xvdD1cImZvb3RlclwiIGNsYXNzPVwiZGlhbG9nLWZvb3RlclwiPlxuICAgICAgICAgICAgICAgIDxlbC1pbnB1dC1udW1iZXIgdi1tb2RlbD1cImZvcm0ucXVhbGl0eVwiIDptaW49XCIxXCI+PC9lbC1pbnB1dC1udW1iZXI+XG4gICAgICAgICAgICAgICAgPGVsLWJ1dHRvbiB0eXBlPVwicHJpbWFyeVwiIEBjbGljaz1cImFkZFRvQ2FydCgpXCI+e3tuYW1lQnV0dG9uQ2FydH19PC9lbC1idXR0b24+XG4gICAgICAgICAgICA8L3NwYW4+XG4gICAgICAgIDwvZWwtZGlhbG9nPlxuICAgIDwvZGl2PlxuPC90ZW1wbGF0ZT5cblxuPHNjcmlwdD5cbiAgICBpbXBvcnQge21hcEdldHRlcnMsIG1hcFN0YXRlLCBtYXBBY3Rpb25zfSBmcm9tICd2dWV4JztcbiAgICBleHBvcnQgZGVmYXVsdCB7XG4gICAgICAgIG5hbWU6IFwibW9kYWxcIixcbiAgICAgICAgZGF0YTogZnVuY3Rpb24gKCkge1xuICAgICAgICAgICAgcmV0dXJuIHtcbiAgICAgICAgICAgICAgICBkaWFsb2dGb3JtVmlzaWJsZTogZmFsc2UsXG4gICAgICAgICAgICAgICAgZm9ybToge1xuICAgICAgICAgICAgICAgICAgICBuYW1lOiAnJyxcbiAgICAgICAgICAgICAgICAgICAgcmVnaW9uOiAnJyxcbiAgICAgICAgICAgICAgICAgICAgZGF0ZTE6ICcnLFxuICAgICAgICAgICAgICAgICAgICBkYXRlMjogJycsXG4gICAgICAgICAgICAgICAgICAgIGRlbGl2ZXJ5OiBmYWxzZSxcbiAgICAgICAgICAgICAgICAgICAgdG9wcGluZzogW1tdLCBbXSwgW10sIFtdLCBbXSwgW10sIFtdLCBbXSwgW10sIFtdLCBbXSwgW10sIFtdLCBbXV0sXG4gICAgICAgICAgICAgICAgICAgIHNpemU6ICcxJyxcbiAgICAgICAgICAgICAgICAgICAgZGVzYzogJycsXG4gICAgICAgICAgICAgICAgICAgIHF1YWxpdHk6IDAsXG4gICAgICAgICAgICAgICAgICAgIG9wdGlvbnM6IFtdXG4gICAgICAgICAgICAgICAgfSxcbiAgICAgICAgICAgICAgICBydWxlczoge1xuICAgICAgICAgICAgICAgICAgICBuYW1lOiBbXG4gICAgICAgICAgICAgICAgICAgICAgICB7cmVxdWlyZWQ6IHRydWUsIG1lc3NhZ2U6ICdQbGVhc2UgaW5wdXQgQWN0aXZpdHkgbmFtZScsIHRyaWdnZXI6ICdibHVyJ30sXG4gICAgICAgICAgICAgICAgICAgICAgICB7bWluOiAzLCBtYXg6IDUsIG1lc3NhZ2U6ICdMZW5ndGggc2hvdWxkIGJlIDMgdG8gNScsIHRyaWdnZXI6ICdibHVyJ31cbiAgICAgICAgICAgICAgICAgICAgXSxcbiAgICAgICAgICAgICAgICAgICAgcmVnaW9uOiBbXG4gICAgICAgICAgICAgICAgICAgICAgICB7cmVxdWlyZWQ6IHRydWUsIG1lc3NhZ2U6ICdQbGVhc2Ugc2VsZWN0IEFjdGl2aXR5IHpvbmUnLCB0cmlnZ2VyOiAnY2hhbmdlJ31cbiAgICAgICAgICAgICAgICAgICAgXSxcbiAgICAgICAgICAgICAgICAgICAgZGF0ZTE6IFtcbiAgICAgICAgICAgICAgICAgICAgICAgIHt0eXBlOiAnZGF0ZScsIHJlcXVpcmVkOiB0cnVlLCBtZXNzYWdlOiAnUGxlYXNlIHBpY2sgYSBkYXRlJywgdHJpZ2dlcjogJ2NoYW5nZSd9XG4gICAgICAgICAgICAgICAgICAgIF0sXG4gICAgICAgICAgICAgICAgICAgIGRhdGUyOiBbXG4gICAgICAgICAgICAgICAgICAgICAgICB7dHlwZTogJ2RhdGUnLCByZXF1aXJlZDogdHJ1ZSwgbWVzc2FnZTogJ1BsZWFzZSBwaWNrIGEgdGltZScsIHRyaWdnZXI6ICdjaGFuZ2UnfVxuICAgICAgICAgICAgICAgICAgICBdLFxuICAgICAgICAgICAgICAgICAgICB0eXBlOiBbXG4gICAgICAgICAgICAgICAgICAgICAgICB7XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgdHlwZTogJ2FycmF5JyxcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICByZXF1aXJlZDogdHJ1ZSxcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICBtZXNzYWdlOiAnUGxlYXNlIHNlbGVjdCBhdCBsZWFzdCBvbmUgYWN0aXZpdHkgdHlwZScsXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgdHJpZ2dlcjogJ2NoYW5nZSdcbiAgICAgICAgICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICAgICAgXSxcbiAgICAgICAgICAgICAgICAgICAgcmVzb3VyY2U6IFtcbiAgICAgICAgICAgICAgICAgICAgICAgIHtyZXF1aXJlZDogdHJ1ZSwgbWVzc2FnZTogJ1BsZWFzZSBzZWxlY3QgYWN0aXZpdHkgcmVzb3VyY2UnLCB0cmlnZ2VyOiAnY2hhbmdlJ31cbiAgICAgICAgICAgICAgICAgICAgXSxcbiAgICAgICAgICAgICAgICAgICAgZGVzYzogW1xuICAgICAgICAgICAgICAgICAgICAgICAge3JlcXVpcmVkOiB0cnVlLCBtZXNzYWdlOiAnUGxlYXNlIGlucHV0IGFjdGl2aXR5IGZvcm0nLCB0cmlnZ2VyOiAnYmx1cid9XG4gICAgICAgICAgICAgICAgICAgIF1cbiAgICAgICAgICAgICAgICB9LFxuICAgICAgICAgICAgICAgIGZvcm1MYWJlbFdpZHRoOiAnMTIwcHgnLFxuICAgICAgICAgICAgICAgIG5hbWVCdXR0b25DYXJ0OiBcIiBUaMOqbSB2w6BvIGdp4buPIFwiLFxuICAgICAgICAgICAgICAgIHRvdGFsQ2FydDogMFxuICAgICAgICAgICAgfVxuICAgICAgICB9LFxuICAgICAgICBjb21wdXRlZDoge1xuICAgICAgICAgICAgLi4ubWFwU3RhdGUoe1xuICAgICAgICAgICAgICAgIGNoZWNrb3V0U3RhdHVzOiBzdGF0ZSA9PiBzdGF0ZS5jYXJ0LmNoZWNrb3V0U3RhdHVzXG4gICAgICAgICAgICB9KSxcbiAgICAgICAgICAgIC4uLm1hcEdldHRlcnMoJ21vZGFsJywge1xuICAgICAgICAgICAgICAgIGNhcnRTdGF0dXM6ICdnZXRDYXJ0U3RhdHVzJyxcbiAgICAgICAgICAgICAgICBwcm9kdWN0OiAnZ2V0Q2FydFByb2R1Y3QnLFxuICAgICAgICAgICAgfSlcbiAgICAgICAgfSxcbiAgICAgICAgd2F0Y2g6IHtcbiAgICAgICAgICAgIHByb2R1Y3Q6IGZ1bmN0aW9uIChwcm9kdWN0KSB7XG4gICAgICAgICAgICAgICAgdGhpcy50b3RhbENhcnQgPSBwcm9kdWN0LnByaWNlLnZhbHVlO1xuICAgICAgICAgICAgfSxcbiAgICAgICAgICAgICdmb3JtLnF1YWxpdHknOiBmdW5jdGlvbiAoKSB7XG4gICAgICAgICAgICAgICAgaWYgKHRoaXMucHJvZHVjdC5wcmljZSkge1xuICAgICAgICAgICAgICAgICAgICB0aGlzLmNhbGNUb3RhbFByaWNlKClcbiAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICB9LFxuICAgICAgICAgICAgdG90YWxDYXJ0OiBmdW5jdGlvbiAodG90YWwpIHtcbiAgICAgICAgICAgICAgICBjb25zdCBmb3JtYXR0ZXIgPSBuZXcgSW50bC5OdW1iZXJGb3JtYXQoJ3ZpLVZOJywge1xuICAgICAgICAgICAgICAgICAgICBzdHlsZTogJ2N1cnJlbmN5JyxcbiAgICAgICAgICAgICAgICAgICAgY3VycmVuY3k6ICdWTkQnLFxuICAgICAgICAgICAgICAgICAgICBtaW5pbXVtRnJhY3Rpb25EaWdpdHM6IDBcbiAgICAgICAgICAgICAgICB9KTtcbiAgICAgICAgICAgICAgICB0aGlzLm5hbWVCdXR0b25DYXJ0ID0gZm9ybWF0dGVyLmZvcm1hdCh0b3RhbCkgKyAnIFRow6ptIHbDoG8gZ2nhu48nO1xuICAgICAgICAgICAgfVxuICAgICAgICB9LFxuICAgICAgICBtZXRob2RzOiB7XG4gICAgICAgICAgICAuLi5tYXBBY3Rpb25zKCdtb2RhbCcsIFtcbiAgICAgICAgICAgICAgICAnc2V0Q2FydFN0YXR1cycsXG4gICAgICAgICAgICAgICAgJ3NldENhcnRQcm9kdWN0J1xuICAgICAgICAgICAgXSksXG4gICAgICAgICAgICAuLi5tYXBBY3Rpb25zKCdjYXJ0JywgW1xuICAgICAgICAgICAgICAgICdhZGRQcm9kdWN0VG9DYXJ0JyxcbiAgICAgICAgICAgIF0pLFxuICAgICAgICAgICAgYWRkVG9DYXJ0KCkge1xuICAgICAgICAgICAgICAgIHRoaXMuYWRkUHJvZHVjdFRvQ2FydCh7XG4gICAgICAgICAgICAgICAgICAgIGlkOiB0aGlzLnByb2R1Y3QuaWQsXG4gICAgICAgICAgICAgICAgICAgIHF1YW50aXR5OiB0aGlzLmZvcm0ucXVhbGl0eSxcbiAgICAgICAgICAgICAgICAgICAgdG9wcGluZzogdGhpcy5mb3JtLnRvcHBpbmcsXG4gICAgICAgICAgICAgICAgICAgIHNpemU6IHRoaXMuZm9ybS5zaXplLFxuICAgICAgICAgICAgICAgICAgICBub3RlOiB0aGlzLmZvcm0uZGVzY1xuICAgICAgICAgICAgICAgIH0pO1xuICAgICAgICAgICAgfSxcbiAgICAgICAgICAgIGNoYW5nZUNoZWNrYm94KGl0ZW0sIG9wdGlvbikge1xuICAgICAgICAgICAgICAgIGlmICh0aGlzLiRyZWZzWydjaGVja2JveF8nICsgaXRlbS5pZF1bMF0uaXNDaGVja2VkID09PSBmYWxzZSkge1xuICAgICAgICAgICAgICAgICAgICB2YXIgb3B0aW9uQSA9IHRoaXMuZm9ybS5vcHRpb25zW29wdGlvbi5pZF07XG4gICAgICAgICAgICAgICAgICAgIGlmIChvcHRpb25BKSB7XG4gICAgICAgICAgICAgICAgICAgICAgICBvcHRpb25BLml0ZW1zLnB1c2goaXRlbSk7XG4gICAgICAgICAgICAgICAgICAgICAgICB0aGlzLmZvcm0ub3B0aW9uc1tvcHRpb24uaWRdID0gb3B0aW9uQTtcbiAgICAgICAgICAgICAgICAgICAgfSBlbHNlIHtcbiAgICAgICAgICAgICAgICAgICAgICAgIHRoaXMuZm9ybS5vcHRpb25zW29wdGlvbi5pZF0gPSB7XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgaWRPcHRpb246IG9wdGlvbi5pZCxcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICBpdGVtczogW2l0ZW1dXG4gICAgICAgICAgICAgICAgICAgICAgICB9O1xuICAgICAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgfSBlbHNlIHtcbiAgICAgICAgICAgICAgICAgICAgdmFyIG9wdGlvbkEgPSB0aGlzLmZvcm0ub3B0aW9uc1tvcHRpb24uaWRdO1xuICAgICAgICAgICAgICAgICAgICBpZiAob3B0aW9uQSkge1xuICAgICAgICAgICAgICAgICAgICAgICAgY29uc3Qgb3B0aW9uSXRlbSA9IG9wdGlvbkEuaXRlbXMuZmluZChpID0+IGkuaWQgPT09IGl0ZW0uaWQpO1xuICAgICAgICAgICAgICAgICAgICAgICAgaWYgKG9wdGlvbkl0ZW0pIHtcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICBvcHRpb25BLml0ZW1zID0gb3B0aW9uQS5pdGVtcy5maWx0ZXIoZnVuY3Rpb24gKHZhbHVlKSB7XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHJldHVybiB2YWx1ZS5pZCAhPT0gb3B0aW9uSXRlbS5pZDtcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICB9KTtcbiAgICAgICAgICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICAgICAgICAgIHRoaXMuZm9ybS5vcHRpb25zW29wdGlvbi5pZF0gPSBvcHRpb25BO1xuICAgICAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgfVxuXG4gICAgICAgICAgICAgICAgdGhpcy5jYWxjVG90YWxQcmljZSgpO1xuICAgICAgICAgICAgfSxcbiAgICAgICAgICAgIGNhbGNUb3RhbFByaWNlKCkge1xuICAgICAgICAgICAgICAgIGxldCB0b3RhbE9wdGlvbiA9IDA7XG4gICAgICAgICAgICAgICAgdGhpcy5mb3JtLm9wdGlvbnMuZm9yRWFjaChmdW5jdGlvbiAob3B0aW9uKSB7XG4gICAgICAgICAgICAgICAgICAgIG9wdGlvbi5pdGVtcy5mb3JFYWNoKGZ1bmN0aW9uIChpdGVtKSB7XG4gICAgICAgICAgICAgICAgICAgICAgICB0b3RhbE9wdGlvbiArPSBpdGVtLnByaWNlLnZhbHVlO1xuICAgICAgICAgICAgICAgICAgICB9KVxuICAgICAgICAgICAgICAgIH0pO1xuICAgICAgICAgICAgICAgIHRoaXMudG90YWxDYXJ0ID0gKHRoaXMucHJvZHVjdC5wcmljZS52YWx1ZSArIHRvdGFsT3B0aW9uKSAqIHRoaXMuZm9ybS5xdWFsaXR5O1xuICAgICAgICAgICAgfSxcbiAgICAgICAgfSxcbiAgICB9XG48L3NjcmlwdD5cblxuPHN0eWxlIHNjb3BlZD5cblxuPC9zdHlsZT4iXSwic291cmNlUm9vdCI6IiJ9