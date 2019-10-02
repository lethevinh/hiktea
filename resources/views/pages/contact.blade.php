@extends('layouts.page')
@section('title', "Liên Hệ")
@section('breadcrumb')
    <div class="bg_breadcrumb">
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="{{url('/')}}"><i class="fa fa-home"></i></a></li>
                <li><span>Liên Hệ</span></li>
            </ul>
        </div>
    </div>
@stop
@section('content')
    <div id="content" class="col-sm-12 col-xs-12 col-md-12">
        <h1 class="hidden">Liên hệ với chúng tôi</h1>
        <style>
            .container_iframe_google_map iframe{
                width: 100% !important;
                height: 300px !important;
            }
        </style>
        <aside class="col-right sidebar col-sm-12">
            <div class="row">
                <div class="google-map">
                    <div class="container_iframe_google_map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.6198940298473!2d106.69774821469913!3d10.763749562371057!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752f14cc895043%3A0x36a9b2e3901dfe1c!2zMTMyIELhur9uIFbDom4gxJDhu5NuLCBQaMaw4budbmcgNiwgUXXhuq1uIDQsIEjhu5MgQ2jDrSBNaW5oLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1564139381119!5m2!1svi!2s" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </div>
        </aside>
        <div class="contact-content">
            <div class="col-main col-md-4 col-sm-12 ">
                <div class="page-title">
                    <h3 class="cat-heading">Địa chỉ của chúng tôi</h3>
                    <div class="form-contact">
                        <div class="lien-he">
                            <img src="assets/images/logo.png" alt="HIK TEA" title="HIK TEA" class="img-thumbnail">
                        </div>
                        <div class="lien-he">
                            <img src="assets/images/icon.png" alt="Revo">
                            38 Đường Số 10, P. Bình Hưng, Bình Chánh, TP. HCM
                        </div>
                        <div class="lien-he">
                            <img src="assets/images/phone-receiver.png" alt="Revo">
                            <a href="tel:0914880818">0914.880.818</a>
                        </div>
                    </div>
                </div>
            </div>
            <section class="col-main col-md-8 col-sm-12 main-contact">
                <div class="page-title">
                    <h2>Thông tin liên hệ</h2>
                </div>
                <div class="static-contain">
                    <form action="https://usmartcindy.com/lien-he" method="post" enctype="multipart/form-data">
                        <fieldset>
                            <div class="customer-name">
                                <div class="form-group">
                                    <label class="hidden control-label" for="input-name">Tên của bạn</label>
                                    <input type="text" size="35" class="input-text" value name="name" id="input-name" placeholder="Tên của bạn">
                                </div>
                                <div class="form-group">
                                    <label class="hidden control-label" for="email">Địa chỉ Email</label>
                                    <input type="email" size="35" id="email" value class="input-text" name="email" placeholder="Địa chỉ Email">
                                </div>
                            </div>
                            <div style="float:none" class="box-nd">
                                <label class="hidden control-label" for="comment">Nội dung</label>
                                <textarea name="enquiry" id="comment" title="Nội dung" class="form-control" rows="5" placeholder="Nội dung"></textarea>
                            </div>
                        </fieldset>
                        <div class="buttons-set">
                            <button type="submit" title="Submit" class="button submit"><span> Gửi đi </span></button>
                        </div>
                    </form>
                </div>
            </section>
        </div>
    </div>
@stop
