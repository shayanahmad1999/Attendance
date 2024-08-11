<?php 

    require 'include/connection.php';
    require 'include/security.php';

    if(isset($_GET['date']))
    {
        $date = $_GET['date'];
        $query = "select * from tblattendance att
        inner join tblstudentclass sc on sc.scId = att.scId
        inner join tblstudents st on st.stId =  sc.stId
        inner join tblclass cl on cl.clId = sc.clId
        where aDate like '%$date%' and aStatus = 'present'";
        $response = mysqli_query($connect,$query); 
    }
    else
    {
    $query = "select * from tblattendance att
    inner join tblstudentclass sc on sc.scId = att.scId
    inner join tblstudents st on st.stId =  sc.stId
    inner join tblclass cl on cl.clId = sc.clId";
    $response = mysqli_query($connect,$query); 
    }
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
                            <h1 class="page-header">Tables</h1>
                        </div> -->
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
                    <div class="row" style="margin-top:4%;">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-md-8">
                                    <?php 

                                    if (isset($_GET['msg']) && $_GET['msg'] == 'success') {
                                        echo "<div class='alert alert-success alert-dismissible'>
                                        <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                                        <a href='#' class='alert-link'>Student Record Delete Successfully</a>.
                                    </div>";
                                    }
                                    elseif (isset($_GET['msg']) && $_GET['msg'] == 'error') {
                                         echo "<div class='alert alert-danger alert-dismissible'>
                                        <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                                        <a href='#' class='alert-link'>Student Record is not Delete Successfully</a>.
                                    </div>";
                                    }
                                    elseif (isset($_GET['sms']) && $_GET['sms'] == 'success') {
                                         echo "<div class='alert alert-success alert-dismissible'>
                                        <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                                        <a href='#' class='alert-link'>Student Record is Update Successfully</a>.
                                    </div>";
                                    }
                                    elseif (isset($_GET['sms']) && $_GET['sms'] == 'error') {
                                         echo "<div class='alert alert-danger alert-dismissible'>
                                        <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                                        <a href='#' class='alert-link'>Student Record is not Update Successfully</a>.
                                    </div>";
                                    }
                                    else{
                                        echo "Student Record";
                                    }

                                     ?>
                                        </div>
                                        <div class="col-md-4"> 
                                             <form action="" method="get">
                                                <label>search by date</label>
                                                <input type="date" name="date" value="date">
                                                <button type="submit" class="btn btn-secondary"><i class="fa fa-search"></i></button>
                                             </form>
                                        </div>
                                    </div>
                                </div>
                              
                                <!-- /.panel-heading -->
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                        <thead>
                                                <tr>
                                                    <th>S.No</th>
                                                    <th>Roll No</th>
                                                    <th>Student Name</th>
                                                    <th>Class Name</th>
                                                    <th>Attendance Status</th>
                                                    <th>Date</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php 
                                                $a = 1;
                                                while ($reslut = mysqli_fetch_array($response)) {
                                                
                                                 ?>
                                                <tr class="odd gradeX">
                                                    <td><?php echo $a; ?></td>
                                                    <td><?php echo $reslut['scId']; ?></td>
                                                    <td><?php echo $reslut['stName']; ?></td>
                                                    <td><?php echo $reslut['cllName']; ?></td>
                                                    <td><?php echo $reslut['aStatus']; ?></td>
                                                    <td><?php echo $reslut['aDate']; ?></td>
                                                </tr>
                                            <?php $a++; }   ?>
                                            </tbody>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- /.table-responsive -->
                        
                                </div>
                                <!-- /.panel-body -->
                            </div>
                            <!-- /.panel -->
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- /#page-wrapper -->

        </div>
        <!-- /#wrapper -->

        <?php require('include/footer.php') ?>

    </body>
</html>
