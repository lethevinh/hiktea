import { forTable, forForm } from "./../../services/metadata";

export const hasTable = function(metadatas) {
  return {
    computed: {
      columns: () => forTable(metadatas)
    }
  };
};

export const hasForm = function(metadatas) {
  return {
    computed: {
      fields: () => forForm(metadatas)
    }
  };
};
