<!-- Page Header -->
<?php 
	$pageTitle = 'Services';
	include('inc/header.php');
?>
<!-- ./Page Header -->
		
<!-- Main Intro Banner -->
<div id="services-page-intro" class="container-fluid full-height-row align-center color-overlay">
	<h1>Services</h1>
</div>
<!-- ./Main Intro Banner -->

<!-- Digital Transformation -->
<div class="container-fluid row-padded product-info">
	<div class="row align-items-center">
		<div class="col-md text-center">
			<img class="img-fluid" src="img/products/covid_app_home.png"/>
		</div>
		<div class="col-md">
			<h1>COVID-19 App</h1>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc velit mi, molestie eget consectetur at, aliquam nec leo. Phasellus ultrices cursus efficitur. Curabitur congue vel libero vel bibendum. Ut eu finibus urna. Vestibulum malesuada orci quam, non placerat enim egestas ut. In pellentesque odio ut lacinia luctus. Phasellus justo massa, fermentum non rutrum laoreet, sodales in nisl. Duis at urna convallis, viverra risus sed, fermentum velit. Phasellus bibendum, sapien a porttitor interdum, nisl diam iaculis dolor, vitae egestas ligula nulla vitae nibh.</p>
		</div>
	</div>
</div>
<!-- ./Digital Transformation -->

<!-- Product Banners -->
<div id="product-banner-1" class="container-fluid product-banner"></div>
<div id="product-banner-2" class="container-fluid product-banner"></div>
<div id="product-banner-3" class="container-fluid product-banner"></div>
<!-- ./Product Banners -->

<!-- Custom JavaScript -->
<script>
	var banner_ratios = [];
	
	$(window).on('load', function() {
		$('.product-banner').each(function() {
			// Get aspect ratio of each banner image
			let img = new Image;
			img.src = $(this).css('background-image').replace(/url\(\"|\"\)$/ig, "");
			let img_ratio = img.height / img.width;
			banner_ratios.push(img_ratio);
		})
		resizeBanners();
	});
	$(window).resize(resizeBanners);

	function resizeBanners() {
		// Update size of each banner based on screen width
		let screenWidth = $(window).width();
		$('.product-banner').each(function(index) {
			$(this).css('height', screenWidth * banner_ratios[index]);
		});
	}
</script>
<!-- ./Custom JavaScript -->

<!-- Page Footer -->
<?php
	include('inc/footer.php');
?>
<!-- ./Page Footer -->