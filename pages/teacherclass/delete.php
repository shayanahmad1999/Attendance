<?php 

	require '../include/connection.php';

	$tclid = $_GET['tclid'];
	$query = "delete from tblclassassignteacher where ctid = '$tclid'";
	$delete = mysqli_query($connect,$query);

	if ($delete) {
		header('location:../teacherclass.php?msgs=success');
		exit();
	}
	else{
			header('location:../teacherclass.php?msgs=error');
		exit();
		}

 ?>