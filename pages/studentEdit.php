<?php 

 require 'include/connection.php';
 require 'include/security.php';

 $stid = $_GET['stid'];
 $query = "select * from tblstudents where stId = '$stid'";
 $go = mysqli_query($connect,$query);
 $edit = mysqli_fetch_array($go);

 ?>

<!DOCTYPE html>
<html lang="en">
   <?php
    require 'include/head.php';
   ?>
    <body>

        <div id="wrapper">

    <?php
    require 'include/sidebar.php';
   ?>           

            <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <!-- <div class="col-lg-12">
                            <h1 class="page-header">Forms</h1>
                        </div> -->
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
                    <div class="row" style="margin-top: 4%;">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <?php 

                                    if (isset($_GET['msg']) && $_GET['msg'] == 'success') {
                                        echo "<div class='alert alert-success alert-dismissible'>
                                        <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                                        <a href='#' class='alert-link'>Student Record Submit Successfully</a>.
                                    </div>";
                                    }
                                    elseif (isset($_GET['msg']) && $_GET['msg'] == 'error') {
                                         echo "<div class='alert alert-danger alert-dismissible'>
                                        <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                                        <a href='#' class='alert-link'>Student Record is not Submit Successfully</a>.
                                    </div>";
                                    }
                                    else{
                                        echo "Student Registration";
                                    }

                                     ?>
                                </div>
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <form role="form" action="student/update.php" method="post" enctype="multipart/form-data">
                         
                                            <div class="row">

                                            <div class="form-group col-md-6">
                                                <label>Name</label>
                                                <input class="form-control" placeholder="Enter Name" name="name" value="<?php echo $edit['stName']; ?>">
                                            </div>

                                            <div class="form-group col-md-6">
                                                <label>Father Name</label>
                                                <input class="form-control" placeholder="Enter Father Name" name="fname" value="<?php echo $edit['stFatherName']; ?>">
                                            </div>

                                        </div>

                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <label>Data of Birth</label>
                                                <input class="form-control" type="date" placeholder="Enter DOB" name="dob" value="<?php echo $edit['stDoB']; ?>">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>Data of Addmission</label>
                                                <input class="form-control" type="date" placeholder="Enter DOA" name="doa" value="<?php echo $edit['stDoA']; ?>">
                                            </div>
                                        </div>

                                    <div class="row">

                                        <div class="form-group col-md-6">
                                            <label>Email</label>
                                            <input class="form-control" placeholder="Enter Email" name="email" value="<?php echo $edit['stEmail']; ?>">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Contact</label>
                                            <input class="form-control" placeholder="Enter contact" name="contact" value="<?php echo $edit['stContact']; ?>">
                                        </div>

                                    </div>

                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label>Gender</label>
                                        <div class="radio">
                                             <label>
                                                <input type="radio" name="gender"  id="optionsRadios1" value="male" <?php if($edit['stGender'] == 'male') echo "checked" ?>>Male
                                            </label>
                                            <label>
                                                <input type="radio" name="gender" id="optionsRadios1" value="female" <?php if($edit['stGender'] == 'female') echo "checked" ?>>Female
                                            </label>
                                         </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>File image</label>
                                        <input type="file" class="form-control" name="file">
                                        <img src="uploads/<?php echo $edit['stImage']; ?>" width="50px">
                                        <input type="hidden" name="oldfile" value="<?php echo $edit['stImage']; ?>">
                                    </div>
                                </div>

                                <div class="form-group">
                                <label>Address</label>
                                <textarea class="form-control" rows="3" name="address"><?php echo $edit['stAddress']; ?></textarea>
                            </div>
                                               
                                                <button type="submit" class="btn btn-default">Update</button>
                                                <button type="reset" class="btn btn-default">Reset</button>
                                                <input type="hidden" name="student" value="update">
                                                <input type="hidden" name="std" value="<?php echo $edit['stId']; ?>">
                                            </form>
                                        </div>
                                    </div>
                                    <!-- /.row (nested) -->
                                </div>
                                <!-- /.panel-body -->
                            </div>
                            <!-- /.panel -->
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- /#page-wrapper -->

        </div>
        <!-- /#wrapper -->

        <?php require('include/footer.php') ?>

    </body>
</html>
