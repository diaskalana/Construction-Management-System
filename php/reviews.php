<?php
                
    if(isset( $_SESSION['user'] ) ) {
        echo "<script src=\"../js/review_message_ctrl.js\"></script>";
    }


    require 'config.php';

    if(isset($_POST["revSub"])){

        $f_name = $_REQUEST['test_fName'];
        $l_name = $_REQUEST['test_lName'];
        $email = $_REQUEST['test_email'];
        $test_title = $_REQUEST['test_title'];
        $test_desc = $_REQUEST['test_desc'];
        $test_usage = $_REQUEST['test_usage'];
        $test_rating = $_REQUEST['test_rating'];


        $sql = "SELECT * from reviews WHERE email = '$email'";
        $result = $con->query($sql);

        if ($result->num_rows > 0) 
        {
            echo "<script src=\"../js/review_message_ctrl_1.js\"></script>";
        }
        else { 
            $full_name = $f_name." ".$l_name;
            $sql= "INSERT INTO reviews(full_name, email, title, time_used, rating, context)VALUES('$full_name','$email','$test_title',$test_usage,$test_rating,'$test_desc')";
            
            if($con->query($sql)){
            echo "<script>
                    (function test_success() {
                        var news_message = document.getElementById('test_success');
                        news_message.style.display = 'block';
                    })();
                </script>";
            }                        
        }
        $con->close();

    }
?>

<!-- 
    Student name: D.D.K.S. Dias
    Student ID: IT21220760
    Module: IWT (1st Yr: 2nd Sem: Final Assignment: 2022)
 -->