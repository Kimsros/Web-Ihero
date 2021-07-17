<template>
    <div class="container">
        <div class="row">
            <VenderSidbar/>
            <div class="col-md-12">
                <div class="container-fluid" style="background: white;padding-top:10px">
                    <div class="row">
                        <div class="col-md-12 text-right" style="margin-bottom:10px">
                            <a :href="'/vender/menu/add'" class="btn btn-sm btn-info">Add New</a>
                        </div>
                        <div class="col-md-12 overflow-auto">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Image</th>
                                        <th>Name</th>
                                        <th>Price</th>
                                        <th>Delivery Amount</th>
                                        <th>Discount(%)</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr v-for="(item,idx) in data.data" :key="idx">
                                        <th>{{idx+1}}</th>
                                        <td>Image</td>
                                        <td>{{item.name}}</td>
                                        <td>{{item.price}}</td>
                                        <td>{{item.delivery_amount}}</td>
                                        <td>{{item.discount}}</td>
                                        <td class="text-center">
                                            <a href="" class="text-sm text-info">Edit</a>/
                                            <a href="" class="text-sm text-info">Detail</a>/
                                            <a href="javascript:;" class="text-sm text-danger">Delete</a>
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
    methods:{
        index(url=null){
            if(null==null){
                axios.get('/api/vender/menu').then(respon=>{
                    this.data=respon.data.success;
                });
            }else{
                axios.get(url).then(respon=>{
                    this.data=respon.data.success;
                });
            }
            console.log(this.data);
        }
    },
    mounted(){
        this.index();
    }
}
</script>
