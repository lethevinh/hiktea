import List from "./components/List";
import Detail from "./components/Detail";
import Form from "./components/Form";

import ListActions from "./components/ListActions";
import FormActions from "./components/FormActions";

export const NAMES = {
  LIST: "modules.order.list",
  CREATE: "modules.order.create",
  EDIT: "modules.order.edit",
  DETAIL: "modules.order.detail"
};

export const routes = [
  {
    path: "order/list",
    name: NAMES.LIST,
    components: {
      actions: ListActions,
      content: List
    }
  },
  {
    path: "order/:id/detail",
    name: NAMES.DETAIL,
    components: {
      content: Detail
    }
  },
  {
    path: "order/:id/edit",
    name: NAMES.EDIT,
    components: {
      actions: FormActions,
      content: Form
    }
  },
  {
    path: "order/create",
    name: NAMES.CREATE,
    components: {
      actions: FormActions,
      content: Form
    }
  }
];
