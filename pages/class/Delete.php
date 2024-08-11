<?php 

	require '../include/connection.php';

	$clid = $_GET['clid'];

	$query = "delete from tblclass where clId = '$clid'";
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