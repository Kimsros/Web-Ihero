<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use Exception;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\TryCatch;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        try {
            if(isset($request->per_page)){
                $per_page=$request->per_page;
            }else{
                $per_page=10;
            }
            $vender_id=1;
            return response()->json(['success'=>Categories::where('vender_id',$vender_id)->orderBy('id','DESC')->paginate($per_page)]);
        } catch (Exception $e) {
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
                'name'=>'required'
            ]);
            if($validation->fails()){
                return response()->json(['validation'=>$validation->getMessageBag()]);
            }
            $data=$request->all();
            $data['vender_id']=1;
            $data['updated_by']=1;
            $categories=Categories::create($data);
            return response()->json(['success'=>'Categories is inserted !!','data'=>$categories]);
        }catch(Exception $e){
            return response()->json(['error'=>$e->getMessage()]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Categories  $categories
     * @return \Illuminate\Http\Response
     */
    public function show(Categories $categories)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Categories  $categories
     * @return \Illuminate\Http\Response
     */
    public function edit(Categories $categories)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Categories  $categories
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try{
            $validation=Validator($request->all(),[
                'name'=>'required'
            ]);
            if($validation->fails()){
                return response()->json(['validation'=>$validation->getMessageBag()]);
            }
            $data=$request->all();
            $data['vender_id']=1;
            $data['updated_by']=1;
            $categories=Categories::find($id)->update($data);
            return response()->json(['success'=>'Categories is updated !!','data'=>$categories]);
        }catch(Exception $e){
            return response()->json(['error'=>$e->getMessage()]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Categories  $categories
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try{
            Categories::find($id)->delete();
            return response()->json(['success'=>'Categoris is deleted !!']);
        }catch(Exception $e){
            return response()->jsonp(['error'=>$e->getMessage()]);
        }
    }
}
