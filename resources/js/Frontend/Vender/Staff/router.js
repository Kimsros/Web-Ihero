import View from "./View/view.vue";
import AddEditStaff from "./View/AddEditStaff.vue";
export default{
    router:[
        {path:"/vender/staff",component:View,name:'venderStaff'},
        {path:"/vender/staff/add",component:AddEditStaff,name:'venderStaff'},
    ]
}