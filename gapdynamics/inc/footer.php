	<!-- Footer -->
	<footer>
		<div><i id="back-to-top" class="fas fa-angle-up fa-3x"></i></div>
		<span id="copyright-text">&copy; GAP Dynamics 2020</span>
	</footer>
	<!-- ./Footer -->
	
	<script>
		// Transparent header
		$(window).scroll(function() {
			if($('html, body').scrollTop() > ($('.white-part').offset().top - $('header').height() - 50)) {
				$('header').removeClass('header-transparent');
			}
			else {
				$('header').addClass('header-transparent');
			}
		});

		// Header menu button
		$('#nav-trigger-btn').on('click', function() {
			if ($(this).hasClass('menu-open'))
				$('#main-nav').css('height', '0');
			else {
				$('#main-nav').css('height', '100%');
				$('#nav-bg-text').css('background', "url('img/nav_bg_text/gapdynamics.png') center center");
				$('#nav-bg-text').css('background-size', 'contain');
				$('#nav-bg-text').css('background-repeat', 'no-repeat');
			}
			$(this).toggleClass("menu-open");
		});

		// Overlay menu background text
		$(function() {
		  if ($(window).width() >= 768) {
			  $('#main-nav a').on('mouseover', function() {
			    let img_url = $(this).attr('data-bg-img');
			    $('#nav-bg-text').fadeOut(300, function() {
			    	$('#nav-bg-text').css('background', "url('" + img_url + "') center center");
			    	$('#nav-bg-text').css('background-size', 'contain');
			    	$('#nav-bg-text').css('background-repeat', 'no-repeat');
			    	$('#nav-bg-text').fadeIn(700);
			    });
			    
			  });
		  }
		});

		// Back to top button
		$('#back-to-top').on('click', function() {
			$('html, body').animate({'scrollTop': '0'}, 800);
		})
	</script>	
	</body>
</html>