import StaffOrder from "./Order/router";
import StaffProduct from "./Product/router.js";
import StaffReport from "./Report/router.js";
import Dashboard from "./Dashboard/router.js";
const routes=[...StaffOrder.router,...StaffProduct.router,...StaffReport.router,...Dashboard.router];
export default{
    router:routes
}