<!doctype html>
<html>
	<head>
		<title><?php echo $pageTitle; ?> - GAP Dynamics</title>

		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- Bootstrap + Dependencies -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<!--<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>-->
		<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

		<!-- Slick -->
		<link rel="stylesheet" type="text/css" href="slick/slick.css"/>
		<link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>

		<!-- Fontawesome -->
		<link href="fontawesome/css/all.css" rel="stylesheet">

		<!-- Website stylesheet -->
		<link rel="stylesheet" href="css/style.css" />

		<!-- Animate.css -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
	</head>

	<body>
		<!-- Header Bar -->
		<header class="header-transparent">
			<a href="index.php" ><img id="header-logo" src="img/gap_header_logo.png" /></a>
			<div id="nav-trigger-btn">
				<div class="bar1"></div>
				<div class="bar2"></div>
				<div class="bar3"></div>
			</div>
			<!-- Navigation -->
			<div id="main-nav">
				<div id="nav-bg-text"></div>
				<div class="nav-links">
				    <a href="index.php" data-bg-img="img/nav_bg_text/home.png" <?php if ($pageTitle == 'Home') echo 'class="active"'; ?> >Home</a>
				    <a href="about-us.php" data-bg-img="img/nav_bg_text/about.png" <?php if ($pageTitle == 'About Us') echo 'class="active"'; ?>>About Us</a>
				    <a href="services.php" data-bg-img="img/nav_bg_text/services.png" <?php if ($pageTitle == 'Services') echo 'class="active"'; ?> >Services</a>
				    <a href="careers.php" data-bg-img="img/nav_bg_text/careers.png" <?php if ($pageTitle == 'Careers') echo 'class="active"'; ?> >Careers</a>
			  </div>
			</div>
			<!-- ./Navigation -->
		</header>
		<!-- ./Header Bar -->