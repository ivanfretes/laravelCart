@extends('template.main')

@section('content_page')
	
	{{-- Banner top, se visuliza el titulo y la ruta path --}}
    @include('product-category.partials.category-banner-top', [
        'title' => $product->category->name,
        'baseLink' => @route('page.index'),
        'baseName' => 'Inicio',
        'currentName' => $product->category->name,
        'backgroundBanner' => @url("storage/$product->category->cover_image")
    ])


<div class="product-container">
	<div class="container">
		<div class="col-md-9">
		    <div class="col-md-5 grid">
		        <div class="flexslider">
		            <ul class="slides">
						
						@for($i = 0; $i < 3; $i++)
		                <li data-thumb="{{ @url("storage/$product->image") }}">
		                    <div class="thumb-image"> 
		                    	<img src="{{ @url("storage/$product->image") }}" data-imagezoom="true" class="img-responsive"> 
		                    </div>
		                </li>
		                @endfor
		                
		            </ul>
		        </div>
		    </div>
		    <div class="col-md-7 single-top-in">
		        <div class="span_2_of_a1 simpleCart_shelfItem">
		            <h3>{{ $product->title }}</h3>
		            <p class="in-para"> {{ $product->category->name }} </p>
		            <div class="price_single">
		                <span class="reducedfrom item_price">{{ $product->price }}</span>
		                <a href="#">PROMOCIONADO</a>
		                <div class="clearfix"></div>
		            </div>
		            <h4 class="quick">DESCRIPCIÓN:</h4>
		            <p class="quick_desc">
		            	@if (isset($product->description) && 
	                		!empty($product->description ))
	                    	{!! $product->description !!}
	                    @else
	                    	Contenido sin descripción
	                    @endif
		            </p>
		           {{--  <div class="wish-list">
		                <ul>
		                    <li class="wish"><a href="#"><span class="glyphicon glyphicon-check" aria-hidden="true"></span>Add to Wishlist</a></li>
		                    <li class="compare"><a href="#"><span class="glyphicon glyphicon-resize-horizontal" aria-hidden="true"></span>Add to Compare</a></li>
		                </ul>
		            </div> --}}
		            <div class="quantity">
		                <div class="quantity-select">
		                    <div class="entry value-minus">&nbsp;</div>
		                    <div class="entry value"><span>1</span></div>
		                    <div class="entry value-plus active">&nbsp;</div>
		                </div>
		            </div>

		            <a href="#"  class="add-to item_add hvr-skew-backward">Agregar al carrito</a>
		            <div class="clearfix"> </div>
		        </div>

		    </div>
		    <div class="clearfix"> </div>
		    <!---->
		    <div class="tab-head">
		        <nav class="nav-sidebar">
		            <ul class="nav tabs">
		                <li class="active"><a href="#tab1" data-toggle="tab">Descripción</a></li>
		                <li class=""><a href="#tab2" data-toggle="tab">Solicitar más información</a></li>
		            </ul>
		        </nav>
		        <div class="tab-content one">
		            <div class="tab-pane active text-style" id="tab1">
		                <div class="facts">
		                	@if (isset($product->description) && 
		                		!empty($product->description ))
		                    	{!! $product->description !!}
		                    @else
		                    	<p>Sin descripción</p>
		                    @endif
		                </div>

		            </div>
		            <div class="tab-pane text-style" id="tab2">

		                <div class="facts">
		                	<h3>Desea solicitar un asesor</h3><br>
		                   	<form action="" method="post">

		                   		<div class="row">
		                   			<div class="col-md-4">
		                   				<label>Nombre y Apellido</label>
		                   				<input type="text" name="name" 
		                   					   class="form-control">
		                   			</div>
		                   			<div class="col-md-4">
		                   				<label>Telefono</label>
		                   				<input type="text" name="phone" 
		                   					   class="form-control">
		                   			</div>
		                   			<div class="col-md-4">
		                   				<label>Email</label>
		                   				<input type="text" name="mail" 
		                   					   class="form-control">
		                   			</div>
		                   			<div class="col-md-12">
		                   				<label>Desea agregar algo?</label>
		                   				<textarea name="comentary" 
		                   					   class="form-control"></textarea>
		                   			</div>
		                   			<div class="col-md-12" style="margin-top:20px; ">
		                   				<button type="submit" class="btn btn-success btn-block">Enviar</button>
		                   			</div>
								</div>
		                   		
							</form>
		                </div>

		            </div>
		            
		        </div>
		        <div class="clearfix"></div>
		    </div>
		    <!---->
		</div>
		
		<div class="col-md-3 product-bottom product-at">
		    
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

		</div>
		<div class="clearfix"> </div>
	</div>
</div>


<script type="text/javascript">
	$(document).ready(function(){
		$('.value-plus').on('click', function() {
			var divUpd = $(this).parent().find('.value'),
				newVal = parseInt(divUpd.text(), 10) + 1;
			divUpd.text(newVal);
			cantProductArt = newVal;
		});

		$('.value-minus').on('click', function() {
			var divUpd = $(this).parent().find('.value'),
				newVal = parseInt(divUpd.text(), 10) - 1;
			if (newVal >= 1) divUpd.text(newVal);
			cantProductArt = newVal;
		});
		
		
		
		// Anexamos
		$('.add-to').click(function(e){
			e.preventDefault();
			
			let data = {
				quantity : cantProductArt,
				product_id : {{ $product->id }}
			};
				
			{{-- Si no existe la session de pedido solicita --}}
			@if($orderActive == false)
				$.ajax({
					type: "GET",
					url: '{{ @route('order.store') }}',
					data: data, // serializes the form's elements.
					headers : {
						"content-type": "application/json",
						"accept": "application/json",
					},
					success: function(data){
						console.log(data); // show response from the php script.

					},
					error : function(response, textStatus, errorThrown){
						console.error(response);
					}
				});	
			@endif
			
			{{-- Anexamos un producto a un nuevo pedido --}}
			$.ajax({
				type: "GET",
				url: '{{ @route('order.product.store') }}',
				data: data, // serializes the form's elements.
				headers : {
					"content-type": "application/json",
					"accept": "application/json",
				},
				success: function(data){
					console.log(data); // show response from the php script.
					
				},
				error : function(response, textStatus, errorThrown){
					console.error(response);
				}
			});
			
			console.log('test');
		});	
	})
	
</script>
@endsection