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
                    
                    <?php 
                     $query = "select * from tblclass";
                     $go = mysqli_query($connect,$query);
                     while($class = mysqli_fetch_array($go)){
                    ?>    
                        <a href="getattendance.php?clid=<?php echo $class['clId']; ?>" style="text-decoration: none;">&nbsp;
                            <button class="btn btn-primary panel-body" style="padding:3%; font-size:30px;"><?php echo $class['cllName']; ?>
                            </button>
                        </a>              
                    <?php } ?>
                                    <!-- /.row (nested) -->
                               
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
