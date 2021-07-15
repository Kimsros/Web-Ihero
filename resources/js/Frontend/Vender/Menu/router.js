import View from "./View/view.vue";
import AddEditMenu from "./View/AddEditMenu.vue";
export default{
    router:[
        {path:"/vender/menu",component:View,name:'venderMenu'},
        {path:"/vender/menu/add",component:AddEditMenu,name:'venderMenu'},
    ]
}