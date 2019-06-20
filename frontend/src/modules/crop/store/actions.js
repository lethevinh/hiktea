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
  ...makeListConstants("crop"),
  ...makeFormConstants("crop")
};

const listActions = makeListActions(NAMES, MUTATION_NAMES, {
  paging,
  baseUrl: "/api/crops"
});

const actions = {
  ...listActions,
  ...makeFormActions(NAMES, MUTATION_NAMES, {
    submit,
    baseUrl: "/api/crops",
    reload: listActions[NAMES.FETCH]
  })
};

export default actions;