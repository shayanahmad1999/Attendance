 <?php  
    require 'include/connection.php';
   require 'include/security.php';
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
                        <div class="col-lg-12">
                            <h1 class="page-header">
                                <?php if(isset($_SESSION['TID'])) {
                                    echo "Welcome" . " " . ucwords($_SESSION['TNAME']);
                                 } ?></h1>
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
                    <div class="row">
                        <div class="col-lg-3 col-md-6">
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <i class="fa fa-users fa-5x"></i>
                                        </div>
                                        <div class="col-xs-9 text-right">
                                            <div class="huge">
                                                <?php 
                                                    $query = "select count(tId) from tblteachers";
                                                    $responce = mysqli_query($connect,$query);
                                                    $data = mysqli_fetch_array($responce);
                                                    echo $data[0];
                                                ?>
                                            </div>
                                            <div>Teachers</div>
                                        </div>
                                    </div>
                                </div>
                                <a href="#">
                                    <div class="panel-footer">
                                        <span class="pull-left"><a href="teacherTable.php">View Details</a></span>
                                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

                                        <div class="clearfix"></div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="panel panel-green">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <i class="fa fa-user fa-5x"></i>
                                        </div>
                                        <div class="col-xs-9 text-right">
                                            <div class="huge">
                                            <?php 
                                                    $query = "select count(stId) from tblstudents";
                                                    $responce = mysqli_query($connect,$query);
                                                    $data = mysqli_fetch_array($responce);
                                                    echo $data[0];
                                                ?>
                                            </div>
                                            <div>Students</div>
                                        </div>
                                    </div>
                                </div>
                                <a href="#">
                                    <div class="panel-footer">
                                        <span class="pull-left"><a href="studentTable.php">View Details</a></span>
                                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

                                        <div class="clearfix"></div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="panel panel-yellow">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <i class="fa fa-university fa-5x"></i>
                                        </div>
                                        <div class="col-xs-9 text-right">
                                            <div class="huge">
                                            <?php 
                                                    $query = "select count(clId) from tblclass";
                                                    $responce = mysqli_query($connect,$query);
                                                    $data = mysqli_fetch_array($responce);
                                                    echo $data[0];
                                                ?>
                                            </div>
                                            <div>Classes</div>
                                        </div>
                                    </div>
                                </div>
                                <a href="#">
                                    <div class="panel-footer">
                                        <span class="pull-left"><a href="classList.php">View Details</a></span>
                                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

                                        <div class="clearfix"></div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- /.row -->
                   
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- /#page-wrapper -->

        </div>
       <?php require('include/footer.php') ?>
    </body>
</html>
