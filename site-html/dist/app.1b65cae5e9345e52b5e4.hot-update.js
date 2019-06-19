webpackHotUpdate("app",{

/***/ "./src/script/api/shop.ts":
/*!********************************!*\
  !*** ./src/script/api/shop.ts ***!
  \********************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _request__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./request */ "./src/script/api/request.ts");
var __awaiter = (undefined && undefined.__awaiter) || function (thisArg, _arguments, P, generator) {
    return new (P || (P = Promise))(function (resolve, reject) {
        function fulfilled(value) { try { step(generator.next(value)); } catch (e) { reject(e); } }
        function rejected(value) { try { step(generator["throw"](value)); } catch (e) { reject(e); } }
        function step(result) { result.done ? resolve(result.value) : new P(function (resolve) { resolve(result.value); }).then(fulfilled, rejected); }
        step((generator = generator.apply(thisArg, _arguments || [])).next());
    });
};
var __generator = (undefined && undefined.__generator) || function (thisArg, body) {
    var _ = { label: 0, sent: function() { if (t[0] & 1) throw t[1]; return t[1]; }, trys: [], ops: [] }, f, y, t, g;
    return g = { next: verb(0), "throw": verb(1), "return": verb(2) }, typeof Symbol === "function" && (g[Symbol.iterator] = function() { return this; }), g;
    function verb(n) { return function (v) { return step([n, v]); }; }
    function step(op) {
        if (f) throw new TypeError("Generator is already executing.");
        while (_) try {
            if (f = 1, y && (t = op[0] & 2 ? y["return"] : op[0] ? y["throw"] || ((t = y["return"]) && t.call(y), 0) : y.next) && !(t = t.call(y, op[1])).done) return t;
            if (y = 0, t) op = [op[0] & 2, t.value];
            switch (op[0]) {
                case 0: case 1: t = op; break;
                case 4: _.label++; return { value: op[1], done: false };
                case 5: _.label++; y = op[1]; op = [0]; continue;
                case 7: op = _.ops.pop(); _.trys.pop(); continue;
                default:
                    if (!(t = _.trys, t = t.length > 0 && t[t.length - 1]) && (op[0] === 6 || op[0] === 2)) { _ = 0; continue; }
                    if (op[0] === 3 && (!t || (op[1] > t[0] && op[1] < t[3]))) { _.label = op[1]; break; }
                    if (op[0] === 6 && _.label < t[1]) { _.label = t[1]; t = op; break; }
                    if (t && _.label < t[2]) { _.label = t[2]; _.ops.push(op); break; }
                    if (t[2]) _.ops.pop();
                    _.trys.pop(); continue;
            }
            op = body.call(thisArg, _);
        } catch (e) { op = [6, e]; y = 0; } finally { f = t = 0; }
        if (op[0] & 5) throw op[1]; return { value: op[0] ? op[1] : void 0, done: true };
    }
};
/**
 * Mocking client-server processing
 */
var _products = [
    { "id": 1, "title": "iPad 4 Mini", "price": 500.01, "inventory": 2 },
    { "id": 2, "title": "H&M T-Shirt White", "price": 10.99, "inventory": 10 },
    { "id": 3, "title": "Charli XCX - Sucker CD", "price": 19.99, "inventory": 5 }
];

/* harmony default export */ __webpack_exports__["default"] = ({
    getProducts: function (callback) {
        return __awaiter(this, void 0, void 0, function () {
            var categories, products;
            return __generator(this, function (_a) {
                switch (_a.label) {
                    case 0: return [4 /*yield*/, _request__WEBPACK_IMPORTED_MODULE_0__["default"].get('/api/db/category/product/')];
                    case 1:
                        categories = _a.sent();
                        products = [];
                        return [4 /*yield*/, categories.data.list.forEach(function (category) {
                                products.push.apply(products, category.products);
                            })];
                    case 2:
                        _a.sent();
                        callback(products);
                        return [2 /*return*/];
                }
            });
        });
    },
    buyProducts: function (products, cb, errorCb) {
        setTimeout(function () {
            // simulate random checkout failure.
            (Math.random() > 0.5 || navigator.userAgent.indexOf('PhantomJS') > -1)
                ? cb()
                : errorCb();
        }, 100);
    }
});


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
        state.items.map(function (productCart) {
            if (rootState.products) {
                var product_1 = rootState.products.all.find(function (product) { return product.id === productCart.id; });
                if (product_1) {
                    products.push({
                        id: product_1.id,
                        name: product_1.name,
                        price: productCart.price,
                        quantity: productCart.quantity,
                        options: productCart.options,
                        image: product_1.photos[3].value
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
                commit('pushProductToCart', { product: product });
            }
            else {
                commit('incrementItemQuantity', product);
            }
            Object(element_ui__WEBPACK_IMPORTED_MODULE_1__["Message"])({
                message: 'Thêm giỏ hàng thành công.',
                type: 'success'
            });
            commit('modal/cartStatus', false, { root: true });
        }
        else {
            Object(element_ui__WEBPACK_IMPORTED_MODULE_1__["Message"])({
                message: 'Thất bại.',
                type: 'warning'
            });
        }
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
        var product = _a.product;
        state.items.push(product);
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


/***/ }),

/***/ "./src/script/store/modules/product.ts":
/*!*********************************************!*\
  !*** ./src/script/store/modules/product.ts ***!
  \*********************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _api_shop__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../../api/shop */ "./src/script/api/shop.ts");

// initial state
var state = {
    all: []
};
// getters
var getters = {};
// actions
var actions = {
    getAllProducts: function (_a) {
        var commit = _a.commit;
        _api_shop__WEBPACK_IMPORTED_MODULE_0__["default"].getProducts(function (products) {
            commit('setProducts', products);
        });
    }
};
// mutations
var mutations = {
    setProducts: function (state, products) {
        state.all = products;
    },
    decrementProductInventory: function (state, _a) {
        var id = _a.id;
        var product = state.all.find(function (product) { return product.id === id; });
        product.inventory--;
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
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9zcmMvc2NyaXB0L2FwaS9zaG9wLnRzIiwid2VicGFjazovLy8uL3NyYy9zY3JpcHQvc3RvcmUvbW9kdWxlcy9jYXJ0LnRzIiwid2VicGFjazovLy8uL3NyYy9zY3JpcHQvc3RvcmUvbW9kdWxlcy9wcm9kdWN0LnRzIl0sIm5hbWVzIjpbXSwibWFwcGluZ3MiOiI7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7O0FBQUE7O0dBRUc7QUFDSCxJQUFNLFNBQVMsR0FBRztJQUNkLEVBQUMsSUFBSSxFQUFFLENBQUMsRUFBRSxPQUFPLEVBQUUsYUFBYSxFQUFFLE9BQU8sRUFBRSxNQUFNLEVBQUUsV0FBVyxFQUFFLENBQUMsRUFBQztJQUNsRSxFQUFDLElBQUksRUFBRSxDQUFDLEVBQUUsT0FBTyxFQUFFLG1CQUFtQixFQUFFLE9BQU8sRUFBRSxLQUFLLEVBQUUsV0FBVyxFQUFFLEVBQUUsRUFBQztJQUN4RSxFQUFDLElBQUksRUFBRSxDQUFDLEVBQUUsT0FBTyxFQUFFLHdCQUF3QixFQUFFLE9BQU8sRUFBRSxLQUFLLEVBQUUsV0FBVyxFQUFFLENBQUMsRUFBQztDQUMvRSxDQUFDO0FBQzhCO0FBRWpCO0lBQ0wsV0FBVyxZQUFFLFFBQVE7Ozs7OzRCQUNOLHFCQUFNLGdEQUFPLENBQUMsR0FBRyxDQUFDLDJCQUEyQixDQUFDOzt3QkFBM0QsVUFBVSxHQUFHLFNBQThDO3dCQUMzRCxRQUFRLEdBQUcsRUFBRSxDQUFDO3dCQUNsQixxQkFBTSxVQUFVLENBQUMsSUFBSSxDQUFDLElBQUksQ0FBQyxPQUFPLENBQUMsVUFBVSxRQUFRO2dDQUNqRCxRQUFRLENBQUMsSUFBSSxPQUFiLFFBQVEsRUFBUyxRQUFRLENBQUMsUUFBUSxFQUFDOzRCQUN2QyxDQUFDLENBQUM7O3dCQUZGLFNBRUUsQ0FBQzt3QkFDSCxRQUFRLENBQUMsUUFBUSxDQUFDOzs7OztLQUNyQjtJQUNELFdBQVcsWUFBRSxRQUFRLEVBQUUsRUFB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LE9BQU87SUFDUCxTQUFTO0NBQ1oiLCJmaWxlIjoiYXBwLjFiNjVjYWU1ZTkzNDVlNTJiNWU0LmhvdC11cGRhdGUuanMiLCJzb3VyY2VzQ29udGVudCI6WyIvKipcbiAqIE1vY2tpbmcgY2xpZW50LXNlcnZlciBwcm9jZXNzaW5nXG4gKi9cbmNvbnN0IF9wcm9kdWN0cyA9IFtcbiAgICB7XCJpZFwiOiAxLCBcInRpdGxlXCI6IFwiaVBhZCA0IE1pbmlcIiwgXCJwcmljZVwiOiA1MDAuMDEsIFwiaW52ZW50b3J5XCI6IDJ9LFxuICAgIHtcImlkXCI6IDIsIFwidGl0bGVcIjogXCJIJk0gVC1TaGlydCBXaGl0ZVwiLCBcInByaWNlXCI6IDEwLjk5LCBcImludmVudG9yeVwiOiAxMH0sXG4gICAge1wiaWRcIjogMywgXCJ0aXRsZVwiOiBcIkNoYXJsaSBYQ1ggLSBTdWNrZXIgQ0RcIiwgXCJwcmljZVwiOiAxOS45OSwgXCJpbnZlbnRvcnlcIjogNX1cbl07XG5pbXBvcnQgcmVxdWVzdCBmcm9tICcuL3JlcXVlc3QnO1xuXG5leHBvcnQgZGVmYXVsdCB7XG4gICAgYXN5bmMgZ2V0UHJvZHVjdHMgKGNhbGxiYWNrKSB7XG4gICAgICAgIHZhciBjYXRlZ29yaWVzID0gYXdhaXQgcmVxdWVzdC5nZXQoJy9hcGkvZGIvY2F0ZWdvcnkvcHJvZHVjdC8nKTtcbiAgICAgICAgdmFyIHByb2R1Y3RzID0gW107XG4gICAgICAgIGF3YWl0IGNhdGVnb3JpZXMuZGF0YS5saXN0LmZvckVhY2goZnVuY3Rpb24gKGNhdGVnb3J5KSB7XG4gICAgICAgICAgICBwcm9kdWN0cy5wdXNoKC4uLmNhdGVnb3J5LnByb2R1Y3RzKVxuICAgICAgICB9KTtcbiAgICAgICAgY2FsbGJhY2socHJvZHVjdHMpXG4gICAgfSxcbiAgICBidXlQcm9kdWN0cyAocHJvZHVjdHMsIGNiLCBlcnJvckNiKSB7XG4gICAgICAgIHNldFRpbWVvdXQoKCkgPT4ge1xuICAgICAgICAgICAgLy8gc2ltdWxhdGUgcmFuZG9tIGNoZWNrb3V0IGZhaWx1cmUuXG4gICAgICAgICAgICAoTWF0aC5yYW5kb20oKSA+IDAuNSB8fCBuYXZpZ2F0b3IudXNlckFnZW50LmluZGV4T2YoJ1BoYW50b21KUycpID4gLTEpXG4gICAgICAgICAgICAgICAgPyBjYigpXG4gICAgICAgICAgICAgICAgOiBlcnJvckNiKClcbiAgICAgICAgfSwgMTAwKVxuICAgIH1cbn0iLCJpbXBvcnQgc2hvcCBmcm9tICcuLi8uLi9hcGkvc2hvcCc7XG5pbXBvcnQge01lc3NhZ2V9IGZyb20gJ2VsZW1lbnQtdWknO1xuLy8gaW5pdGlhbCBzdGF0ZVxuLy8gc2hhcGU6IFt7IGlkLCBxdWFudGl0eSB9XVxuY29uc3Qgc3RhdGUgPSB7XG4gICAgaXRlbXM6IFtdLFxuICAgIGNoZWNrb3V0U3RhdHVzOiBudWxsXG59O1xuXG4vLyBnZXR0ZXJzXG5jb25zdCBnZXR0ZXJzID0ge1xuICAgIGNhcnRQcm9kdWN0czogKHN0YXRlLCBnZXR0ZXJzLCByb290U3RhdGUpID0+IHtcbiAgICAgICAgdmFyIHByb2R1Y3RzID0gW107XG4gICAgICAgIHN0YXRlLml0ZW1zLm1hcCgocHJvZHVjdENhcnQpID0+IHtcbiAgICAgICAgICAgIGlmIChyb290U3RhdGUucHJvZHVjdHMpIHtcbiAgICAgICAgICAgICAgICBjb25zdCBwcm9kdWN0ID0gcm9vdFN0YXRlLnByb2R1Y3RzLmFsbC5maW5kKHByb2R1Y3QgPT4gcHJvZHVjdC5pZCA9PT0gcHJvZHVjdENhcnQuaWQpO1xuICAgICAgICAgICAgICAgIGlmIChwcm9kdWN0KSB7XG4gICAgICAgICAgICAgICAgICAgIHByb2R1Y3RzLnB1c2goe1xuICAgICAgICAgICAgICAgICAgICAgICAgaWQ6IHByb2R1Y3QuaWQsXG4gICAgICAgICAgICAgICAgICAgICAgICBuYW1lOiBwcm9kdWN0Lm5hbWUsXG4gICAgICAgICAgICAgICAgICAgICAgICBwcmljZTogcHJvZHVjdENhcnQucHJpY2UsXG4gICAgICAgICAgICAgICAgICAgICAgICBxdWFudGl0eTpwcm9kdWN0Q2FydC5xdWFudGl0eSxcbiAgICAgICAgICAgICAgICAgICAgICAgIG9wdGlvbnM6cHJvZHVjdENhcnQub3B0aW9ucyxcbiAgICAgICAgICAgICAgICAgICAgICAgIGltYWdlOnByb2R1Y3QucGhvdG9zWzNdLnZhbHVlXG4gICAgICAgICAgICAgICAgICAgIH0pO1xuICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgIH1cbiAgICAgICAgfSk7XG4gICAgICAgIHJldHVybiBwcm9kdWN0cztcbiAgICB9LFxuICAgIGNhcnRUb3RhbFByaWNlOiAoc3RhdGUsIGdldHRlcnMpID0+IHtcbiAgICAgICAgcmV0dXJuIGdldHRlcnMuY2FydFByb2R1Y3RzLnJlZHVjZSgodG90YWwsIHByb2R1Y3QpID0+IHtcbiAgICAgICAgICAgIHJldHVybiB0b3RhbCArIHByb2R1Y3QucHJpY2UgKiBwcm9kdWN0LnF1YW50aXR5XG4gICAgICAgIH0sIDApXG4gICAgfSxcbiAgICBjYXJ0VG90YWw6IChzdGF0ZSwgZ2V0dGVycykgPT4ge1xuICAgICAgICByZXR1cm4gZ2V0dGVycy5jYXJ0UHJvZHVjdHMubGVuZ3RoO1xuICAgIH1cbn07XG5cbi8vIGFjdGlvbnNcbmNvbnN0IGFjdGlvbnMgPSB7XG4gICAgY2hlY2tvdXQoe2NvbW1pdCwgc3RhdGV9LCBwcm9kdWN0cykge1xuICAgICAgICBjb25zdCBzYXZlZENhcnRJdGVtcyA9IFsuLi5zdGF0ZS5pdGVtc107XG4gICAgICAgIGNvbW1pdCgnc2V0Q2hlY2tvdXRTdGF0dXMnLCBudWxsKTtcbiAgICAgICAgLy8gZW1wdHkgY2FydFxuICAgICAgICBjb21taXQoJ3NldENhcnRJdGVtcycsIHtpdGVtczogW119KVxuICAgICAgICBzaG9wLmJ1eVByb2R1Y3RzKFxuICAgICAgICAgICAgcHJvZHVjdHMsXG4gICAgICAgICAgICAoKSA9PiBjb21taXQoJ3NldENoZWNrb3V0U3RhdHVzJywgJ3N1Y2Nlc3NmdWwnKSxcbiAgICAgICAgICAgICgpID0+IHtcbiAgICAgICAgICAgICAgICBjb21taXQoJ3NldENoZWNrb3V0U3RhdHVzJywgJ2ZhaWxlZCcpXG4gICAgICAgICAgICAgICAgLy8gcm9sbGJhY2sgdG8gdGhlIGNhcnQgc2F2ZWQgYmVmb3JlIHNlbmRpbmcgdGhlIHJlcXVlc3RcbiAgICAgICAgICAgICAgICBjb21taXQoJ3NldENhcnRJdGVtcycsIHtpdGVtczogc2F2ZWRDYXJ0SXRlbXN9KVxuICAgICAgICAgICAgfVxuICAgICAgICApXG4gICAgfSxcblxuICAgIGFkZFByb2R1Y3RUb0NhcnQoe3N0YXRlLCBjb21taXQsIHJvb3RTdGF0ZX0sIHByb2R1Y3QpIHtcbiAgICAgICAgY29tbWl0KCdzZXRDaGVja291dFN0YXR1cycsIG51bGwpO1xuICAgICAgICBjb25zdCBwcm9kdWN0UmVhZHkgPSByb290U3RhdGUucHJvZHVjdHMuYWxsLmZpbmQoaXRlbSA9PiBpdGVtLmlkID09PSBwcm9kdWN0LmlkKTtcbiAgICAgICAgaWYgKHByb2R1Y3RSZWFkeSkge1xuICAgICAgICAgICAgLy8gaWYgKHByb2R1Y3QuaW52ZW50b3J5ID4gMCkge1xuICAgICAgICAgICAgY29uc3QgY2FydEl0ZW0gPSBzdGF0ZS5pdGVtcy5maW5kKGl0ZW0gPT4gaXRlbS5pZCA9PT0gcHJvZHVjdC5pZCk7XG4gICAgICAgICAgICBpZiAoIWNhcnRJdGVtKSB7XG4gICAgICAgICAgICAgICAgY29tbWl0KCdwdXNoUHJvZHVjdFRvQ2FydCcsIHtwcm9kdWN0fSlcbiAgICAgICAgICAgIH0gZWxzZSB7XG4gICAgICAgICAgICAgICAgY29tbWl0KCdpbmNyZW1lbnRJdGVtUXVhbnRpdHknLCBwcm9kdWN0KVxuICAgICAgICAgICAgfVxuICAgICAgICAgICAgTWVzc2FnZSh7XG4gICAgICAgICAgICAgICAgbWVzc2FnZTogJ1Row6ptIGdp4buPIGjDoG5nIHRow6BuaCBjw7RuZy4nLFxuICAgICAgICAgICAgICAgIHR5cGU6ICdzdWNjZXNzJ1xuICAgICAgICAgICAgfSk7XG4gICAgICAgICAgICBjb21taXQoJ21vZGFsL2NhcnRTdGF0dXMnLCBmYWxzZSwge3Jvb3Q6IHRydWV9KTtcbiAgICAgICAgfSBlbHNlIHtcbiAgICAgICAgICAgIE1lc3NhZ2Uoe1xuICAgICAgICAgICAgICAgIG1lc3NhZ2U6ICdUaOG6pXQgYuG6oWkuJyxcbiAgICAgICAgICAgICAgICB0eXBlOiAnd2FybmluZydcbiAgICAgICAgICAgIH0pO1xuICAgICAgICB9XG5cbiAgICAgICAgLy8gcmVtb3ZlIDEgaXRlbSBmcm9tIHN0b2NrXG4gICAgICAgIC8vIGNvbW1pdCgncHJvZHVjdC9kZWNyZW1lbnRQcm9kdWN0SW52ZW50b3J5JywgeyBpZDogcHJvZHVjdC5pZCB9LCB7IHJvb3Q6IHRydWUgfSlcbiAgICAgICAgLy8gfVxuICAgIH0sXG4gICAgcmVtb3ZlUHJvZHVjdFRvQ2FydCh7c3RhdGUsIGNvbW1pdCwgcm9vdFN0YXRlfSwgcHJvZHVjdCkge1xuICAgICAgICBjb25zdCBwcm9kdWN0UmVhZHkgPSByb290U3RhdGUucHJvZHVjdHMuYWxsLmZpbmQoaXRlbSA9PiBpdGVtLmlkID09PSBwcm9kdWN0LmlkKTtcbiAgICAgICAgaWYgKHByb2R1Y3RSZWFkeSl7XG4gICAgICAgICAgICBjb21taXQoJ3B1bGxQcm9kdWN0VG9DYXJ0Jywge2lkOiBwcm9kdWN0LmlkfSk7XG4gICAgICAgICAgICBNZXNzYWdlKHtcbiAgICAgICAgICAgICAgICBtZXNzYWdlOiAnUmVtb3ZlLCB0aGlzIGlzIGEgc3VjY2VzcyBtZXNzYWdlLicsXG4gICAgICAgICAgICAgICAgdHlwZTogJ3N1Y2Nlc3MnXG4gICAgICAgICAgICB9KTtcbiAgICAgICAgfVxuICAgIH1cbn07XG5cbi8vIG11dGF0aW9uc1xuY29uc3QgbXV0YXRpb25zID0ge1xuICAgIHB1c2hQcm9kdWN0VG9DYXJ0KHN0YXRlLCB7cHJvZHVjdH0pIHtcbiAgICAgICAgc3RhdGUuaXRlbXMucHVzaChwcm9kdWN0KTtcbiAgICB9LFxuICAgIHB1bGxQcm9kdWN0VG9DYXJ0KHN0YXRlLCB7aWR9KSB7XG4gICAgICAgIGNvbnN0IGNhcnRJdGVtID0gc3RhdGUuaXRlbXMuZmluZChpdGVtID0+IGl0ZW0uaWQgPT09IGlkKTtcbiAgICAgICAgaWYgKGNhcnRJdGVtKSB7XG4gICAgICAgICAgICBzdGF0ZS5pdGVtcyA9IHN0YXRlLml0ZW1zLmZpbHRlcihmdW5jdGlvbiAodmFsdWUpIHtcbiAgICAgICAgICAgICAgICByZXR1cm4gdmFsdWUuaWQgIT09IGNhcnRJdGVtLmlkO1xuICAgICAgICAgICAgfSk7XG4gICAgICAgIH1cbiAgICB9LFxuICAgIGluY3JlbWVudEl0ZW1RdWFudGl0eShzdGF0ZSwge2lkfSkge1xuICAgICAgICBjb25zdCBjYXJ0SXRlbSA9IHN0YXRlLml0ZW1zLmZpbmQoaXRlbSA9PiBpdGVtLmlkID09PSBpZClcbiAgICAgICAgY2FydEl0ZW0ucXVhbnRpdHkrK1xuICAgIH0sXG5cbiAgICBzZXRDYXJ0SXRlbXMoc3RhdGUsIHtpdGVtc30pIHtcbiAgICAgICAgc3RhdGUuaXRlbXMgPSBpdGVtc1xuICAgIH0sXG4gICAgc2V0Q2hlY2tvdXRTdGF0dXMoc3RhdGUsIHN0YXR1cykge1xuICAgICAgICBzdGF0ZS5jaGVja291dFN0YXR1cyA9IHN0YXR1c1xuICAgIH1cbn07XG5cbmV4cG9ydCBkZWZhdWx0IHtcbiAgICBuYW1lc3BhY2VkOiB0cnVlLFxuICAgIHN0YXRlLFxuICAgIGdldHRlcnMsXG4gICAgYWN0aW9ucyxcbiAgICBtdXRhdGlvbnNcbn0iLCJpbXBvcnQgc2hvcCBmcm9tICcuLi8uLi9hcGkvc2hvcCc7XG5cbi8vIGluaXRpYWwgc3RhdGVcbmNvbnN0IHN0YXRlID0ge1xuICAgIGFsbDogW11cbn07XG5cbi8vIGdldHRlcnNcbmNvbnN0IGdldHRlcnMgPSB7fTtcblxuLy8gYWN0aW9uc1xuY29uc3QgYWN0aW9ucyA9IHtcbiAgICBnZXRBbGxQcm9kdWN0cyAoeyBjb21taXQgfSkge1xuICAgICAgICBzaG9wLmdldFByb2R1Y3RzKHByb2R1Y3RzID0+IHtcbiAgICAgICAgICAgIGNvbW1pdCgnc2V0UHJvZHVjdHMnLCBwcm9kdWN0cylcbiAgICAgICAgfSlcbiAgICB9XG59O1xuXG4vLyBtdXRhdGlvbnNcbmNvbnN0IG11dGF0aW9ucyA9IHtcbiAgICBzZXRQcm9kdWN0cyAoc3RhdGUsIHByb2R1Y3RzKSB7XG4gICAgICAgIHN0YXRlLmFsbCA9IHByb2R1Y3RzXG4gICAgfSxcblxuICAgIGRlY3JlbWVudFByb2R1Y3RJbnZlbnRvcnkgKHN0YXRlLCB7IGlkIH0pIHtcbiAgICAgICAgY29uc3QgcHJvZHVjdCA9IHN0YXRlLmFsbC5maW5kKHByb2R1Y3QgPT4gcHJvZHVjdC5pZCA9PT0gaWQpXG4gICAgICAgIHByb2R1Y3QuaW52ZW50b3J5LS1cbiAgICB9XG59O1xuXG5leHBvcnQgZGVmYXVsdCB7XG4gICAgbmFtZXNwYWNlZDogdHJ1ZSxcbiAgICBzdGF0ZSxcbiAgICBnZXR0ZXJzLFxuICAgIGFjdGlvbnMsXG4gICAgbXV0YXRpb25zXG59Il0sInNvdXJjZVJvb3QiOiIifQ==