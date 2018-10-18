@extends('template.main')

@section('content_page')
	<!--banner-->
<div class="banner-top">
    <div class="container">
        <h1>Delivery / Pedido</h1>
        <em></em>
        <h2><a href="#">Inicio</a><label>/</label>Delivery</h2>
    </div>
</div>
<!--login-->
<script>
    $(document).ready(function(c) {
        $('.close1').on('click', function(c) {
            $('.cart-header').fadeOut('slow', function(c) {
                $('.cart-header').remove();
            });
        });
    });
</script>
<script>
    $(document).ready(function(c) {
        $('.close2').on('click', function(c) {
            $('.cart-header1').fadeOut('slow', function(c) {
                $('.cart-header1').remove();
            });
        });
    });
</script>
<script>
    $(document).ready(function(c) {
        $('.close3').on('click', function(c) {
            $('.cart-header2').fadeOut('slow', function(c) {
                $('.cart-header2').remove();
            });
        });
    });
</script>
<div class="check-out">
    <div class="container">

        <div class="bs-example4" data-example-id="simple-responsive-table">
            <div class="table-responsive">
                <table class="table-heading simpleCart_shelfItem">
                    <tr>
                        <th class="table-grid">Producto</th>
                        <th class="text-right">Precio</th>
                        <th class="text-right">Cantidad</th>
                        <th class="text-right">Subtotal</th>
                    </tr>

                    @foreach($productOrders as $productOrder)
                        <tr class="cart-header">
                            <td>
                                <a href="{{ $productOrder->product->id }} " class="at-in">
                    <img src="{{ 
                        @url("storage").'/'.$productOrder->product->image }}" class="img-responsive" style="max-height: 150px; border:1px solid #ddd;">
                                </a>
                                <div class="sed">
                                    <h5><a href="single.html"></a></h5>
                                    <p>
                                        <h3 style="margin-top: 20px;">
                                        {{ $productOrder->product->title }}
                                        </h3>
                                    </p>

                                </div>
                            </td>
                            
                            {{--  Precio --}}
                            <td class="text-right">{{ $productOrder->product->price }}</td>
                            
                            <td class="text-right">{{ $productOrder->quantity }}</td>

                            {{--  Subtotal - precio x cantidad --}}
                            <td class="text-right">{{ $productOrder->product->price }}</td>

                           
                            {{-- <td>FREE SHIPPING</td> --}}
                            <td class="add-check text-right">
                                <a class="item_add hvr-skew-backward" 
                                   href="#">Actualizar</a>
                                <a href="{{ @route }}" class="btn btn-danger">Eliminar</a>
                            </td>
                        </tr>    
                    @endforeach

                </table>
            </div>
        </div>
        <div class="produced">
            <div class="row">
                <div class="col-md-2 col-md-offset-6">
                    <a href="#" class="hvr-skew-backward">Solicitar</a>
                </div>
                <div class="col-md-4">
                    <a href="{{ route('order.cancel') }}" class="hvr-skew-backward">Cancelar Pedido</a>
                </div>
            </div>
            
        </div>
    </div>
</div>

<!--//login-->
<!--brand-->
<div class="container">
    <div class="brand">
        <div class="col-md-3 brand-grid">
            <img src="images/ic.png" class="img-responsive" alt="">
        </div>
        <div class="col-md-3 brand-grid">
            <img src="images/ic1.png" class="img-responsive" alt="">
        </div>
        <div class="col-md-3 brand-grid">
            <img src="images/ic2.png" class="img-responsive" alt="">
        </div>
        <div class="col-md-3 brand-grid">
            <img src="images/ic3.png" class="img-responsive" alt="">
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<!--//brand-->
@endsection