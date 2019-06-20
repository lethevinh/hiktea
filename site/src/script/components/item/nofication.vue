<template>
    <div>
    <el-dialog :title="'Product '+cartProduct.name" :visible="cartStatus">
        <el-form :model="form">
            <el-form-item label="Promotion name" :label-width="formLabelWidth">
                <el-input v-model="form.name" autocomplete="off"></el-input>
            </el-form-item>
            <el-form-item label="Zones" :label-width="formLabelWidth">
                <el-select v-model="form.region" placeholder="Please select a zone">
                    <el-option label="Zone No.1" value="shanghai"></el-option>
                    <el-option label="Zone No.2" value="beijing"></el-option>
                </el-select>
            </el-form-item>
        </el-form>
        <span slot="footer" class="dialog-footer">
                <el-button @click="setCartStatus(false)">Cancel</el-button>
                <el-button type="primary" @click="addProductToCart(cartProduct)">Confirm</el-button>
        </span>
    </el-dialog>
    </div>
</template>

<script>
    import { mapGetters, mapState, mapActions } from 'vuex'
    export default {
        name: "notification",
        data:function () {
            return {
                dialogFormVisible: false,
                form: {
                    name: '',
                    region: '',
                    date1: '',
                    date2: '',
                    delivery: false,
                    type: [],
                    resource: '',
                    desc: ''
                },
                formLabelWidth: '120px'
            }
        },
        computed: {
            ...mapState({
                checkoutStatus: state => state.cart.checkoutStatus
            }),
            ...mapGetters('modal', {
                cartStatus: 'getCartStatus',
                cartProduct: 'getCartProduct',
            })
        },
        methods: {
            ...mapActions('modal', [
                'setCartStatus',
                'setCartProduct'
            ]),
            ...mapActions('cart', [
                'addProductToCart',
            ]),
        },
    }
</script>

<style scoped>

</style>