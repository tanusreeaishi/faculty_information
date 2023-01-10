<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<title>Faculty Information Management System</title>
	<body style='background-color: #ADD8E6'>

</head>
<body>
<center>
	<?php include("includes/header.php"); ?>



	<div class="container">
		<div class="col-md-12">
			<div class="row d-flex justify-content-center">
				<div class="col-md-6 shadow-sm" style="margin-top:100px;">
					<form action="Student Login.php">

					
						<h3 class="text-center my-3">Student? Login here</h3>

						<input type="submit" name="login" class="btn btn-success" value="Student Login">
					</form>

					<form action="Faculty Login.php">
					<h3 class="text-center my-3"> Faculty? Login here </h3>
					
					<input type="submit" name="Faculty Login" class="btn btn-success" value="Faculty Login">
					</form>
				</div>
			</div>
		</div>
	</div>

</center>
</body>
</html>