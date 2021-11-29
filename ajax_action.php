<?php
	include('db.php');
	//chen du lieu
	if (isset($_POST['email'])){
		$email = $_POST['email'];
		$name = $_POST['name'];
		mysqli_query($mysqli,"INSERT INTO `information`(`email`, `name`) VALUES ('$email','$name')");
	}