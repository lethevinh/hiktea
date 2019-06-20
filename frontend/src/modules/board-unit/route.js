import List from "./components/List";
import ListActions from "./components/ListActions";

export const NAMES = {
  INDEX: "modules.board-unit.index"
};

export const routes = [
  {
    path: "board/unit",
    name: NAMES.LIST,
    components: {
      actions: ListActions,
      content: List
    }
  }
];
