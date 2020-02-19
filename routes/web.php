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
Route::get('/mainPage',"CRUDController@index");
route::get('/insertRecord',"CRUDController@insert");
route::post('/insertion',"CRUDController@insertion");

route::get('/view',"CRUDController@view");

route::get('/updation/{id}',"CRUDController@updation");
route::put('/upadting/{id}',"CRUDController@updating");

route::get('/delete',"CRUDController@delete");
route::delete('/deletion/{id}',"CRUDController@deletion");

