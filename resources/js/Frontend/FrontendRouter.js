import CustomerRouter from "./Customer/CustomerRouter";
import StaffRouter from "./Staff/StaffRouter";
import VenderRouter from "./Vender/VenderRouter";
import DeliveryRouter from "./Delivery/DeliveryRouter";
import RouterHomeFront from "./HomeFront/RouterHomeFront";
const routes=[...CustomerRouter.router,...StaffRouter.router,...VenderRouter.router,...DeliveryRouter.router,...RouterHomeFront.router];
export default{
    router:routes
}