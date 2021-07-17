<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        try{
            try{
                $vender_id=1;
                // $sql="select id,name,price,delivery_amount,discount,(select image from item_images where item_id=items.id limit 1) as image from items where vender_id=$vender_id";
                // $menu=DB::select($sql);
                if(isset($request->per_page)){
                    $per_page=$request->per_page;
                }else{
                    $per_page=10;
                }
                $menu=DB::table('items as i')->join('item_images as ii','i.id','=','ii.item_id')->where('i.vender_id',$vender_id)->select('i.id','i.name','i.price','i.delivery_amount','i.discount','ii.image')->paginate($per_page);
                return response()->json(['success'=>$menu]);
            }catch(Exception $e){
                return response()->json(['error'=>$e->getMessage()]);
            }
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function show(Item $item)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function edit(Item $item)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Item $item)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function destroy(Item $item)
    {
        //
    }
}
