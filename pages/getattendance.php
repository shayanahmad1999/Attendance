<?php 

    require 'include/connection.php';
    require 'include/security.php';

    $classID = $_GET['clid']; 
    $query = "select tblstudentclass.*,st.stName,st.stFatherName from tblstudentclass 
    left join tblstudents st on st.stId=tblstudentclass.stId where clId = '$classID'";
    $result = mysqli_query($connect,$query);
    
 ?>

<!DOCTYPE html>
<html lang="en">
<?php
    require 'include/head.php';
   ?>
    <body>

        <div id="wrapper">
            <style>
                .formControllWith
                {
                    height: 20px
                }
            </style>
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
                    <div class="panel panel-default"> 
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-md-8">
                                    attendance
                                </div>
                            </div>
                        </div>
                    <div class="panel-body">
                        <div class="col-md-2">    
                            <h4>Roll No</h4>
                        </div>
                        <div class="col-md-2">
                            <h4>Name</h4>
                        </div>
                        <div class="col-md-2">
                            <h4>Father Name</h4>
                        </div>
                        <div class="col-md-2">
                            <h4>Present</h4>
                        </div>
                        <div class="col-md-2">
                            <h4>Absent</h4>
                        </div>
                        <div class="col-md-2">
                            <h4>Leave</h4>
                        </div>
                        <form action="attendance/insert.php" class="form-group" method="post">
                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <?php while($record = mysqli_fetch_array($result)){ ?>
                                    <div class = "row">
                                        <!-- <tr> -->
                                            <div class="col-md-2"> 
                                                <input type="text"  readonly class="form-control formControllWith" value="<?= $record['scId']; ?>">              
                                                <input type="hidden"  readonly class="form-control formControllWith" value="<?= $record['scId']; ?>" name="studentclassid[]">              
                                            </div>
                                        <!-- </tr> -->
                                        <div class="col-md-2">
                                            <input type="text" readonly class="form-control formControllWith" value="<?php echo $record['stName']; ?>">
                                            <input type="hidden" value="<?php echo $_SESSION['TID']; ?>" name="classteacherid[]">    
                                        </div> 
                                        <div class="col-md-2">
                                            <input type="text" readonly class="form-control formControllWith" value="<?php echo $record['stFatherName']; ?>" name="<?php echo $record['scId'] ?>">                                
                                        </div>
                                        <div class="col-md-2">
                                            <input type="radio" name="attendance[]<?php echo $record['scId'];?>" value="present" checked>                              
                                        </div> 
                                        <div class="col-md-2">                            
                                            <input type="radio" name="attendance[]<?php echo $record['scId'];?>"  value="absent">                                  
                                        </div> 
                                        <div class="col-md-2">                               
                                            <input type="radio" name="attendance[]<?php echo $record['scId'];?>" value="leave">
                                        </div> 
                                    </div>                                              
                                <?php } ?>
                                <br>                                         
                                <br>
                                <div class="row">  
                                    <div class="col-md-2">
                                        <label for="">Attendance Date</label>
                                    </div>
                                    <div class="col-md-3">
                                        <input type="date" class="form-control" name="attdate" required>
                                    </div>
                                    <div class="col-md-5"></div>
                                    <div class="col-md-2">
                                        <input type="submit" value="Save" class="form-control btn btn-primary">
                                        <input type="hidden" name="Attend" value="insert">
                                    </div>
                                </div>
                            </table>
                        </form> 
                    </div>
                    </div>
                        </div>
                </div>
                
                <!-- /.container-fluid -->
            </div>
            <!-- /#page-wrapper -->

        </div>
        <!-- /#wrapper -->


        <!-- jQuery -->
        <script src="../js/jquery.min.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="../js/bootstrap.min.js"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="../js/metisMenu.min.js"></script>



        <!-- Custom Theme JavaScript -->
        <script src="../js/startmin.js"></script>


    </body>
</html>
