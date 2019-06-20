import {
  makeListConstants,
  makeFormConstants,
  makeFormMutations,
  makeListMutations
} from "./../../../factories/stores/mutations";

export const NAMES = {
  ...makeListConstants("crop"),
  ...makeFormConstants("crop")
};

export default {
  ...makeFormMutations(NAMES),
  ...makeListMutations(NAMES)
};
