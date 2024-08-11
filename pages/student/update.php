<?php

	require '../include/connection.php';

	if (isset($_POST['student']) && $_POST['student'] == 'update') {
		
		$Name = $_POST['name'];
		$FatherName = $_POST['fname'];
		$DOB = $_POST['dob'];
		$DOA = $_POST['doa'];
		$Email = $_POST['email'];
		$Contact = $_POST['contact'];
		$Gender = $_POST['gender'];
		$Address = $_POST['address'];
		$update = $_POST['std'];

		if ($_FILES['file']['name'] != "") {

		$FileName = $_FILES['file']['name'];
		$FileSize = $_FILES['file']['size'];
		$FileType = $_FILES['file']['type'];
		$FileTmp = $_FILES['file']['tmp_name'];

		if ($FileType == "image/PNG" || $FileType == "image/jpg" || $FileType == "image/jpeg") {
			$upload = move_uploaded_file($FileTmp,"../uploads/$FileName");
		}
	}
	else{
		$FileName = $_POST['oldfile'];
	}

		$query = "UPDATE tblstudents SET
		stName = '$Name',
		stFatherName = '$FatherName',
		stDoB = '$DOB',
		stDoA = '$DOA',
		stEmail = '$Email',
		stGender = '$Gender',
		stContact = '$Contact',
		stAddress = '$Address',
		stImage = '$FileName'
		where stId = '$update'";

$submit = mysqli_query($connect,$query);
 if ($submit) {
 	header('location:../studentTable.php?sms=success');
 	exit();
 }
 	else{
 		header('location:../studentTable.php?sms=error');
 		exit();
 }

	}

?>