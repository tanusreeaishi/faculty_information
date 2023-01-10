<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Faculty Information Management System</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>


<nav class="navbar navbar-expand-sm bg-info navbar-dark">
   	 <h3 class="navbar-brand text-white">Faculty Information Management System</h3>


   	 <div class="mr-auto"></div>

   	 <ul class="navbar-nav">
   	 	<?php 
               if (isset($_SESSION['FacultyLoginId'])) {?>
               	   <li class="nav-item">
   	 		<a href="#" class="nav-link"><?php echo $_SESSION['FacultyLoginId']; ?></a>
   	 	</li>
   	 	  <li class="nav-item">
   	 		<a href="logout.php" class="nav-link">Logout</a>
   	 	</li>
			<li class="nav-item">
   	 		<a href="Faculty Dashboard.php" class="nav-link">Back</a>
   	 	</li>
               <?php }

   	 	 ?>
   	 </ul>
   </nav>

</body>
</html>