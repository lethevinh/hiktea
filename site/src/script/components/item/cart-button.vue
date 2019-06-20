<template>
        <button v-on:click="addToCart()" class="btn btn-default rounded-0 btn-borderd btn-sm">
            Đặt Ngay
            <dialog-add-cart :product="product" :dialogFormVisible="dialogFormVisible"></dialog-add-cart>
        </button>
</template>
<script>
import { mapGetters, mapState, mapActions } from 'vuex'
export default {
    name: 'cart-button',
    data: function() {
        return {
            isLoading: false,
            dialogFormVisible:false
        };
    },
    methods: {
        ...mapActions('cart', [
            'addProductToCart'
        ]),
        ...mapActions('modal', [
            'setCartStatus',
            'setCartProduct',
        ]),
        addToCart(){
            this.dialogFormVisible = !this.dialogFormVisible;
          //  this.setCartStatus(true);
          //  this.setCartProduct(this.product);
        }
    },
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
    props: ['product']
};
</script>