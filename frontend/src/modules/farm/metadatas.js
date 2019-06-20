/* eslint-disable */

import { make, TYPE } from "./../../services/metadata";
import { search } from "./../../services/hydra";

const searchUserNormalizer = item => {
  var result = {
    value: "",
    data: {}
  };
  if (item) {
    result = {
      value: item.email,
      data: item
    };
  }
  return result;
};

export default [
  make("farm", { name: "id" }),
  make("farm", {
    name: "name",
    type: TYPE.STR,
    present: {
      isHeader: true,
      isEditable: true,
      isCreatable: true
    }
  }),
  make("farm", {
    name: "user",
    type: TYPE.RELATION,
    search: {
      normalize: searchUserNormalizer,
      denormalize: ({ data }) => {
        return data;
      },
      lookup: value => {
        return search("/api/users", {
          filter: "email",
          value
        }).then(items => {
          return {
            items: items.map(searchUserNormalizer),
            name: "/api/users"
          };
        });
      }
    },
    present: {
      isHeader: true,
      isEditable: true,
      isCreatable: true,
      relation: {
        display: user => user.email,
        resource: "/api/users",
        filter: "email"
      }
    }
  })
];
