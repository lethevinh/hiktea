import {
  NAMES as MUTATION_NAMES
} from "./mutations";
import {
  paging,
  submit,
  detail
} from "./../../../services/hydra";
import {
  makeListConstants,
  makeFormConstants,
  makeFormActions,
  makeListActions
} from "./../../../factories/stores/actions";

export const NAMES = {
  ...makeListConstants("order"),
  ...makeFormConstants("order"),
  SEARCH: "modules.order.search"
};

const listActions = makeListActions(NAMES, MUTATION_NAMES, {
  paging,
  baseUrl: "/api/orders"
});

const actions = {
  ...listActions,
  ...makeFormActions(NAMES, MUTATION_NAMES, {
    submit,
    baseUrl: "/api/orders",
    reload: listActions[NAMES.FETCH],
    detail
  }),
  [NAMES.SEARCH]: ({
    commit
  }, payload) => {
    const {
      resource: {
        search: {
          lookup
        }
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
