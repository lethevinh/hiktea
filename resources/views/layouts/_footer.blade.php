<footer id="footer">
    <div class="newsletter-wrap">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-8">
                    <div class="newsletter">
                        <form id="formNewLestter1099535982" method="post" class="formNewLestter form-khuyen-mai">
                            <h3 class="title">Đăng ký nhận tin</h3>
                            <div class="khuyen-mai">
                                <input type="email" placeholder="Email..." class="input-text email" name="email" id="newsletter1">
                                <button type="submit" name="submitNewsletter" class="subscribe" value="Đăng ký!">
                                    <span>Đăng ký!</span></button>
                                <input type="hidden" value="1" name="action">
                                <div class="valid clearfix"></div>
                            </div>
                        </form>
                        <script type="text/javascript">
                        $(document).ready(function() {
                            var id = '#formNewLestter1099535982';
                            $(id + ' .title').bind('click', function() {
                                $(id).toggleClass('active');
                            });
                            $(id).on('submit', function() {
                                var email = $(id + ' .email').val();
                                $(".success_inline, .warning_inline, .error").remove();
                                if (!isValidEmailAddress(email)) {
                                    $(id + ' .valid').html("Email không hợp lệ");
                                    $(id + ' .email').focus();
                                    return false;
                                }
                                var url = "index.php?route=tool/newsletter";
                                $.ajax({
                                    type: "post",
                                    url: url,
                                    data: $(id).serialize(),
                                    dataType: 'json',
                                    success: function(json) {
                                        $(".success_inline, .warning_inline, .error").remove();
                                        if (json['error']) {
                                            $(id + ' .valid').html(json['error']);
                                        }
                                        if (json['success']) {
                                            $(id + ' .valid').html(json['success']);
                                            $(id)[0].reset();
                                        }
                                    }
                                });
                                return false;
                            });
                        });

                        function isValidEmailAddress(emailAddress) {
                            var pattern = new RegExp(/^(("[\w-\s]+")|([\w-]+(?:\.[\w-]+)*)|("[\w-\s]+")([\w-]+(?:\.[\w-]+)*))(@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$)|(@\[?((25[0-5]\.|2[0-4][0-9]\.|1[0-9]{2}\.|[0-9]{1,2}\.))((25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\.){2}(25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\]?$)/i);
                            return pattern.test(emailAddress);
                        }

                        </script>
                    </div>
                    <!--newsletter-->
                </div>
                <div class="col-xs-12 col-sm-12 col-md-4">
                    <div class="inner">
                        <div class>
                            <div class="social pull-right">
                                <h3 class="title"></h3>
                                <ul class="link">
                                    <li class="fb pull-left"><a href="https://www.facebook.com/USMARTCINDY/"><i class="fa fa-facebook"></i></a></li>
                                    <li class="tw pull-left"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li class="googleplus pull-left"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    <li class="youtube pull-left"><a href="#"><i class="fa fa-youtube"></i></a></li>
                                    <li class="instagram pull-left"><a href="#"><i class="fa fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-inner">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-6">
                    <div class="footer-column-last pull-left">
                        <h4>Siêu Thị Hàng Mỹ US Mart Cindy</h4>
                        <div class="info_footer">
                            <address>
                                <i class="add-icon">&nbsp;</i>
                                132 Bến Văn Đồn ,Phường 6, Quận 4 ,TP.HCM </address>
                            <div class="phone-footer">
                                <i class="phone-icon">&nbsp;</i>
                                <a href="tel:0914880818">0914.880.818</a></div>
                            <div class="email-footer">
                                <i class="email-icon">&nbsp;</i>
                                <a href="mailto:uscindymart@gmail.com">uscindymart@gmail.com</a></div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6">
                    <div class="row">
                        <div class="col-xs-12 col-sm-4 col-md-6 custom-footer-1">
                            <div class="fix-mobile5">
                                <div class="footer-column pull-left">
                                    <h4>Thông tin</h4>
                                    <ul class="links">
                                        <li><a href="{{url('gioi-thieu.html')}}">Giới thiệu</a></li>
                                        <li><a href="{{url('van-chuyen.html')}}">Chính sách vận chuyển</a></li>
                                        <li><a href="{{url('quy-dinh.html')}}">Quy định &amp; Chính sách</a></li>
                                        <li><a href="{{url('chinh-sach-bao-mat.html')}}">Chính sách bảo mật</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-4 col-md-7">
                            <div class=" fix-mobile5">
                                <div class="footer-column pull-left">
                                    <h4></h4>
                                    <div class="fb_block_f" style="overflow:hidden">
                                        <div class="fb-page" data-href="https://www.facebook.com/USMARTCINDY/" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="coppyright">&copy; Copyright 2019 Siêu Thị Hàng Mỹ US Mart Cindy. Thiết kế bởi <a target="_blank" href="https://www.osa.vn?utm_source=www.hangmyauthentic.vn&utm_medium=referral&utm_campaign=copyrightwebdesign&utm_term=footerurl&utm_content=footer">osa</a></div>
                    <div class="text-center">
                        <div>
                            <img class="first" src="{{url('assets/images/payments-1.png')}}" alt="payments-1">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<link rel="stylesheet" href="{{url('assets/css/social_login_button.css')}}">
<!-- Facebook Login -->
<!-- Google Login -->
<a href="javascript:void(0)" id="toTop" style="display: block;"><span id="toTopHover" style="opacity: 0.7;"></span></a>
<script type="text/javascript" src="{{url('assets/js/custom.js')}}"></script>
<!-- Show Popup Cart -->
<button id="btn_show_cart" type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-popupcart-modal-lg" style="display: none;"></button>
<div class="modal fade bs-popupcart-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Giỏ hàng</h4>
            </div>
            <div class="modal-body" id="load_info_cart"></div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Tiếp tục mua hàng</button>
                <a href="thanh-toan.html" class="btn btn-primary">Tiến hành thanh toán</a>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
/* Sau khi tat khung popup cart, cap nhat lai gio hang tren header */
$('.bs-popupcart-modal-lg').on('hidden.bs.modal', function(e) {
    $.ajax({
        url: 'index.php?route=checkout/cart/getTotalProductInCart',
        type: 'post',
        dataType: 'json',
        beforeSend: function() {},
        complete: function() {},
        success: function(json) {
            var out = json['total'].substr(0, json['total'].indexOf(' '));
            $('#cart-total').html(out);
            $('#cart > ul').load('index.php?route=common/cart/info ul li');
        }
    });
});

</script>
