<template>
    <div class="container" style="margin-bottom:10px">
        <div class="row">
            <VenderSidbar/>
            <div class="col-md-12">
                <div class="container-fluid" style="background: white;padding-top:10px">
                    <div class="col-12 text-center">
                        <h4>Add Product</h4>
                    </div>
                    <form>
                        <div class="row">
                            <div class="col-md-4">
                                <label for="">Name <span class="text-danger">*</span></label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="col-md-4">
                                <label for="">Quantity <span class="text-danger">*</span></label>
                                <input type="number" class="form-control">
                            </div>
                            <div class="col-md-4">
                                <label for="">Price In <span class="text-danger">*</span></label>
                                <input type="number" class="form-control">
                            </div>
                            <div class="col-md-4">
                                <label for="">Price Out <span class="text-danger">*</span></label>
                                <input type="number" class="form-control">
                            </div>
                            <div class="col-md-4">
                                <label for="">Product Attribute <span class="text-danger">*</span></label>
                                <select name="" id="" class="form-control">
                                    <option value="">Unit</option>
                                    <option value="">Kg</option>
                                    <option value="">L</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label for="">Product Low Quantity</label>
                                <input type="number" class="form-control">
                            </div>
                            <div class="col-md-4">
                                <label for="">Expire Date <span class="text-danger">*</span></label>
                                <input type="date" class="form-control">
                            </div>
                            <div class="col-md-4">
                                <label for="">Categories <span class="text-danger">*</span></label>
                                <select name="" id="" class="form-control">
                                    <option value="">Drinks</option>
                                    <option value="">Meat</option>
                                </select>
                            </div>
                            <div class="col-md-12 text-right" style="margin-bottom:10px">
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
