import DeliverConfig from "./DeliveryConfig/router.js";
import Menu from "./Menu/router.js";
import Order from "./Order/router.js";
import Product from "./Product/router.js";
import Report from "./Report/router.js";
import User from "./User/router.js";
import Dashboard from "./Dashboard/router.js";
const routes = [...DeliverConfig.router,...Menu.router,...Order.router,...Product.router,...Report.router,...User.router,...Dashboard.router];
export default{
    router:routes
}