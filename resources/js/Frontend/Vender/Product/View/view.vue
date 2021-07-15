<template>
    <div class="container">
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
                                        <th>Email</th>
                                        <th>Gender</th>
                                        <th>Age</th>
                                        <th>Phone</th>
                                        <th>Position</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th>1</th>
                                        <td>Kimsros</td>
                                        <td>Kimsros@gmail.com</td>
                                        <td>Mail</td>
                                        <td>26</td>
                                        <td>011206889</td>
                                        <td>Admin</td>
                                        <td class="text-center">
                                            <a href="" class="text-sm text-info">Edit</a>/
                                            <a href="" class="text-sm text-info">Detail</a>/
                                            <a href="" class="text-sm text-danger">Delete</a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</template>
<script>
import VenderSidbar from "../../include/VenderSidbar.vue";
export default {
    components:{
        VenderSidbar,
    }
}
</script>
