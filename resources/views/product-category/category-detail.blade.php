@extends('template.main')

@section('content_page')

    {{-- Banner top, se visuliza el titulo y la ruta path --}}
    @include('product-category.partials.category-banner-top', [
        'title' => $categorySelected->name,
        'baseLink' => @route('page.index'),
        'baseName' => 'Inicio',
        'currentName' => $categorySelected->name,
        'backgroundBanner' => @url("storage/$categorySelected->cover_image")
    ])


<div class="product">
    <div class="container">
        <div class="col-md-9">
            <div class="mid-popular">
                @foreach($products as $product)
                    @include('product.partials.product-box', [
                        'columnMdSize' => 4,
                        'product' => $product
                    ])
                @endforeach
            </div>
        </div>
        <div class="col-md-3 product-bottom">
            
        
            {{-- Visualiza el listado de categorias --}}
            <div class=" rsidebar span_1_of_left">
                <h4 class="cate">Categorias</h4>
                <ul class="menu-drop">
                    @foreach($categories as $category)
                    <li>
                        <a href="{!! @url("categorias/$category->id")!!}">
                            {{ $category->name}}
                        </a>
                    </li>
                    @endforeach
                </ul>
            </div>

            
            {{-- Opción para filtrar, ofertas / descuentos --}}
            <section class="sky-form">
                <h4 class="cate"></h4>
                <div class="row row1 scroll-pane">

                    <div class="col col-4">
                        <label class="checkbox">
                            <input type="checkbox" name="checkbox"><i></i>En Promoción
                        </label>
                        <label class="checkbox">
                            <input type="checkbox" name="checkbox"><i></i>En Descuento
                        </label>
                        <label class="checkbox">
                            <input type="checkbox" name="checkbox"><i></i>En Destacado
                        </label>
                    </div>
                </div>
            </section>

            <!---->
            <section class="sky-form">
                <h4 class="cate">Tipo</h4>
                <div class="row row1 scroll-pane">
                    <div class="col col-4">
                        <label class="checkbox">
                            <input type="checkbox" name="checkbox"><i></i>Para Adultos
                        </label>
                        <label class="checkbox">
                            <input type="checkbox" name="checkbox"><i></i>Para Hombres
                        </label>
                        <label class="checkbox">
                            <input type="checkbox" name="checkbox"><i></i>Para Mujeres
                        </label>
                        <label class="checkbox">
                            <input type="checkbox" name="checkbox"><i></i>Para Niños
                        </label>
                    </div>
                </div>
            </section>
           {{--  <section class="sky-form">
                <h4 class="cate">Brand</h4>
                <div class="row row1 scroll-pane">
                    <div class="col col-4">
                        <label class="checkbox">
                            <input type="checkbox" name="checkbox" checked=""><i></i>Roadstar</label>
                    </div>
                    <div class="col col-4">
                        <label class="checkbox">
                            <input type="checkbox" name="checkbox"><i></i>Levis</label>
                        <label class="checkbox">
                            <input type="checkbox" name="checkbox"><i></i>Persol</label>
                        <label class="checkbox">
                            <input type="checkbox" name="checkbox"><i></i>Nike</label>
                        <label class="checkbox">
                            <input type="checkbox" name="checkbox"><i></i>Edwin</label>
                        <label class="checkbox">
                            <input type="checkbox" name="checkbox"><i></i>New Balance</label>
                        <label class="checkbox">
                            <input type="checkbox" name="checkbox"><i></i>Paul Smith</label>
                        <label class="checkbox">
                            <input type="checkbox" name="checkbox"><i></i>Ray-Ban</label>
                    </div>
                </div>
            </section> --}}
        </div>
        <div class="clearfix"></div>
    </div>

@endsection