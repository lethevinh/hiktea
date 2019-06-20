import Vue from "vue";
import VueRouter from "vue-router";

import NotFound from "./../screens/NotFound";
import authenticated from "./authenticated";

Vue.use(VueRouter);

const router = new VueRouter({
  routes: [
    authenticated,
    {
      path: "*",
      component: NotFound
    }
  ]
});

export default router;
