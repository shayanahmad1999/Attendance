<?php 
// session_start(); 
// echo 'in';
// print_r($_SESSION); exit;
      
        if (!isset($_SESSION['TID']) || empty($_SESSION['TID'])) {
                
                echo "<h1 style='text-align:center;font-size:100px;'>&#128514;&#128514;&#128514;&#128514;</h1>
        <h2 style='text-align:center;font-size:100px;'>You are not access directly please first login</h2>";
        //header('location:index.php');
                exit();

        }

 ?>