<!--banner-->
{{-- <div class="banner">
	<div class="container">
		<section class="rw-wrapper">
			<h1 class="rw-sentence">
				<span>Fashion &amp; Beauty</span>
				<div class="rw-words rw-words-1">
					<span>Beautiful Designs</span>
					<span>Sed ut perspiciatis</span>
					<span> Totam rem aperiam</span>
					<span>Nemo enim ipsam</span>
					<span>Temporibus autem</span>
					<span>intelligent systems</span>
				</div>
				<div class="rw-words rw-words-2">
					<span>We denounce with right</span>
					<span>But in certain circum</span>
					<span>Sed ut perspiciatis unde</span>
					<span>There are many variation</span>
					<span>The generated Lorem Ipsum</span>
					<span>Excepteur sint occaecat</span>
				</div>
			</h1>
		</section>
	</div>
</div> --}}


<!-- Place somewhere in the <body> of your page -->
<div class="flexslider">
  <ul class="slides">
  	@foreach($slides as $slide)
    <li>
      <img src="{{ @url("storage/$slide->img_slide") }}" />
    </li>
    @endforeach
  </ul>
</div>
{{-- <div class="custom-navigation">
  <a href="#" class="flex-prev">
  	Anterior
  </a>
  <div class="custom-controls-container"></div>
  <a href="#" class="flex-next">
  	Siguiente
  </a>
</div> --}}

<script type="text/javascript">
	// Can also be used with $(document).ready()
	$(document).ready(function() {

	  $('.flexslider').flexslider({
	    animation: "slide",
	    customDirectionNav: $(".custom-navigation a")
	  });

	});
</script>