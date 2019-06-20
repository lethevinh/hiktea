<template>
    <li class="dropdown cart_wrap">
        <a class="nav-link" href="#" data-toggle="dropdown">
            <i class="ion-bag"></i>
            <span class="cart_count">{{total}}</span>
        </a>
        <div class="cart_box dropdown-menu dropdown-menu-right bg_white bg_black">
            <ul class="cart_list">
                <li v-for="product in products" v-if="total">
                    <a class="item_remove" v-on:click="removeProductToCart(product)">
                        <i class="el-icon-circle-close"></i>
                    </a>
                    <a href="#">
                        <img :src="product.image" alt="cart_thumb1">{{product.name}}
                    </a>
                    <span class="cart_quantity">{{product.quantity}} x
                        <span class="cart_amount">
                            {{product.price | currency}}
                            <span class="price_symbole"> VND</span>
                        </span>
                    </span>
                </li>
                <li v-if="!total">
                    <a href="#">
                        Empty cart
                    </a>
                </li>
            </ul>
            <div v-if="total" class="cart_footer">
                <p class="cart_total">Tổng tiền:
                    <span class="cart_amount">{{totalPrice | currency}} <span class="price_symbole">VND</span></span>
                </p>
                <p class="cart_buttons">
                    <button class="btn btn-default btn-radius view-cart" href="cart.html">
                        Xem giở hàng
                    </button>
                    <button class="btn btn-dark btn-radius checkout" v-on:click="checkout">
                        Đặt Hàng
                    </button>
                </p>
            </div>
        </div>
    </li>
</template>
<script>
import { mapGetters, mapState, mapActions } from 'vuex'
export default {
    name: "cart",
    computed: {
        ...mapState({
            checkoutStatus: state => state.cart.checkoutStatus
        }),
        ...mapGetters('cart', {
            products: 'cartProducts',
            totalPrice: 'cartTotalPrice',
            total: 'cartTotal',
        })
    },
    methods: {
        ...mapActions('cart', [
            'removeProductToCart',
            'checkout'
        ]),
    },
    created() {
        this.$store.dispatch('products/getAllProducts')
    }
}
</script>
<style scoped>
</style>