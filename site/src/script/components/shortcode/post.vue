<template>
    <div class="row">
        <template v-for="(post, index) in posts">
            <div v-if='index == 0' class="col-lg-8 col-md-8">
                <div class="blog_post">
                    <div class="blog_img">
                        <a :href="post.link">
                            <img :src="post.thumbnail" :alt="post.title">
                        </a>
                        <div class="blog_date style1">
                            <h4>02</h4><span>May</span>
                        </div>
                    </div>
                    <div class="blog_content">
                        <h6 class="blog_title"><a :href="post.link">{{post.title}}</a></h6>
                        <ul class="list_none blog_meta">
                            <li><a href="#"><i class="far fa-calendar"></i>February 15, 2014</a></li>
                            <li><a href="#"><i class="far fa-comments"></i>4 Comment</a></li>
                        </ul>
                        <p>{{post.description}}</p>
                        <a class="blog_link" :href="post.link">
                            Đọc tiếp <i class="ion-ios-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div v-if='index > 0 && index < 5' class="col-lg-4 col-md-4">
                <div class="blog_post">
                    <div class="blog_img">
                        <a :href="post.link">
                            <img :src="post.thumbnail" :alt="post.title">
                        </a>
                        <div class="blog_date style1">
                            <h4>02</h4><span>May</span>
                        </div>
                    </div>
                    <div class="blog_content">
                        <h6 class="blog_title"><a :href="post.link">{{post.title}}</a></h6>
                        <ul class="list_none blog_meta">
                            <li><a href="#"><i class="far fa-calendar"></i>February 15, 2014</a></li>
                            <li><a href="#"><i class="far fa-comments"></i>4 Comment</a></li>
                        </ul>
                        <p>{{post.description}}</p>
                        <a class="blog_link" :href="post.link">
                            Đọc tiếp <i class="ion-ios-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </template>
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
            .get('api/db/post')
            .then(response => {
                this.posts = response.data.list;
            });
    },
    updated() {

    }

};
</script>