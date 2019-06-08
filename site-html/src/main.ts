require('./style/site.css');
import { Page } from './script/page';
require('./mock/index');

//shortcode
import branch from './script/components/shortcode/branch.vue';
import post from './script/components/shortcode/post.vue';
import product from './script/components/shortcode/product.vue';
import slide from './script/components/shortcode/slide.vue';

//page
import pagemenu from './script/components/page/menu.vue';
import pageblog from './script/components/page/post.vue';
import pagekhuyenmai from './script/components/page/post.vue';
import pagetuyendung from './script/components/page/post.vue';
import pagecuahang from './script/components/page/branch.vue';


import 'owl.carousel/dist/assets/owl.carousel.css';
import 'owl.carousel';


var page = new Page({
    conponents: { branch, post, product, slide },
    pages: { pagemenu, pageblog, pagekhuyenmai, pagetuyendung, pagecuahang }
});

$(document).ready(function() {
    page.init().run();
});