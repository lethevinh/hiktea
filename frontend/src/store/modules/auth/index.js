import actions from "./actions";
import mutations from "./mutations";

export default {
  state: {
    user: null,
    form: {
      username: null,
      password: null
    },
    isAuthenticating: false,
    isSubmitting: false,
    errors: [],
    modules: []
  },
  mutations,
  actions
};
