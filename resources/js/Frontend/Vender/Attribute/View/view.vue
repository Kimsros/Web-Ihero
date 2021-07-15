<template>
    <div class="container" style="margin-bottom:10px">
        <div class="row">
            <VenderSidbar/>
            <div class="col-md-12">
                <div class="container-fluid" style="background:white;padding-top:10px">
                    <div class="row">
                        <div class="col-md-8 overflow-auto" style="padding:5px 5px 5px 5px">
                            <div class="card">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th>1</th>
                                            <td>Kimsros</td>
                                            <td class="">
                                                <a href="" class="text-sm text-info">Edit</a>/
                                                <a href="" class="text-sm text-info">Detail</a>/
                                                <a href="" class="text-sm text-danger">Delete</a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                        <div class="col-md-4" style="padding:5px 5px 5px 5px">
                            <div class="card" style="padding:5px 5px 5px 5px">
                                <div class="col-md-12 text-center"><h5 style="font-weight:bold">Add Attribute</h5></div>
                                
                                <form action="">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label for="">Name <span class="text-danger">*</span></label>
                                            <input type="text" name="name" class="form-control">
                                        </div>
                                        <div class="col-md-12 text-right" style="margin-top:5px;margin-bottom:5px">
                                            <a href="" class="btn btn-sm btn-danger">Cancel</a>
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
export default {
    components:{
        VenderSidbar,
    }
}
</script>
