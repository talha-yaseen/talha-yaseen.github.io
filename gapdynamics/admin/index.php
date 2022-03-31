<?php
	include('../inc/database_info.php');
	session_start();
	if ($_SERVER['REQUEST_METHOD'] === 'POST') {
		$username = $_POST['username'];
		$password = $_POST['password'];

		$mysqli = new mysqli($mysql_server, $mysql_username, $mysql_password, $mysql_db);
		if ($mysqli -> connect_errno) {
			echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
			exit();
		}

		$query = "SELECT * FROM 7703470539_users WHERE username='" . $username . "' AND password='" . $password . "';";

		if ($result = $mysqli -> query($query)) {
		  if ($result -> num_rows == 1) {
		  	$_SESSION['logged_in'] = true;
		  	$_SESSION['username'] = $username;
		  	header('Location: index.php');
		  }
		  else {
		  	$invalidCredentials = true;
		  }
		}

		$mysqli -> close();

		if (isset($_POST['logout']))
			session_destroy();
	}
?>

<!doctype html>
<html>
	<head>
		<title>GAP Dynamics</title>

		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- Bootstrap + Dependencies -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

		<!-- Fontawesome -->
		<link href="../fontawesome/css/all.css" rel="stylesheet">

		<!-- Styling -->
		<style>
			h1 {
				text-align: center;
				margin: 0.5em auto 3em;
			}

			#main-content {
				min-height: 88vh;
			}

			.login-box {
				padding: 1em 2em;
			}

			.login-box input[type='text'],
			.login-box input[type='password'] {
				width: 100%;
				display: block;
				margin: 1em 0.25em;
			}

			.text-center {
				text-align: center;
			}

			.rounded-card {
				background: #f7f7f7;
				border: 1px solid rgba(0,0,0,.1);
				padding: 2em;
				box-shadow: 1px 1px 15px rgba(0,0,0,.3);
				border-radius: 20px;
				color: #555;
			}

			p.form-error {
				color: red;
				text-align: center;
			}

			#job-openings {
				border: 1px solid;
			}

			#job-openings td,
			#job-openings th {
				padding: 0.5em 1em;
			}

			#job-openings .btn {
				color: white;
			}

			footer {
				background: black;
				padding: 1em 2em;
				text-align: right;
			}

			.btn {
				cursor: pointer;
			}

			#jobModal textarea {
				width: 100%;
				min-height: 50vh;
			}

			#add-new-job {
				width: 40%;
			}

			#add-new-job label {
				display: block;
				margin-top: 0.5em;
			}

			#add-new-job input[type='text'],
			#add-new-job select,
			#add-new-job textarea {
				width: 100%;
			}

			#add-new-job textarea {
				height: 30vh;
			}
		</style>
	</head>

	<body>
		<div id="main-content" class="container-fluid">
			<h1>Admin Panel</h1>
			<?php if (isset($_SESSION['logged_in'])) { ?>
				<!-- Job Openings -->
				<section>
					<h2>Job Openings</h2>
					<table id="job-openings">
						<tr><th>ID</th><th>Title</th><th>Type</th><th>Location</th><th>Options</th></tr>

						<?php
							// Fetch job openings from database
							$mysqli = new mysqli($mysql_server, $mysql_username, $mysql_password, $mysql_db);
							if ($mysqli -> connect_errno) {
								echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
								exit();
							}

							$query = "SELECT * FROM 3763857643_jobs";
							$result = $mysqli -> query($query);

							if ($result && $result -> num_rows > 0) {
							  while ($row = $result -> fetch_assoc()) {
							  	echo "<tr>";
							  	echo "<td>" . $row['job_id'] .  "</td>";
							  	echo "<td>" . $row['job_title'] .  "</td>";
							  	echo "<td>" . $row['job_type'] .  "</td>";
							  	echo "<td>" . $row['location'] .  "</td>";
							  	echo "<td>" . "<a class='btn btn-success job-description-btn' data-job-id='" . $row['job_id'] . "''>Edit Description</a>" . " <a class='btn btn-danger delete-job-btn' data-job-id='" . $row['job_id'] . "''>Delete</a>" . "</td>";
							  	echo "</tr>";
							  }
							  echo "</table>";
							  $result -> free_result();
							} else {
								echo "</table><p>No job openings found!</p>";
							}
							$mysqli -> close();

						?>
					</table>
					<br />
					<h4>Add New</h4>
					<form id="add-new-job">
						<input type="text" name="job-id" id="job-id" hidden />
						<label for="job-title">Job Title</label>
						<input type="text" name="job-title" id="job-title" />
						<label for="job-type">Job Type</label>
						<select name="job-type" id="job-type">
							<option value="Full Time">Full Time</option>
							<option value="Part Time">Part Time</option>
						</select>
						<label for="job-location">Location</label>
						<select name="job-location" id="job-location">
							<option value="Bahria Town">Bahria Town</option>
							<option value="Remote">Remote</option>
						</select>
						<label for="job-content">Job Description (HTML)</label>
						<textarea name="job-content" id="job-content">
						</textarea>
						<div class="text-center" style="margin: 1em">
							<button id="add-job-btn" type="button" class="btn btn-success">Add Job</button>
						</div>
					</form>
				</section>
				<!-- Job Modal -->
				<div class="modal fade" id="jobModal" tabindex="-1" role="dialog" aria-labelledby="jobModalLabel" aria-hidden="true">
				  <div class="modal-dialog" role="document">
				    <div class="modal-content">
				      <div class="modal-header">
				  		<h5 class="modal-title">Edit Job Description</h5>
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				          <span aria-hidden="true">&times;</span>
				          <span id="job-id-hidden" hidden>Job ID</span>
				        </button>
				      </div>
				      <div class="modal-body">
				        <textarea name="job-content-html"></textarea>
				      </div>
				      <div class="modal-footer">
				      	<button id="save-job-content-btn" type="button" class="btn btn-success">Save</button>
				        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				      </div>
				    </div>
				  </div>
				</div>
				<!-- ./Job Modal -->

				<!-- ./Job Openings -->
			<?php } else { ?>
				<!-- Login Form -->
				<div class="row justify-content-center">
					<div class="col-md-4 login-box rounded-card">
						<p>You need to be logged in to continue.</p>
						<form id="login-form" method="POST">
							<input type="text" name="username" placeholder="Username" />
							<input type="password" name="password" placeholder="Password" />
							<?php 
								if (isset($invalidCredentials))
									echo "<p class='form-error'>Invalid username/password!</p>";
							?>
							<div class="text-center">
								<input type="submit" value="Login" class="btn btn-warning"/>
							</div>
						</form>
					</div>
				</div>
				<!-- ./Login Form -->
			<?php } ?>
		</div>
		<?php if (isset($_SESSION['logged_in'])) { ?>
		<footer>
			<button id="logout-btn" class="btn btn-warning">Log Out</button>
		</footer>
		<?php } ?>
		<script>
			$(function() {
				$('.job-description-btn').click(function() {
					let job_id = $(this).attr('data-job-id');
					$('#jobModal #job-id-hidden').text(job_id);
					$.get('../ajax/ajax_job_info.php?job_id=' + job_id, function(data) {
						$('#jobModal textarea').val(data);
						$('#jobModal').modal();
					});
				});

				$('#jobModal #save-job-content-btn').click(function() {
					let id = $('#jobModal #job-id-hidden').text();
					let content = $('#jobModal textarea').val();
					$.post("../ajax/ajax_update_job_content.php", {job_id: id, job_content: content}, function(result){
				    	if (result == "SUCCESS")
				    		alert("Content updated successfully!");
				    	else
				    		alert("An error occurred while trying to update the content!");
				    	$('#jobModal').modal('toggle');
				  });
				});

				$('#logout-btn').click(function() {
					$.post('index.php', {logout: true} , function(data) {
						location.reload(true);
					});
				});

				$('#add-job-btn').click(function() {
					let job_id = eval($('#job-openings tr:last td:first').text()) + 1;
					let job_title = $('#add-new-job #job-title').val();
					let job_type = $('#add-new-job #job-type').val();
					let job_location = $('#add-new-job #job-location').val();
					let job_content = $('#add-new-job #job-content').val();
					$.post('../ajax/ajax_add_job.php', {job_id: job_id, job_title: job_title, job_type: job_type, job_location: job_location, job_content: job_content} , function(data) {
							if (data=="SUCCESS") {
								alert('Job added successfully!');
								location.reload(true);
							} else {
								alert('An error occurred while trying to add the job!');
							}
					});
				});

				$('.delete-job-btn').click(function() {
					let job_id = $(this).attr('data-job-id');
					if (confirm('Are you sure you wish to delete this job opening?')) {
						$.post('../ajax/ajax_delete_job.php', {job_id: job_id} , function(data) {
								if (data=="SUCCESS") {
									alert('Job deleted successfully!');
									location.reload(true);
								} else {
									alert('An error occurred while trying to delete the job!');
								}
						});
					}
				});

			});
		</script>
	</body>

</html>