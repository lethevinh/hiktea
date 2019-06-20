import Vue from "vue";
import Vuex from "vuex";

import auth from "./modules/auth";
import order from "./../modules/order/store";
import crop from "./../modules/crop/store";
import variety from "./../modules/variety/store";
import customer from "./../modules/customer/store";
import unit from "./../modules/unit/store";
import farm from "./../modules/farm/store";
import role from "./../modules/role/store";
import user from "./../modules/user/store";
import boardFarm from "./../modules/board-farm/store";
import boardUnit from "./../modules/board-unit/store";

Vue.use(Vuex);

export default new Vuex.Store({
  strict: true,
  modules: {
    auth,
    order,
    crop,
    variety,
    customer,
    unit,
    farm,
    role,
    user,
    boardFarm,
    boardUnit
  }
});
