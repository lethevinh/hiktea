import List from "./components/List";
import ListActions from "./components/ListActions";

export const NAMES = {
  LIST: "modules.farm.list"
};

export const routes = [
  {
    path: "farm",
    name: NAMES.LIST,
    components: {
      actions: ListActions,
      content: List
    }
  }
];
