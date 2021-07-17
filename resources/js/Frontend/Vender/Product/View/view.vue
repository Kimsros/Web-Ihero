<template>
    <div class="container" style="margin-bottom:10px">
        <div class="row">
            <VenderSidbar/>
            <div class="col-md-12">
                <div class="container-fluid" style="background: white;padding-top:10px">
                    <div class="row">
                        <div class="col-md-12 text-right" style="margin-bottom:10px">
                            <a :href="'/vender/product/add'" class="btn btn-sm btn-info">Add New</a>
                        </div>
                        <div class="col-md-12 overflow-auto">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Quantity</th>
                                        <th>Price In</th>
                                        <th>Price Out</th>
                                        <th>Category</th>
                                        <th>Expire Date</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr v-for="(item,idx) in data.data" :key="idx">
                                        <th>{{idx+1}}</th>
                                        <td>{{item.name}}</td>
                                        <td>{{item.qty}}</td>
                                        <td>{{item.price_in}}</td>
                                        <td>{{item.price_out}}</td>
                                        <td>{{item.categories_id}}</td>
                                        <td>{{item.product_expire_date}}</td>
                                        <td class="text-center">
                                            <!-- <router-link :to="{path:'/vender/product/edit',params:1}">Edit</router-link> -->
                                            <a :href="'/vender/product/edit/'+item.id" class="text-sm text-info">Edit</a>/
                                            <a href="javascript:;" class="text-sm text-danger" @click="Destroy(item.id)">Delete</a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div style="margin-top:10px" class="col-md-12 text-right">
                            <div>
                                <nav aria-label="Page navigation example">
                                <ul class="pagination">
                                <li  v-for="(item,idx) in data.links" :key="idx" v-bind:class="{'page-item':true,'active':item.active }"><a class="page-link" @click="index(item.url)" v-html="item.label"></a></li>

                                </ul>
                            </nav>
                            </div>
                        </div>
                    </div>
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
        return {
            data:[]
        }
    },
    components:{
        VenderSidbar,
    },
    mounted(){
        this.index();
    },
    methods:{
        index(url=null){
            if(url!=null){
                axios.get(url).then(respon=>{
                    this.data=respon.data.success;
                });
            }else{
                axios.get('/api/vender/product').then(respon=>{
                    this.data=respon.data.success;
                });
            } 
        },
        Destroy(id){
            this.$swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        axios.post('/api/vender/product/destroy/'+id).then(respon=>{
                            if(respon.data.success){
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
                                this.index();
                            }
                        });
                    }
                });
        }
    }
}
</script>
