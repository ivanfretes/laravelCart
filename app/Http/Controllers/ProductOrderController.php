<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProductOrder;
use App\ProductCategory;
use App\Order;
use Illuminate\Support\Facades\Auth;

class ProductOrderController extends Controller
{

    protected $currentOrder; // Es un \App\Order
    protected $totalOrder; // Monto total de los productos solicitados
    protected $products; // Productos pertenecientes a una orden
    protected $orderActive; // Verifica si la session de orden esta activa
    protected $productsQuantity = 0;

    public function __construct(){
        $this->middleware('auth');
    }


    /**
     * Inicializa las variables por defecto
     */
    protected function initialize(Request $request){
        $this->currentOrder = $request->session()->get('current_order');
        $this->orderActive = $request->session()->has('current_order');
        $this->totalOrder = $request->session()->get('total_order');
        $this->products = $request->session()->get('product.orders');

        $this->setProductQuantity($this->products);
    }


    /**
     * Actualiza la cantidad de productos visualizados
     */
    protected function setProductQuantity($products = []){
        if(is_array($products) &&  count($products) > 0)
            $this->productsQuantity = count($products);
    }

    /**
     * Listado de productos por pedido a ser realizados
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {   
        $this->initialize($request);

        // Listado de categorias
        $categories = ProductCategory::orderBy('name','asc')->get();

        //return dd($this->products);
        // Si existe una orden/pedido activo
        if ($this->orderActive){
            return view('order.order-checkout', [
                'categories' => $categories,
                'productOrders' => $this->products
            ]);    
        }   
        else {
            return 'no exite orden';
        }
        
    }


    

    /**
     * Anexa un producto al pedido/order creado
     * 
     * @return Retorna el producto insertado
     */
    public function store(Request $request)
    {   
        $this->initialize($request);

        // Si existe un order/pedido activo, anexa el producto
        if ($this->orderActive){
            $productOrder = new ProductOrder;
            $productOrder->order_id = $this->currentOrder->id;
            $productOrder->status = 'P';
            $productOrder->quantity = $request->quantity;
            $productOrder->description = "";
            $productOrder->product_id = $request->product_id;
            $productOrder->rental = "N";
            $productOrder->save();


            // Anexa el producto al listado
            $request->session()->push('product.orders', $productOrder);
            return response()->json([
                'product_order' => $productOrder,
                'product' => $productOrder->product,
                'order' => $this->currentOrder
            ]);
        }

        return 'false';
    }



    /**
     * Elimina un product de la orden
     */
    public function destroy(Request $request){
        $this->initialize($request);
        
        // Indice del producto en el array de la session
        $index = $request->index;

        // Elimina el indice del array products en session
        unset($this->products[$index]);
        $request->session()->put('product.orders', $this->products);

        // Elimina el producto del pedido de la base de datos
        $productOrder = ProductOrder::find($id);
        $productOrder->delete();
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }


}
