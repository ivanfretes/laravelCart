<?php

/**
 * Operaciones relacionadas pedido / delivery
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class OrderController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
    }

    /**
     * Lista todas las ordenes del usuario
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return 'index';    
    }

    /**
     * Visualiza la session actual
     */
    // public function show(Request $request){
    //     return $request->session()->get('current_order');
    // }


    /**
     * Crea y guarda una nueva sesion
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        if ($request->session()->has('current_order') == false){
            $order = new Order;
            $order->user_id = Auth::id();
            $order->status = 'A';
            $order->hash = md5(new Carbon);
            $order->save(); 

            $request->session()->put('current_order', $order);
            $request->session()->put('total_order', 0);

            return $order;
        }
    }


    /**
     * Actualiza una order session a cancelada, 
     * se considera que se elimina 
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    /*public function update(Request $request, $id)
    {
        //
    }*/


    /**
     * Cancela una orden
     */
    public function cancelar(Request $request){
        $request->session()->forget('current_order');
        $request->session()->forget('total_order');
        $request->session()->forget('product.orders');

        return redirect(route('page.index'));
    }


}
