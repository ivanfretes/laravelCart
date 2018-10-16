<!--banner-->
<div class="banner-top">
    <div class="container">
        <h1>{{ $title }} </h1>
        <em></em>
        <h2>
        	<a href="{{ $baseLink }}">{{ $baseName }}</a>
        	<label>/</label>
        	{{ $currentName }}
        </h2>
    </div>
</div>

<style type="text/css">

	{{-- @if(isset($backgroundBanner) && !empty($backgroundBanner)) --}}
		.banner-top {
			background-image: url({{ $backgroundBanner }});
		}
	{{-- @endif --}}

</style>