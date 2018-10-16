
<div class="content-mid">
    <h3>Ultimos Artículos</h3>
    <label class="line"></label>
    <div class="mid-popular">
        @foreach($products as $product)
            @include('product.partials.product-box', [
                'columnMdSize' => 3,
                'product' => $product
            ])
        @endforeach
        <div class="clearfix"></div>
    </div>
</div>