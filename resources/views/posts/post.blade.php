@extends('layouts.page')
@section('title', "Bai Viet")
@section('breadcrumb')
<section class="bg_light_orange breadcrumb_section background_bg bg_fixed bg_size_contain" data-img-src="assets/images/breadcrumb_bg.png">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-sm-12 text-center">
                <div class="page-title">
                    <h1>Bài Viết </h1>
                </div>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item">
                            <a href="#">
                                <i class="fa fa-home"></i>
                            </a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">
                            Bài Viết
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>
@stop
@section('content')
<!-- START SECTION BLOG-->
<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <div class="single_post">
                    <div class="blog_img">
                        <a href="#">
                            <img src="{{url('assets/images/blog_img1.jpg')}}" alt="blog_img1">
                        </a>
                    </div>
                    <div class="single_post_content">
                        <div class="blog_text">
                            <h2 class="blog_title">
                              {{$post->title}}
                            </h2>
                            <strong>{{$post->description}}</strong>
                            <ul class="list_none blog_meta">
                                <li><a href="#"><i class="far fa-user"></i>by <span class="text_default">admin</span></a></li>
                                <li><a href="#"><i class="far fa-comments"></i>4 Comment</a></li>
                            </ul>
                            <p>
                                {{$post->content}}
                            </p>
                            <div class="border-top border-bottom blog_post_footer">
                                <div class="row justify-content-between align-items-center">
                                    <div class="col-md-8 mb-3 mb-md-0">
                                        <div class="tags">
                                            @foreach($post->categories as $category)
                                            <a href="{{ $category->link }}">
                                                {{$category->title}}
                                            </a>
                                            @endforeach
                                        </div>
                                    </div>
                                    <div class="col-md-4 text-md-right">
                                        <div class="share">
                                            <ul class="list_none social_icons">
                                                <li><a href="#" class="sc_facebook"><i class="ion-social-facebook"></i></a></li>
                                                <li><a href="#" class="sc_twitter"><i class="ion-social-twitter"></i></a></li>
                                                <li><a href="#" class="sc_gplus"><i class="ion-social-googleplus"></i></a></li>
                                                <li><a href="#" class="sc_youtube"><i class="ion-social-youtube-outline"></i></a></li>
                                                <li><a href="#" class="sc_instagram"><i class="ion-social-instagram-outline"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="post_navigation">
                        <div class="row align-items-center justify-content-between">
                            <div class="col-auto">
                                <a href="#">
                                    <div class="d-flex align-items-center">
                                        <i class="ion-ios-arrow-thin-left mr-2"></i>
                                        <div>
                                            <span>previous Post</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-auto">
                                <a href="#">
                                    <div class="d-flex align-items-center flex-row-reverse text-right">
                                        <i class="ion-ios-arrow-thin-right ml-2"></i>
                                        <div>
                                            <span>Next Post</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
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
                        <div class="about_widget"><a href="#"><img src="assets/images/about_author.jpg" alt="about_author"></a>
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
                                    <div class="post_img"><a href="#"><img src="assets/images/letest_post1.jpg" alt="letest_post1"></a></div>
                                    <div class="post_info">
                                        <h6><a href="#">Lorem ipsum dolor sit amet, consectetur</a></h6>
                                        <p class="small m-0">April 14, 2018</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="post_content">
                                    <div class="post_img"><a href="#"><img src="assets/images/letest_post2.jpg" alt="letest_post2"></a></div>
                                    <div class="post_info">
                                        <h6><a href="#">Lorem ipsum dolor sit amet, consectetur</a></h6>
                                        <p class="small m-0">April 14, 2018</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="post_content">
                                    <div class="post_img"><a href="#"><img src="assets/images/letest_post3.jpg" alt="letest_post3"></a></div>
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
                            <li><a href="#"><img src="assets/images/insta_img1.jpg" alt="insta_img"><span class="insta_icon"><i class="ti-instagram"></i></span></a></li>
                            <li><a href="#"><img src="assets/images/insta_img2.jpg" alt="insta_img"><span class="insta_icon"><i class="ti-instagram"></i></span></a></li>
                            <li><a href="#"><img src="assets/images/insta_img3.jpg" alt="insta_img"><span class="insta_icon"><i class="ti-instagram"></i></span></a></li>
                            <li><a href="#"><img src="assets/images/insta_img4.jpg" alt="insta_img"><span class="insta_icon"><i class="ti-instagram"></i></span></a></li>
                            <li><a href="#"><img src="assets/images/insta_img5.jpg" alt="insta_img"><span class="insta_icon"><i class="ti-instagram"></i></span></a></li>
                            <li><a href="#"><img src="assets/images/insta_img6.jpg" alt="insta_img"><span class="insta_icon"><i class="ti-instagram"></i></span></a></li>
                            <li><a href="#"><img src="assets/images/insta_img7.jpg" alt="insta_img"><span class="insta_icon"><i class="ti-instagram"></i></span></a></li>
                            <li><a href="#"><img src="assets/images/insta_img8.jpg" alt="insta_img"><span class="insta_icon"><i class="ti-instagram"></i></span></a></li>
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
    </div>
</section><!-- END SECTION BLOG-->
@endsection
@section('scriptsAfterJs')
@endsection
