import {
  makeListConstants,
  makeFormConstants,
  makeFormMutations,
  makeListMutations
} from "./../../../factories/stores/mutations";

export const NAMES = {
  ...makeListConstants("farm"),
  ...makeFormConstants("farm"),
  SEARCH_LOAD: "modules.farm.search_load",
  SEARCH_LOADING: "modules.farm.search_loading"
};

export default {
  ...makeFormMutations(NAMES),
  ...makeListMutations(NAMES),
  [NAMES.SEARCH_LOADING]: state => {
    state.isSearching = true;
  },
  [NAMES.SEARCH_LOAD]: (state, payload) => {
    const { name, items } = payload;
    state.isSearching = false;
    state.search[name] = items;
  }
};
