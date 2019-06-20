import { NAMES as MUTATION_NAMES } from "./mutations";
import { paging, submit } from "./../../../services/hydra";
import {
  makeListConstants,
  makeFormConstants,
  makeFormActions,
  makeListActions
} from "./../../../factories/stores/actions";

export const NAMES = {
  ...makeListConstants("farm"),
  ...makeFormConstants("farm"),
  SEARCH: "modules.farm.search"
};

const listActions = makeListActions(NAMES, MUTATION_NAMES, {
  paging,
  baseUrl: "/api/farms"
});

const actions = {
  ...listActions,
  ...makeFormActions(NAMES, MUTATION_NAMES, {
    submit,
    baseUrl: "/api/farms",
    reload: listActions[NAMES.FETCH]
  }),
  [NAMES.SEARCH]: ({ commit }, payload) => {
    const {
      resource: {
        search: { lookup }
      },
      value
    } = payload;

    commit(MUTATION_NAMES.SEARCH_LOADING);
    lookup(value).then(results => {
      commit(MUTATION_NAMES.SEARCH_LOAD, results);
    });
  }
};

export default actions;
