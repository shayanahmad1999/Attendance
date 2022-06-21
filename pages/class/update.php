<?php 

	require '../include/connection.php';

	if (isset($_POST['class']) && $_POST['class'] == 'update') {
		
		$class = $_POST['name'];
		$update = $_POST['classess'];

		$query = "UPDATE tblclass set 
		cllName = '$class'
		where clId = '$update'";

		$go = mysqli_query($connect,$query);

		if ($go) {
			header('location:../classList.php?sms=success');
			exit();
		}
		else{
			header('location:../classList.php?sms=error');
			exit();
		}
	}

 ?>