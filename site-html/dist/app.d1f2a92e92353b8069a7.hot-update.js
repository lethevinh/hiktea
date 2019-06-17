webpackHotUpdate("app",{

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./src/script/components/shortcode/product.vue?vue&type=template&id=97c3e1ea&":
/*!******************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib??vue-loader-options!./src/script/components/shortcode/product.vue?vue&type=template&id=97c3e1ea& ***!
  \******************************************************************************************************************************************************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "render", function() { return render; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return staticRenderFns; });
var render = function() {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _c("div", { staticClass: "product_content" }, [
    _c(
      "ul",
      {
        staticClass:
          "nav nav-tabs justify-content-center animation animated fadeInUp",
        staticStyle: { "animation-delay": "0.04s", opacity: "1" },
        attrs: {
          "data-animation": "fadeInUp",
          "data-animation-delay": "0.04s",
          role: "tablist"
        }
      },
      _vm._l(_vm.posts, function(post, index) {
        return _c("li", { staticClass: "nav-item" }, [
          _c(
            "a",
            {
              class: index == 0 ? "nav-link  active" : "nav-link ",
              attrs: {
                id: "tab" + post.id,
                "data-toggle": "tab",
                href: "#tab-" + post.id,
                role: "tab",
                "aria-controls": "tab-" + post.id,
                "aria-selected": index == 0
              }
            },
            [
              _c("span", { class: "pr_icon" + post.id }),
              _vm._v(_vm._s(post.name) + "\n            ")
            ]
          )
        ])
      }),
      0
    ),
    _vm._v(" "),
    _c("div", { staticClass: "small_divider clearfix" }),
    _vm._v(" "),
    _c(
      "div",
      { staticClass: "tab-content" },
      _vm._l(_vm.posts, function(post, index) {
        return _c(
          "div",
          {
            class: index == 0 ? "tab-pane fade active show" : "tab-pane fade ",
            attrs: {
              id: "tab-" + post.id,
              role: "tabpanel",
              "aria-labelledby": "tab" + post.id
            }
          },
          [
            _c(
              "div",
              {
                staticClass: "row animation animated fadeInUp",
                staticStyle: { "animation-delay": "0.05s", opacity: "1" },
                attrs: {
                  "data-animation": "fadeInUp",
                  "data-animation-delay": "0.05s"
                }
              },
              _vm._l(post.products, function(product, index) {
                return _c("productitem", {
                  key: index,
                  attrs: { product: product }
                })
              }),
              1
            )
          ]
        )
      }),
      0
    )
  ])
}
var staticRenderFns = []
render._withStripped = true



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
/* harmony import */ var _script_components_item_cart_vue__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! ./script/components/item/cart.vue */ "./src/script/components/item/cart.vue");
/* harmony import */ var _script_components_item_dialog_vue__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! ./script/components/item/dialog.vue */ "./src/script/components/item/dialog.vue");
/* harmony import */ var _script_components_page_menu_vue__WEBPACK_IMPORTED_MODULE_7__ = __webpack_require__(/*! ./script/components/page/menu.vue */ "./src/script/components/page/menu.vue");
/* harmony import */ var _script_components_page_post_vue__WEBPACK_IMPORTED_MODULE_8__ = __webpack_require__(/*! ./script/components/page/post.vue */ "./src/script/components/page/post.vue");
/* harmony import */ var _script_components_page_branch_vue__WEBPACK_IMPORTED_MODULE_9__ = __webpack_require__(/*! ./script/components/page/branch.vue */ "./src/script/components/page/branch.vue");
/* harmony import */ var _script_components_page_gallery_vue__WEBPACK_IMPORTED_MODULE_10__ = __webpack_require__(/*! ./script/components/page/gallery.vue */ "./src/script/components/page/gallery.vue");
/* harmony import */ var _script_components_page_booking_vue__WEBPACK_IMPORTED_MODULE_11__ = __webpack_require__(/*! ./script/components/page/booking.vue */ "./src/script/components/page/booking.vue");
/* harmony import */ var owl_carousel_dist_assets_owl_carousel_css__WEBPACK_IMPORTED_MODULE_12__ = __webpack_require__(/*! owl.carousel/dist/assets/owl.carousel.css */ "./node_modules/owl.carousel/dist/assets/owl.carousel.css");
/* harmony import */ var owl_carousel_dist_assets_owl_carousel_css__WEBPACK_IMPORTED_MODULE_12___default = /*#__PURE__*/__webpack_require__.n(owl_carousel_dist_assets_owl_carousel_css__WEBPACK_IMPORTED_MODULE_12__);
/* harmony import */ var owl_carousel__WEBPACK_IMPORTED_MODULE_13__ = __webpack_require__(/*! owl.carousel */ "./node_modules/owl.carousel/dist/owl.carousel.js");
/* harmony import */ var owl_carousel__WEBPACK_IMPORTED_MODULE_13___default = /*#__PURE__*/__webpack_require__.n(owl_carousel__WEBPACK_IMPORTED_MODULE_13__);
__webpack_require__(/*! ./style/site.css */ "./src/style/site.css");

__webpack_require__(/*! ./mock/index */ "./src/mock/index.ts");
//shortcode






//page









var page = new _script_page__WEBPACK_IMPORTED_MODULE_0__["Page"]({
    components: { branch: _script_components_shortcode_branch_vue__WEBPACK_IMPORTED_MODULE_1__["default"], post: _script_components_shortcode_post_vue__WEBPACK_IMPORTED_MODULE_2__["default"], product: _script_components_shortcode_product_vue__WEBPACK_IMPORTED_MODULE_3__["default"], slide: _script_components_shortcode_slide_vue__WEBPACK_IMPORTED_MODULE_4__["default"], cart: _script_components_item_cart_vue__WEBPACK_IMPORTED_MODULE_5__["default"], modal: _script_components_item_dialog_vue__WEBPACK_IMPORTED_MODULE_6__["default"] },
    pages: { pagemenu: _script_components_page_menu_vue__WEBPACK_IMPORTED_MODULE_7__["default"], pageblog: _script_components_page_post_vue__WEBPACK_IMPORTED_MODULE_8__["default"], pagekhuyenmai: _script_components_page_post_vue__WEBPACK_IMPORTED_MODULE_8__["default"], pagetuyendung: _script_components_page_post_vue__WEBPACK_IMPORTED_MODULE_8__["default"], pagebranch: _script_components_page_branch_vue__WEBPACK_IMPORTED_MODULE_9__["default"], pagegallery: _script_components_page_gallery_vue__WEBPACK_IMPORTED_MODULE_10__["default"], pagebooking: _script_components_page_booking_vue__WEBPACK_IMPORTED_MODULE_11__["default"] }
});
window.page = page;
$(document).ready(function () {
    page.init();
});

/* WEBPACK VAR INJECTION */}.call(this, __webpack_require__(/*! jquery */ "./node_modules/jquery/dist/jquery.js")))

/***/ })

})
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9zcmMvc2NyaXB0L2NvbXBvbmVudHMvc2hvcnRjb2RlL3Byb2R1Y3QudnVlPzQ5MTYiLCJ3ZWJwYWNrOi8vLy4vc3JjL21haW4udHMiXSwibmFtZXMiOltdLCJtYXBwaW5ncyI6Ijs7Ozs7Ozs7OztBQUFBO0FBQUE7QUFBQTtBQUFBO0FBQ0E7QUFDQTtBQUNBO0FBQ0Esb0JBQW9CLGlDQUFpQztBQUNyRDtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0Esc0JBQXNCLDJDQUEyQztBQUNqRTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0EsT0FBTztBQUNQO0FBQ0EseUJBQXlCLDBCQUEwQjtBQUNuRDtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQSxhQUFhO0FBQ2I7QUFDQSwwQkFBMEIsNkJBQTZCO0FBQ3ZEO0FBQ0E7QUFDQTtBQUNBO0FBQ0EsT0FBTztBQUNQO0FBQ0E7QUFDQTtBQUNBLGVBQWUsd0NBQXdDO0FBQ3ZEO0FBQ0E7QUFDQTtBQUNBLE9BQU8sNkJBQTZCO0FBQ3BDO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0EsV0FBVztBQUNYO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQSw4QkFBOEIsMkNBQTJDO0FBQ3pFO0FBQ0E7QUFDQTtBQUNBO0FBQ0EsZUFBZTtBQUNmO0FBQ0E7QUFDQTtBQUNBLDBCQUEwQjtBQUMxQixpQkFBaUI7QUFDakIsZUFBZTtBQUNmO0FBQ0E7QUFDQTtBQUNBO0FBQ0EsT0FBTztBQUNQO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTs7Ozs7Ozs7Ozs7Ozs7QUNyRkE7QUFBQTtBQUFBO0FBQUE7QUFBQTtBQUFBO0FBQUE7QUFBQTtBQUFBO0FBQUE7QUFBQTtBQUFBO0FBQUE7QUFBQTtBQUFBO0FBQUE7QUFBQTtBQUFBLG1CQUFPLENBQUMsOENBQWtCLENBQUMsQ0FBQztBQUNTO0FBQ3JDLG1CQUFPLENBQUMseUNBQWMsQ0FBQyxDQUFDO0FBRXhCLFdBQVc7QUFDbUQ7QUFDSjtBQUNNO0FBQ0o7QUFDUDtBQUNHO0FBRXhELE1BQU07QUFDbUQ7QUFDQTtBQUNLO0FBQ0E7QUFDRDtBQUNFO0FBQ0E7QUFHWjtBQUM3QjtBQUV0QixJQUFJLElBQUksR0FBRyxJQUFJLGlEQUFJLENBQUM7SUFDaEIsVUFBVSxFQUFFLEVBQUUsTUFBTSxtRkFBRSxJQUFJLGlGQUFFLE9BQU8sb0ZBQUUsS0FBSyxrRkFBRSxJQUFJLDRFQUFFLEtBQUssOEVBQUU7SUFDekQsS0FBSyxFQUFFLEVBQUUsUUFBUSw0RUFBRSxRQUFRLDRFQUFFLGFBQWEsNEVBQUUsYUFBYSw0RUFBRSxVQUFVLDhFQUFFLFdBQVcsZ0ZBQUUsV0FBVyxnRkFBRTtDQUNwRyxDQUFDLENBQUM7QUFHSCxNQUFNLENBQUMsSUFBSSxHQUFHLElBQUksQ0FBQztBQUVuQixDQUFDLENBQUMsUUFBUSxDQUFDLENBQUMsS0FBSyxDQUFDO0lBQ2QsSUFBSSxDQUFDLElBQUksRUFBRSxDQUFDO0FBQ2hCLENBQUMsQ0FBQyxDQUFDIiwiZmlsZSI6ImFwcC5kMWYyYTkyZTkyMzUzYjgwNjlhNy5ob3QtdXBkYXRlLmpzIiwic291cmNlc0NvbnRlbnQiOlsidmFyIHJlbmRlciA9IGZ1bmN0aW9uKCkge1xuICB2YXIgX3ZtID0gdGhpc1xuICB2YXIgX2ggPSBfdm0uJGNyZWF0ZUVsZW1lbnRcbiAgdmFyIF9jID0gX3ZtLl9zZWxmLl9jIHx8IF9oXG4gIHJldHVybiBfYyhcImRpdlwiLCB7IHN0YXRpY0NsYXNzOiBcInByb2R1Y3RfY29udGVudFwiIH0sIFtcbiAgICBfYyhcbiAgICAgIFwidWxcIixcbiAgICAgIHtcbiAgICAgICAgc3RhdGljQ2xhc3M6XG4gICAgICAgICAgXCJuYXYgbmF2LXRhYnMganVzdGlmeS1jb250ZW50LWNlbnRlciBhbmltYXRpb24gYW5pbWF0ZWQgZmFkZUluVXBcIixcbiAgICAgICAgc3RhdGljU3R5bGU6IHsgXCJhbmltYXRpb24tZGVsYXlcIjogXCIwLjA0c1wiLCBvcGFjaXR5OiBcIjFcIiB9LFxuICAgICAgICBhdHRyczoge1xuICAgICAgICAgIFwiZGF0YS1hbmltYXRpb25cIjogXCJmYWRlSW5VcFwiLFxuICAgICAgICAgIFwiZGF0YS1hbmltYXRpb24tZGVsYXlcIjogXCIwLjA0c1wiLFxuICAgICAgICAgIHJvbGU6IFwidGFibGlzdFwiXG4gICAgICAgIH1cbiAgICAgIH0sXG4gICAgICBfdm0uX2woX3ZtLnBvc3RzLCBmdW5jdGlvbihwb3N0LCBpbmRleCkge1xuICAgICAgICByZXR1cm4gX2MoXCJsaVwiLCB7IHN0YXRpY0NsYXNzOiBcIm5hdi1pdGVtXCIgfSwgW1xuICAgICAgICAgIF9jKFxuICAgICAgICAgICAgXCJhXCIsXG4gICAgICAgICAgICB7XG4gICAgICAgICAgICAgIGNsYXNzOiBpbmRleCA9PSAwID8gXCJuYXYtbGluayAgYWN0aXZlXCIgOiBcIm5hdi1saW5rIFwiLFxuICAgICAgICAgICAgICBhdHRyczoge1xuICAgICAgICAgICAgICAgIGlkOiBcInRhYlwiICsgcG9zdC5pZCxcbiAgICAgICAgICAgICAgICBcImRhdGEtdG9nZ2xlXCI6IFwidGFiXCIsXG4gICAgICAgICAgICAgICAgaHJlZjogXCIjdGFiLVwiICsgcG9zdC5pZCxcbiAgICAgICAgICAgICAgICByb2xlOiBcInRhYlwiLFxuICAgICAgICAgICAgICAgIFwiYXJpYS1jb250cm9sc1wiOiBcInRhYi1cIiArIHBvc3QuaWQsXG4gICAgICAgICAgICAgICAgXCJhcmlhLXNlbGVjdGVkXCI6IGluZGV4ID09IDBcbiAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgfSxcbiAgICAgICAgICAgIFtcbiAgICAgICAgICAgICAgX2MoXCJzcGFuXCIsIHsgY2xhc3M6IFwicHJfaWNvblwiICsgcG9zdC5pZCB9KSxcbiAgICAgICAgICAgICAgX3ZtLl92KF92bS5fcyhwb3N0Lm5hbWUpICsgXCJcXG4gICAgICAgICAgICBcIilcbiAgICAgICAgICAgIF1cbiAgICAgICAgICApXG4gICAgICAgIF0pXG4gICAgICB9KSxcbiAgICAgIDBcbiAgICApLFxuICAgIF92bS5fdihcIiBcIiksXG4gICAgX2MoXCJkaXZcIiwgeyBzdGF0aWNDbGFzczogXCJzbWFsbF9kaXZpZGVyIGNsZWFyZml4XCIgfSksXG4gICAgX3ZtLl92KFwiIFwiKSxcbiAgICBfYyhcbiAgICAgIFwiZGl2XCIsXG4gICAgICB7IHN0YXRpY0NsYXNzOiBcInRhYi1jb250ZW50XCIgfSxcbiAgICAgIF92bS5fbChfdm0ucG9zdHMsIGZ1bmN0aW9uKHBvc3QsIGluZGV4KSB7XG4gICAgICAgIHJldHVybiBfYyhcbiAgICAgICAgICBcImRpdlwiLFxuICAgICAgICAgIHtcbiAgICAgICAgICAgIGNsYXNzOiBpbmRleCA9PSAwID8gXCJ0YWItcGFuZSBmYWRlIGFjdGl2ZSBzaG93XCIgOiBcInRhYi1wYW5lIGZhZGUgXCIsXG4gICAgICAgICAgICBhdHRyczoge1xuICAgICAgICAgICAgICBpZDogXCJ0YWItXCIgKyBwb3N0LmlkLFxuICAgICAgICAgICAgICByb2xlOiBcInRhYnBhbmVsXCIsXG4gICAgICAgICAgICAgIFwiYXJpYS1sYWJlbGxlZGJ5XCI6IFwidGFiXCIgKyBwb3N0LmlkXG4gICAgICAgICAgICB9XG4gICAgICAgICAgfSxcbiAgICAgICAgICBbXG4gICAgICAgICAgICBfYyhcbiAgICAgICAgICAgICAgXCJkaXZcIixcbiAgICAgICAgICAgICAge1xuICAgICAgICAgICAgICAgIHN0YXRpY0NsYXNzOiBcInJvdyBhbmltYXRpb24gYW5pbWF0ZWQgZmFkZUluVXBcIixcbiAgICAgICAgICAgICAgICBzdGF0aWNTdHlsZTogeyBcImFuaW1hdGlvbi1kZWxheVwiOiBcIjAuMDVzXCIsIG9wYWNpdHk6IFwiMVwiIH0sXG4gICAgICAgICAgICAgICAgYXR0cnM6IHtcbiAgICAgICAgICAgICAgICAgIFwiZGF0YS1hbmltYXRpb25cIjogXCJmYWRlSW5VcFwiLFxuICAgICAgICAgICAgICAgICAgXCJkYXRhLWFuaW1hdGlvbi1kZWxheVwiOiBcIjAuMDVzXCJcbiAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgIH0sXG4gICAgICAgICAgICAgIF92bS5fbChwb3N0LnByb2R1Y3RzLCBmdW5jdGlvbihwcm9kdWN0LCBpbmRleCkge1xuICAgICAgICAgICAgICAgIHJldHVybiBfYyhcInByb2R1Y3RpdGVtXCIsIHtcbiAgICAgICAgICAgICAgICAgIGtleTogaW5kZXgsXG4gICAgICAgICAgICAgICAgICBhdHRyczogeyBwcm9kdWN0OiBwcm9kdWN0IH1cbiAgICAgICAgICAgICAgICB9KVxuICAgICAgICAgICAgICB9KSxcbiAgICAgICAgICAgICAgMVxuICAgICAgICAgICAgKVxuICAgICAgICAgIF1cbiAgICAgICAgKVxuICAgICAgfSksXG4gICAgICAwXG4gICAgKVxuICBdKVxufVxudmFyIHN0YXRpY1JlbmRlckZucyA9IFtdXG5yZW5kZXIuX3dpdGhTdHJpcHBlZCA9IHRydWVcblxuZXhwb3J0IHsgcmVuZGVyLCBzdGF0aWNSZW5kZXJGbnMgfSIsInJlcXVpcmUoJy4vc3R5bGUvc2l0ZS5jc3MnKTtcbmltcG9ydCB7IFBhZ2UgfSBmcm9tICcuL3NjcmlwdC9wYWdlJztcbnJlcXVpcmUoJy4vbW9jay9pbmRleCcpO1xuXG4vL3Nob3J0Y29kZVxuaW1wb3J0IGJyYW5jaCBmcm9tICcuL3NjcmlwdC9jb21wb25lbnRzL3Nob3J0Y29kZS9icmFuY2gudnVlJztcbmltcG9ydCBwb3N0IGZyb20gJy4vc2NyaXB0L2NvbXBvbmVudHMvc2hvcnRjb2RlL3Bvc3QudnVlJztcbmltcG9ydCBwcm9kdWN0IGZyb20gJy4vc2NyaXB0L2NvbXBvbmVudHMvc2hvcnRjb2RlL3Byb2R1Y3QudnVlJztcbmltcG9ydCBzbGlkZSBmcm9tICcuL3NjcmlwdC9jb21wb25lbnRzL3Nob3J0Y29kZS9zbGlkZS52dWUnO1xuaW1wb3J0IGNhcnQgZnJvbSAnLi9zY3JpcHQvY29tcG9uZW50cy9pdGVtL2NhcnQudnVlJztcbmltcG9ydCBtb2RhbCBmcm9tICcuL3NjcmlwdC9jb21wb25lbnRzL2l0ZW0vZGlhbG9nLnZ1ZSc7XG5cbi8vcGFnZVxuaW1wb3J0IHBhZ2VtZW51IGZyb20gJy4vc2NyaXB0L2NvbXBvbmVudHMvcGFnZS9tZW51LnZ1ZSc7XG5pbXBvcnQgcGFnZWJsb2cgZnJvbSAnLi9zY3JpcHQvY29tcG9uZW50cy9wYWdlL3Bvc3QudnVlJztcbmltcG9ydCBwYWdla2h1eWVubWFpIGZyb20gJy4vc2NyaXB0L2NvbXBvbmVudHMvcGFnZS9wb3N0LnZ1ZSc7XG5pbXBvcnQgcGFnZXR1eWVuZHVuZyBmcm9tICcuL3NjcmlwdC9jb21wb25lbnRzL3BhZ2UvcG9zdC52dWUnO1xuaW1wb3J0IHBhZ2VicmFuY2ggZnJvbSAnLi9zY3JpcHQvY29tcG9uZW50cy9wYWdlL2JyYW5jaC52dWUnO1xuaW1wb3J0IHBhZ2VnYWxsZXJ5IGZyb20gJy4vc2NyaXB0L2NvbXBvbmVudHMvcGFnZS9nYWxsZXJ5LnZ1ZSc7XG5pbXBvcnQgcGFnZWJvb2tpbmcgZnJvbSAnLi9zY3JpcHQvY29tcG9uZW50cy9wYWdlL2Jvb2tpbmcudnVlJztcblxuXG5pbXBvcnQgJ293bC5jYXJvdXNlbC9kaXN0L2Fzc2V0cy9vd2wuY2Fyb3VzZWwuY3NzJztcbmltcG9ydCAnb3dsLmNhcm91c2VsJztcblxudmFyIHBhZ2UgPSBuZXcgUGFnZSh7XG4gICAgY29tcG9uZW50czogeyBicmFuY2gsIHBvc3QsIHByb2R1Y3QsIHNsaWRlLCBjYXJ0LCBtb2RhbCB9LFxuICAgIHBhZ2VzOiB7IHBhZ2VtZW51LCBwYWdlYmxvZywgcGFnZWtodXllbm1haSwgcGFnZXR1eWVuZHVuZywgcGFnZWJyYW5jaCwgcGFnZWdhbGxlcnksIHBhZ2Vib29raW5nIH1cbn0pO1xuXG5kZWNsYXJlIHZhciB3aW5kb3c6IGFueTtcbndpbmRvdy5wYWdlID0gcGFnZTtcblxuJChkb2N1bWVudCkucmVhZHkoZnVuY3Rpb24oKSB7XG4gICAgcGFnZS5pbml0KCk7XG59KTsiXSwic291cmNlUm9vdCI6IiJ9