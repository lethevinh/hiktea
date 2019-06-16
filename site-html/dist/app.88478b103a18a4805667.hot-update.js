webpackHotUpdate("app",{

/***/ "./src/script/store/index.ts":
/*!***********************************!*\
  !*** ./src/script/store/index.ts ***!
  \***********************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var vue__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! vue */ "./node_modules/vue/dist/vue.esm.js");
/* harmony import */ var vuex__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! vuex */ "./node_modules/vuex/dist/vuex.esm.js");
/* harmony import */ var _modules_cart__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./modules/cart */ "./src/script/store/modules/cart.ts");
/* harmony import */ var _modules_product__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ./modules/product */ "./src/script/store/modules/product.ts");
/* harmony import */ var _modules_modal__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ./modules/modal */ "./src/script/store/modules/modal.ts");





vue__WEBPACK_IMPORTED_MODULE_0__["default"].use(vuex__WEBPACK_IMPORTED_MODULE_1__["default"]);
var debug = "development" !== 'production';
/* harmony default export */ __webpack_exports__["default"] = (new vuex__WEBPACK_IMPORTED_MODULE_1__["default"].Store({
    modules: {
        cart: _modules_cart__WEBPACK_IMPORTED_MODULE_2__["default"],
        products: _modules_product__WEBPACK_IMPORTED_MODULE_3__["default"],
        modal: _modules_modal__WEBPACK_IMPORTED_MODULE_4__["default"]
    },
    strict: debug,
}));


/***/ }),

/***/ "./src/script/store/modules/cart.ts":
/*!******************************************!*\
  !*** ./src/script/store/modules/cart.ts ***!
  \******************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _api_shop__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../../api/shop */ "./src/script/api/shop.ts");
/* harmony import */ var element_ui__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! element-ui */ "./node_modules/element-ui/lib/element-ui.common.js");
/* harmony import */ var element_ui__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(element_ui__WEBPACK_IMPORTED_MODULE_1__);


// initial state
// shape: [{ id, quantity }]
var state = {
    items: [],
    checkoutStatus: null
};
// getters
var getters = {
    cartProducts: function (state, getters, rootState) {
        var products = [];
        state.items.map(function (_a) {
            var id = _a.id, quantity = _a.quantity;
            if (rootState.products) {
                var product_1 = rootState.products.all.find(function (product) { return product.id === id; });
                if (product_1) {
                    products.push({
                        id: product_1.id,
                        title: product_1.title,
                        price: product_1.price,
                        quantity: quantity
                    });
                }
            }
        });
        return products;
    },
    cartTotalPrice: function (state, getters) {
        return getters.cartProducts.reduce(function (total, product) {
            return total + product.price * product.quantity;
        }, 0);
    },
    cartTotal: function (state, getters) {
        return getters.cartProducts.length;
    }
};
// actions
var actions = {
    checkout: function (_a, products) {
        var commit = _a.commit, state = _a.state;
        var savedCartItems = state.items.slice();
        commit('setCheckoutStatus', null);
        // empty cart
        commit('setCartItems', { items: [] });
        _api_shop__WEBPACK_IMPORTED_MODULE_0__["default"].buyProducts(products, function () { return commit('setCheckoutStatus', 'successful'); }, function () {
            commit('setCheckoutStatus', 'failed');
            // rollback to the cart saved before sending the request
            commit('setCartItems', { items: savedCartItems });
        });
    },
    addProductToCart: function (_a, product) {
        var state = _a.state, commit = _a.commit, rootState = _a.rootState;
        commit('setCheckoutStatus', null);
        var productReady = rootState.products.all.find(function (item) { return item.id === product.id; });
        if (productReady) {
            // if (product.inventory > 0) {
            var cartItem = state.items.find(function (item) { return item.id === product.id; });
            if (!cartItem) {
                commit('pushProductToCart', { id: product.id });
            }
            else {
                commit('incrementItemQuantity', cartItem);
            }
            Object(element_ui__WEBPACK_IMPORTED_MODULE_1__["Message"])({
                message: 'Congrats, this is a success message.',
                type: 'success'
            });
        }
        else {
            Object(element_ui__WEBPACK_IMPORTED_MODULE_1__["Message"])({
                message: 'Congrats, this is a success message.',
                type: 'warning'
            });
        }
        commit('modal/cartStatus', false, { root: true });
        // remove 1 item from stock
        // commit('product/decrementProductInventory', { id: product.id }, { root: true })
        // }
    },
    removeProductToCart: function (_a, product) {
        var state = _a.state, commit = _a.commit, rootState = _a.rootState;
        var productReady = rootState.products.all.find(function (item) { return item.id === product.id; });
        if (productReady) {
            commit('pullProductToCart', { id: product.id });
            Object(element_ui__WEBPACK_IMPORTED_MODULE_1__["Message"])({
                message: 'Remove, this is a success message.',
                type: 'success'
            });
        }
    }
};
// mutations
var mutations = {
    pushProductToCart: function (state, _a) {
        var id = _a.id;
        state.items.push({
            id: id,
            quantity: 1
        });
    },
    pullProductToCart: function (state, _a) {
        var id = _a.id;
        var cartItem = state.items.find(function (item) { return item.id === id; });
        if (cartItem) {
            state.items = state.items.filter(function (value) {
                return value.id !== cartItem.id;
            });
        }
    },
    incrementItemQuantity: function (state, _a) {
        var id = _a.id;
        var cartItem = state.items.find(function (item) { return item.id === id; });
        cartItem.quantity++;
    },
    setCartItems: function (state, _a) {
        var items = _a.items;
        state.items = items;
    },
    setCheckoutStatus: function (state, status) {
        state.checkoutStatus = status;
    }
};
/* harmony default export */ __webpack_exports__["default"] = ({
    namespaced: true,
    state: state,
    getters: getters,
    actions: actions,
    mutations: mutations
});


/***/ })

})
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9zcmMvc2NyaXB0L3N0b3JlL2luZGV4LnRzIiwid2VicGFjazovLy8uL3NyYy9zY3JpcHQvc3RvcmUvbW9kdWxlcy9jYXJ0LnRzIl0sIm5hbWVzIjpbXSwibWFwcGluZ3MiOiI7Ozs7Ozs7Ozs7QUFBQTtBQUFBO0FBQUE7QUFBQTtBQUFBO0FBQUE7QUFBcUI7QUFDRTtBQUNVO0FBQ087QUFDTDtBQUVuQywyQ0FBRyxDQUFDLEdBQUcsQ0FBQyw0Q0FBSSxDQUFDLENBQUM7QUFFZCxJQUFNLEtBQUssR0FBRyxhQUFvQixLQUFLLFlBQVksQ0FBQztBQUVyQyxtRUFBSSw0Q0FBSSxDQUFDLEtBQUssQ0FBQztJQUMxQixPQUFPLEVBQUU7UUFDTCxJQUFJO1FBQ0osUUFBUTtRQUNSLEtBQUs7S0FDUjtJQUNELE1BQU0sRUFBRSxLQUFLO0NBQ2hCLENBQUMsRUFBQzs7Ozs7Ozs7Ozs7OztBQ2pCSDtBQUFBO0FBQUE7QUFBQTtBQUFrQztBQUNDO0FBQ25DLGdCQUFnQjtBQUNoQiw0QkFBNEI7QUFDNUIsSUFBTSxLQUFLLEdBQUc7SUFDVixLQUFLLEVBQUUsRUFBRTtJQUNULGNBQWMsRUFBRSxJQUFJO0NBQ3ZCLENBQUM7QUFFRixVQUFVO0FBQ1YsSUFBTSxPQUFPLEdBQUc7SUFDWixZQUFZLEVBQUUsVUFBQyxLQUFLLEVBQUUsT0FBTyxFQUFFLFNBQVM7UUFDcEMsSUFBSSxRQUFRLEdBQUcsRUFBRSxDQUFDO1FBQ2xCLEtBQUssQ0FBQyxLQUFLLENBQUMsR0FBRyxDQUFDLFVBQUMsRUFBYztnQkFBYixVQUFFLEVBQUUsc0JBQVE7WUFDMUIsSUFBSSxTQUFTLENBQUMsUUFBUSxFQUFFO2dCQUNwQixJQUFNLFNBQU8sR0FBRyxTQUFTLENBQUMsUUFBUSxDQUFDLEdBQUcsQ0FBQyxJQUFJLENBQUMsaUJBQU8sSUFBSSxjQUFPLENBQUMsRUFBRSxLQUFLLEVBQUUsRUFBakIsQ0FBaUIsQ0FBQyxDQUFDO2dCQUMxRSxJQUFJLFNBQU8sRUFBRTtvQkFD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QzVCLElBQU0sUUFBUSxHQUFHLEtBQUssQ0FBQyxLQUFLLENBQUMsSUFBSSxDQUFDLGNBQUksSUFBSSxXQUFJLENBQUMsRUFBRSxLQUFLLEVBQUUsRUFBZCxDQUFjLENBQUM7UUFDekQsUUFBUSxDQUFDLFFBQVEsRUFBRTtJQUN2QixDQUFDO0lBRUQsWUFBWSxZQUFDLEtBQUssRUFBRSxFQUFPO1lBQU4sZ0JBQUs7UUFDdEIsS0FBSyxDQUFDLEtBQUssR0FBRyxLQUFLO0lBQ3ZCLENBQUM7SUFDRCxpQkFBaUIsWUFBQyxLQUFLLEVBQUUsTUFBTTtRQUMzQixLQUFLLENBQUMsY0FBYyxHQUFHLE1BQU07SUFDakMsQ0FBQztDQUNKLENBQUM7QUFFYTtJQUNYLFVBQVUsRUFBRSxJQUFJO0lBQ2hCLEtBQUs7SUFDTCxPQUFPO0lBQ1AsT0FBTztJQUNQLFNBQVM7Q0FDWiIsImZpbGUiOiJhcHAuODg0NzhiMTAzYTE4YTQ4MDU2NjcuaG90LXVwZGF0ZS5qcyIsInNvdXJjZXNDb250ZW50IjpbImltcG9ydCBWdWUgZnJvbSAndnVlJ1xuaW1wb3J0IFZ1ZXggZnJvbSAndnVleCdcbmltcG9ydCBjYXJ0IGZyb20gJy4vbW9kdWxlcy9jYXJ0J1xuaW1wb3J0IHByb2R1Y3RzIGZyb20gJy4vbW9kdWxlcy9wcm9kdWN0J1xuaW1wb3J0IG1vZGFsIGZyb20gJy4vbW9kdWxlcy9tb2RhbCdcblxuVnVlLnVzZShWdWV4KTtcblxuY29uc3QgZGVidWcgPSBwcm9jZXNzLmVudi5OT0RFX0VOViAhPT0gJ3Byb2R1Y3Rpb24nO1xuXG5leHBvcnQgZGVmYXVsdCBuZXcgVnVleC5TdG9yZSh7XG4gICAgbW9kdWxlczoge1xuICAgICAgICBjYXJ0LFxuICAgICAgICBwcm9kdWN0cyxcbiAgICAgICAgbW9kYWxcbiAgICB9LFxuICAgIHN0cmljdDogZGVidWcsXG59KTsiLCJpbXBvcnQgc2hvcCBmcm9tICcuLi8uLi9hcGkvc2hvcCc7XG5pbXBvcnQge01lc3NhZ2V9IGZyb20gJ2VsZW1lbnQtdWknO1xuLy8gaW5pdGlhbCBzdGF0ZVxuLy8gc2hhcGU6IFt7IGlkLCBxdWFudGl0eSB9XVxuY29uc3Qgc3RhdGUgPSB7XG4gICAgaXRlbXM6IFtdLFxuICAgIGNoZWNrb3V0U3RhdHVzOiBudWxsXG59O1xuXG4vLyBnZXR0ZXJzXG5jb25zdCBnZXR0ZXJzID0ge1xuICAgIGNhcnRQcm9kdWN0czogKHN0YXRlLCBnZXR0ZXJzLCByb290U3RhdGUpID0+IHtcbiAgICAgICAgdmFyIHByb2R1Y3RzID0gW107XG4gICAgICAgIHN0YXRlLml0ZW1zLm1hcCgoe2lkLCBxdWFudGl0eX0pID0+IHtcbiAgICAgICAgICAgIGlmIChyb290U3RhdGUucHJvZHVjdHMpIHtcbiAgICAgICAgICAgICAgICBjb25zdCBwcm9kdWN0ID0gcm9vdFN0YXRlLnByb2R1Y3RzLmFsbC5maW5kKHByb2R1Y3QgPT4gcHJvZHVjdC5pZCA9PT0gaWQpO1xuICAgICAgICAgICAgICAgIGlmIChwcm9kdWN0KSB7XG4gICAgICAgICAgICAgICAgICAgIHByb2R1Y3RzLnB1c2goe1xuICAgICAgICAgICAgICAgICAgICAgICAgaWQ6IHByb2R1Y3QuaWQsXG4gICAgICAgICAgICAgICAgICAgICAgICB0aXRsZTogcHJvZHVjdC50aXRsZSxcbiAgICAgICAgICAgICAgICAgICAgICAgIHByaWNlOiBwcm9kdWN0LnByaWNlLFxuICAgICAgICAgICAgICAgICAgICAgICAgcXVhbnRpdHlcbiAgICAgICAgICAgICAgICAgICAgfSk7XG4gICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgfVxuICAgICAgICB9KTtcbiAgICAgICAgcmV0dXJuIHByb2R1Y3RzO1xuICAgIH0sXG4gICAgY2FydFRvdGFsUHJpY2U6IChzdGF0ZSwgZ2V0dGVycykgPT4ge1xuICAgICAgICByZXR1cm4gZ2V0dGVycy5jYXJ0UHJvZHVjdHMucmVkdWNlKCh0b3RhbCwgcHJvZHVjdCkgPT4ge1xuICAgICAgICAgICAgcmV0dXJuIHRvdGFsICsgcHJvZHVjdC5wcmljZSAqIHByb2R1Y3QucXVhbnRpdHlcbiAgICAgICAgfSwgMClcbiAgICB9LFxuICAgIGNhcnRUb3RhbDogKHN0YXRlLCBnZXR0ZXJzKSA9PiB7XG4gICAgICAgIHJldHVybiBnZXR0ZXJzLmNhcnRQcm9kdWN0cy5sZW5ndGg7XG4gICAgfVxufTtcblxuLy8gYWN0aW9uc1xuY29uc3QgYWN0aW9ucyA9IHtcbiAgICBjaGVja291dCh7Y29tbWl0LCBzdGF0ZX0sIHByb2R1Y3RzKSB7XG4gICAgICAgIGNvbnN0IHNhdmVkQ2FydEl0ZW1zID0gWy4uLnN0YXRlLml0ZW1zXTtcbiAgICAgICAgY29tbWl0KCdzZXRDaGVja291dFN0YXR1cycsIG51bGwpO1xuICAgICAgICAvLyBlbXB0eSBjYXJ0XG4gICAgICAgIGNvbW1pdCgnc2V0Q2FydEl0ZW1zJywge2l0ZW1zOiBbXX0pXG4gICAgICAgIHNob3AuYnV5UHJvZHVjdHMoXG4gICAgICAgICAgICBwcm9kdWN0cyxcbiAgICAgICAgICAgICgpID0+IGNvbW1pdCgnc2V0Q2hlY2tvdXRTdGF0dXMnLCAnc3VjY2Vzc2Z1bCcpLFxuICAgICAgICAgICAgKCkgPT4ge1xuICAgICAgICAgICAgICAgIGNvbW1pdCgnc2V0Q2hlY2tvdXRTdGF0dXMnLCAnZmFpbGVkJylcbiAgICAgICAgICAgICAgICAvLyByb2xsYmFjayB0byB0aGUgY2FydCBzYXZlZCBiZWZvcmUgc2VuZGluZyB0aGUgcmVxdWVzdFxuICAgICAgICAgICAgICAgIGNvbW1pdCgnc2V0Q2FydEl0ZW1zJywge2l0ZW1zOiBzYXZlZENhcnRJdGVtc30pXG4gICAgICAgICAgICB9XG4gICAgICAgIClcbiAgICB9LFxuXG4gICAgYWRkUHJvZHVjdFRvQ2FydCh7c3RhdGUsIGNvbW1pdCwgcm9vdFN0YXRlfSwgcHJvZHVjdCkge1xuICAgICAgICBjb21taXQoJ3NldENoZWNrb3V0U3RhdHVzJywgbnVsbCk7XG4gICAgICAgIGNvbnN0IHByb2R1Y3RSZWFkeSA9IHJvb3RTdGF0ZS5wcm9kdWN0cy5hbGwuZmluZChpdGVtID0+IGl0ZW0uaWQgPT09IHByb2R1Y3QuaWQpO1xuICAgICAgICBpZiAocHJvZHVjdFJlYWR5KSB7XG4gICAgICAgICAgICAvLyBpZiAocHJvZHVjdC5pbnZlbnRvcnkgPiAwKSB7XG4gICAgICAgICAgICBjb25zdCBjYXJ0SXRlbSA9IHN0YXRlLml0ZW1zLmZpbmQoaXRlbSA9PiBpdGVtLmlkID09PSBwcm9kdWN0LmlkKTtcbiAgICAgICAgICAgIGlmICghY2FydEl0ZW0pIHtcbiAgICAgICAgICAgICAgICBjb21taXQoJ3B1c2hQcm9kdWN0VG9DYXJ0Jywge2lkOiBwcm9kdWN0LmlkfSlcbiAgICAgICAgICAgIH0gZWxzZSB7XG4gICAgICAgICAgICAgICAgY29tbWl0KCdpbmNyZW1lbnRJdGVtUXVhbnRpdHknLCBjYXJ0SXRlbSlcbiAgICAgICAgICAgIH1cbiAgICAgICAgICAgIE1lc3NhZ2Uoe1xuICAgICAgICAgICAgICAgIG1lc3NhZ2U6ICdDb25ncmF0cywgdGhpcyBpcyBhIHN1Y2Nlc3MgbWVzc2FnZS4nLFxuICAgICAgICAgICAgICAgIHR5cGU6ICdzdWNjZXNzJ1xuICAgICAgICAgICAgfSk7XG4gICAgICAgIH0gZWxzZSB7XG4gICAgICAgICAgICBNZXNzYWdlKHtcbiAgICAgICAgICAgICAgICBtZXNzYWdlOiAnQ29uZ3JhdHMsIHRoaXMgaXMgYSBzdWNjZXNzIG1lc3NhZ2UuJyxcbiAgICAgICAgICAgICAgICB0eXBlOiAnd2FybmluZydcbiAgICAgICAgICAgIH0pO1xuICAgICAgICB9XG5cbiAgICAgICAgY29tbWl0KCdtb2RhbC9jYXJ0U3RhdHVzJywgZmFsc2UsIHtyb290OiB0cnVlfSk7XG5cbiAgICAgICAgLy8gcmVtb3ZlIDEgaXRlbSBmcm9tIHN0b2NrXG4gICAgICAgIC8vIGNvbW1pdCgncHJvZHVjdC9kZWNyZW1lbnRQcm9kdWN0SW52ZW50b3J5JywgeyBpZDogcHJvZHVjdC5pZCB9LCB7IHJvb3Q6IHRydWUgfSlcbiAgICAgICAgLy8gfVxuICAgIH0sXG4gICAgcmVtb3ZlUHJvZHVjdFRvQ2FydCh7c3RhdGUsIGNvbW1pdCwgcm9vdFN0YXRlfSwgcHJvZHVjdCkge1xuICAgICAgICBjb25zdCBwcm9kdWN0UmVhZHkgPSByb290U3RhdGUucHJvZHVjdHMuYWxsLmZpbmQoaXRlbSA9PiBpdGVtLmlkID09PSBwcm9kdWN0LmlkKTtcbiAgICAgICAgaWYgKHByb2R1Y3RSZWFkeSl7XG4gICAgICAgICAgICBjb21taXQoJ3B1bGxQcm9kdWN0VG9DYXJ0Jywge2lkOiBwcm9kdWN0LmlkfSk7XG4gICAgICAgICAgICBNZXNzYWdlKHtcbiAgICAgICAgICAgICAgICBtZXNzYWdlOiAnUmVtb3ZlLCB0aGlzIGlzIGEgc3VjY2VzcyBtZXNzYWdlLicsXG4gICAgICAgICAgICAgICAgdHlwZTogJ3N1Y2Nlc3MnXG4gICAgICAgICAgICB9KTtcbiAgICAgICAgfVxuICAgIH1cbn07XG5cbi8vIG11dGF0aW9uc1xuY29uc3QgbXV0YXRpb25zID0ge1xuICAgIHB1c2hQcm9kdWN0VG9DYXJ0KHN0YXRlLCB7aWR9KSB7XG4gICAgICAgIHN0YXRlLml0ZW1zLnB1c2goe1xuICAgICAgICAgICAgaWQsXG4gICAgICAgICAgICBxdWFudGl0eTogMVxuICAgICAgICB9KTtcbiAgICB9LFxuICAgIHB1bGxQcm9kdWN0VG9DYXJ0KHN0YXRlLCB7aWR9KSB7XG4gICAgICAgIGNvbnN0IGNhcnRJdGVtID0gc3RhdGUuaXRlbXMuZmluZChpdGVtID0+IGl0ZW0uaWQgPT09IGlkKTtcbiAgICAgICAgaWYgKGNhcnRJdGVtKSB7XG4gICAgICAgICAgICBzdGF0ZS5pdGVtcyA9IHN0YXRlLml0ZW1zLmZpbHRlcihmdW5jdGlvbiAodmFsdWUpIHtcbiAgICAgICAgICAgICAgICByZXR1cm4gdmFsdWUuaWQgIT09IGNhcnRJdGVtLmlkO1xuICAgICAgICAgICAgfSk7XG4gICAgICAgIH1cbiAgICB9LFxuICAgIGluY3JlbWVudEl0ZW1RdWFudGl0eShzdGF0ZSwge2lkfSkge1xuICAgICAgICBjb25zdCBjYXJ0SXRlbSA9IHN0YXRlLml0ZW1zLmZpbmQoaXRlbSA9PiBpdGVtLmlkID09PSBpZClcbiAgICAgICAgY2FydEl0ZW0ucXVhbnRpdHkrK1xuICAgIH0sXG5cbiAgICBzZXRDYXJ0SXRlbXMoc3RhdGUsIHtpdGVtc30pIHtcbiAgICAgICAgc3RhdGUuaXRlbXMgPSBpdGVtc1xuICAgIH0sXG4gICAgc2V0Q2hlY2tvdXRTdGF0dXMoc3RhdGUsIHN0YXR1cykge1xuICAgICAgICBzdGF0ZS5jaGVja291dFN0YXR1cyA9IHN0YXR1c1xuICAgIH1cbn07XG5cbmV4cG9ydCBkZWZhdWx0IHtcbiAgICBuYW1lc3BhY2VkOiB0cnVlLFxuICAgIHN0YXRlLFxuICAgIGdldHRlcnMsXG4gICAgYWN0aW9ucyxcbiAgICBtdXRhdGlvbnNcbn0iXSwic291cmNlUm9vdCI6IiJ9