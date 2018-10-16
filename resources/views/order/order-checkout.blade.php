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
                        <th>Precio</th>
                        <th>Cantidad</th>
                        <th>Subtotal</th>
                    </tr>

                    @foreach($productOrders as $productOrder)
                        <tr class="cart-header">
                            <td class="ring-in">
                                <a href="single.html" class="at-in"><img src="images/ch.jpg" class="img-responsive" alt=""></a>
                                <div class="sed">
                                    <h5><a href="single.html"></a></h5>
                                    <p>
                                        {{ $productOrder->product->title }}
                                    </p>

                                </div>
                            </td>
                            
                            {{--  Precio --}}
                            <td>{{ $productOrder->product->price }}</td>
                            
                            <td>{{ $productOrder->quantity }}</td>
                            {{-- <td>FREE SHIPPING</td> --}}
                            <td class="add-check">
                                <a  class="item_add hvr-skew-backward" 
                                    href="#">Actualizar</a>
                                <a href="#" class="btn btn-danger">Eliminar</a>
                            </td>
                        </tr>    
                    @endforeach

                </table>
            </div>
        </div>
        <div class="produced">
            <div class="row">
                <div class="col-md-6">
                    <a href="#" class="hvr-skew-backward">Solicitar</a>
                </div>
                <div class="col-md-6">
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