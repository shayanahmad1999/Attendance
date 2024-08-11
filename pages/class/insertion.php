<?php 

	require '../include/connection.php';

	if (isset($_POST['class']) && $_POST['class'] == 'insertion') {
		
		$class = $_POST['name'];

		$query = "INSERT INTO tblclass SET 
		cllName = '$class'";

		$go = mysqli_query($connect,$query);	

		if ($go) {
			header('location:../classList.php?msgs=success');
			exit();
		}
		else{
			header('location:../classList.php?msgs=error');
			exit();
		}
	}

 ?>