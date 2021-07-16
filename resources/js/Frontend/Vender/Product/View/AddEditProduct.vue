<template>
    <div class="container" style="margin-bottom:10px">
        <div class="row">
            <VenderSidbar/>
            <div class="col-md-12">
                <div class="container-fluid" style="background: white;padding-top:10px">
                    <div class="col-12 text-center">
                        <h4>Add Product</h4>
                    </div>
                    <form @submit.prevent="InsertUpdate()">
                        <div class="row">
                            <div class="col-md-4">
                                <label for="">Name <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" v-model="form.name">
                            </div>
                            <div class="col-md-4">
                                <label for="">Quantity <span class="text-danger">*</span></label>
                                <input type="number" class="form-control" v-model="form.qty">
                            </div>
                            <div class="col-md-4">
                                <label for="">Price In <span class="text-danger">*</span></label>
                                <input type="number" class="form-control" v-model="form.price_in">
                            </div>
                            <div class="col-md-4">
                                <label for="">Price Out <span class="text-danger">*</span></label>
                                <input type="number" class="form-control" v-model="form.price_out">
                            </div>
                            <div class="col-md-4">
                                <label for="">Product Attribute <span class="text-danger">*</span></label>
                                <select v-model="form.product_attribute_id" id="" class="form-control">
                                    <option v-for="(att,idx) in attribute" :key="idx" :value="att.id">{{att.name}}</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label for="">Product Low Quantity</label>
                                <input type="number" class="form-control" v-model="form.product_low_quatity">
                            </div>
                            <div class="col-md-4">
                                <label for="">Expire Date <span class="text-danger">*</span></label>
                                <input type="date" class="form-control" v-model="form.product_expire_date">
                            </div>
                            <div class="col-md-4">
                                <label for="">Categories <span class="text-danger">*</span></label>
                                <select v-model="form.categories_id" id="" class="form-control">
                                    <option v-for="(catego,idx) in categories" :key="idx" :value="catego.id">{{catego.name}}</option>
                                </select>
                            </div>
                            <div class="col-md-12 text-right" style="margin-bottom:10px">
                                <a :href="'/vender/product'" class="btn btn-sm btn-danger">Cancel</a>
                                <input type="submit" value="Submit" class="btn btn-sm btn-info">
                            </div>
                            
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
import axios from 'axios';
import VenderSidbar from "../../include/VenderSidbar.vue";
export default {
    data(){
        return{
            form:{
                id:null,
                name:null,
                qty:null,
                price_in:null,
                price_out:null,
                product_attribute_id:null,
                product_low_quatity:null,
                product_expire_date:null,
                categories_id:null

            },
            attribute:[],
            categories:[]
        }
    },
    components:{
        VenderSidbar,
    },
    methods:{
        getAttribute(){
            axios.get('/api/vender/attribute').then(respon=>{
                this.attribute=respon.data.success.data;
            });
        },
        getCategories(){
            axios.get('/api/vender/categories').then(respon=>{
                this.categories=respon.data.success.data;
            });
        },
        InsertUpdate(){
            if(this.form.id>0){
                alert('update');
            }else{
                axios.post('/api/vender/product/add',this.form).then(respon=>{
                    this.$swal.fire(
                        {
                            toast:true,
                            position:'bottom-end',
                            title: respon.data.success,
                            icon: 'success',
                            showConfirmButton:false,
                            timer:3000,
                            titleColor:"#FFF"
                        }
                    );
                    setTimeout(() => {
                        window.location.href='/vender/product';
                    }, 300);
                    
                });
            }
        }
    },
    mounted(){
        this.getCategories();
        this.getAttribute();
        console.log(this.$route.params.id);
    }  
}
</script>
