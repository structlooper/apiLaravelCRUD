<?php

use Illuminate\Http\Request;

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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });
// route::get('/records',"apiController@recordList");
// route::get('/records/{id}','apiController@recordlistId');
// route::post('/insertRecord','apiController@insertRecord');
// route::put('/updateRecord/{id}','apiController@updateRecord');
// route::delete('/deleteRecord/{id}','apiController@deleteRecord');


Route::group([
    
    'prefix' => 'auth'
    
], function () {
    
    Route::apiResource('studentRecord','apiResourceController');
    Route::post('login', 'AuthController@login');
    Route::post('logout', 'AuthController@logout');
    Route::post('refresh', 'AuthController@refresh');
    Route::post('me', 'AuthController@me');
    route::get('records','AuthController@index');
});