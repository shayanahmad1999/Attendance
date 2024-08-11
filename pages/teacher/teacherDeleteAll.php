<?php 

	require '../include/connection.php';

	$query = "delete from tblteachers";
	$delete = mysqli_query($connect,$query);

	if ($delete) {
		header('location:../teacherTable.php?msg=success');
		exit();
	}
	else{
		header('location:../teacherTable.php?msg=error');
		exit();
	}

 ?>