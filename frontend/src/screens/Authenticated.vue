<template>
  <section class="screen authenticated">
    <navbar />
    <section class="section">
      <div class="container is-widescreen">
        <nav class="level">
          <div class="level-left is-min-height-50">
            <breadcrumb />
          </div>
          <div class="level-right">
            <router-view name="actions" />
          </div>
        </nav>

        <!-- <b-notification>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce id fermentum quam. Proin sagittis, nibh id hendrerit imperdiet, elit sapien laoreet elit
        </b-notification> -->

        <router-view name="content" />
      </div>
    </section>
  </section>
</template>

<script>
import Navbar from "./../components/Navbar.vue";
import Breadcrumb from "./../components/Breadcrumb.vue";

export default {
  components: {
    Navbar,
    Breadcrumb
  }
};
</script>