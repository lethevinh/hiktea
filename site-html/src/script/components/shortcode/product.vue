<template>
    <div class="product_content">
        <ul class="nav nav-tabs justify-content-center animation animated fadeInUp" data-animation="fadeInUp" data-animation-delay="0.04s" role="tablist" style="animation-delay: 0.04s; opacity: 1;">
            <li class="nav-item">
                <a class="nav-link active" id="tab1" data-toggle="tab" href="#tab-1" role="tab" aria-controls="tab-1" aria-selected="true">
                    <span class="pr_icon1"></span>TẤT CẢ
                </a>
            </li>
            <li v-for='post in posts' class="nav-item">
                <a class="nav-link" :id="'tab'+post.id" data-toggle="tab" :href="'#tab-'+post.id" role="tab" :aria-controls="'tab-'+post.id" aria-selected="false">
                    <span :class="'pr_icon'+post.id"></span>{{post.name}}
                </a>
            </li>
        </ul>
        <div class="small_divider clearfix"></div>
        <div class="tab-content">
            <div class="tab-pane fade show active" id="tab-1" role="tabpanel" aria-labelledby="tab1">
                <div class="row animation animated fadeInUp" data-animation="fadeInUp" data-animation-delay="0.05s" style="animation-delay: 0.05s; opacity: 1;">
                    <productitem v-for="(product, index) in products" :key="index" :product="product" />
                </div>
            </div>
            <div v-for="post in posts" class="tab-pane fade" :id="'tab-'+post.id" role="tabpanel" :aria-labelledby="'tab'+post.id">
                <div class="row animation animated fadeInUp" data-animation="fadeInUp" data-animation-delay="0.05s" style="animation-delay: 0.05s; opacity: 1;">
                    <productitem v-for="(product, index) in post.products" :key="index" :product="product" />
                </div>
            </div>
        </div>
    </div>
</template>
<script>
import axios from 'axios';
import $ from 'jquery';
import productitem from '../item/product.vue';
export default {
    name: 'product',
    data: function() {
        return {
            posts: [],
            products: []
        };
    },
    components: { productitem },
    mounted() {
        axios
            .get('api/db/category/product')
            .then(response => {
                let categories = response.data.list
                this.posts = categories;
                let self = this;
                categories.forEach(function(category, index) {
                    self.products.push(...category.products);
                });
            });
    },
    updated() {

    }
};
</script>