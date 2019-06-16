require('./style/site.css');
import { Page } from './script/page';
require('./mock/index');

//shortcode
import branch from './script/components/shortcode/branch.vue';
import post from './script/components/shortcode/post.vue';
import product from './script/components/shortcode/product.vue';
import slide from './script/components/shortcode/slide.vue';
import cart from './script/components/item/cart.vue';
import modal from './script/components/item/dialog.vue';

//page
import pagemenu from './script/components/page/menu.vue';
import pageblog from './script/components/page/post.vue';
import pagekhuyenmai from './script/components/page/post.vue';
import pagetuyendung from './script/components/page/post.vue';
import pagebranch from './script/components/page/branch.vue';
import pagegallery from './script/components/page/gallery.vue';
import pagebooking from './script/components/page/booking.vue';


import 'owl.carousel/dist/assets/owl.carousel.css';
import 'owl.carousel';

var page = new Page({
    components: { branch, post, product, slide, cart, modal },
    pages: { pagemenu, pageblog, pagekhuyenmai, pagetuyendung, pagebranch, pagegallery, pagebooking }
});

declare var window: any;
window.page = page;

$(document).ready(function() {
    page.init();
});