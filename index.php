<?php 

    require 'pages/include/connection.php';

    if (isset($_POST['teacher']) && $_POST['teacher'] == 'login') {
        
        $UserName = $_POST['username'];
        $Password = $_POST['password'];

        $query = "select * from tblteachers where tUserName = '$UserName' and tPassword = '$Password'";
        $go = mysqli_query($connect,$query);
        $numrow = mysqli_num_rows($go);
        
        if ($numrow > 0) {
            
            $Teacher = mysqli_fetch_array($go);
             
            $_SESSION['TID'] = $Teacher['tId'];
            $_SESSION['TUSERNAME'] = $Teacher['tUserName'];
            $_SESSION['TNAME'] = $Teacher['tName'];
            $_SESSION['TPASSWORD'] = $Teacher['tPassword'];
            $_SESSION['TPIC'] = $Teacher['tImage'];
            
            header('location:Home.php?sms=success');
            exit();
        }
        else{
            header('location:index.php?sms=error');
            exit();
        }

    }

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>PHP-AMS | Login</title>

        <!-- Bootstrap Core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- MetisMenu CSS -->
        <link href="css/metisMenu.min.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="css/startmin.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>

        <div class="container">
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <div class="login-panel panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Please Sign In</h3>
                        </div>
                        <div class="panel-body">
                            <form role="form" action="index.php" method="post">
                                <fieldset>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="User Name" name="username" type="text">
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Password" name="password" type="password" value="">
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input name="remember" type="checkbox" value="Remember Me">Remember Me
                                        </label>
                                    </div>
                                    <!-- Change this to a button or input when using this as a form -->
                                   <button class="btn btn-lg btn-block btn-success">Login</button><br>
                                    <!-- <a href="admin.php" class="btn btn-lg btn-primary">Admin Login</a> -->
                                    <input type="hidden" name="teacher" value="login">
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    

    </body>
</html>
