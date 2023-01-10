<?php 
session_start();

if (isset($_SESSION['student'])) {
	unset($_SESSION['student']);
	header("Location:home.php");
}else if(isset($_SESSION['FacultyLoginId'])){
	unset($_SESSION['FacultyLoginId']);
	header("Location: home.php");
}

 ?>