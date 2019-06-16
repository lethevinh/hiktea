import Vue from 'vue'
import Vuex from 'vuex'
import cart from './modules/cart'
import products from './modules/product'
import modal from './modules/modal'

Vue.use(Vuex);

const debug = process.env.NODE_ENV !== 'production';

export default new Vuex.Store({
    modules: {
        cart,
        products,
        modal
    },
    strict: debug,
});