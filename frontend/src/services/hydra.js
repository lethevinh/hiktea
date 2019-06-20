import { get, post, put } from "./api";

export class ViolationsError extends Error {
  constructor(data) {
    super(data["hydra:title"]);
    this.violations = data.violations.map(violation => ({
      field: violation.propertyPath,
      message: violation.message
    }));
  }
}

const selectItems = data =>
  data["hydra:member"].map(item => ({
    ...item,
    id: item["@id"].match(/([0-9]+)/g)[0]
  }));

const selectTotalItems = data => data["hydra:totalItems"];

const makeRequest = (url, data) => {
  const resourceId = data["@id"];
  if (resourceId) {
    return put(resourceId, data);
  }
  return post(url, data);
};

export const submit = (url, data) => {
  const request = makeRequest(url, data);

  return request
    .then(response => {
      return response.data;
    })
    .catch(error => {
      const {
        response: { data }
      } = error;
      throw new ViolationsError(data);
    });
};

export const paging = (url, { page, ...rest }) => {
  return get(url, {
    params: {
      page,
      ["order[id]"]: "desc",
      ...rest
    }
  }).then(({ data }) => {
    return {
      items: selectItems(data),
      page: page,
      total: selectTotalItems(data)
    };
  });
};

export const search = (url, { filter, value }) => {
  return get(url, {
    params: {
      [filter]: value
    }
  }).then(({ data }) => {
    return selectItems(data);
  });
};

export const detail = (url) => {
  return get(url).then(({ data }) => {
    return data;
  });
};
