import { NAMES as MUTATION_NAMES } from "./mutations";
import { paging, submit } from "./../../../services/hydra";
import {
  makeListConstants,
  makeFormConstants,
  makeFormActions,
  makeListActions
} from "./../../../factories/stores/actions";

export const NAMES = {
  ...makeListConstants("user"),
  ...makeFormConstants("user")
};

const listActions = makeListActions(NAMES, MUTATION_NAMES, {
  paging,
  baseUrl: "/api/users"
});

const actions = {
  ...listActions,
  ...makeFormActions(NAMES, MUTATION_NAMES, {
    submit,
    baseUrl: "/api/users",
    reload: listActions[NAMES.FETCH]
  })
};

export default actions;
