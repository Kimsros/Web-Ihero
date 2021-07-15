<template>
    <div class="container" style="margin-bottom:10px">
        <div class="row">
            <VenderSidbar/>
            <div class="col-md-12">
                <div class="container-fluid" style="background: white;padding-top:10px">
                    <div class="col-12 text-center">
                        <h4 style="font-weight:bold">Add Menu</h4>
                    </div>
                    <form>
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
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="col-md-12">
                                            <label for="">Price <span class="text-danger">*</span></label>
                                            <input type="number" class="form-control">
                                        </div>
                                        <div class="col-md-12">
                                            <label for="">Delivery Amount <span class="text-danger">*</span></label>
                                            <input type="number" class="form-control">
                                        </div>
                                        <div class="col-md-12">
                                            <label for="">Discount(%) <span class="text-danger">*</span></label>
                                            <input type="number" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="col-md-12">
                                            <h4 style="font-weight:bold">Option</h4>
                                        </div>
                                        <div class="col-md-12 text-center" style="margin-bottom:10px">
                                            <div  style="widht:80%;height:2px;background:grey;opcity:0.5;"></div>
                                        </div>
                                        <div class="col-md-12">
                                            <label for="">Size <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="col-md-12">
                                            <label for="">Price( + ) <span class="text-danger">*</span></label>
                                            <input type="number" class="form-control">
                                        </div>
                                        <div class="col-md-12 text-right" style="margin-top:5px">
                                            <button class="btn btn-sm btn-info">More</button>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="col-md-12">
                                            <h4 style="font-weight:bold">Ingredients</h4>
                                        </div>
                                        <div class="col-md-12 text-center" style="margin-bottom:10px">
                                            <div  style="widht:80%;height:2px;background:grey;opcity:0.5;"></div>
                                        </div>
                                        <div class="col-md-12">
                                            <label for="">Product<span class="text-danger">*</span></label>
                                            <select name="" id="" class="form-control">
                                                <option value="">ABC</option>
                                            </select>
                                        </div>
                                        <div class="col-md-12">
                                            <label for="">Quantity <span class="text-danger">*</span></label>
                                            <input type="number" class="form-control">
                                        </div>
                                        <div class="col-md-12">
                                            <label for="">Price( + )<span class="text-danger">*</span></label>
                                            <input type="number" class="form-control">
                                        </div>
                                        <div class="col-md-12">
                                            <label for="">Attribute <span class="text-danger">*</span></label>
                                            <select name="" id="" class="form-control">
                                                <option value="">ABC</option>
                                            </select>
                                        </div>
                                        <div class="col-md-12 text-right" style="margin-top:5px">
                                            <button class="btn btn-sm btn-info">More</button>
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
                                            <input type="file" class="form-control">
                                        </div>
                                        <div class="col-md-8">
                                            <div class="row">
                                                <div class="show-img">
                                                    <img src="/assets/assets/user.png" alt="">
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
                                            <select name="" id="" class="form-control">
                                                <option value="">ABC</option>
                                            </select>
                                        </div>
                                        <div class="col-md-12">
                                            <label for="">Attribute <span class="text-danger">*</span></label>
                                            <select name="" id="" class="form-control">
                                                <option value="">ABC</option>
                                            </select>
                                        </div>
                                        <div class="col-md-12">
                                            <label for="">Quantity <span class="text-danger">*</span></label>
                                            <input type="number" class="form-control">
                                        </div>
                                        <div class="col-md-12 text-right" style="margin-top:5px">
                                            <button class="btn btn-sm btn-info">More</button>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="col-md-12">
                                            <h4 style="font-weight:bold">Affiliate</h4>
                                        </div>
                                        <div class="col-md-12 text-center" style="margin-bottom:10px">
                                            <div  style="widht:80%;height:2px;background:grey;opcity:0.5;"></div>
                                        </div>
                                        <div class="col-md-12">
                                            <label for="">Sale Item Quantity <span class="text-danger">*</span></label>
                                            <input type="number" class="form-control">
                                        </div>
                                        <div class="col-md-12">
                                            <label for="">Amount <span class="text-danger">*</span></label>
                                            <input type="number" class="form-control">
                                        </div>
                                        <div class="co-md-12 text-right" style="margin-top:5px">
                                            <button class="btn btn-sm btn-info">More</button>
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
    components:{
        VenderSidbar,
    }
}
</script>
