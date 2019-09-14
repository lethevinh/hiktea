<footer class="bg_black txt_white">
    <div class="top_footer small_pt small_pb">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="footer_logo">
                        <a href="{{url('/')}}">
                            <img alt="logo" src="{{url('assets/images/logo_dark.png')}}"></a>
                        </div>
                    <div class="footer_desc">
                        <p>@option('description')</p>
                    </div>
                    <ul class="contact_info list_none">
                        <li><span class="ti-mobile"></span>
                            <p>@option('phone')</p>
                        </li>
                        <li>
                            <span class="ti-email"></span>
                            <a href="mailto:@option('email')">
                                @option('email')
                            </a>
                        </li>
                        <li>
                            <span class="ti-location-pin"></span>
                            <address>
                                @option('address')
                            </address>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-8">
                    <h5 class="widget_title">Vế HIK TEA</h5>
                    <ul class="list_none widget_links">
                        <li><a href="{{url('ve-hik-tea.html')}}">Về HIK Tea</a></li>
                        <li><a href="{{url('menu.html')}}">Menu</a></li>
                        <li><a href="{{url('bai-viet/khuyen-mai.html')}}">  Khuyến Mãi</a></li>
                        <li><a href="{{url('hinh-anh.html')}}">  Hình Ảnh</a></li>
                        <li><a href="{{url('bai-viet/tuyen-dung.html')}}">Tuyển Dụng</a></li>
                </ul>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-4">
                    <div class="google-maps">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3920.0950591034643!2d106.65065331456312!3d10.727151263035145!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752f172f3b8cb5%3A0xcdede9cedcb8bca1!2zVFLDgCBT4buuQSBISUtURUEgQsOsbmggSMawbmc!5e0!3m2!1svi!2s!4v1568455694485!5m2!1svi!2s" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="middle_footer">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="shopping_info"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="bottom_footer">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4">
                    <p class="copyright m-lg-0 text-center">Copyright © {{ now()->year }} All Rights Reserved </p>
                </div>
                <div class="col-lg-4 order-lg-first">
                    <ul class="list_none footer_payment text-center text-lg-left">
                        <li><a href="#"><img src="{{url('assets/images/visa.png')}}" alt="visa"></a></li>
                        <li><a href="#"><img src="{{url('assets/images/discover.png')}}" alt="discover"></a></li>
                        <li><a href="#"><img src="{{url('assets/images/master_card.png')}}" alt="master_card"></a></li>
                        <li><a href="#"><img src="{{url('assets/images/paypal.png')}}" alt="paypal"></a></li>
                        <li><a href="#"><img src="{{url('assets/images/amarican_express.png')}}" alt="amarican_express"></a></li>
                    </ul>
                </div>
                <div class="col-lg-4">
                    <ul class="list_none social_icons radius_social text-center text-lg-right">
                        <li><a class="sc_facebook" href="@option('facebook')"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a class="sc_twitter" href="@option('youtube')"><i class="fab fa-youtube"></i></a></li>
                        <li><a class="sc_instagram" href="@option('foody')"><i class="fab fa-dribbble"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="overlap_shape">
        <div class="ol_shape21">
            <div class="animation"><img data-parallax="{'y': 20, 'smoothness': 20}" src="{{url('assets/images/shape36.png')}}" alt="shape36"></div>
        </div>
        <div class="ol_shape22">
            <div class="animation"><img data-parallax="{'y': 20, 'smoothness': 20}" src="{{url('assets/images/shape37.png')}}" alt="shape37"></div>
        </div>
        <div class="ol_shape23">
            <div class="animation"><img data-parallax="{'y': 20, 'smoothness': 20}" src="{{url('assets/images/shape38.png')}}" alt="shape38"></div>
        </div>
        <div class="ol_shape24">
            <div class="animation"><img data-parallax="{'y': 20, 'smoothness': 20}" src="{{url('assets/images/shape39.png')}}" alt="shape39"></div>
        </div>
    </div>
</footer><!-- END FOOTER-->
<a class="scrollup" href="#" style="display: none;">
    <i class="ion-ios-arrow-up"></i>
</a>
