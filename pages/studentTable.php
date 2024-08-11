<?php 

    require 'include/connection.php';
    require 'include/security.php';
    

if (isset($_GET['stid']) && $_GET['stid'] != "") {
    
    $stID = $_GET['stid'];
    $status = $_GET['status'];

    if ($status == 0) {
        $query = "update tblstudents set stStatus = 1 where stId ='$stID' ";
        $go = mysqli_query($connect,$query);
    }
    else{
        $query = "update tblstudents set stStatus = 0 where stId = '$stID'";
        $go = mysqli_query($connect,$query);
    }
}


    $query = "select * from tblstudents";
    $go = mysqli_query($connect,$query); 

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
                                        <div class="col-md-9">
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
                                        <div class="co-md-3"> 
                                             <a href="student.php"><button class="btn btn-primary "><i class="fa fa-plus">Add</i></button></a>
                                            <a href="student/deleteAll.php" onclick="return confirm('are you sure to delete this')"><button class="btn btn-danger "><i class="fa fa-trash"> Delete All</i></button></a>
                                        </div>
                                    </div>
                                </div>
                              
                                <!-- /.panel-heading -->
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Name</th>
                                                    <th>Father Name</th>
                                                    <th>Date of Birth</th>
                                                    <th>Date of Addmission</th>
                                                    <th>Email</th>
                                                    <th>Contact</th>
                                                    <th>Gender</th>
                                                    <th>Image</th>
                                                    <th>Address</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php 
                                                $a = 1;
                                                while ($show = mysqli_fetch_array($go)) {
                                                
                                                 ?>
                                                <tr class="odd gradeX">
                                                    <td class="center"><?php echo $a; ?></td>
                                                    <td class="center"><?php echo $show['stName']; ?></td>
                                                    <td class="center"><?php echo $show['stFatherName']; ?></td>
                                                    <td class="center"><?php echo $show['stDoB']; ?></td>
                                                    <td class="center"><?php echo $show['stDoA']; ?></td>
                                                    <td class="center"><?php echo $show['stEmail']; ?></td>
                                                    <td class="center"><?php echo $show['stContact']; ?></td>
                                                    <td class="center"><?php echo $show['stGender']; ?></td>
                                                    <td class="center"><img class="img-thumbnail" width="50px"  src="uploads/<?php echo $show['stImage']; ?>"></td>
                                                    <td class="center"><?php echo $show['stAddress']; ?></td>
                                                    <td class="center">

                                                        <?php if ($show['stStatus'] == 0){ ?>
                                                      
                                                        <a href="studentTable.php?stid=<?php echo $show['stId']; ?>&&status=<?php echo $show['stStatus']; ?>"><button class="btn btn-danger"><i class="fa fa-times"></i></button></a>

                                                    <?php } else{ ?>

                                                        <a href="studentTable.php?stid=<?php echo $show['stId']; ?>&&status=<?php echo $show['stStatus']; ?>"><button class="btn btn-success"><i class="fa fa-check"></i></button></a>
                                                      
                                                      <a href="studentEdit.php?stid=<?php echo $show['stId']; ?>" onclick="return confirm('are you sure')"><button class="btn btn-primary"><i class="fa fa-edit"></i></button></a>

                                                      <a href="student/delete.php?stid=<?php echo $show['stId']; ?>" onclick="return confirm('are you sure')"><button class="btn btn-danger"><i class="fa fa-trash"></i></button></a>
                                                    
                                                    </td>
                                                </tr>
                                            <?php $a++; } }  ?>
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
