<?php 

    require 'include/connection.php';
    require 'include/security.php';

    if (isset($_GET['clid']) && $_GET['clid'] != "") {
    
    $clid = $_GET['clid'];
    $status = $_GET['status'];

    if ($status == 0) {
        $query = "update tblclass set clStatus = 1 where ClId = '$clid'";
        $go = mysqli_query($connect,$query);
    }
    else{
        $query = "update tblclass set clStatus = 0 where ClId = '$clid'";
        $go = mysqli_query($connect,$query);
    }
}

    $query = "select * from tblclass";
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
                                        <a href='#' class='alert-link'>class Record Delete Successfully</a>.
                                    </div>";
                                    }
                                    elseif (isset($_GET['msg']) && $_GET['msg'] == 'error') {
                                         echo "<div class='alert alert-danger alert-dismissible'>
                                        <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                                        <a href='#' class='alert-link'>class Record is not Delete Successfully</a>.
                                    </div>";
                                    }
                                    elseif (isset($_GET['sms']) && $_GET['sms'] == 'success') {
                                         echo "<div class='alert alert-success alert-dismissible'>
                                        <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                                        <a href='#' class='alert-link'>class Record is Update Successfully</a>.
                                    </div>";
                                    }
                                    elseif (isset($_GET['sms']) && $_GET['sms'] == 'error') {
                                         echo "<div class='alert alert-danger alert-dismissible'>
                                        <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                                        <a href='#' class='alert-link'>class Record is not Update Successfully</a>.
                                    </div>";
                                    }
                                    elseif (isset($_GET['msgs']) && $_GET['msgs'] == 'success') {
                                        echo "<div class='alert alert-success alert-dismissible'>
                                        <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                                        <a href='#' class='alert-link'>Class Record Submit Successfully</a>.
                                    </div>";
                                    }
                                    elseif (isset($_GET['msgs']) && $_GET['msgs'] == 'error') {
                                         echo "<div class='alert alert-danger alert-dismissible'>
                                        <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                                        <a href='#' class='alert-link'>Class Record is not Submit Successfully</a>.
                                    </div>";
                                    }
                                    else{
                                       echo "Class Record";
                                       
                                    }

                                     ?>
                                </div>
                                <div class="col-md-3">
                                           <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                              <i class="fa fa-plus"> Add</i>
                                            </button>
                                            <a href="class/DeleteAll.php" class="btn btn-danger"  onclick="return confirm('are you sure to delete this')">
                                              <i class="fa fa-trash"> Delete All</i>
                                            </a>
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
                                                    <th>Class</th>
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
                                                    <td class="center"><?php echo $record['cllName']; ?></td></td>
                                                    <td class="center">
                                                        <?php if ($record['clStatus'] == 0) {?>
                                                        <a href="classList.php?clid=<?php echo $record['clId']?>&&status=<?php echo $record['clStatus'];?>"><button class="btn btn-danger"><i class="fa fa-times"></i></button></a>
                                                    <?php } else{?>
                                                             <a href="classList.php?clid=<?php echo $record['clId']?>&&status=<?php echo $record['clStatus'];?>"><button class="btn btn-success"><i class="fa fa-check"></i></button></a>
                                                        <a href="classEdit.php?clid=<?php echo $record['clId']; ?>" onclick="return confirm('are you sure want to edit this record')" title=""><button class="btn btn-info"><i class="fa fa-edit"></i></button></a>
                                                        <a href="class/Delete.php?clid=<?php echo $record['clId']; ?>"onclick="return confirm('are you sure to delete this record')" ><button class="btn btn-danger"><i class="fa fa-trash"></i></button></a>
                                                    
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


        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Class</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        <div class="modal-body">
                                <form role="form" action="class/insertion.php" method="post">
                                                <div class="form-group">
                                                    <label>Class</label>
                                                    <input class="form-control" placeholder="Enter Name" name="name" required>
                                                </div>
                                                <button type="submit" class="btn btn-default">Submit</button>
                                                <button type="reset" class="btn btn-default">Reset</button>
                                                <input type="hidden" name="class" value="insertion">
                                            </form>
                                        </div>
                                    <div class="modal-footer">
                                     <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                     <button type="button" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </div>
                    </div>


                    <?php require('include/footer.php') ?>

    </body>
</html>
