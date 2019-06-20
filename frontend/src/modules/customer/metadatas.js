import { make } from "./../../services/metadata";

export default [
  make("customer", { name: "id" }),
  make("customer", {
      name: "name",
      type: "string",
      present: {
        isHeader: true,
        isEditable: true,
        isCreatable: true
      }
    }),
    make("customer", {
      name: "email",
      type: "string",
      present: {
        isHeader: true,
        isEditable: true,
        isCreatable: true
      }
    })
];
