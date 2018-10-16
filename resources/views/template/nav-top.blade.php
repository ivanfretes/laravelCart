@php
	$i = 0;
	
@endphp
       <nav class="navbar nav_bottom" role="navigation">

    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header nav_2">
        <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>

    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
        <ul class="nav navbar-nav nav_1">
            <li><a class="color" href="{{ @route('page.index') }}">Inicio</a></li>

            <li><a class="color4" href="{{ @route('page.about') }}">Nosotros</a></li>

            <li class="dropdown mega-dropdown active">
                <a class="color1" href="#" class="dropdown-toggle" data-toggle="dropdown">Productos<span class="caret"></span></a>
                <div class="dropdown-menu mega-dropdown-menu">
                    <div class="menu-top row text-left">
                      	
                       @foreach($categories as $category)
							<div class="col-md-4">
								<div class="h_nav">
								<a href="{{ @url("categorias/$category->id") }}">{{ $category->name }}</a>
								</div>
							</div>	
                       @endforeach

                        <div class="clearfix"></div>
                    </div>
                </div>
            </li>

          {{--   <li class="dropdown mega-dropdown active">
                <a class="color2" href="#" class="dropdown-toggle" data-toggle="dropdown">Marcas<span class="caret"></span></a>
                <div class="dropdown-menu mega-dropdown-menu">
                    <div class="menu-top row text-left">
                        
                       @foreach($categories as $category)
                            <div class="col-md-6">
                                <div class="h_nav">
                                <a href="{{ @url("categorias/$category->id") }}">{{ $category->name }}</a>
                                </div>
                            </div>  
                       @endforeach

                        <div class="clearfix"></div>
                    </div>
                </div>
            </li>
 --}}
            <li><a class="color6" href="{{ @route('page.contact')}}">Contacto</a></li>
        </ul>
    </div>
    <!-- /.navbar-collapse -->

</nav>