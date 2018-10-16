<div class="footer">
	<div class="footer-middle">
		<div class="container">
			<div class="col-md-3 footer-middle-in">
				<a href="index.html"><img src="{{ @url("assets/images/ariesalud-logo.png") }}"  class="img-responsive" alt=""></a>
				<p>
					Una empresa que se dedica al mantenimiento de equipos electro-medicos, insumos medicos descartables. Con mas de siete años de experiencia proveyendo productos con certificados internacionales.
				</p>
			</div>
			
			<div class="col-md-3 footer-middle-in">
				<h6>Information</h6>
				<ul class=" in">
<!--					<li><a href="404.html"></a></li>-->
					<li><a href="contact.html">Inicio</a></li>
					<li><a href="contact.html">Contacto</a></li>
					<li><a href="#">Productos</a></li>
					<li><a href="#">Categorias</a></li>
				</ul>
				<ul class="in in1">
					<li><a href="#">Iniciar Sesión</a></li>
					<li><a href="wishlist.html">Crear una cuenta</a></li>
					<li><a href="login.html"></a></li>
				</ul>
				<div class="clearfix"></div>
			</div>
			<div class="col-md-3 footer-middle-in">
				<h6>Más Buscados</h6>
				<ul class="tag-in">
					<li><a href="#">Lorem</a></li>
					<li><a href="#">Sed</a></li>
					<li><a href="#">Ipsum</a></li>
					<li><a href="#">Contrary</a></li>
					<li><a href="#">Chunk</a></li>
					<li><a href="#">Amet</a></li>
					<li><a href="#">Omnis</a></li>
				</ul>
			</div>
			<div class="col-md-3 footer-middle-in">
				<h6>Suscribirse</h6>
				<span>Correo</span>
					<form>
						<input type="text" value="Enter your E-mail" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='Enter your E-mail';}">
						<input type="submit" value="Subscribe">	
					</form>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	<div class="footer-bottom">
		<div class="container">
			<ul class="footer-bottom-top">
				<li><a href="#"><img src="images/f1.png" class="img-responsive" alt=""></a></li>
				<li><a href="#"><img src="images/f2.png" class="img-responsive" alt=""></a></li>
				<li><a href="#"><img src="images/f3.png" class="img-responsive" alt=""></a></li>
			</ul>
			<p class="footer-class">&copy; 2018 | Desarrollado por  <a href="http://www.oikuaa.com" target="_blank">Oikuaa Labs</a> </p>
			<div class="clearfix"> </div>
		</div>
	</div>
</div>
	{{-- Image Zoom --}}
	<script src="{{ @url("assets/js/imagezoom.js")}}"></script>
	

	{{-- Flex Slider --}}
	<script defer src="{{ @url("assets/js/jquery.flexslider.js") }}"></script>

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="{{ @url("assets/js/simpleCart.min.js") }}"> </script>
	

	<!--light-box-files -->
	<script src="{{ @url("assets/js/jquery.chocolat.js") }}"></script>
	

	<script src="{{ @url("assets/js/bootstrap.min.js") }}"></script>
	
	
	<!--light-box-files -->
	<script type="text/javascript" charset="utf-8">
		$(function() {
			$('a.picture').Chocolat();
		});

		// Can also be used with $(document).ready()
		$(window).load(function() {
		  $('.flexslider').flexslider({
		    animation: "slide",
		    controlNav: "thumbnails"
		  });
		});
	</script>


</body>
</html>