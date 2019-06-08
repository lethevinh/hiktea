<template>
    <div class="row justify-content-center testimonial_slider testimonial_style1 carousel_branch owl-carousel owl-theme owl-loaded owl-drag" data-margin="30" data-loop="true" data-autoplay="true" data-dots="true">
        <div v-for="post in posts" class="blog_post blog_style1 radius_all_10 animation animated fadeInUp" data-animation="fadeInUp" data-animation-delay="0.05s" style="animation-delay: 0.05s; opacity: 1;">
            <div class="blog_img">
                <a href="#">
                    <img :src="post.thumbnail" alt="blog_small_img2">
                </a>
                <div class="blog_date style1">
                    <h4>25</h4><span>Mar</span>
                </div>
            </div>
            <div class="blog_content">
                <h6 class="blog_title">
                    <a :href="post.link">{{post.name}}</a>
                </h6>
                <p>{{post.description}}</p>
                <a class="blog_link" :href="post.link">
                    Đọc tiếp <i class="ion-ios-arrow-right"></i>
                </a>
            </div>
        </div>
    </div>
</template>
<script>
import axios from 'axios';
import $ from 'jquery';
export default {
    name: 'branch',
    data: function() {
        return {
            posts: []
        };
    },
    mounted() {
        axios
            .get('api/db/branch')
            .then(response => {
                this.posts = response.data.list;
            });
    },
    updated() {
        $('.carousel_branch').each(function() {
            var $carousel = $(this);
            $carousel.owlCarousel({
                loop: $carousel.data("loop"),
                margin: $carousel.data("margin"),
                mouseDrag: $carousel.data("mouse-drag"),
                touchDrag: $carousel.data("touch-drag"),
                dots: $carousel.data("dots"),
                autoHeight: true,
                center: $carousel.data("center"),
                rewind: $carousel.data("rewind"),
                autoplay: $carousel.data("autoplay"),
                nav: $carousel.data("nav"),
                navText: ['<i class="ion-ios-arrow-back"></i>', '<i class="ion-ios-arrow-forward"></i>'],
                autoplayTimeout: $carousel.data("autoplay-timeout"),
                responsive: {
                    0: {
                        items: 1,
                    },
                    380: {
                        items: 1,
                    },
                    576: {
                        items: 2,
                    },
                    1000: {
                        items: 3,
                    },
                    1199: {
                        items: 3
                    }
                }
            });
        });
    }

};
</script>