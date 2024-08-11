 <!-- Navigation -->

            <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.php">Attendance Management System</a>
                </div>

                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <ul class="nav navbar-nav navbar-left navbar-top-links">
                    <li><a href="#"><i class="fa fa-home fa-fw"></i> Website</a></li>
                </ul>

                <ul class="nav navbar-right navbar-top-links">
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-user fa-fw"></i> <?php echo $_SESSION['TNAME']; ?> <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu dropdown-user">
                            <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                            </li>
                            <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                            </li>
                            <li class="divider"></li>
                            <li><a href="../logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <!-- /.navbar-top-links -->

                <div class="navbar-default sidebar" role="navigation">
                    <div class="sidebar-nav navbar-collapse">
                        <ul class="nav" id="side-menu">
                            <li class="sidebar-search">
                                <div class="input-group custom-search-form">
                                    <input type="text" class="form-control" placeholder="Search...">
                                    <span class="input-group-btn">
                                        <button class="btn btn-primary" type="button">
                                            <i class="fa fa-search"></i>
                                        </button>
                                </span>
                                </div>
                                <!-- /input-group -->
                            </li>
                            <li>
                                <a href="index.php" class="active"><i class="fa fa-dashboard fa-fw"></i>
                                 <?php if (isset($_SESSION['TID'])){
                                    echo $_SESSION['TNAME'];
                                } ?> 
                                </a>
                            </li>

                           
                            <li>

                                 <li>
                                <a href="#"><i class="fa fa-users fa-fw"></i>Teachers<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="teacher.php"><i class="fa fa-edit fa-fw"></i> Registration</a>
                                    </li>
                                    <li>
                                        <a href="teacherTable.php"><i class="fa fa-table fa-fw"></i> List</a>
                                    </li>
                                </ul>
                                <!-- /.nav-second-level -->
                            </li>

                             <li>
                                <a href="#"><i class="fa fa-user fa-fw"></i>Students<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="student.php"><i class="fa fa-edit fa-fw"></i> Registration</a>
                                    </li>
                                    <li>
                                        <a href="studentTable.php"><i class="fa fa-table fa-fw"></i> List</a>
                                    </li>
                                </ul>
                                <!-- /.nav-second-level -->
                            </li>

                            <li>
                                <a href="#"><i class="fa fa-university fa-fw"></i>Class<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <!-- <a href="class.php"><i class="fa fa-edit fa-fw"></i>Add</a> -->
                                    </li>
                                    <li>
                                        <a href="classList.php"><i class="fa fa-table fa-fw"></i>List</a>
                                    </li>
                                </ul>
                                <!-- /.nav-second-level -->
                            </li>

                            
                            <li>
                                <a href="#"><i class="fas fa-chalkboard-teacher"></i> Student Class<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                   
                                    <li>
                                        <a href="studentclass.php"><i class="fa fa-edit fa-fw"></i>Form</a>
                                    </li>
                                </ul>
                                <!-- /.nav-second-level -->
                            </li>

                            <li>
                                <a href="#"><i class="fas fa-book-reader"></i>Class assign to Teacher<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                   
                                    <li>
                                        <a href="teacherclass.php"><i class="fa fa-edit fa-fw"></i>Form</a>
                                    </li>
                                </ul>
                                <!-- /.nav-second-level -->
                            </li>

                            <li>
                                <a href="#"><i class="fa fa-clock-o"></i>Attendance<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                   
                                    <li>
                                        <a href="attendance.php"><i class="fa fa-edit fa-fw"></i>Form</a>
                                        <a href="attendanceList.php"><i class="fa fa-list fa-fw"></i>List</a>
                                    </li>
                                </ul>
                                <!-- /.nav-second-level -->
                            </li>
                                <!-- /.nav-second-level -->
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
