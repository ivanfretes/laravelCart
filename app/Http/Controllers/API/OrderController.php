<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Order;

class OrderController extends Controller
{
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
    public function show(Request $request){
    	
    }


    /**
     * Retorna el pedido, delivery almacenado en la session
     */
    public function getCurrentOrder(Request $request){
    	return $request->session()->get('current_order');
    }


  

    /**
     * Crea y guarda una nueva sesion
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    	return 'test';

        // Si la session NO se encuentra activa, crea una nueva
        /*if ($request->session()->has('current_order') == false){
            
            $order = new Order;
            $order->user_id = NULL;
            $order->status = 'A';
            $order->save(); 

            $request->session()->put('current_order', $order);
            $request->session()->put('total_order', 0);

            return $order;
        }*/
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



}
