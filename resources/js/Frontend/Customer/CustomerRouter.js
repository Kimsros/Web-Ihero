import CustomerOrderReport from "./OrderReport/router.js";
import CustomerProduct from "./Product/router.js";
const routes=[...CustomerOrderReport.router,...CustomerProduct.router];
export default{
    router:routes
}