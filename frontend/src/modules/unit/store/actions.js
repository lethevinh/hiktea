import { NAMES as MUTATION_NAMES } from "./mutations";

export const NAMES = {
  FETCH: "modules.unit.fetch",
  EDIT: "modules.unit.edit",
  CHANGE: "modules.unit.change",
  SUBMIT: "modules.unit.submit"
};

const validate = data => {
  if (data.name === "a") {
    return {
      errors: [
        {
          field: "_",
          messages: ["Submit failed"]
        },
        {
          field: "name",
          messages: ["Name must not be empty", "Name is atleast 5 chars"]
        }
      ]
    };
  }

  return {
    errors: []
  };
};

export default {
  [NAMES.SUBMIT]: ({ commit }, payload) => {
    // TODO: handle soft validations here and display message
    const { errors } = validate(payload);
    if (errors.length > 0) {
      commit(MUTATION_NAMES.FORM_SUBMIT_ERROR, errors);
      return;
    }
    commit(MUTATION_NAMES.FORM_SUBMIT_PROGRESS, true);
    setTimeout(() => {
      commit(MUTATION_NAMES.FORM_SUBMIT_SUCCESS, payload);
      commit(MUTATION_NAMES.FORM_SUBMIT_PROGRESS, false);
    }, 2000);
  },
  [NAMES.CHANGE]: ({ commit }, payload) => {
    // TODO: handle throtle on change too fast - especially on input
    commit(MUTATION_NAMES.FORM_FIELD_CHANGE, payload);
  },
  [NAMES.EDIT]: ({ commit }, payload) => {
    commit(MUTATION_NAMES.FORM_LOAD, payload);
  },
  [NAMES.FETCH]: ({ commit }) => {
    commit(MUTATION_NAMES.LOADING);
    setTimeout(() => {
      commit(MUTATION_NAMES.LOAD, [
        {
          id: 1,
          name: "Linh",
          farm: "H123",
          user: "linh@gmail.com"
        },
        {
          id: 2,
          name: "Giang",
          farm: "H123",
          user: "giang@gmail.com"
        }
      ]);
    }, 2000);
  }
};
