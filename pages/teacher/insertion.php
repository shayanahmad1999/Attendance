<?php 

require '../include/connection.php';

if (isset($_POST['teacher']) && $_POST['teacher'] == 'insertion') {
	
	$Name = $_POST['name'];
	$Username = $_POST['username'];
	$Password = $_POST['password'];
	$Email = $_POST['email'];
	$Contact = $_POST['contact'];
	$Cnic = $_POST['cnic'];
	$Gender = $_POST['gender'];
	$Address = $_POST['address'];

	$imgName = $_FILES['file']['name'];
	$imgSiza = $_FILES['file']['size'];
	$imgType = $_FILES['file']['type'];
	$imgtmpName = $_FILES['file']['tmp_name'];

	if ($imgType == "image/PNG" || $imgType == "image/jpg" || $imgType == "image/jpeg") {
		$upload = move_uploaded_file($imgtmpName,"../uploads/$imgName");
	}

	$query = "INSERT INTO tblteachers SET
	tName = '$Name',
	tUserName = '$Username',
	tPassword = '$Password',
	tEmail = '$Email',
	tContact = '$Contact',
	tCnic = '$Cnic',
	tGender = '$Gender',
	tImage = '$imgName',
	tAddress = '$Address'";

	$submit = mysqli_query($connect,$query);

	if ($submit) {
		header('location:../teacher.php?msg=success');
		exit();
	}
	else{
		header('location:../teacher.php?msg=error');
		exit();
	}

}

?>