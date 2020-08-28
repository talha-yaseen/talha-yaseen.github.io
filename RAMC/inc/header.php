<!doctype html>
<html>
	<head>
		<title><?php echo $pageTitle;?> - RAMC Events</title>
		<link rel="stylesheet" type="text/css" href="css/normalize.css">
		<link rel="stylesheet" href="css/my-fonts.css">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	</head>

	<body>

		<div id="navbar">
			<img id="logo" src="img/logo.png">
			<div id="nav">
				<ul id="nav-ul">
					<li><a <?php if ($pageTitle=='Home') {?>class="active"<?php } ?> href="index.php">Home</a></li>
					<li><a <?php if ($pageTitle=='Our Team') {?>class="active"<?php } ?>href="team.php">Our Team</a></li>
					<!--<li><a <?php if ($pageTitle=='Events') {?>class="active"<?php } ?>href="events.php">Events</a></li>-->
					<li><a <?php if ($pageTitle=='Bookings') {?>class="active"<?php } ?>href="#">Bookings</a></li>
				</ul>
			</div>
		</div>