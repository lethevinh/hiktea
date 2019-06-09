<template>
    <div class="row">
        <div class="col-lg-9">
            <div class="row shop_container grid_view">
                <template v-for="post in posts">
                    <div class="clearfix heading_s2" :id="'MENU'+post.id">
                        <h2>{{post.name}}</h2>
                    </div>
                    <productitem v-for="(product, index) in post.products" :key="product.id" :product="product" />
                </template>
            </div>
        </div>
        <div class="col-lg-3 order-lg-first mt-5 mt-lg-0">
            <div class="sidebar stikySidebar">
                <div class="widget menu">
                    <h5 class="widget_title">MENU</h5>
                    <ul class="list_none widget_categories border_bottom_dash menu_sidebar">
                        <li v-for="post in posts">
                            <a :href="'#MENU'+post.id">
                                <span class="categories_name">{{post.name}}</span>
                                <span class="categories_num">({{post.countproduct}})</span>
                            </a>
                        </li>
                    </ul>
                </div>
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
            posts: []
        };
    },
    mounted() {
        axios
            .get('api/db/category/product')
            .then(response => {
                let categories = response.data.list
                this.posts = categories;
                let self = this;
                categories.forEach(function(category, index) {
                    self.posts[index].countproduct = category.products.length;
                });
            });
    },
    updated() {
        // click active menu 
        $('.widget.menu ul li a').click(function(e) {
            e.preventDefault();
            $('.widget.menu ul li a').removeClass('active');
            $(this).addClass('active');
        });

        // click scroll to menu
        $('.widget.menu ul li a')
            .click(function(event) {
                // On-page links
                if (
                    location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') &&
                    location.hostname == this.hostname
                ) {
                    // Figure out element to scroll to
                    var target = $(this.hash);
                    target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                    // Does a scroll target exist?
                    if (target.length) {
                        // Only prevent default if animation is actually gonna happen
                        event.preventDefault();
                        var scrollTop = target.offset().top - 150;
                        $('html, body').animate({
                            scrollTop: scrollTop
                        }, 2000, function() {
                            // Callback after animation
                            // Must change focus!
                            var $target = $(target);
                            $target.focus();
                            if ($target.is(":focus")) { // Checking if the target was focused
                                return false;
                            } else {
                                $target.attr('tabindex', '-1'); // Adding tabindex for elements not focusable
                                $target.focus(); // Set focus again
                            };
                        });
                    }
                }
            });

        // Scroll active menu
        // Cache selectors
        var topMenu = $(".menu_sidebar"),
            topMenuHeight = topMenu.outerHeight() + 15,
            // All list items
            menuItems = topMenu.find("a"),
            // Anchors corresponding to menu items
            scrollItems = menuItems.map(function() {
                var item = $($(this).attr("href"));
                if (item.length) { return item; }
            });
        $(window).scroll(function() {
            // Get container scroll position
            var fromTop = $(this).scrollTop() + topMenuHeight;

            // Get id of current scroll item
            var cur = scrollItems.map(function() {
                if ($(this).offset().top < fromTop)
                    return this;
            });
            // Get the id of the current element
            cur = cur[cur.length - 1];
            var id = cur && cur.length ? cur[0].id : "";
            // Set/remove active class
            menuItems.removeClass('active');
            menuItems
                .parent()
                .end().filter("[href='#" + id + "']").addClass("active");
        });
    }
}
</script>