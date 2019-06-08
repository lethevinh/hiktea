<template>
    <div class="col-lg-4 col-sm-6">
        <div class="product">
            <span :class="'pr_flash '+product.status.key">
                {{product.status.value}}
            </span>

            <div class="product_img">
                <a href="#">
                    <img src="images/product_img2.jpg" alt="product_img2">
                </a>
                <div class="product_action_box">
                    <ul class="list_none pr_action_btn">
                        <li><a href="#"><i class="ti-heart"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="product_info">
                <h6><a :href="product.link">{{product.name}}</a></h6>
                <p class="price">{{product.price}} Đ</p>
                <a class="btn btn-default rounded-0 btn-borderd btn-sm" href="#">Đặt Ngay</a>
                <div class="pr_desc">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc id varius nunc.</p>
                </div>
                <div class="product_action_box">
                    <ul class="list_none pr_action_btn">
                        <li><a href="#"><i class="ti-heart"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
import axios from 'axios';
import $ from 'jquery';
export default {
    name: 'productitem',
    data: function() {
        return {};
    },
    props: ['product']
};
</script>