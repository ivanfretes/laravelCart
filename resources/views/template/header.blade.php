<!--header-->
<div class="header">
    <div class="container">
        <div class="head">
            <div class=" logo">
                <a href="{{ @route('page.index') }}">
                    <img src="{{@url("assets/images/ariesalud-logo.png")}}" alt="Aries Salud" style="max-width: 190px; background-color: #fff;">
                </a>
            </div>
        </div>
    </div>
    <div class="header-top">
        <div class="container">
            <div class="col-sm-5 col-md-offset-2  header-login">
                <ul>
                    @if (Auth::check())
                        <li>
                            <a href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                                Cerrar Sesión
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>

                    @else
                        <li><a href="{{ @route('login') }}">Iniciar Sesión</a></li>
                        <li><a href="{{ @route('register') }}">Registrarse</a></li>
                    @endif
                    {{-- 
                    <li><a href="{{ @url('products.checkout') }}">Checkout</a></li> --}}
                </ul>
            </div>

            <div class="col-sm-5 header-social">
                <ul>
                    <li><a href="#"><i></i></a></li>
                    <li><a href="#"><i class="ic1"></i></a></li>
<!--
                    <li><a href="#"><i class="ic2"></i></a></li>
                    <li><a href="#"><i class="ic3"></i></a></li>
                    <li><a href="#"><i class="ic4"></i></a></li>
-->
                </ul>

            </div>
            <div class="clearfix"> </div>
        </div>
    </div>

    <div class="container">

        <div class="head-top">

            <div class="col-sm-8 col-md-offset-2 h_menu4">
                @include('template.nav-top')
            </div>
            <div class="col-sm-2 search-right">
                <ul class="heart">
                    <!--li>
                        <a href="wishlist.html">
                            <span class="glyphicon glyphicon-heart" aria-hidden="true"></span>
                        </a>
                    </li -->
                    <li><a class="play-icon popup-with-zoom-anim" href="#small-dialog"><i class="glyphicon glyphicon-search"> </i></a></li>
                </ul>
                <div class="cart box_1">
                    <a href="checkout.html">
                        <h3> 
							<div class="total">
                                <span class="simpleCart_total">
                                </span>
                            </div> 
							<img src="{{ @url("assets/images/cart.png")}}" />
                        </h3>
                    </a>
                    <p>
                        

                        @if (isset($orderActive) && $orderActive != false)
                            <p>
                                <a href="{{ @route('order.product.list')}}" >
                                    Ir a la compra    
                                </a>
                            </p>
                        @else 
                            <p>
                                <a href="#" >
                                    Carrito Vacio    
                                </a>
                            </p>
                        @endif
                        

                </div>
                <div class="clearfix"> </div>

                <!----->

                <!---pop-up-box---->
                <link href="{{ @url("assets/css/popuo-box.css")}}" rel="stylesheet" type="text/css" media="all" />
                <script src="{{ @url("assets/js/jquery.magnific-popup.js")}}" type="text/javascript"></script>
                <!---//pop-up-box---->
                <div id="small-dialog" class="mfp-hide">
                    <div class="search-top">
                        <div class="login-search">
                            <input type="submit" value="">
                            <input type="text" value="Search.." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search..';}">
                        </div>
                        <p>Shopin</p>
                    </div>
                </div>
                <script>
                    $(document).ready(function() {
                        $('.popup-with-zoom-anim').magnificPopup({
                            type: 'inline',
                            fixedContentPos: false,
                            fixedBgPos: true,
                            overflowY: 'auto',
                            closeBtnInside: true,
                            preloader: false,
                            midClick: true,
                            removalDelay: 300,
                            mainClass: 'my-mfp-zoom-in'
                        });
                    });
                </script>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
