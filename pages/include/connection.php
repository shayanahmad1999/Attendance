<?php session_start();

	$connect = mysqli_connect("localhost","root", "", "attendance");
	
		if (mysqli_connect_errno()) {
	echo "database is not connected" . mysqli_connect_error();
	exit();

	
}

 ?>