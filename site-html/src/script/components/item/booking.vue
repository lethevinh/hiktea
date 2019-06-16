<template>
    <div class="col-xl-4 col-lg-4 col-sm-6">
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
                <a class="btn btn-default rounded-0 btn-borderd btn-sm" href="#">
                    Đặt Ngay
                </a>
                <a class="btn btn-default rounded-0 btn-borderd btn-outline-default btn-sm infor" :href="product.link">
                    Tìm Hiểu
                </a>
            </div>
        </div>
    </div>
</template>
<script>
import axios from 'axios';
import $ from 'jquery';
export default {
    name: 'booking',
    data: function() {
        return {};
    },
    props: ['product']
};
</script>