import Dashboard from "./Dashboard/router.js";
import DeliveryReport from "./DeliveryReport/router.js";
const routes=[...Dashboard.router,...DeliveryReport.router];
export default{
    router:routes
}