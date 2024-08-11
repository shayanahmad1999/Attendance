<?php 

	require '../include/connection.php';
	
	$query = "delete from tblstudents";
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