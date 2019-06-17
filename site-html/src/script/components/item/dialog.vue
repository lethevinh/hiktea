<template>
    <div>
        <el-dialog :title="'Product '+product.name" :visible="cartStatus">
            <el-form :model="form" :rules="rules" ref="form" label-width="120px" class="demo-form">
                <el-form-item label="Số lượng: ">
                    <el-input-number v-model="form.quality" :min="1"></el-input-number>
                </el-form-item>
                <el-form-item label="Instant delivery" prop="delivery">
                    <el-switch v-model="form.delivery"></el-switch>
                </el-form-item>
                <el-form-item v-if="product.topping" label="Topping:">
                    <el-checkbox-group v-model="form.topping">
                        <el-checkbox v-for="topping in product.topping" :key="topping.id" :name="topping.id" :label="topping.name + '('+topping.price+')'"></el-checkbox>
                    </el-checkbox-group>
                </el-form-item>
                <el-form-item v-if="product.sizes" label="Size:" >
                    <el-radio-group v-model="form.size">
                        <el-radio border v-for="size in product.sizes" :key="size.id" :label="size.name+ '('+size.price+')'" :name="size.id"></el-radio>
                    </el-radio-group>
                </el-form-item>
                <el-form-item label="Ghi Chú">
                    <el-input type="textarea" v-model="form.desc"></el-input>
                </el-form-item>
            </el-form>
            <span slot="footer" class="dialog-footer">
                <el-button @click="setCartStatus(false)">Khác</el-button>
                <el-button type="primary" @click="addToCart()">Thêm vào giỏ </el-button>
            </span>
        </el-dialog>
    </div>
</template>

<script>
    import {mapGetters, mapState, mapActions} from 'vuex'

    export default {
        name: "modal",
        data: function () {
            return {
                dialogFormVisible: false,
                form: {
                    name: '',
                    region: '',
                    date1: '',
                    date2: '',
                    delivery: false,
                    topping: [],
                    size: '1',
                    desc: '',
                    quality:0
                },
                rules: {
                    name: [
                        { required: true, message: 'Please input Activity name', trigger: 'blur' },
                        { min: 3, max: 5, message: 'Length should be 3 to 5', trigger: 'blur' }
                    ],
                    region: [
                        { required: true, message: 'Please select Activity zone', trigger: 'change' }
                    ],
                    date1: [
                        { type: 'date', required: true, message: 'Please pick a date', trigger: 'change' }
                    ],
                    date2: [
                        { type: 'date', required: true, message: 'Please pick a time', trigger: 'change' }
                    ],
                    type: [
                        { type: 'array', required: true, message: 'Please select at least one activity type', trigger: 'change' }
                    ],
                    resource: [
                        { required: true, message: 'Please select activity resource', trigger: 'change' }
                    ],
                    desc: [
                        { required: true, message: 'Please input activity form', trigger: 'blur' }
                    ]
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
                product: 'getCartProduct',
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
            addToCart(){
                 this.addProductToCart({
                     id:this.product.id,
                     quantity: this.form.quality,
                     topping:this.form.topping,
                     size:this.form.size,
                     note:this.form.desc
                 });
            }
        },
    }
</script>

<style scoped>

</style>