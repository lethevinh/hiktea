import actions from "./actions";
import mutations from "./mutations";

export default {
  state: {
    items: [],
    isLoading: false,
    isSubmitting: false,
    form: null,
    errors: []
  },
  mutations,
  actions
};
