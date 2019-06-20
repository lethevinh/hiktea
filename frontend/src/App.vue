<template>
  <div id="app">
    <router-view v-if="isAuthenticated" />
    <screen-login v-if="!isAuthenticated" />
  </div>
</template>

<script>
import { mapState } from "vuex";
import { NAMES as AUTH_ACTION_NAMES } from './store/modules/auth/actions';
import ScreenLogin from "./screens/Login.vue";

export default {
  components: {
    ScreenLogin
  },
  created: function () {
    this.$store.dispatch(AUTH_ACTION_NAMES.CHECK);
  },
  computed: mapState({
    isAuthenticated: ({ auth: { user, isAuthenticating } }) =>
      user && !isAuthenticating
  })
};
</script>

<style lang="scss">
@import "./index.scss";
</style>
