import CustomerOrderReport from "./OrderReport/router.js";
import CustomerDashboard from "./Dashboard/router.js";
const routes=[...CustomerOrderReport.router,...CustomerDashboard.router];
export default{
    router:routes
}