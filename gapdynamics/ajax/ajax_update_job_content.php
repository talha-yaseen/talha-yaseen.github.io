<?php
	include('../inc/database_info.php');
	if (isset($_POST['job_content'])) {
		$job_id = $_POST['job_id'];
		$job_content = $_POST['job_content'];

		$mysqli = new mysqli($mysql_server, $mysql_username, $mysql_password, $mysql_db);
		if ($mysqli -> connect_errno) {
			echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
			exit();
		}

		$query = "UPDATE 3763857643_jobs SET job_content_html='" . $job_content . "' WHERE job_id='" . $job_id . "';";
		$result = $mysqli -> query($query);

		if ($result)
			echo "SUCCESS";
		else
			echo "ERROR";
		$mysqli -> close();
	}
?>