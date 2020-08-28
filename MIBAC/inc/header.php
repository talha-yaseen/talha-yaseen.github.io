<!doctype html>
<html>
	<head>
		<title>MIBAC &#39;17</title>
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
					<li><a <?php if ($pageTitle=='Committees') {?>class="active"<?php } ?>href="index.php#committees">Committees</a></li>
					<li><a <?php if ($pageTitle=='Host Team') {?>class="active"<?php } ?>href="team.php">Host Team</a></li>
					<li><a <?php if ($pageTitle=='Social Events') {?>class="active"<?php } ?>href="social-events.php">Social Events</a></li>
					<li><a <?php if ($pageTitle=='Register') {?>class="active"<?php } ?>href="register.php">Register</a></li>
				</ul>
			</div>
		</div>