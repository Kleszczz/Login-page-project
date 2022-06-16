<!DOCTYPE HTML>
<html lang="pl">
<head>

	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	
	<title>Hackme.pl</title>
	
	<meta name="description" content="Hackme.pl Polska strona mająca na celu uczenia atakow hackerskich" />
	<meta name="keywords" content="Hackme.pl" />
	
	<script type="text/javascript" src="../main.js"></script>

	<link href="../style.css" rel="stylesheet" type="text/css" />

	<link href='http://fonts.googleapis.com/css?family=Lato:400,700&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
	<link href="css/fontello.css" rel="stylesheet" type="text/css" />
	
</head>

<body>
	<div class="container">
	
		<div class="header">
			<a href="index.html" style="text-decoration:none;">
				<div class="logo">
					<span style="color: #00ff80">Hack</span><span style="color: #ffffff">me.pl</span>
					<div style="clear:both;"></div>
				</div>
			</a>
		</div>

		<div class="nav">
			<ol>
				<li><a href="#">Strona główna</a></li>
				<li><a href="#">O autorach</a></li>
			</ol>
		</div>

		<div class="content">
			
            <p>Zalogowany? Do działania!</p>

		</div>


		<div class="footer">hackme.pl &copy; 2021 Thank you for your visit Hackerinio! But the flag is in another div</div>

	</div>
	





	<script src="jquery-1.11.3.min.js"></script>
	<script>
	
		$(document).ready(function() {
		var NavY = $('.nav').offset().top;
		 
		var stickyNav = function(){
		var ScrollY = $(window).scrollTop();
			  
		if (ScrollY > NavY) { 
			$('.nav').addClass('sticky');
		} else {
			$('.nav').removeClass('sticky'); 
		}
		};
		 
		stickyNav();
		 
		$(window).scroll(function() {
			stickyNav();
		});
		});
		
	</script>

	
	
</body>
</html>