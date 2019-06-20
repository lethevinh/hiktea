import Vue from "vue";
import VueI18n from "vue-i18n";
import { merge } from 'lodash'
// load languages
import en from "./../locales/en";
import elementEn from 'element-ui/lib/locale/lang/en'

const messages = {
  en: merge(elementEn, en)
}

Vue.use(VueI18n);
export var locale = messages[process.env.VUE_APP_LOCALE];

export default new VueI18n({
  locale: process.env.VUE_APP_LOCALE,
  messages: messages
});
