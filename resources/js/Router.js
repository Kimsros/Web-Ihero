import Vue from "vue";
import ChatRouter from "./Chat/ChatRouter";
import BackendRouter from "./Backend/BackendRouter";
import FrontendRouter from "./Frontend/FrontendRouter";
import VueRouter from "vue-router";
Vue.use(VueRouter);
const data_routes=[...ChatRouter.router,...BackendRouter.router,...FrontendRouter.router];
export default new VueRouter({
    routes:data_routes,
    mode:'history',
    scrollBehavior(){
        return {x:0,y:0}
    }
})