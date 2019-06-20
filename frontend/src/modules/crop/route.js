import List from "./components/List";
import ListActions from "./components/ListActions";

export const NAMES = {
  LIST: "modules.crop.list"
};

export const routes = [
  {
    path: "crop",
    name: NAMES.LIST,
    components: {
      actions: ListActions,
      content: List
    }
  }
];
