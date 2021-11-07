<!DOCTYPE html>
<html>
<head>
	<title>Responsive Navigation Demo</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="stylesheet" href="normalize.css">
	<link rel="stylesheet" href="style.css">
	<link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css'>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	<script>
		$(function() {
			var pull 		= $('#pull');
				menu 		= $('nav ul');
				menuHeight	= menu.height();

			$(pull).on('click', function(e) {
				e.preventDefault();
				menu.slideToggle();
			});

			$(window).resize(function(){
        		var w = $(window).width();
        		if(w > 320 && menu.is(':hidden')) {
        			menu.removeAttr('style');
        		}
    		});
		});
	</script>
</head>
<body>
	<nav class="clearfix">
		<ul class="clearfix">
			<li><a href="#">Home</a></li>
			<li><a href="#">How-to</a></li>
			<li><a href="#">Icons</a></li>
			<li><a href="#">Design</a></li>
			<li><a href="#">Web 2.0</a></li>
			<li><a href="#">Tools</a></li>	
		</ul>
		<a href="#" id="pull">Menu</a>
	</nav>
</body>
</html>