<?php

	require '../include/connection.php';

	if (isset($_POST['studentclass']) && $_POST['studentclass'] == 'insertion') {
		
		$Student = $_POST['student'];
		$Class = $_POST['class'];
        $cryear = $_POST['cryear'];

		$query = "INSERT INTO tblstudentclass SET
        stId = '$Student',
        clId = '$Class',
        scCurrentYear = '$cryear'";

$submit = mysqli_query($connect,$query);
 if ($submit) {
 	header('location:../studentclass.php?msg=success');
 	exit();
 }
 	else{
 		header('location:../studentclass.php?msg=error');
 		exit();
 }

	}

?>