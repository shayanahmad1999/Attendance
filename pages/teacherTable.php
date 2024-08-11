<?php 

    require 'include/connection.php';
    require 'include/security.php';
    

    if (isset($_GET['teaid']) && $_GET['teaid'] != "") {
    
    $teaid = $_GET['teaid'];
    $status = $_GET['status'];

    if ($status == 0) {
        $query = "update tblteachers set tStatus = 1 where tId = '$teaid'";
        $go = mysqli_query($connect,$query);
    }
    else{
        $query = "update tblteachers set tStatus = 0 where tId = '$teaid'";
        $go = mysqli_query($connect,$query);
    }
}

    $query = "select * from tblteachers";
    $show = mysqli_query($connect,$query);

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
                    <div class="row" style="margin-top: 4%;">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-md-9">
                                    <?php 

                                    if (isset($_GET['msg']) && $_GET['msg'] == 'success') {
                                        echo "<div class='alert alert-success alert-dismissible'>
                                        <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                                        <a href='#' class='alert-link'>Employee Record Delete Successfully</a>.
                                    </div>";
                                    }
                                    elseif (isset($_GET['msg']) && $_GET['msg'] == 'error') {
                                         echo "<div class='alert alert-danger alert-dismissible'>
                                        <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                                        <a href='#' class='alert-link'>Employee Record is not Delete Successfully</a>.
                                    </div>";
                                    }
                                    elseif (isset($_GET['sms']) && $_GET['sms'] == 'success') {
                                         echo "<div class='alert alert-success alert-dismissible'>
                                        <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                                        <a href='#' class='alert-link'>Employee Record is Update Successfully</a>.
                                    </div>";
                                    }
                                    elseif (isset($_GET['sms']) && $_GET['sms'] == 'error') {
                                         echo "<div class='alert alert-danger alert-dismissible'>
                                        <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                                        <a href='#' class='alert-link'>Employee Record is not Update Successfully</a>.
                                    </div>";
                                    }
                                    else{
                                        echo "Teacher Record";
                                    }

                                     ?>
                                        </div>
                                        <div class="col-md-3">
                                            <a href="teacher.php"><button class="btn btn-primary"><i class="fa fa-plus">Add</i></button></a>
                                            <a href="teacher/teacherDeleteAll.php" onclick="return confirm('are you sure to delete this')"><button class="btn btn-danger "><i class="fa fa-trash"> Delete All</i></button></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3">
                                    </div>
                                    <div class="col-lg-3">
                                        
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
                                                    <th>User Name</th>
                                                    <th>Password</th>
                                                    <th>Email</th>
                                                    <th>Contact</th>
                                                    <th>CNIC</th>
                                                    <th>Gender</th>
                                                    <th>Image</th>
                                                    <th>Address</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php 
                                                $a = 1;
                                                while ($record = mysqli_fetch_array($show)) {
                                                
                                                 ?>
                                                <tr class="odd gradeX">
                                                    <td class="center"><?php echo $a; ?></td>
                                                    <td class="center"><?php echo $record['tName']; ?></td>
                                                    <td class="center"><?php echo $record['tUserName']; ?></td>
                                                    <td class="center"><?php echo $record['tPassword']; ?></td>
                                                    <td class="center"><?php echo $record['tEmail']; ?></td>
                                                    <td class="center"><?php echo $record['tContact']; ?></td>
                                                    <td class="center"><?php echo $record['tCnic']; ?></td>
                                                    <td class="center"><?php echo $record['tGender']; ?></td>
                                                    <td class="center"><img class="img-thumbnail" width="50px"  src="uploads/<?php echo $record['tImage']; ?>"></td>
                                                    <td class="center"><?php echo $record['tAddress']; ?></td>
                                                    <td class="center">
                                                        <?php if ($record['tStatus'] == 0) {?>
                                                        <a href="teacherTable.php?teaid=<?php echo $record['tId']?>&&status=<?php echo $record['tStatus'];?>"><button class="btn btn-danger"><i class="fa fa-times"></i></button></a><?php } else{?>
                                                             <a href="teacherTable.php?teaid=<?php echo $record['tId']?>&&status=<?php echo $record['tStatus'];?>"><button class="btn btn-success"><i class="fa fa-check"></i></button></a>
                                                        <a href="teacherEdit.php?teaid=<?php echo $record['tId']; ?>" onclick="return confirm('are you sure want to edit this record')" title=""><button class="btn btn-info"><i class="fa fa-edit"></i></button></a>
                                                        <a href="teacher/teacherDelete.php?teaid=<?php echo $record['tId']; ?>"onclick="return confirm('are you sure to delete this record')" ><button class="btn btn-danger"><i class="fa fa-trash"></i></button></a>
                                                    
                                                    </td>
                                                </tr>
                                            <?php $a++; } } ?>
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
