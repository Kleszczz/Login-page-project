<div class="footer">hackme.pl &copy; 2021 Thank you for your visit Hackerinio! But the flag is in another div</div>


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