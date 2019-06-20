/* eslint-disable */

import { make, TYPE } from "./../../services/metadata";
import { search } from "./../../services/hydra";

const searchCustomerNormalizer = item => {
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
  make("order", { name: "id" }),
  make("order", {
    name: "number",
    type: TYPE.STR,
    present: {
      isHeader: true,
      isEditable: true,
      isCreatable: true
    }
  }),
  make("order", {
    name: "contract",
    type: TYPE.STR,
    present: {
      isHeader: true,
      isEditable: true,
      isCreatable: true
    }
  }),
  make("order", {
    name: "season",
    type: TYPE.STR,
    present: {
      isHeader: true,
      isEditable: true,
      isCreatable: true
    }
  }),
  make("order", {
    name: "customer",
    type: TYPE.RELATION,
    search: {
      normalize: searchCustomerNormalizer,
      denormalize: ({ data }) => {
        return data;
      },
      lookup: value => {
        return search("/api/customers", {
          filter: "email",
          value
        }).then(items => {
          return {
            items: items.map(searchCustomerNormalizer),
            name: "/api/customers"
          };
        });
      }
    },
    present: {
      isHeader: true,
      isEditable: true,
      isCreatable: true,
      relation: {
        display: customer => customer.email,
        resource: "/api/customers",
        filter: "email"
      }
    }
  })
];
