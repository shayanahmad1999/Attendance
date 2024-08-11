<?php 

	require '../include/connection.php';

	$teaid = $_GET['teaid'];

	$delete = mysqli_query($connect,"delete from tblteachers where tId='$teaid'");

	if ($delete) {
		header('location:../teacherTable.php?msg=success');
		exit();
	}
	else{
		header('location:../teacherTable.php?msg=error');
		exit();
	}

 ?>