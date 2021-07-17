<?php


use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;


Route::get('/admin','Backend\BackendController@index');
Route::get('/admin/{any}/{id?}','Backend\BackendController@index');
Route::get('/','Frontend\FrontendController@index');
Route::get('/{any}/{title?}/{id?}/{ids?}', 'Frontend\FrontendController@index');




