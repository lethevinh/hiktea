import shop from '../../api/shop';
import {Message} from 'element-ui';
// initial state
// shape: [{ id, quantity }]
const state = {
    items: [],
    checkoutStatus: null
};

// getters
const getters = {
    cartProducts: (state, getters, rootState) => {
        var products = [];
        state.items.map(({id, quantity}) => {
            if (rootState.products) {
                const product = rootState.products.all.find(product => product.id === id);
                if (product) {
                    products.push({
                        id: product.id,
                        title: product.title,
                        price: product.price,
                        quantity
                    });
                }
            }
        });
        return products;
    },
    cartTotalPrice: (state, getters) => {
        return getters.cartProducts.reduce((total, product) => {
            return total + product.price * product.quantity
        }, 0)
    },
    cartTotal: (state, getters) => {
        return getters.cartProducts.length;
    }
};

// actions
const actions = {
    checkout({commit, state}, products) {
        const savedCartItems = [...state.items];
        commit('setCheckoutStatus', null);
        // empty cart
        commit('setCartItems', {items: []})
        shop.buyProducts(
            products,
            () => commit('setCheckoutStatus', 'successful'),
            () => {
                commit('setCheckoutStatus', 'failed')
                // rollback to the cart saved before sending the request
                commit('setCartItems', {items: savedCartItems})
            }
        )
    },

    addProductToCart({state, commit, rootState}, product) {
        commit('setCheckoutStatus', null);
        const productReady = rootState.products.all.find(item => item.id === product.id);
        if (productReady) {
            // if (product.inventory > 0) {
            const cartItem = state.items.find(item => item.id === product.id);
            if (!cartItem) {
                commit('pushProductToCart', {product})
            } else {
                commit('incrementItemQuantity', cartItem)
            }
            Message({
                message: 'Congrats, this is a success message.',
                type: 'success'
            });
        } else {
            Message({
                message: 'Congrats, this is a success message.',
                type: 'warning'
            });
        }

        commit('modal/cartStatus', false, {root: true});

        // remove 1 item from stock
        // commit('product/decrementProductInventory', { id: product.id }, { root: true })
        // }
    },
    removeProductToCart({state, commit, rootState}, product) {
        const productReady = rootState.products.all.find(item => item.id === product.id);
        if (productReady){
            commit('pullProductToCart', {id: product.id});
            Message({
                message: 'Remove, this is a success message.',
                type: 'success'
            });
        }
    }
};

// mutations
const mutations = {
    pushProductToCart(state, {product}) {
        state.items.push(product);
    },
    pullProductToCart(state, {id}) {
        const cartItem = state.items.find(item => item.id === id);
        if (cartItem) {
            state.items = state.items.filter(function (value) {
                return value.id !== cartItem.id;
            });
        }
    },
    incrementItemQuantity(state, {id}) {
        const cartItem = state.items.find(item => item.id === id)
        cartItem.quantity++
    },

    setCartItems(state, {items}) {
        state.items = items
    },
    setCheckoutStatus(state, status) {
        state.checkoutStatus = status
    }
};

export default {
    namespaced: true,
    state,
    getters,
    actions,
    mutations
}