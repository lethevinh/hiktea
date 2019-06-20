import List from "./components/List";
import ListActions from "./components/ListActions";

export const NAMES = {
  LIST: "modules.variety.list"
};

export const routes = [
  {
    path: "variety",
    name: NAMES.LIST,
    components: {
      actions: ListActions,
      content: List
    }
  }
];
