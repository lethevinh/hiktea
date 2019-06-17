<template>
    <div class="col-xl-4 col-lg-4 col-sm-6">
        <div class="product">

            <div class="product_img">
                <a href="#">
                    <img :src="product.photos[4].value" alt="product_img2">
                </a>
                <div class="product_action_box">
                    <ul class="list_none pr_action_btn">
                        <li><a href="#"><i class="ti-heart"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="product_info">
                <h6><a :href="product.link">{{product.name}}</a></h6>
                <p class="price">{{product.price.text}} Đ</p>
                <cart-button :product="product"></cart-button>
                <a class="btn btn-default rounded-0 btn-borderd btn-outline-default btn-sm infor" :href="product.link">
                    Tìm Hiểu
                </a>
            </div>
        </div>
    </div>
</template>
<script>
import cartButton  from './cart-button.vue'
export default {
    name: 'productItem',
    components: { cartButton },
    data: function() {
        return {};
    },
    props: ['product']
};
</script>