import actions from "./actions";
import mutations from "./mutations";

export default {
  state: {
    items: [],
    total: 0,
    isLoading: false,
    isSubmitting: false,
    form: null,
    errors: []
  },
  mutations,
  actions
};
