import { NAMES as MUTATION_NAMES } from "./mutations";
import { set, get, remove } from "./../../../services/storage";
import { intercept, login } from "./../../../services/api";

export const NAMES = {
  CHECK: "modules.auth.check",
  CHANGE: "modules.auth.change",
  SUBMIT: "modules.auth.submit",
  LOGOUT: "modules.auth.logout"
};

const USER_KEY = "user";

const logout = (commit) => {
    commit(MUTATION_NAMES.USER_LOAD, null);
    remove(USER_KEY);
};

const setup = (commit, { token }) => {
  intercept({
    request: {
      config: config => {
        config.headers.common["Authorization"] = `Bearer ${token}`;
        return config;
      }
    },
    response: {
      error: error => {
        const { status } = error.response;
        if (status === 401) {
          logout(commit);
        }
        return Promise.reject(error);
      }
    }
  });
};

export default {
  [NAMES.CHECK]: ({ commit }) => {
    const cached = get(USER_KEY);

    if (cached) {
      const { token, username } = JSON.parse(cached);
      setup(commit, { token });
      commit(MUTATION_NAMES.USER_LOAD, {
        username
      });
    }
  },
  [NAMES.SUBMIT]: ({ commit }, payload) => {
    commit(MUTATION_NAMES.FORM_SUBMIT_PROGRESS, true);
    login(payload).then(
      ({ token }) => {
        const cached = {
          username: payload.username,
          token
        };

        commit(MUTATION_NAMES.FORM_SUBMIT_SUCCESS);
        commit(MUTATION_NAMES.USER_LOAD, cached);
        commit(MUTATION_NAMES.FORM_SUBMIT_PROGRESS, false);
        setup(commit, { token });
        set(USER_KEY, JSON.stringify(cached));
      },
      error => {
        const { message } = error.response.data;
        commit(MUTATION_NAMES.FORM_SUBMIT_PROGRESS, false);
        commit(MUTATION_NAMES.FORM_SUBMIT_ERROR, [
          {
            field: "_",
            messages: [message]
          }
        ]);
      }
    );
  },
  [NAMES.CHANGE]: ({ commit }, payload) => {
    commit(MUTATION_NAMES.FORM_FIELD_CHANGE, payload);
  },
  [NAMES.LOGOUT]: ({ commit }) => {
    logout(commit);
  }
};
