<div class="col-md-{{ $columnMdSize }} item-grid simpleCart_shelfItem">
    <div class=" mid-pop">
        <div class="pro-img">
            
            @if(isset($product->image) && empty($product->image)) 
                <img src="{{ @url("assets/images/image-not-found.jpg")}}" class="img-responsive image-preview-product" alt="">
            @else
                <img src="{{ @url("storage/$product->image")}}" class="img-responsive image-preview-product" alt="">
            @endif
            <div class="zoom-icon">
                <a class="picture" href="{{ @url("storage/$product->image")}}" rel="title" class="b-link-stripe b-animate-go  thickbox"><i class="glyphicon glyphicon-search icon"></i></a>
                <a href="{{@route('product.detail', $product->id)}}"><i class="glyphicon glyphicon-menu-right icon"></i></a>
            </div>
        </div>
        <div class="mid-1">
            <div >
                <div>
                    <span>
                        {{ $product->category->name }}
                    </span>
                    <h6>
                        <a href="{{@route('product.detail', $product->id)}}">
                            {{ $product->title }}
                        </a>
                    </h6>
                </div>
                <div class="img item_add">
                    <a href="#">
                        <img src="{{ @url("assets/images/ca.png")}}" >
                    </a>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="mid-2">
                <p>
                    @if (!empty($product->price) || $product->price != 0)
                    	<label>{{ $product->price }}</label>
                    @endif
                    
                    @if (!empty($product->price_after) || $product->price_after != 0)
                    	<em class="item_price">{{ $product->price_after }} </em></p>
                    @endif
                <div class="block">
                    <div class="starbox small ghosting"> </div>
                </div>

                <div class="clearfix"></div>
            </div>

        </div>
    </div>
</div>