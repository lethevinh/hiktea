import { make } from "./../../services/metadata";

export default [
  make("crop", { name: "id" }),
  make("crop", {
    name: "name",
    type:"string",
    present: {
      isHeader: true,
      isEditable: true,
      isCreatable: true
    }
  }),
];
