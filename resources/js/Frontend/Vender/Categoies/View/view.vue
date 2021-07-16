<template>
    <div class="container" style="margin-bottom:10px">
        <div class="row">
            <VenderSidbar/>
            <div class="col-md-12">
                <div class="container-fluid" style="background:white;padding-top:10px">
                    <div class="row">
                        <div class="col-md-8 overflow-auto" style="padding:5px 5px 5px 5px">
                            <div class="card">
                                <div class="row">
                                    <div class="col-md-12">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Name</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr v-for="(item,idx) in data.data" :key="idx">
                                                    <th>{{idx+1}}</th>
                                                    <td>{{item.name}}</td>
                                                    <td class="">
                                                        <a href="javascript:;" class="text-sm text-info" @click="edit(item)">Edit</a>/
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
                        <div class="col-md-4" style="padding:5px 5px 5px 5px">
                            <div class="card" style="padding:5px 5px 5px 5px">
                                <div class="col-md-12 text-center"><h5 style="font-weight:bold">{{form_name}}</h5></div>
                                <form @submit.prevent="SaveUpdate()">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label for="">Name <span class="text-danger">*</span></label>
                                            <input type="text" v-model="form.name" class="form-control">
                                            <label for="" v-show="validate" class="text-sm text-danger"> Categories name is required !!</label>
                                        </div>
                                        <div class="col-md-12 text-right" style="margin-top:5px;margin-bottom:5px">
                                            <a href="javascript:;" @click="Cancel()" class="btn btn-sm btn-danger">Cancel</a>
                                            <input type="submit" value="Submit" class="btn btn-sm btn-info">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</template>
<script>
import VenderSidbar from "../../include/VenderSidbar.vue";
import axios from 'axios';
export default {
    data(){
        return {
            data:[],
            form:{
                id:null,
                name:null
            },
            form_name:'Add Categories',
            validate:false,
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
                axios.get('/api/vender/categories').then(respon=>{
                    this.data=respon.data.success;
                });
            }
            
        },
        SaveUpdate(){
            if(this.form.id==null){
                axios.post('/api/vender/categories/add',this.form).then(respon=>{
                    if(respon.data.validation){
                        this.validate=true;
                    }else if(respon.data.error){
                        this.$swal.fire(
                            {
                                toast:true,
                                position:'bottom-end',
                                title: respon.data.error,
                                icon: 'success',
                                showConfirmButton:false,
                                timer:3000,
                                titleColor:"#FFF"
                            }
                        );
                    }else{
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
                        this.Cancel();
                    }
                });
            }else{
                axios.post('/api/vender/categories/update/'+this.form.id,this.form).then(respon=>{
                    if(respon.data.data){
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
                        this.Cancel();
                    }
                });
            }
            
        },
        edit(edit_item){
            this.form.name=edit_item.name;
            this.form.id=edit_item.id;
            this.form_name='Update Categories';
        },
        Cancel(){
            this.form_name='Add Categories';
            this.form.name=null;
            this.form.id=null;
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
                    axios.post('/api/vender/categories/destroy/'+id).then(respon=>{
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
