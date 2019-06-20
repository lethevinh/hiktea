import {
  makeListConstants,
  makeFormConstants,
  makeFormMutations,
  makeListMutations
} from "./../../../factories/stores/mutations";

export const NAMES = {
  ...makeListConstants("user"),
  ...makeFormConstants("user")
};

export default {
  ...makeFormMutations(NAMES),
  ...makeListMutations(NAMES)
};
