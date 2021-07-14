import Index from "./View/index.vue";
import Restuarant from "./View/Restuarant.vue";
import RestuarantDetail from "./View/MenuRestuarant.vue";
import AboutUs from "./View/AboutUs.vue";
import Login from "./View/Login.vue";
import Register from "./View/Register.vue";
export default{
    router:[
        {path:"/",component:Index,name:'home'},
        {path:"/restuarant",component:Restuarant,name:'restuarant'},
        {path:"/restuarant/detail",component:RestuarantDetail,name:'restuarant_detail'},
        {path:"/about_us",component:AboutUs},
        {path:"/login",component:Login},
        {path:"/register",component:Register}
    ]
}