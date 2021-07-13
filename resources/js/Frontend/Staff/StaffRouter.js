import StaffOrder from "./Order/router";
import StaffProduct from "./Product/router.js";
import StaffReport from "./Report/router.js";
const routes=[...StaffOrder.router,...StaffProduct.router,...StaffReport.router];
export default{
    router:routes
}