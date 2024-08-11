<?php 

	require '../include/connection.php';

	$query = "delete from tblclass";
	$delete = mysqli_query($connect,$query);

	if ($delete) {
	  	header('location:../classList.php?msg=success');
	  	exit();
	  }  
	  else{
	  	header('location:../classList.php?msg=error');
	  	exit();
	  }

 ?>