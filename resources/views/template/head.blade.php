<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	
	<!--//theme-style-->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Keywords de Aries Salud" />

	<title>{{ $business_name }} - {{ $title_page }}</title>

	<script type="text/javascript">
		addEventListener("load", function() {
			setTimeout(hideURLbar, 0); 
		}, false); 

		function hideURLbar(){ 
			window.scrollTo(0,1); 
		} 
	</script>

	<!--theme-style-->
	<link rel="stylesheet" href="{{ @url("assets/css/jstarbox.css") }}" type="text/css" media="screen" charset="utf-8" />
	<link rel="stylesheet" href="{{ @url("assets/css/flexslider.css") }}" type="text/css" media="screen" />
	<link rel="stylesheet" href="{{ @url("assets/css/chocolat.css")}}" type="text/css" media="screen" charset="utf-8">
	<link href="{{ @url("assets/css/form.css") }}" rel="stylesheet" type="text/css" media="all" />

	<link href="{{ @url("assets/css/bootstrap.css") }}" rel="stylesheet" type="text/css" media="all" />
	

	<link href="{{ @url("assets/css/style.css") }}" rel="stylesheet" type="text/css" media="all" />	

	<link href="{{ @url("assets/css/style4.css") }}" rel="stylesheet" type="text/css" media="all" />	
	<link rel="stylesheet" href="{{ @url("assets/css/custom.css") }}" type="text/css" media="screen" charset="utf-8" />


	<script src="{{ @url("assets/js/jquery.min.js")}}"></script>


	<!--- start-rate---->
	<script src="{{ @url("assets/js/jstarbox.js")}}"></script>
	

	<script type="text/javascript">
		// Numero de Articulos a ser solicitados
		var cantProductArt = 0;
		
		jQuery(function() {
			jQuery('.starbox').each(function() {
				var starbox = jQuery(this);
					starbox.starbox({
					average: starbox.attr('data-start-value'),
					changeable: starbox.hasClass('unchangeable') ? false : starbox.hasClass('clickonce') ? 'once' : true,
					ghosting: starbox.hasClass('ghosting'),
					autoUpdateAverage: starbox.hasClass('autoupdate'),
					buttons: starbox.hasClass('smooth') ? false : starbox.attr('data-button-count') || 5,
					stars: starbox.attr('data-star-count') || 5
					}).bind('starbox-value-changed', function(event, value) {
					if(starbox.hasClass('random')) {
					var val = Math.random();
					starbox.next().text(' '+val);
					return val;
					} 
				})
			});
		});
	</script>

</head>
<body>