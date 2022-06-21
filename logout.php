<?php 

	session_start();
    // session_destroy();
	//     $_SESSION['TID']        = '';
	// 	$_SESSION['TUSERNAME']  = '';
	// 	$_SESSION['TNAME']      = '';
	// 	$_SESSION['TPASSWORD']  = '';
	// 	$_SESSION['TPIC']       = '';
	if (session_destroy()) 
	{
		header('location:index.php');
	}

 ?>