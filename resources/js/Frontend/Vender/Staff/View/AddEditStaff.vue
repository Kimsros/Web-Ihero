<template>
    <div class="container" style="margin-bottom:10px">
        <div class="row">
            <VenderSidbar/>
            <div class="col-md-12">
                <div class="container-fluid" style="background: white;padding-top:10px">
                    <div class="col-12 text-center">
                        <h4 style="font-weight:bold">Add Staff</h4>
                    </div>
                    <form>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-12">
                                        <h4 style="font-weight:bold">Staff Information</h4>
                                    </div>
                                    <div class="col-md-12 text-center" style="margin-bottom:10px">
                                        <div  style="widht:80%;height:2px;background:grey;opcity:0.5;"></div>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="">First Name <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="">Last Name <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="">Gender <span class="text-danger">*</span></label>
                                        <select name="" id="" class="form-control">
                                            <option value="1">Male</option>
                                            <option value="0">Female</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="">Age <span class="text-danger">*</span></label>
                                        <input type="number" class="form-control">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="">Email <span class="text-danger">*</span></label>
                                        <input type="mail" class="form-control">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="">Password <span class="text-danger">*</span></label>
                                        <input type="password" class="form-control">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="">Phone Number <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="">Identity Card <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="">Position <span class="text-danger">*</span></label>
                                        <select name="" id="" class="form-control">
                                            <option value="">Admin</option>
                                            <option value="">Vender</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-12">
                                        <h4 style="font-weight:bold">Bank</h4>
                                    </div>
                                    <div class="col-md-12 text-center" style="margin-bottom:10px">
                                        <div  style="widht:80%;height:2px;background:grey;opcity:0.5;"></div>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="">Bank Name <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="">Bank Username <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="">Bank Account <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-12">
                                        <h4 style="font-weight:bold">Address</h4>
                                    </div>
                                    <div class="col-md-12 text-center" style="margin-bottom:10px">
                                        <div  style="widht:80%;height:2px;background:grey;opcity:0.5;"></div>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="">Province <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="col-md-3">
                                        <label for="">District <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="col-md-3">
                                        <label for="">Commune <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="col-md-3">
                                        <label for="">Vallage <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-md-12 text-right" style="margin-bottom:10px;margin-top:10px">
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
    components:{
        VenderSidbar,
    }
}
</script>
