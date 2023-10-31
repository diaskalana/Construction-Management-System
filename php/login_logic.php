<?php
    session_start(); 
    require 'config.php';

    if(isset($_POST["login_user"])){
        $user_name = $_REQUEST['userName'];
        $pass = $_REQUEST['password'];

            
            

        $sql ="SELECT * from customers WHERE email='$user_name'";
        $result1 = $con->query($sql);
        $sql ="SELECT * from customers WHERE user_name ='$user_name'";
        $result2 = $con->query($sql);
        $sql ="SELECT * from customers WHERE user_pw ='$pass'";
        $result4 = $con->query($sql);

        if ( ($result1->num_rows > 0) ||  ($result2->num_rows > 0)) {
            $result3 = true;
        }

        if (($result3 == true) && ($result4->num_rows > 0)) 
        {
            
            $sql ="SELECT * from customers WHERE user_name ='$user_name' or email='$user_name'";
            $result = $con->query($sql);
            $row = $result->fetch_assoc();

            if(!empty($_POST['remember'])) {
                setcookie('user', $row["id"], time() + (86400 * 30), "/");
            }

            $_SESSION['user'] = $row["id"];
            echo"<script> location.replace(\"dashboard.php\"); </script>";
        }
        
        $con->close();
    }
                
 ?>


<!-- 
    Student name: D.D.K.S. Dias
    Student ID: IT21220760
    Module: IWT (1st Yr: 2nd Sem: Final Assignment: 2022)
 -->