<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//http://127.0.0.1/month11/laravel58/public/index.php/08b
/*Route::get('/08b/',function (){
    return view('welcome');
});*/

//http://127.0.0.1/month11/laravel58/public/index.php/foo
/*Route::get('foo', function () {
    return 'Hello World';
});*/
//Route::get('user/{id}', 'UserController@show');
//Route::get('user','UserController@index');
//Route::get('user/{id}/{g_id}/{price}','UserController@add');
//Route::get('user/del/{id}','UserController@del');
//Route::get('user/upd/{id}/{price}','UserController@upd');
//Route::get('/test','QueuedController@test');
//rabbitMQ练习
Route::any('/user/add',"TuanController@add");//
Route::any('/user/add_do',"TuanController@add_do");//
Route::any('/user/shop',"TuanController@shop");//
Route::any('/user/shop_add',"TuanController@shop_add");//
Route::any('/user/show',"TuanController@show");//
Route::any('/user/getlist/{name}/{value}/{page}',"TuanController@getlist");//
Route::any('/user/delete/{id}',"TuanController@delete");//
Route::any('/user/update/{id}/{name}',"TuanController@update");//
Route::any('/user/purchase',"TuanController@purchase");//

