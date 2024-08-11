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
                                        <a href='#' class='alert-link'>Record Submit Successfully</a>.
                                    </div>";
                                    }
                                    elseif (isset($_GET['msg']) && $_GET['msg'] == 'error') {
                                         echo "<div class='alert alert-danger alert-dismissible'>
                                        <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                                        <a href='#' class='alert-link'>Record is not Submit Successfully</a>.
                                    </div>";
                                    }
                                    if (isset($_GET['msgs']) && $_GET['msgs'] == 'success') {
                                        echo "<div class='alert alert-success alert-dismissible'>
                                        <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                                        <a href='#' class='alert-link'>Record Delete Successfully</a>.
                                    </div>";
                                    }
                                    elseif (isset($_GET['msgs']) && $_GET['msgs'] == 'error') {
                                         echo "<div class='alert alert-danger alert-dismissible'>
                                        <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                                        <a href='#' class='alert-link'Record is not Delete Successfully</a>.
                                    </div>";
                                    }
                                    elseif (isset($_GET['sms']) && $_GET['sms'] == 'success') {
                                         echo "<div class='alert alert-success alert-dismissible'>
                                        <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                                        <a href='#' class='alert-link'>Record is Update Successfully</a>.
                                    </div>";
                                    }
                                    elseif (isset($_GET['sms']) && $_GET['sms'] == 'error') {
                                         echo "<div class='alert alert-danger alert-dismissible'>
                                        <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                                        <a href='#' class='alert-link'>Record is not Update Successfully</a>.
                                    </div>";
                                    }
                                    else{
                                        echo "Registration";
                                    }

                                     ?>
                                </div>
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <form role="form" action="studentclass/insertion.php" method="post" enctype="multipart/form-data">

                                                <div class="row">

                                                    <div class="form-group col-md-6">
                                                        <label>Student Name</label>
                                                        <select name="student" class="form-control">
                                                            <option value="">Select Student</option>
                                                            <?php
                                                                $query = "select * from tblstudents where stStatus = 1";
                                                                $go = mysqli_query($connect,$query);
                                                                while($show = mysqli_fetch_array($go))
                                                                {
                                                            ?>
                                                            <option value="<?php echo $show['stId']; ?>"><?php echo $show['stName']; ?></option>
                                                            <?php } ?>
                                                        </select>
                                                    </div>

                                                    <div class="form-group col-md-6">
                                                        <label>Class</label>
                                                        <select name="class" class="form-control">
                                                            <option value="">Select Class</option>
                                                            <?php
                                                                $query = "select * from tblclass where clStatus = 1";
                                                                $go = mysqli_query($connect,$query);
                                                                while($show = mysqli_fetch_array($go))
                                                                {
                                                            ?>
                                                            <option value="<?php echo $show['clId']; ?>"><?php echo $show['cllName']; ?></option>
                                                            <?php } ?>
                                                        </select>
                                                    </div>
                                                </div>

                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <label>Current year</label>
                                                            <input type="month" name="cryear" class="form-control">
                                                        </div>
                                                    </div>
                                               <br>
                                                <button type="submit" class="btn btn-default">Submit</button>
                                                <button type="reset" class="btn btn-default">Reset</button>
                                                <input type="hidden" name="studentclass" value="insertion">
                                            </form>
                                        </div>

                                        <?php
                                            $query = "select * from tblstudentclass
                                            inner join tblstudents on tblstudents.stId = tblstudentclass.stId
                                            inner join tblclass on tblclass.clId = tblstudentclass.clId";
                                            $go = mysqli_query($connect,$query);
                                        ?>

                                        <div class="col-md-6">
                                        <div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Student Name</th>
                                                    <th>Student Class</th>
                                                    <th>Year</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php 
                                                    $a=1;
                                                    while($record = mysqli_fetch_array($go))
                                                    {
                                                ?>
                                                <tr>
                                               <td><?php echo $a; ?></td>
                                               <td><?php echo $record['stName']; ?></td>
                                               <td><?php echo $record['cllName']; ?></td>
                                               <td><?php echo $record['scCurrentYear']; ?></td>
                                               <td>
                                                  <a href="studentclassEdit.php?stclid=<?php echo $record['scId']; ?>"><button type="button" class="btn btn-primary">
                                                  <i class="fa fa-edit"></i></button></a>
                                                  <a href="studentclass/delete.php?stclid=<?php echo $record['scId']; ?>" onclick="return confirm('are you sure')"><button class="btn btn-danger"><i class="fa fa-trash"></i></button></a>
                                                </td>

                                             <?php $a++; } ?>
                                             </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- /.table-responsive -->
                        
                                </div>
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
