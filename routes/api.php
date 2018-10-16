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




//Route::resource('pedidos', 'API\OrderController');



Route::get('pedidos', [
	'as' => 'api.order.create',
	'uses'=> 'API\OrderController@getCurrentOrder'
]);


Route::post('pedidos', [
	'as' => 'api.order.create',
	'uses'=> 'API\OrderController@index'
]);

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
