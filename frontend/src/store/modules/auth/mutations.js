export const NAMES = {
  USER_LOAD: "moduels.auth.user-load",
  FORM_LOAD: "modules.auth.form-load",
  FORM_FIELD_CHANGE: "modules.auth.form-field-change",
  FORM_SUBMIT_SUCCESS: "modules.auth.form-submit-success",
  FORM_SUBMIT_ERROR: "modules.auth.form-submit-error",
  FORM_SUBMIT_PROGRESS: "modules.auth.form-submit-progress"
};

export default {
  [NAMES.USER_LOAD]: (state, payload) => {
    state.user = payload;
  },
  [NAMES.FORM_SUBMIT_SUCCESS]: state => {
    state.form = {
      username: null,
      password: null
    };
    state.errors = [];
  },
  [NAMES.FORM_SUBMIT_ERROR]: (state, payload) => {
    state.errors = payload;
  },
  [NAMES.FORM_SUBMIT_PROGRESS]: (state, payload) => {
    state.isSubmitting = payload;
  },
  [NAMES.FORM_FIELD_CHANGE]: (state, { field, value }) => {
    state.form = {
      ...state.form,
      [field]: value
    };
  }
};
