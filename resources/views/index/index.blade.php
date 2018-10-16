@extends('template.main')

@section('content_page')
	@include('template.slide-index')	
	<div class="container">
		@include('product.partials.product-promos')	
		@include('product-category.category-icon-list')	
		@include('product.product-list')	
	</div>
@endsection