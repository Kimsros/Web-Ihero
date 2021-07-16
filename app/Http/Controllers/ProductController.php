<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Exception;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        try{
            if(isset($request->per_page)){
                $per_page=$request->per_page;
            }else{
                $per_page=10;
            }
            $vender_id=1;
            return response()->json(['success'=>Product::where('vender_id',$vender_id)->orderBy('id','DESC')->paginate($per_page)]);
        }catch(Exception $e){
            return response()->json(['error'=>$e->getMessage()]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try{
            $validation=Validator($request->all(),[
                'name'=>'required',
                'qty'=>'required|numeric',
                'price_in'=>'required|numeric',
                'price_out'=>'required|numeric',
                'product_attribute_id'=>'required|integer',
                'product_low_quatity'=>'required|numeric',
                'product_exspire_date'=>'requried',
                'categories_id'=>'required|integer'
            ]);
            if($validation->fails()){
                return response()->json(['validation'=>$validation->getMessageBag()]);
            }
            $data=$request->all();
            $data['vender_id']=1;
            $data['updated_by']=1;
            if(Product::create($data)){
                return response()->json(['success'=>'Product is inserted !!']);
            }else{
                return response()->json(['error'=>'Product is not inserted !!']);
            }
        }catch(Exception $e){
            return response()->json(['error'=>$e->getMessage()]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        try{
            $validation=Validator($request->all(),[
                'name'=>'required',
                'qty'=>'required|numeric',
                'price_in'=>'required|numeric',
                'price_out'=>'required|numeric',
                'product_attribute_id'=>'required|integer',
                'product_low_quatity'=>'required|numeric',
                'product_exspire_date'=>'requried',
                'categories_id'=>'required|integer'
            ]);
            if($validation->fails()){
                return response()->json(['validation'=>$validation->getMessageBag()]);
            }
            $data=$request->all();
            $data['vender_id']=1;
            $data['updated_by']=1;
            if(Product::find($product['id'])->update($data)){
                return response()->json(['success'=>'Product is updated !!']);
            }else{
                return response()->json(['error'=>'Product is not updated !!']);
            }
        }catch(Exception $e){
            return response()->json(['error'=>$e->getMessage()]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        try{
            if(Product::find($product['id'])->delete()){
                return response()->json(['success'=>'Product is deleted !!']);
            }else{
                return response()->json(['success'=>'Product is not deleted !!']);
            }
        }catch(Exception $e){
            return response()->json(['error'=>$e->getMessage()]);
        }
    }
}
