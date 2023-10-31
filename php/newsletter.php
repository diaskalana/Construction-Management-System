<?php
    require 'config.php';

    if(isset($_POST["btnSub"])){
        $f_name = $_REQUEST['news_first_name'];
        $l_name = $_REQUEST['news_last_name'];
        $email = $_REQUEST['news_email'];

        $sql ="SELECT * from newsletter WHERE email='$email'";
        $result = $con->query($sql);

        if ($result->num_rows > 0) 
        {
            echo "<script>
            (function news_fail() {
                var news_message = document.getElementById('news_success');
                news_message.style.display = 'block';
                news_message.style.color = 'red';
                news_message.innerHTML = 'You have already subscribed!'
            })();
            </script>";
        }
        else{ 
    
            $sql1= "INSERT INTO newsletter(first_name,last_name,email)VALUES('$f_name','$l_name','$email')";
            if($con->query($sql1)){
            echo "<script>
                    (function news_success() {
                        var news_message = document.getElementById('news_success');
                        news_message.style.display = 'block';
                    })();
                </script>";
            }
            $con->close();
        }

    }
?>
<!-- newsletter signups ends -->


<!-- 
    Student name: D.D.K.S. Dias
    Student ID: IT21220760
    Module: IWT (1st Yr: 2nd Sem: Final Assignment: 2022)
 -->