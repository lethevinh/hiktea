<template>
    <div>
        <el-dialog :title="product.name" :visible="cartStatus" @close="setCartStatus(false)">
            <el-form :model="form" :rules="rules" ref="form" label-width="60px" class="demo-form">
                <template v-for="(option,index) in product.options">
                    <el-divider content-position="left">{{option.name}}</el-divider>
                    <el-form-item>
                        <el-checkbox-group v-model="form.topping[index]" :name="option.id" :ref="'group_'+option.id"
                                           :max="option.option_items.max_select">
                            <el-checkbox v-for="topping in option.option_items.items"
                                         @change="changeCheckbox(topping,option)" :key="topping.id"
                                         :label="topping.name + '( + '+topping.price.text+')'"
                                         :ref="'checkbox_'+topping.id"></el-checkbox>
                        </el-checkbox-group>
                    </el-form-item>
                </template>
                <el-divider content-position="left">Ghi Chú</el-divider>
                <el-form-item>
                    <el-input type="textarea" rows="4" v-model="form.desc"></el-input>
                </el-form-item>
            </el-form>
            <span slot="footer" class="dialog-footer">
                <el-input-number v-model="form.quality" :min="1"></el-input-number>
                <el-button type="primary" @click="addToCart()">{{nameButtonCart}}</el-button>
            </span>
        </el-dialog>
    </div>
</template>

<script>
    import {mapGetters, mapState, mapActions} from 'vuex';
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
                    topping: [[], [], [], [], [], [], [], [], [], [], [], [], [], []],
                    size: '1',
                    desc: '',
                    quality: 0,
                    options: []
                },
                rules: {
                    name: [
                        {required: true, message: 'Please input Activity name', trigger: 'blur'},
                        {min: 3, max: 5, message: 'Length should be 3 to 5', trigger: 'blur'}
                    ],
                    region: [
                        {required: true, message: 'Please select Activity zone', trigger: 'change'}
                    ],
                    date1: [
                        {type: 'date', required: true, message: 'Please pick a date', trigger: 'change'}
                    ],
                    date2: [
                        {type: 'date', required: true, message: 'Please pick a time', trigger: 'change'}
                    ],
                    type: [
                        {
                            type: 'array',
                            required: true,
                            message: 'Please select at least one activity type',
                            trigger: 'change'
                        }
                    ],
                    resource: [
                        {required: true, message: 'Please select activity resource', trigger: 'change'}
                    ],
                    desc: [
                        {required: true, message: 'Please input activity form', trigger: 'blur'}
                    ]
                },
                formLabelWidth: '120px',
                nameButtonCart: " Thêm vào giỏ ",
                totalCart: 0
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
        watch: {
            product: function (product) {
                this.totalCart = product.price.value;
            },
            'form.quality': function () {
                if (this.product.price) {
                    this.calcTotalPrice()
                }
            },
            totalCart: function (total) {
                const formatter = new Intl.NumberFormat('vi-VN', {
                    style: 'currency',
                    currency: 'VND',
                    minimumFractionDigits: 0
                });
                this.nameButtonCart = formatter.format(total) + ' Thêm vào giỏ';
            }
        },
        methods: {
            ...mapActions('modal', [
                'setCartStatus',
                'setCartProduct'
            ]),
            ...mapActions('cart', [
                'addProductToCart',
            ]),
            addToCart() {
                this.addProductToCart({
                    id: this.product.id,
                    quantity: this.form.quality,
                    topping: this.form.topping,
                    size: this.form.size,
                    note: this.form.desc
                });
            },
            changeCheckbox(item, option) {
                if (this.$refs['checkbox_' + item.id][0].isChecked === false) {
                    var optionA = this.form.options[option.id];
                    if (optionA) {
                        optionA.items.push(item);
                        this.form.options[option.id] = optionA;
                    } else {
                        this.form.options[option.id] = {
                            idOption: option.id,
                            items: [item]
                        };
                    }
                } else {
                    var optionA = this.form.options[option.id];
                    if (optionA) {
                        const optionItem = optionA.items.find(i => i.id === item.id);
                        if (optionItem) {
                            optionA.items = optionA.items.filter(function (value) {
                                return value.id !== optionItem.id;
                            });
                        }
                        this.form.options[option.id] = optionA;
                    }
                }

                this.calcTotalPrice();
            },
            calcTotalPrice() {
                let totalOption = 0;
                this.form.options.forEach(function (option) {
                    option.items.forEach(function (item) {
                        totalOption += item.price.value;
                    })
                });
                this.totalCart = (this.product.price.value + totalOption) * this.form.quality;
            },
        },
    }
</script>

<style scoped>

</style>