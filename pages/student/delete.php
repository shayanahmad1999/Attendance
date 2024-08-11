<?php 

	require '../include/connection.php';

	$studentID = $_GET['stid'];
	$query = "delete from tblstudents where stId = '$studentID'";
	$delete = mysqli_query($connect,$query);

	if ($delete) {
		header('location:../studentTable.php?msg=success');
		exit();
	}
	else{
			header('location:../studentTable.php?msg=error');
		exit();
		}

 ?>