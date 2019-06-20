import {
  NAMES as MUTATION_NAMES
} from "./mutations";
import {
  paging,
  submit
} from "./../../../services/hydra";
import {
  makeListConstants,
  makeFormConstants,
  makeFormActions,
  makeListActions
} from "./../../../factories/stores/actions";

export const NAMES = {
  ...makeListConstants("custommer"),
  ...makeFormConstants("custommer")
};

const listActions = makeListActions(NAMES, MUTATION_NAMES, {
  paging,
  baseUrl: "/api/customers"
});

const actions = {
  ...listActions,
  ...makeFormActions(NAMES, MUTATION_NAMES, {
    submit,
    baseUrl: "/api/customers",
    reload: listActions[NAMES.FETCH]
  })
};

export default actions;