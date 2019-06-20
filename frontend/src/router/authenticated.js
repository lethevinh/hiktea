import Authenticated from "./../screens/Authenticated";
import { routes as orderRoutes } from "./../modules/order";
import { routes as cropRoutes } from "./../modules/crop";
import { routes as varietyRoutes } from "./../modules/variety";
import { routes as customerRoutes } from "./../modules/customer";
import { routes as unitRoutes } from "./../modules/unit";
import { routes as farmRoutes } from "./../modules/farm";
import { routes as roleRoutes } from "./../modules/role";
import { routes as userRoutes } from "./../modules/user";
import { routes as boardFarmRoutes } from "./../modules/board-farm";
import { routes as boardUnitRoutes } from "./../modules/board-unit";

export default {
  path: "/",
  component: Authenticated,
  children: [
    ...orderRoutes,
    ...cropRoutes,
    ...varietyRoutes,
    ...customerRoutes,
    ...unitRoutes,
    ...farmRoutes,
    ...roleRoutes,
    ...userRoutes,
    ...boardFarmRoutes,
    ...boardUnitRoutes
  ]
};
