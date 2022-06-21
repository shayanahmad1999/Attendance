<?php 

	require '../include/connection.php';

	$stclID = $_GET['stclid'];
	$query = "delete from tblstudentclass where scId = '$stclID'";
	$delete = mysqli_query($connect,$query);

	if ($delete) {
		header('location:../studentclass.php?msgs=success');
		exit();
	}
	else{
			header('location:../studentclass.php?msgs=error');
		exit();
		}

 ?>