<!-- Place somewhere in the <body> of your page -->
<div class="content-mid text-center">
  <h3>Categorias</h3>
  <label class="line"></label>
</div>

<div class="flexslider-carrousel carousel">
  <ul class="slides">
    @foreach($categories as $category)
    <li>
      
      <div>
        @if (isset($category->image) && !empty($category->image))
          <img src="{{ @url("storage/$category->image") }}" class="img-responsive img-category-icon" />
        @else
          <img src="{{ @url("assets/images/image-not-found.jpg") }}" class="img-responsive img-category-icon">
        @endif
      </div>

      <div class="container-title-category">
        <a href="{{ @url("categorias/$category->id")}}">
          {{ $category->name }}
        </a>
      </div>
    </li>
    @endforeach
  </ul>
</div>


<script type="text/javascript">
  $(document).ready(function() {
  
    $('.flexslider-carrousel').flexslider({
      animation: "slide",
      animationLoop: false,
      itemWidth: 210,
      itemMargin: 5,
      minItems: 2,
      maxItems: 4
    });

  });
</script>