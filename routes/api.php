<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/



// Front Vender 
        

    // Categories
        Route::get('vender/categories','CategoriesController@index');
        Route::post('vender/categories/add','CategoriesController@store');
        Route::post('vender/categories/update/{id}','CategoriesController@update');
        Route::post('vender/categories/destroy/{id}','CategoriesController@destroy');
    // End Categories


    // Attribute
        Route::get('vender/attribute','ProductAttributeController@index');
        Route::post('vender/attribute/add','ProductAttributeController@store');
        Route::post('vender/attribute/update/{id}','ProductAttributeController@update');
        Route::post('vender/attribute/destroy/{id}','ProductAttributeController@destroy');
    // End Attribute

    // Product
        Route::get('vender/product','ProductController@index');
        Route::post('vender/product/add','ProductController@store');
        Route::get('vender/product/edit/{id}','ProductController@edit');
        Route::post('vender/product/update/{id}','ProductController@update');
        Route::post('vender/product/destroy/{id}','ProductController@destroy');
    // End Product


    // Menu
        Route::get('vender/menu','ItemController@index');
        Route::post('vender/menu/add','ItemController@store');
        Route::get('vender/menu/edit/{id}','ItemController@edit');
        Route::post('vender/menu/update/{id}','ItemController@update');
        Route::post('vender/menu/destroy/{id}','ItemController@destroy');
    // End Menu




// End Front Vender
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
