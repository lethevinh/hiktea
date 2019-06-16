<template>
    <div>
        <div class="row">
            <div class="col-md-12 text-center">
                <ul class="list_none grid_filter">
                    <li><a href="#" class="current" data-filter="*">all</a></li>
                    <li v-for="post in posts">
                        <a href="#" :data-filter="'.gallery'+post.id">{{post.name}}</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <ul class="grid_container gutter_medium work_col4">
                    <li class="grid-sizer"></li>
                    <!-- START GALLERY ITEM -->
                    <template v-for="post in posts">
                        <li v-for="image in post.images" :class="'grid_item gallery'+post.id">
                            <div class="gallery_item">
                                <a href="#" class="image_link">
                                    <img src="images/gallery_item_small1.jpg" alt="image">
                                </a>
                                <div class="gallery_content">
                                    <div class="link_container">
                                        <a href="assets/images/gallery_item1.jpg" class="image_popup"><i class="ion-image"></i></a>
                                    </div>
                                    <h5><a href="#">Grapes</a></h5>
                                    <div class="pr_categories">
                                        <a href="#">Fruits</a>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </template>
                </ul>
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
            .get('api/db/category/gallery')
            .then(response => {
                this.posts = response.data.list;
            });
    },
    updated() {

    }
}
</script>