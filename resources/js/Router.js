import ChatRouter from "./Chat/ChatRouter";
import BackendRouter from "./Backend/BackendRouter";
import FrontendRouter from "./Frontend/FrontendRouter";
const routes=[...ChatRouter.router,...BackendRouter.router,...FrontendRouter.router];
export default{
    router:routes
}