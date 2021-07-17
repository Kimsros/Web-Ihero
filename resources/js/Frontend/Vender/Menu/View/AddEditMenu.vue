<template>
    <div class="container" style="margin-bottom:10px">
        <div class="row">
            <VenderSidbar/>
            <div class="col-md-12">
                <div class="container-fluid" style="background: white;padding-top:10px">
                    <div class="col-12 text-center">
                        <h4 style="font-weight:bold">Add Menu</h4>
                    </div>
                    <form @submit.prevent="submit()">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="col-md-12">
                                            <h4 style="font-weight:bold">Items</h4>
                                        </div>
                                        <div class="col-md-12 text-center" style="margin-bottom:10px">
                                            <div  style="widht:80%;height:2px;background:grey;opcity:0.5;"></div>
                                        </div>
                                        <div class="col-md-12">
                                            <label for="">Name <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" v-model="form.name">
                                        </div>
                                        <div class="col-md-12">
                                            <label for="">Price <span class="text-danger">*</span></label>
                                            <input type="number" class="form-control" v-model="form.price">
                                        </div>
                                        <div class="col-md-12">
                                            <label for="">Delivery Amount <span class="text-danger">*</span></label>
                                            <input type="number" class="form-control" v-model="form.delivery_amount">
                                        </div>
                                        <div class="col-md-12">
                                            <label for="">Discount(%) <span class="text-danger">*</span></label>
                                            <input type="number" class="form-control" v-model="form.discount">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="col-md-12">
                                            <h4 style="font-weight:bold">Option</h4>
                                        </div>
                                        <div class="col-md-12 text-center" style="margin-bottom:10px">
                                            <div  style="widht:80%;height:2px;background:grey;opcity:0.5;"></div>
                                        </div>
                                        <div v-for="(option,idx) in form.option" :key="idx">
                                            <div class="col-md-12">
                                                <label for="">Size <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" v-model="option.size">
                                            </div>
                                            <div class="col-md-12">
                                                <label for="">Price( + ) <span class="text-danger">*</span></label>
                                                <input type="number" class="form-control" v-model="option.price">
                                            </div>
                                            
                                        </div>  
                                        <div class="col-md-12 text-right" style="margin-top:5px">
                                            <a href="javascript:;" class="btn btn-sm btn-info" @click="OptionAddMoreField()">+</a>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="col-md-12">
                                            <h4 style="font-weight:bold">Ingredients</h4>
                                        </div>
                                        <div class="col-md-12 text-center" style="margin-bottom:10px">
                                            <div  style="widht:80%;height:2px;background:grey;opcity:0.5;"></div>
                                        </div>
                                        <div v-for="(ingredients,idx) in form.ingredients" :key="idx">
                                            <div class="col-md-12">
                                                <label for="">Product<span class="text-danger">*</span></label>
                                                <select v-model="ingredients.product_id" id="" class="form-control">
                                                    <option value="">ABC</option>
                                                </select>
                                            </div>
                                            <div class="col-md-12">
                                                <label for="">Quantity <span class="text-danger">*</span></label>
                                                <input type="number" class="form-control" v-model="ingredients.qty">
                                            </div>
                                            <div class="col-md-12">
                                                <label for="">Price( + )<span class="text-danger">*</span></label>
                                                <input type="number" class="form-control" v-model="ingredients.price">
                                            </div>
                                            <div class="col-md-12">
                                                <label for="">Attribute <span class="text-danger">*</span></label>
                                                <select v-model="ingredients.attribute_id" id="" class="form-control">
                                                    <option value="">ABC</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-12 text-right" style="margin-top:5px">
                                            <a href="javasscript:;" class="btn btn-sm btn-info" @click="IngredientsAddMoreField()">+</a>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="col-md-12">
                                            <h4 style="font-weight:bold">Image</h4>
                                        </div>
                                        <div class="col-md-12 text-center" style="margin-bottom:10px">
                                            <div  style="widht:80%;height:2px;background:grey;opcity:0.5;"></div>
                                        </div>
                                        <div class="col-md-4">
                                            <input type="file" class="form-control" multiple="multiple" @change="handleFileUpload">
                                        </div>
                                        <div class="col-md-8">
                                            <div class="row">
                                                <div class="show-img" v-for="(image,idx) in form.image" :key="idx">
                                                    <img :src="image" alt="">
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="col-md-12">
                                            <h4 style="font-weight:bold">Materials</h4>
                                        </div>
                                        <div class="col-md-12 text-center" style="margin-bottom:10px">
                                            <div  style="widht:80%;height:2px;background:grey;opcity:0.5;"></div>
                                        </div>
                                        <div class="col-md-12">
                                            <label for="">Product <span class="text-danger">*</span></label>
                                            <select v-model="form.materrials.product_id" class="form-control">
                                                <option value="">ABC</option>
                                            </select>
                                        </div>
                                        <div class="col-md-12">
                                            <label for="">Attribute <span class="text-danger">*</span></label>
                                            <select v-model="form.materrials.attribute_id" class="form-control">
                                                <option value="">ABC</option>
                                            </select>
                                        </div>
                                        <div class="col-md-12">
                                            <label for="">Quantity <span class="text-danger">*</span></label>
                                            <input type="number" class="form-control" v-model="form.materrials.qty">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="col-md-12">
                                            <h4 style="font-weight:bold">Affiliate</h4>
                                        </div>
                                        <div class="col-md-12 text-center" style="margin-bottom:10px">
                                            <div  style="widht:80%;height:2px;background:grey;opcity:0.5;"></div>
                                        </div>
                                        <div v-for="(affiliate,idx) in form.affiliate" :key="idx">
                                            <div class="col-md-12">
                                                <label for="">Sale Item Quantity <span class="text-danger">*</span></label>
                                                <input type="number" class="form-control" v-model="affiliate.sale_item_qty">
                                            </div>
                                            <div class="col-md-12">
                                                <label for="">Amount <span class="text-danger">*</span></label>
                                                <input type="number" class="form-control" v-model="affiliate.amount">
                                            </div>
                                        </div>
                                        
                                        <div class="col-md-12 text-right" style="margin-top:5px">
                                            <a href="javascript:;" class="btn btn-sm btn-info" @click="AffiliateAddMoreField()">+</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-md-12 text-right" style="margin-bottom:10px;margin-top:10px;">
                                <a href="" class="btn btn-sm btn-danger">Cancel</a>
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
import VenderSidbar from "../../include/VenderSidbar.vue";
export default {
    data(){
        return{
            form:{
                name:null,
                price:null,
                delivery_amount:null,
                discount:null,
                option:[
                    {
                        size:null,
                        price:null
                    },
                ],
                ingredients:[
                    {
                        product_id:null,
                        qty:null,
                        price:null,
                        attribute_id:null
                    }
                ],
                image:[],
                materrials:{
                    product_id:null,
                    attribute_id:null,
                    qty:null
                },
                affiliate:[
                    {
                        sale_item_qty:null,
                        amount:null
                    }
                ]
            }
        }
    },
    components:{
        VenderSidbar,
    },
    methods:{
        OptionAddMoreField(){
            this.form.option.push({size:null,price:null});
        },
        IngredientsAddMoreField(){
            this.form.ingredients.push({product_id:null,qty:null,price:null,attribute_id:null});
        },
        AffiliateAddMoreField(){
            this.form.affiliate.push({sale_item_qty:null,amount:null});
        },
        handleFileUpload(event){
            this.form.image.push(window.URL.createObjectURL(event.target.files[0]));
            // console.log();
        },
        submit(){
            console.log(this.form);
        }
    }
}
</script>
