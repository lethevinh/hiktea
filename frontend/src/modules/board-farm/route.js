import List from "./components/List";
import ListActions from "./components/ListActions";

export const NAMES = {
  INDEX: "modules.board-farm.index"
};

export const routes = [
  {
    path: "board/farm",
    name: NAMES.LIST,
    components: {
      actions: ListActions,
      content: List
    }
  }
];
