import List from "./components/List";
import ListActions from "./components/ListActions";

export const NAMES = {
  LIST: "modules.customer.list"
};

export const routes = [
  {
    path: "customer",
    name: NAMES.LIST,
    components: {
      actions: ListActions,
      content: List
    }
  }
];
