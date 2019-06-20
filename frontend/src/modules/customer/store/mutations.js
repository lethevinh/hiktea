import {
  makeListConstants,
  makeFormConstants,
  makeFormMutations,
  makeListMutations
} from "./../../../factories/stores/mutations";

export const NAMES = {
  ...makeListConstants("customer"),
  ...makeFormConstants("customer")
};

export default {
  ...makeFormMutations(NAMES),
  ...makeListMutations(NAMES)
};
