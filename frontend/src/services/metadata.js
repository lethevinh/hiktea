import i18n from "./i18n";

export const TYPE = {
  BOOL: "boolean",
  NUM: "numeric",
  EMAIL: "email",
  STR: "string",
  RELATION: "relation"
};

const guessIsHeader = ({ name }) => {
  return name === "id";
};

const guessColumnWidth = ({ name }) => {
  switch (true) {
    case name === "id":
      return 40;
  }
  return null;
};

const guessType = ({ name, type }) => {
  if (!type) {
    switch (true) {
      case name === "email":
        return TYPE.EMAIL;
      case name === "id":
        return TYPE.NUM;
      case name.startsWith("is"):
        return TYPE.BOOL;
    }
  }

  if (Object.values(TYPE).indexOf(type) < 0) {
    throw new Error(`Type ${type} is not supported`);
  }

  return type;
};

const guessLabel = (module, { name, label }) => {
  if (label) {
    return label;
  }
  switch (true) {
    case name === "id":
      return i18n.t(`modules.field.id`);
    case name === "email":
      return i18n.t(`modules.field.email`);
    default:
      return i18n.t(`modules.${module}.field.${name}`);
  }
};

const guessIsEditable = ({ name }) => {
  switch (true) {
    case name === "id":
      return false;
    default:
      return true;
  }
};

const guessIsCreatable = ({ name }) => {
  switch (true) {
    case name === "id":
      return false;
    default:
      return true;
  }
};

export const make = (module, { name, type, label, present = {}, ...rest }) => {
  return {
    name,
    label: guessLabel(module, { name, type, label }),
    type: guessType({ name, type }),
    present: {
      columnWidth: guessColumnWidth({ name }),
      isHeader: guessIsHeader({ name }),
      isEditable: guessIsEditable({ name }),
      isCreatable: guessIsCreatable({ name }),
      ...present
    },
    ...rest
  };
};

export const forTable = metadatas =>
  metadatas.filter(metadata => metadata.present.isHeader);

export const forForm = metadatas =>
  metadatas.filter(
    metadata => metadata.present.isCreatable || metadata.present.isEditable
  );
