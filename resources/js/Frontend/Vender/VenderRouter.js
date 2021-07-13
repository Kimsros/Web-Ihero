import VenderDelivery from "./Delivery/router";
import VencerDeliveryConfig from "./DeliveryConfig/router.js";
import VenderMenu from "./Menu/router.js";
import VenderOrder from "./Order/router.js";
import VenderPayment from "./Payment/router.js";
import VenderProduct from "./Product/router.js";
import VenderReport from "./Report/router.js";
import VenderStaff from "./Staff/router.js";
const routes=[...VencerDeliveryConfig.router,...VenderDelivery.router,...VenderMenu.router,...VenderOrder.router,...VenderPayment.router,...VenderProduct.router,...VenderReport.router,...VenderStaff.router];
export default{
    router:routes
}