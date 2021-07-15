import View from "./View/view.vue";
import AddEditProduct from "./View/AddEditProduct.vue";
export default{
    router:[
        {path:"/vender/product",component:View,name:'venderProduct'},
        {path:"/vender/product/add",component:AddEditProduct,name:'venderProduct'},
    ]
}