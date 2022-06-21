<?php

	require '../include/connection.php';

	if (isset($_POST['studentclass']) && $_POST['studentclass'] == 'update') {
		
		$Student = $_POST['student'];
		$Class = $_POST['class'];
        $cryear = $_POST['cryear'];
        $update = $_POST['update'];

		$query = "UPDATE tblstudentclass SET
        stId = '$Student',
        clId = '$Class',
        scCurrentYear = '$cryear'
        where scId = '$update'";

$submit = mysqli_query($connect,$query);
 if ($submit) {
 	header('location:../studentclass.php?sms=success');
 	exit();
 }
 	else{
 		header('location:../studentclass.php?sms=error');
 		exit();
 }

	}

?>