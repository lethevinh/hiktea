import axios from "axios";

const client = axios.create({
  baseURL: process.env.VUE_APP_API_URL
});

export const attach = ({ token }) => {
  client.defaults.headers.common["Authorization"] = `Bearer ${token}`;
};

export const intercept = ({
  request: { config, onRequestError } = {},
  response: { parse, error: onResponseError } = {}
}) => {
  client.interceptors.request.use(config, onRequestError);
  client.interceptors.response.use(parse, onResponseError);
};

export const login = ({ username, password }) => {
  return client.post("login/check", { username, password }).then(body => {
    const {
      data: { token }
    } = body;

    attach({ token });
    return body.data;
  });
};

export const get = (url, queries) => {
  return client.get(url, queries);
};

export const post = (url, data) => {
  return client.post(url, data);
};

export const put = (url, data) => {
  return client.put(url, data);
};

export const remove = (url, data) => {
  return client.delete(url, data);
};
