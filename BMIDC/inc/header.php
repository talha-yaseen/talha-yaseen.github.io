<!doctype html>
<html>
	<head>
		<title><?php echo $pageTitle . " | BMIDC '15"; ?></title>	
		<link rel="stylesheet" href="css/normalize.css">
		<link rel="stylesheet" href="css/animate.css">
		<link rel="stylesheet" href="css/my-fonts.css">
		<link rel="stylesheet" href="css/style.css">
	</head>

	<body>
		<!--Navigation Bar-->
		<div id="navbar">
			<ul id="nav-list-left">
				<li class="nav-link"><a href="index.php" <?php if ($pageTitle=="Home") { echo 'class="active"'; } ?>>Home</a></li>
				<li class="nav-link"><a href="host_team.php" <?php if ($pageTitle=="Host Team") { echo 'class="active"'; } ?>>Host Team</a></li>
				<li class="nav-link"><a href="committees.php" <?php if ($pageTitle=="Committees") { echo 'class="active"'; } ?>>Committees</a></li>
			</ul>
			<img class="logo" src="img/Logo.png"></img>
			<ul id="nav-list-right">
				<li class="nav-link"><a href="conference.php" <?php if ($pageTitle=="Conference") { echo 'class="active"'; } ?>>Conference</a></li>
				<li class="nav-link"><a href="social_events.php" <?php if ($pageTitle=="Social Events") { echo 'class="active"'; } ?>>Social Events</a></li>
				<li class="nav-link"><a href="register.php" <?php if ($pageTitle=="Register") { echo 'class="active"'; } ?>>Register</a></li>
			</ul>
		</div>
		<!--Navigation Bar End-->

		<div id="content">