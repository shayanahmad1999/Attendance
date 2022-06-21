<?php 

require '../include/connection.php';

if(isset($_POST['Attend']) && $_POST['Attend'] == 'insert')
{

    $SCID = $_POST['studentclassid'];
    $CTID = $_POST['classteacherid'];
    $Attendance = $_POST['attendance'];
    // print_r($Attendance);exit;
    $AttDate = $_POST['attdate'];

    $size = count($SCID);

    for($i = 0 ; $i < $size ; $i++)
    {
        $query = "INSERT INTO tblattendance SET
        scId = '$SCID[$i]',
        ctId = '$CTID[$i]',
        aStatus = '$Attendance[$i]',
        aDate = '$AttDate'";
    $response =  mysqli_query($connect,$query);
    }

        if($response)
        {
            header('location:../attendance.php?msg=success');
            exit();
        }
        else
        {
            header('location:../attendance.php?msg=error');
            exit();
        }
    }

?>