<?php  

    require 'include/connection.php';
    require 'include/security.php';

$tclid = $_GET['tclid'];
$query = "select * from tblclassassignteacher where ctid = '$tclid'";
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
                                </div>
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <form role="form" action="teacherclass/update.php" method="post" enctype="multipart/form-data">

                                                <div class="row">

                                                <div class="form-group col-md-6">
                                                        <label>Class</label>
                                                        <select name="class" class="form-control">
                                                            <option value="">Select Class</option>
                                                            <?php
                                                                $query = "select * from tblclass where clStatus = 1";
                                                                $go = mysqli_query($connect,$query);
                                                                while($show = mysqli_fetch_array($go))
                                                                {
                                                                    if($show['clId'] == $edit['clId'])
                                                                    {
                                                                        $select = "selected=selected";
                                                                    }
                                                                    else
                                                                    {
                                                                        $select = "";
                                                                    }
                                                                    ?>
                                                                    <option <?php echo $select; ?> value="<?php echo $show['clId']; ?>"><?php echo $show['cllName']; ?></option>
                                                                    <?php } ?>
                                                        </select>
                                                    </div>

                                                    <div class="form-group col-md-6">
                                                        <label>Teacher Name</label>
                                                        <select name="teacher" class="form-control">
                                                            <option value="">Select Teacher</option>
                                                            <?php
                                                                $query = "select * from tblteachers where tStatus = 1";
                                                                $go = mysqli_query($connect,$query);
                                                                while($show = mysqli_fetch_array($go))
                                                                {    
                                                                        if($show['tId'] == $edit['tId'])
                                                                    {
                                                                        $select = "selected=selected";
                                                                    }
                                                                    else
                                                                    {
                                                                        $select = "";
                                                                    }
                                                                    ?>
                                                                    <option <?php echo $select; ?> value="<?php echo $show['tId']; ?>"><?php echo $show['tName']; ?></option>
                                                                    <?php } ?>
                                                        </select>
                                                    </div>

                                                    
                                                </div>
                                               <br>
                                                <button type="submit" class="btn btn-default">Update</button>
                                                <button type="reset" class="btn btn-default">Reset</button>
                                                <input type="hidden" name="teacherclass" value="update">
                                                <input type="hidden" name="update" value="<?php echo $edit['ctId']; ?>">
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
