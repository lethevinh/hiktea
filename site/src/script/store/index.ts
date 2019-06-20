import Vue from 'vue'
import Vuex from 'vuex'
import cart from './modules/cart'
import products from './modules/product'
import modal from './modules/modal'
import localStorage  from '../localstorage'
Vue.use(Vuex);

const debug = process.env.NODE_ENV !== 'production';

export default new Vuex.Store({
    modules: {
        cart,
        products,
        modal,
        system:{
            mutations:{
                initialiseStore() {
                    let store = this;
                    localStorage.getItem('store')
                        .then(function (value) {
                        if (value){
                            store.replaceState(JSON.parse(value.toString()));
                        }
                    });
                }
            }
        }
    },
    strict: debug,
});