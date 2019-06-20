import Vue from "vue";
import Buefy from "buefy";

import App from "./App.vue";
import ElementUI from 'element-ui';
import 'element-ui/lib/theme-chalk/index.css';
import {locale} from './services/i18n';

Vue.config.productionTip = false;

Vue.use(Buefy);
Vue.use(ElementUI, {
  locale
});
const req = require.context("./components/global/", true, /\.(js|vue)$/i);
req.keys().map(key => {
  const name = key.match(/\w+/)[0];
  return Vue.component(name, req(key).default);
});

import router from "./router";
import store from "./store";
import i18n from "./services/i18n";

new Vue({
  el: "#app",
  router,
  store,
  render: h => h(App),
  i18n
});
