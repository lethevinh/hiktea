export const NAMES = {
  LOADING: "modules.unit.loading",
  LOAD: "modules.unit.load",
  FORM_LOAD: "modules.unit.form-load",
  FORM_FIELD_CHANGE: "modules.unit.form-field-change",
  FORM_SUBMIT_SUCCESS: "modules.unit.form-submit-success",
  FORM_SUBMIT_ERROR: "modules.unit.form-submit-error",
  FORM_SUBMIT_PROGRESS: "modules.unit.form-submit-progress"
};

export default {
  [NAMES.FORM_SUBMIT_SUCCESS]: state => {
    state.form = null;
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
  },
  [NAMES.FORM_LOAD]: (state, payload) => {
    state.form = payload;
    state.errors = [];
  },
  [NAMES.LOADING]: state => {
    state.isLoading = true;
  },
  [NAMES.LOAD]: (state, payload) => {
    state.items = payload;
    state.isLoading = false;
  }
};
