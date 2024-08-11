<!DOCTYPE html>
<html lang="en">
   <?php
   require 'include/connection.php';
   require 'include/security.php';
   
    require 'include/head.php';
   ?>
    <body>

        <div id="wrapper">

    <?php
    require 'include/sidebar.php';
   ?>           

            <div id="page-wrapper">
                <div class="container-fluid">
                    <!-- <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">Forms</h1>
                        </div>
                    </div> -->
                    <!-- /.row -->
                    <div class="row" style="margin-top:4%;">
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
                                            <form role="form" action="student/insertion.php" method="post" enctype="multipart/form-data">

                                                <div class="row">

                                                    <div class="form-group col-md-6">
                                                        <label>Name</label>
                                                        <input class="form-control" placeholder="Enter Name" name="name">
                                                    </div>

                                                    <div class="form-group col-md-6">
                                                        <label>Father Name</label>
                                                        <input class="form-control" placeholder="Enter Father Name" name="fname">
                                                    </div>

                                                </div>
                                                
                                               <div class="row">
                                                 <div class="form-group col-md-6">
                                                    <label>Data of Birth</label>
                                                    <input class="form-control" type="date" placeholder="Enter DOB" name="dob">
                                                </div>
                                                 <div class="form-group col-md-6">
                                                    <label>Data of Addmission</label>
                                                    <input class="form-control" type="date" placeholder="Enter DOA" name="doa">
                                                </div>
                                               </div>
                                                
                                                <div class="row">

                                                <div class="form-group col-md-6">
                                                    <label>Email</label>
                                                    <input class="form-control" placeholder="Enter Email" name="email">
                                                </div>
                                                   <div class="form-group col-md-6">
                                                    <label>Contact</label>
                                                    <input class="form-control" placeholder="Enter contact" name="contact">
                                                </div>

                                                </div>

                                                <div class="row">
                                                <div class="form-group col-md-6">
                                                    <label>Gender</label>
                                                    <div class="radio">
                                                        <label>
                                                            <input type="radio" name="gender"  id="optionsRadios1" value="male">Male
                                                        </label>
                                                        <label>
                                                            <input type="radio" name="gender" id="optionsRadios1" value="female">Female
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label>File image</label>
                                                    <input type="file" class="form-control" name="file">
                                                </div>
                                                </div>

                                                <div class="form-group">
                                                    <label>Address</label>
                                                    <textarea class="form-control" rows="3" name="address"></textarea>
                                                </div>
                                               
                                                <button type="submit" class="btn btn-default">Submit</button>
                                                <button type="reset" class="btn btn-default">Reset</button>
                                                <input type="hidden" name="student" value="insertion">
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
