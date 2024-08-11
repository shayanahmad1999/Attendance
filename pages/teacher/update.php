<?php

	require '../include/connection.php';

	if (isset($_POST['teacher']) && $_POST['teacher'] == 'updation') {
		
	$Name = $_POST['name'];
	$Username = $_POST['username'];
	$Password = $_POST['password'];
	$Email = $_POST['email'];
	$Contact = $_POST['contact'];
	$Cnic = $_POST['cnic'];
	$Gender = $_POST['gender'];
	$Address = $_POST['address'];
	$Update = $_POST['update'];

	if ($_FILES['file']['name'] !='') {
		$imgName = $_FILES['file']['name'];
		$imgSiza = $_FILES['file']['size'];
		$imgType = $_FILES['file']['type'];
		$imgtmpName = $_FILES['file']['tmp_name'];

		if ($imgType == "image/PNG" || $imgType == "image/jpg" || $imgType == "image/jpeg") {
			$upload = move_uploaded_file($imgtmpName,"../uploads/$imgName");
		}
	}
	else{
		$imgName = $_POST['oldfile'];
	}

	$query = "UPDATE tblteachers set
	tName = '$Name',
	tUserName = '$Username',
	tPassword = '$Password',
	tEmail = '$Email',
	tContact = '$Contact',
	tCnic = '$Cnic',
	tGender = '$Gender',
	tImage = '$imgName',
	tAddress = '$Address'
	where tId = '$Update'";

	$update = mysqli_query($connect,$query);

	if ($update) {
		header('location:../teacherTable.php?sms=success');
		exit();
	}
	else{
		header('location:../teacherTable.php?sms=error');
		exit();
	}

	}

?>