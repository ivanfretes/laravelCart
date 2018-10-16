<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\ProductCategory;
use App\SlidePrincipal;
use App\Brand;

class IndexPageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        // Ultimos 5 slides
        $slides = SlidePrincipal::take(5)
            ->skip(0)
            ->orderBy('updated_at','desc')
            ->get();


        // 8 productos mas recientes 
        $products = Product::take(8)
            ->skip(0)
            ->orderBy('updated_at','desc')
            ->get();


        // Listado de ultimas 3 promociones
        $productPromos = Product::take(3)
            ->skip(0)
            ->orderBy('updated_at','desc')
            ->where(['status' => 'P'])
            ->get();


        // Producto destacado
        $productDestacado = Product::orderBy('updated_at','desc')
            ->where(['status' => 'D'])
            ->first();


        // Marcas representadas
        $brands = Brand::get();

        return view('index.index', [
            'products' => $products,
            'slides' => $slides,
            'productPromos' => $productPromos,
            'productDestacado' => $productDestacado,
            'brands' => $brands
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }



    // Pagina de contacto
    public function contacto(){

    }

    public function contactoStore(Request $request){
        return 'contacto';
    }
}
