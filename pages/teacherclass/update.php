<?php

	require '../include/connection.php';

	if (isset($_POST['teacherclass']) && $_POST['teacherclass'] == 'update') {
	
		$Class = $_POST['class'];
        $Teacher = $_POST['teacher'];
        $update = $_POST['update'];

		$query = "UPDATE tblclassassignteacher SET
        clId = '$Class',
        tId = '$Teacher'
        where ctId = '$update'";

$submit = mysqli_query($connect,$query);
 if ($submit) {
 	header('location:../teacherclass.php?msgs=success');
 	exit();
 }
 	else{
 		header('location:../teacherclass.php?msgs=error');
 		exit();
 }

	}

?>