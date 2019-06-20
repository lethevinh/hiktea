import { make } from "./../../services/metadata";

export default [
  make("user", { name: "id" }),
  make("user", {
    name: "email",
    present: {
      isHeader: true,
      isEditable: true,
      isCreatable: true
    }
  }),
  make("user", {
    name: "isActive",
    present: {
      isHeader: true,
      isEditable: false,
      isCreatable: false
    }
  })
];
