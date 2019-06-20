export const makeListConstants = module => ({
  LOADING: `modules.${module}.loading`,
  LOAD: `modules.${module}.load`
});

export const makeFormConstants = module => ({
  FORM_LOAD: `modules.${module}.form-load`,
  FORM_FIELD_CHANGE: `modules.${module}.form-field-change`,
  FORM_SUBMIT_SUCCESS: `modules.${module}.form-submit-success`,
  FORM_SUBMIT_ERROR: `modules.${module}.form-submit-error`,
  FORM_SUBMIT_PROGRESS: `modules.${module}.form-submit-progress`
});

export const makeListMutations = MUTATION_NAMES => ({
  [MUTATION_NAMES.LOADING]: state => {
    state.isLoading = true;
  },
  [MUTATION_NAMES.LOAD]: (state, { items, total }) => {
    state.items = items;
    state.total = total;
    state.isLoading = false;
  }
});

export const makeFormMutations = MUTATION_NAMES => ({
  [MUTATION_NAMES.FORM_SUBMIT_SUCCESS]: state => {
    state.form = null;
    state.errors = [];
  },
  [MUTATION_NAMES.FORM_SUBMIT_ERROR]: (state, payload) => {
    state.errors = payload;
  },
  [MUTATION_NAMES.FORM_SUBMIT_PROGRESS]: (state, payload) => {
    state.isSubmitting = payload;
  },
  [MUTATION_NAMES.FORM_FIELD_CHANGE]: (state, { field, value }) => {
    state.form = {
      ...state.form,
      [field]: value
    };
  },
  [MUTATION_NAMES.FORM_LOAD]: (state, payload) => {
    state.form = payload;
    state.errors = [];
  }
});
