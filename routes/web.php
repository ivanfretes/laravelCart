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


// Visualización de la pagina inicial
Route::get('/', [
	'as' => 'page.index',
	'uses' => 'IndexPageController@index'
]);


// Listado de categorias, con sus respectivas imagenees
Route::get('/categorias', [
	'as' => 'category.list',
	'uses' => 'ProductCategoryController@index'
]);


// Listado de productos, con la informacion de la categoria, seleccionada
Route::get('/categorias/{id}', [
	'as' => 'category.detail',
	'uses' => 'ProductCategoryController@show'
]);


// Visualiza un producto por su identificador
Route::get('/productos/{product}', [
	'as' => 'product.detail',
	'uses' => 'ProductController@show'
]);


// Pagina de Nosoros
Route::get('/nosotros', [
	'as' => 'page.about',
	'uses' => 'ProductController@show'
]);


// Crea un nuevo pedido/delivery
Route::get('/pedidos/store', [
	'as' => 'order.store',
	'uses' => 'OrderController@store'
]);


// Visualiza los  productos del pedido actual

Route::get('/pedidos/productos', [
	'as' => 'order.product.list',
	'uses' => 'ProductOrderController@index'
]);


// Asocia un producto a un pedido
Route::get('/pedidos/productos/store', [
	'as' => 'order.product.store',
	'uses' => 'ProductOrderController@store'
]);


// Edita un pedido de un producto
/*Route::put('/pedidos', [
	'as' => 'product.order_insert',
	'uses' => 'ProductOrderController@index'
]);*/


Route::get('/pedidos/cancelar', [
	'as' => 'order.cancel',
	'uses' => 'OrderController@cancelar'
]);

//
Route::get('/contacto', [
	'as' => 'page.contact',
	'uses' => 'IndexPageController@contact'
]);


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});



use Illuminate\Http\Request;
use App\ProductOrder;
use App\ProductCategory;
use App\Order;


// test
Route::get('insert-session', function(Request $request){
	if (!Auth::check()){
		return redirect(route('login'));
	}
	else {
		//return dd($request->session()->has('current_order') == FALSE);

		if ($request->session()->has('current_order') == false){
	        $order = new Order;
	        $order->user_id = NULL;
	        $order->status = 'P';
	        $order->save(); 

	        $request->session()->put('current_order', $order->id);
	   	}
	  	
	  	return $request->session()->get('current_order');
	}
});

// -- TEST --


// test
Route::get('get-session', function(Request $request){

	return dd($request->session()->has('current_order'));
});


Route::get('push-session', function(Request $request){
	

   	$productOrder = new ProductOrder;
    $productOrder->order_id = $request->session()->get('current_order');
    $productOrder->status = 'P';
    $productOrder->quantity = $request->quantity;
    $productOrder->description = "";
    $productOrder->product_id = 42;
    $productOrder->rental = "N";
    $productOrder->save();

    $request->session()->push('product.orders', $productOrder);
});

Route::get('remove-index-session', function(Request $request){
   	$productOrders = $request->session()->get('product.orders');
	$index = $request->index;

	unset($productOrders[$index]);
   	$request->session()->put('product.orders', $productOrders);
});


Route::get('pull-session', function(Request $request){
	$productOrders = $request->session()->get('product.orders');
	$index = $request->index;
	
	return dd($productOrders[$index]->id);	

	//unset($productOrders[$index]);

   	//$request->session()->put('product.orders', $productOrders);
});


Route::get('get-push-session', function(Request $request){
   	return dd($request->session()->get('product.orders'));
});




