import List from "./components/List";
import ListActions from "./components/ListActions";

export const NAMES = {
  LIST: "modules.unit.list"
};

export const routes = [
  {
    path: "unit",
    name: NAMES.LIST,
    components: {
      actions: ListActions,
      content: List
    }
  }
];
