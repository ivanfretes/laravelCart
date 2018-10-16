<div class="content-mid text-center">
  <h3>Promociones</h3>
  <label class="line"></label>
</div>


<div class="content-top">
    <div class="col-md-6 col-md">
        <div class="col-1">    
            <a href="{{ @url("productos/$productDestacado->id") }}" 
                class="b-link-stroke b-animate-go  thickbox">
                
                <img src="{{ @url("storage/$productDestacado->image")}}" 
                     class="img-responsive img-promo-destacado" alt="" />
                <div class="b-wrapper1 long-img">
                    <p class="b-animate b-from-right b-delay03 ">{{ $productDestacado->title }}</p>
{{--                     <label class="b-animate b-from-right b-delay03 ">
                        {{ $productDestacado->category->name }}
                    </label> --}}
                    
                    <h3 class="b-animate b-from-left    b-delay03 ">
                        {{ $productDestacado->category->name }}
                    </h3>
                </div>
            </a>
            
            <!---<a href="single.html"><img src="{{ @url("assets/images/pi.jpg")}}" class="img-responsive" alt=""></a>-->

        </div>
        <div class="col-2">
            <span>Destacado</span>
            <a href="single.html"></p>
            <a href="single.html" class="buy-now">Solicitar</a>
        </div>

    </div>
    <div class="col-md-6 col-md1">
        @foreach($productPromos as $product)
            <div class="col-3">
                <a href="{{ @url("productos/$product->id")}}">
                    
                    {{-- Se visualiza la imagen --}}
                    @if(isset($product->image) && empty($product->image)) 
                        <img src="{{ @url("assets/images/image-not-found.jpg")}}" class="img-responsive" style="object-fit: cover; min-height: 305px;">
                    @else
                        <img src="{{ @url("storage/$product->image")}}" class="img-responsive" style="object-fit: cover; min-height: 305px;">
                    @endif

                    <div class="col-pic">
                        <p>{{ $product->title }}</p>
                        <label></label>
                        <h5>{{ $product->category->name }}</h5>
                    </div>
                </a>
            </div>
        @endforeach
    </div>
    <div class="clearfix"></div>
</div>