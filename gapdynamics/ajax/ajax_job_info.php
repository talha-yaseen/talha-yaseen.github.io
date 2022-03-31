<?php
	include('../inc/database_info.php');
	if (isset($_GET['job_id'])) {
		// Fetch job details from database
		$mysqli = new mysqli($mysql_server, $mysql_username, $mysql_password, $mysql_db);
		if ($mysqli -> connect_errno) {
			echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
			exit();
		}

		$query = "SELECT * FROM 3763857643_jobs WHERE job_id='" . $_GET['job_id'] . "';";
		$result = $mysqli -> query($query);

		if ($result && $result -> num_rows > 0) {
		  if ($row = $result -> fetch_assoc()) {
		  	echo $row['job_content_html'];
		  }
		  $result -> free_result();
		} else {
			echo "Invalid job ID!";
		}
		$mysqli -> close();
	}
?>