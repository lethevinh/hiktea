webpackHotUpdate("app",{

/***/ "./node_modules/vue-loader/lib/index.js?!./src/script/components/page/branch.vue?vue&type=script&lang=js&":
/*!**************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib??vue-loader-options!./src/script/components/page/branch.vue?vue&type=script&lang=js& ***!
  \**************************************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var axios__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! axios */ "./node_modules/axios/index.js");
/* harmony import */ var axios__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(axios__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var jquery__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! jquery */ "./node_modules/jquery/dist/jquery.js");
/* harmony import */ var jquery__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(jquery__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var _item_product_page_vue__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../item/product-page.vue */ "./src/script/components/item/product-page.vue");
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
    name: 'pagemenu',
    components: { productitem: _item_product_page_vue__WEBPACK_IMPORTED_MODULE_2__["default"] },
    data: function() {
        return {
            posts: [],
            about: {
                infor: {}
            }
        };
    },
    mounted() {
        axios__WEBPACK_IMPORTED_MODULE_0___default.a
            .get('api/db/branch')
            .then(response => {
                this.posts = response.data.list;
            });
        axios__WEBPACK_IMPORTED_MODULE_0___default.a
            .get('api/db/about')
            .then(response => {
                this.about = response.data.data;
            });
    },
    updated() {
    }
});


/***/ }),

/***/ "./src/main.ts":
/*!*********************!*\
  !*** ./src/main.ts ***!
  \*********************/
/*! no exports provided */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* WEBPACK VAR INJECTION */(function($) {/* harmony import */ var _script_page__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./script/page */ "./src/script/page.ts");
/* harmony import */ var _script_components_shortcode_branch_vue__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./script/components/shortcode/branch.vue */ "./src/script/components/shortcode/branch.vue");
/* harmony import */ var _script_components_shortcode_post_vue__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./script/components/shortcode/post.vue */ "./src/script/components/shortcode/post.vue");
/* harmony import */ var _script_components_shortcode_product_vue__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ./script/components/shortcode/product.vue */ "./src/script/components/shortcode/product.vue");
/* harmony import */ var _script_components_shortcode_slide_vue__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ./script/components/shortcode/slide.vue */ "./src/script/components/shortcode/slide.vue");
/* harmony import */ var _script_components_page_menu_vue__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! ./script/components/page/menu.vue */ "./src/script/components/page/menu.vue");
/* harmony import */ var _script_components_page_post_vue__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! ./script/components/page/post.vue */ "./src/script/components/page/post.vue");
/* harmony import */ var _script_components_page_branch_vue__WEBPACK_IMPORTED_MODULE_7__ = __webpack_require__(/*! ./script/components/page/branch.vue */ "./src/script/components/page/branch.vue");
/* harmony import */ var owl_carousel_dist_assets_owl_carousel_css__WEBPACK_IMPORTED_MODULE_8__ = __webpack_require__(/*! owl.carousel/dist/assets/owl.carousel.css */ "./node_modules/owl.carousel/dist/assets/owl.carousel.css");
/* harmony import */ var owl_carousel_dist_assets_owl_carousel_css__WEBPACK_IMPORTED_MODULE_8___default = /*#__PURE__*/__webpack_require__.n(owl_carousel_dist_assets_owl_carousel_css__WEBPACK_IMPORTED_MODULE_8__);
/* harmony import */ var owl_carousel__WEBPACK_IMPORTED_MODULE_9__ = __webpack_require__(/*! owl.carousel */ "./node_modules/owl.carousel/dist/owl.carousel.js");
/* harmony import */ var owl_carousel__WEBPACK_IMPORTED_MODULE_9___default = /*#__PURE__*/__webpack_require__.n(owl_carousel__WEBPACK_IMPORTED_MODULE_9__);
__webpack_require__(/*! ./style/site.css */ "./src/style/site.css");

__webpack_require__(/*! ./mock/index */ "./src/mock/index.ts");
//shortcode




//page







var page = new _script_page__WEBPACK_IMPORTED_MODULE_0__["Page"]({
    conponents: { branch: _script_components_shortcode_branch_vue__WEBPACK_IMPORTED_MODULE_1__["default"], post: _script_components_shortcode_post_vue__WEBPACK_IMPORTED_MODULE_2__["default"], product: _script_components_shortcode_product_vue__WEBPACK_IMPORTED_MODULE_3__["default"], slide: _script_components_shortcode_slide_vue__WEBPACK_IMPORTED_MODULE_4__["default"] },
    pages: { pagemenu: _script_components_page_menu_vue__WEBPACK_IMPORTED_MODULE_5__["default"], pageblog: _script_components_page_post_vue__WEBPACK_IMPORTED_MODULE_6__["default"], pagekhuyenmai: _script_components_page_post_vue__WEBPACK_IMPORTED_MODULE_6__["default"], pagetuyendung: _script_components_page_post_vue__WEBPACK_IMPORTED_MODULE_6__["default"], pagecuahang: _script_components_page_branch_vue__WEBPACK_IMPORTED_MODULE_7__["default"] }
});
$(document).ready(function () {
    page.init().run();
});

/* WEBPACK VAR INJECTION */}.call(this, __webpack_require__(/*! jquery */ "./node_modules/jquery/dist/jquery.js")))

/***/ })

})
//# sourceMappingURL=app.9f5cf27902b33fda777b.hot-update.js.map