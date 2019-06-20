<template>
    <div class="row">
        <div class="clearfix pb_20"></div>
        <div class="col-md-12">
            <div class="form-group col-12">
                <input class="form-control" id="subject" placeholder="Enter Address" name="subject" type="text">
            </div>
            <div class="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3100.4712458185345!2d106.72219114731881!3d10.741346892555724!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3175257e2c96eb2d%3A0xc31b5ab184b5a6b5!2zMzggxJDGsOG7nW5nIHPhu5EgMTAsIELDrG5oIFRodeG6rW4sIFF14bqtbiA3LCBI4buTIENow60gTWluaCwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1559390720187!5m2!1svi!2s" allowfullscreen=""></iframe>
            </div>
        </div>
        <div class="clearfix pb_20"></div>
        <div class="clearfix pb_20"></div>
        <div class="col-lg-4 col-md-6">
            <div class="heading_s2 mb-3 animation animated fadeInUp" data-animation="fadeInUp" data-animation-delay="0.1s" style="animation-delay: 0.1s; opacity: 1;">
                <h3>Get In touch</h3>
            </div>
            <p>{{about.description}}</p>
            <ul class="contact_info contact_info_style2 list_none">
                <li><span class="ti-mobile"></span>
                    <p>{{about.infor.phone}}</p>
                </li>
                <li><span class="ti-email"></span>
                    <a :href="'mailto:'+about.infor.email">{{about.infor.email}}</a>
                </li>
                <li><span class="ti-location-pin"></span>
                    <address>{{about.infor.address}}</address>
                </li>
            </ul>
        </div>
        <div class="col-lg-8 col-md-6 mt-4 mt-lg-0 ">
            <div class="field_form animation animated fadeInLeft" data-animation="fadeInLeft" data-animation-delay="0.1s" style="animation-delay: 0.1s; opacity: 1;">
                <form method="post" name="enq">
                    <div class="row">
                        <div class="form-group col-lg-6">
                            <input class="form-control" id="first-name" required="required" placeholder="Enter Name *" name="name" type="text">
                        </div>
                        <div class="form-group col-lg-6">
                            <input class="form-control" id="email" required="required" placeholder="Enter Email *" name="email" type="email">
                        </div>
                        <div class="form-group col-12">
                            <input class="form-control" id="subject" placeholder="Enter Subject" name="subject" type="text">
                        </div>
                        <div class="form-group col-lg-12">
                            <textarea class="form-control" id="description" required="required" placeholder="Message *" name="message" rows="5"></textarea>
                        </div>
                        <div class="col-lg-12">
                            <button class="btn btn-default" id="submitButton" type="submit" title="Submit Your Message!" name="submit" value="Submit">Submit</button>
                        </div>
                        <div class="col-lg-12 text-center">
                            <div class="alert-msg text-center" id="alert-msg"></div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</template>
<script>
import axios from 'axios';
import $ from 'jquery';
import productitem from '../item/product-page.vue';
export default {
    name: 'pagemenu',
    components: { productitem },
    data: function() {
        return {
            posts: [],
            about: {
                infor: {}
            }
        };
    },
    mounted() {
        axios
            .get('api/db/branch')
            .then(response => {
                this.posts = response.data.list;
            });
        axios
            .get('api/db/about')
            .then(response => {
                this.about = response.data.data;
            });
    },
    updated() {
    }
}
</script>