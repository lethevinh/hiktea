<template>
    <div class="row">
        <div class="col-lg-9">
            <div class="blog_list">
                <div class="row">
                    <div v-for="post in posts" class="col-12">
                        <div class="blog_post">
                            <div class="blog_img">
                                <a :href="post.link">
                                    <img :src="post.thumbnail" alt="blog_img1">
                                </a>
                            </div>
                            <div class="blog_content">
                                <h5 class="blog_title">
                                    <a :href="post.link">{{post.title}}</a>
                                </h5>
                                <ul class="list_none blog_meta">
                                    <li>
                                        <a href="#">
                                            <i class="far fa-user"></i>
                                            by
                                            <span class="text_default">{{post.author.fullname}}</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="far fa-calendar"></i>
                                            {{post.createdAt | formatDate('hh:mm DD/mm/YYYY')}}
                                        </a>
                                    </li>
                                </ul>
                                <p>{{post.description}}</p>
                                <a class="blog_link" :href="post.link">
                                    Đọc tiếp <i class="ion-ios-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 mt-3 mt-lg-4">
                    <ul class="pagination justify-content-center">
                        <li class="page-item disabled"><a class="page-link" href="#" tabindex="-1"><i class="ion-ios-arrow-thin-left"></i></a></li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#"><i class="ion-ios-arrow-thin-right"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-lg-3 mt-5 mt-lg-0">
            <div class="sidebar">
                <div class="widget">
                    <div class="search_widget">
                        <form><input required="" placeholder="Search..." type="text"><button class="btn-submit" type="submit" name="submit" value="Submit"><span class="ti-search"></span></button></form>
                    </div>
                </div>
                <div class="widget">
                    <h5 class="widget_title">About Me</h5>
                    <div class="about_widget"><a href="#"><img src="images/about_author.jpg" alt="about_author"></a>
                        <h5 class="about_author">Calvin William</h5><span class="author_email">info@yourmail.com</span>
                        <p>Lorem ipsum dolor sit amet elit adipiscing elit. Praesent id dolor dui dapibus gravida elit.</p>
                    </div>
                </div>
                <div class="widget">
                    <h5 class="widget_title">Categories</h5>
                    <ul class="list_none widget_categories border_bottom_dash">
                        <li><a href="#"><span class="categories_name">Dried Products</span><span class="categories_num">(9)</span></a></li>
                        <li><a href="#"><span class="categories_name">Vegetables</span><span class="categories_num">(6)</span></a></li>
                        <li><a href="#"><span class="categories_name">Fruits Fresh</span><span class="categories_num">(4)</span></a></li>
                        <li><a href="#"><span class="categories_name">Juice</span><span class="categories_num">(7)</span></a></li>
                        <li><a href="#"><span class="categories_name">Fresh Meal</span><span class="categories_num">(12)</span></a></li>
                    </ul>
                </div>
                <div class="widget">
                    <h5 class="widget_title">Recent Posts</h5>
                    <ul class="recent_post border_bottom_dash list_none">
                        <li>
                            <div class="post_content">
                                <div class="post_img"><a href="#"><img src="images/letest_post1.jpg" alt="letest_post1"></a></div>
                                <div class="post_info">
                                    <h6><a href="#">Lorem ipsum dolor sit amet, consectetur</a></h6>
                                    <p class="small m-0">April 14, 2018</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="post_content">
                                <div class="post_img"><a href="#"><img src="images/letest_post2.jpg" alt="letest_post2"></a></div>
                                <div class="post_info">
                                    <h6><a href="#">Lorem ipsum dolor sit amet, consectetur</a></h6>
                                    <p class="small m-0">April 14, 2018</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="post_content">
                                <div class="post_img"><a href="#"><img src="images/letest_post3.jpg" alt="letest_post3"></a></div>
                                <div class="post_info">
                                    <h6><a href="#">Lorem ipsum dolor sit amet, consectetur</a></h6>
                                    <p class="small m-0">April 14, 2018</p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="widget">
                    <h5 class="widget_title">tags</h5>
                    <div class="tags"><a href="#">General</a><a href="#">Design</a><a href="#">jQuery</a><a href="#">Branding</a><a href="#">Modern</a><a href="#">Blog</a><a href="#">Quotes</a><a href="#">Advertisement</a></div>
                </div>
                <div class="widget">
                    <h5 class="widget_title">Instagram Feeds</h5>
                    <ul class="list_none instafeed">
                        <li><a href="#"><img src="images/insta_img1.jpg" alt="insta_img"><span class="insta_icon"><i class="ti-instagram"></i></span></a></li>
                        <li><a href="#"><img src="images/insta_img2.jpg" alt="insta_img"><span class="insta_icon"><i class="ti-instagram"></i></span></a></li>
                        <li><a href="#"><img src="images/insta_img3.jpg" alt="insta_img"><span class="insta_icon"><i class="ti-instagram"></i></span></a></li>
                        <li><a href="#"><img src="images/insta_img4.jpg" alt="insta_img"><span class="insta_icon"><i class="ti-instagram"></i></span></a></li>
                        <li><a href="#"><img src="images/insta_img5.jpg" alt="insta_img"><span class="insta_icon"><i class="ti-instagram"></i></span></a></li>
                        <li><a href="#"><img src="images/insta_img6.jpg" alt="insta_img"><span class="insta_icon"><i class="ti-instagram"></i></span></a></li>
                        <li><a href="#"><img src="images/insta_img7.jpg" alt="insta_img"><span class="insta_icon"><i class="ti-instagram"></i></span></a></li>
                        <li><a href="#"><img src="images/insta_img8.jpg" alt="insta_img"><span class="insta_icon"><i class="ti-instagram"></i></span></a></li>
                    </ul>
                </div>
                <div class="widget">
                    <h5 class="widget_title">Follow Me</h5>
                    <ul class="list_none social_icons radius_social">
                        <li><a class="sc_facebook" href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a class="sc_twitter" href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a class="sc_google" href="#"><i class="fab fa-google-plus-g"></i></a></li>
                        <li><a class="sc_instagram" href="#"><i class="fab fa-instagram"></i></a></li>
                        <li><a class="sc_pinterest" href="#"><i class="fab fa-pinterest"></i></a></li>
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
    name: 'pagepost',
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
}
</script>