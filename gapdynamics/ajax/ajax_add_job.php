<?php
	include('../inc/database_info.php');
	if (isset($_POST['job_id'])) {
		$job_id = $_POST['job_id'];
		$job_title = $_POST['job_title'];
		$job_type = $_POST['job_type'];
		$job_location = $_POST['job_location'];
		$job_content = $_POST['job_content'];

		$mysqli = new mysqli($mysql_server, $mysql_username, $mysql_password, $mysql_db);
		if ($mysqli -> connect_errno) {
			echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
			exit();
		}

		$query = "INSERT INTO 3763857643_jobs VALUES ('$job_id', '$job_title', '$job_type', '$job_location', '$job_content')";
		$result = $mysqli -> query($query);

		if ($result)
			echo "SUCCESS";
		else
			echo "ERROR";
		$mysqli -> close();
	}
?>