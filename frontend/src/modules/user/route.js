import List from "./components/List";
import ListActions from "./components/ListActions";

export const NAMES = {
  LIST: "modules.user.list"
};

export const routes = [
  {
    path: "user",
    name: NAMES.LIST,
    components: {
      actions: ListActions,
      content: List
    }
  }
];
