import List from "./components/List";
import ListActions from "./components/ListActions";

export const NAMES = {
  LIST: "modules.role.list"
};

export const routes = [
  {
    path: "role",
    name: NAMES.LIST,
    components: {
      actions: ListActions,
      content: List
    }
  }
];
