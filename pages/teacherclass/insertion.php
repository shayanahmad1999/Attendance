<?php

	require '../include/connection.php';

	if (isset($_POST['teacherclass']) && $_POST['teacherclass'] == 'insertion') {
	
		$Class = $_POST['class'];
        $Teacher = $_POST['teacher'];

		$query = "INSERT INTO tblclassassignteacher SET
        clId = '$Class',
        tId = '$Teacher'";

$submit = mysqli_query($connect,$query);
 if ($submit) {
 	header('location:../teacherclass.php?msg=success');
 	exit();
 }
 	else{
 		header('location:../teacherclass.php?msg=error');
 		exit();
 }

	}

?>