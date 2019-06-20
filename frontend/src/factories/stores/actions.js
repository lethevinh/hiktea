import { remove } from "./../../services/api";
export const makeListConstants = module => ({
  FETCH: `modules.${module}.fetch`,
  DELETE: `modules.${module}.delete`,
});

export const makeFormConstants = module => ({
  DETAIL: `modules.${module}.detail`,
  EDIT: `modules.${module}.edit`,
  CHANGE: `modules.${module}.change`,
  SUBMIT: `modules.${module}.submit`
});

export const makeFormActions = (
  ACTION_NAMES,
  MUTATION_NAMES,
  { submit, baseUrl, reload, detail }
) => {
  return {
    [ACTION_NAMES.SUBMIT]: ({ commit }, { form, page }) => {
      commit(MUTATION_NAMES.FORM_SUBMIT_PROGRESS, true);
      submit(baseUrl, form)
        .then(data => {
          commit(MUTATION_NAMES.FORM_SUBMIT_SUCCESS, data);
          commit(MUTATION_NAMES.FORM_SUBMIT_PROGRESS, false);
          reload({ commit }, { page });
        })
        .catch(error => {
          if (error.violations) {
            commit(MUTATION_NAMES.FORM_SUBMIT_ERROR, error.violations);
            commit(MUTATION_NAMES.FORM_SUBMIT_PROGRESS, false);
            return;
          }
          throw error;
        });
    },
    [ACTION_NAMES.CHANGE]: ({ commit }, payload) => {
      commit(MUTATION_NAMES.FORM_FIELD_CHANGE, payload);
    },
    [ACTION_NAMES.EDIT]: ({ commit }, payload) => {
      commit(MUTATION_NAMES.FORM_LOAD, payload);
    },
    [ACTION_NAMES.DETAIL]: ({ commit }, { id: id}) => {
      commit(MUTATION_NAMES.FORM_SUBMIT_PROGRESS, true);
      detail(baseUrl + '/' + id).then(data => {
        commit(MUTATION_NAMES.FORM_LOAD, data);
        commit(MUTATION_NAMES.FORM_SUBMIT_PROGRESS, false);
      });
    }
  };
};

export const makeListActions = (
  ACTION_NAMES,
  MUTATION_NAMES,
  { paging, baseUrl }
) => {
  return {
    [ACTION_NAMES.FETCH]: ({ commit }, { page = 1 }) => {
      commit(MUTATION_NAMES.LOADING);
      paging(baseUrl, { page }).then(data => {
        commit(MUTATION_NAMES.LOAD, data);
      });
    },
    [ACTION_NAMES.DELETE]: ({ commit }, { item }) => {
      commit(MUTATION_NAMES.LOADING);
      remove(baseUrl + "/" + item.id).then(() => {
        paging(baseUrl, 1).then(data => {
          commit(MUTATION_NAMES.LOAD, data);
        });
      });
    }
  };
};
