// initial state
const state = {
    cart: {
        status: false,
        product: {}
    }
};

// getters
const getters = {
    getCartStatus: (state) => {
        return state.cart.status;
    },
    getCartProduct: (state) => {
        return state.cart.product;
    }
};

// actions
const actions = {
    setCartStatus({commit}, status){
        commit('cartStatus', status);
    },
    setCartProduct({commit}, product){
        commit('cartProduct', product);
    }
};

// mutations
const mutations = {
    cartStatus(state, status) {
        state.cart.status = status;
    },
    cartProduct(state, product) {
        state.cart.product = product;
    },
};

export default {
    namespaced: true,
    state,
    getters,
    actions,
    mutations
}