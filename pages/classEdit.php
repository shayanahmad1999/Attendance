<?php 

    require 'include/connection.php';
    require 'include/security.php';

    $clid = $_GET['clid'];
    $query = "select * from tblclass where clId = '$clid'";
    $go = mysqli_query($connect,$query);
    $show = mysqli_fetch_array($go);

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
                                            <form role="form" action="class/update.php" method="post">
                                                <div class="form-group">
                                                    <label>Class</label>
                                                    <input class="form-control" placeholder="Enter Name" name="name" value="<?php echo $show['cllName']; ?>">
                                                </div>
                                                <button type="submit" class="btn btn-default">Update</button>
                                                <button type="reset" class="btn btn-default">Reset</button>
                                                <input type="hidden" name="class" value="update">
                                                <input type="hidden" name="classess" value="<?php echo $show['clId']; ?>">
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
