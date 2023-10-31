<?php session_start(); 
 if(!isset($_SESSION['user'])) { 
    header('Location: login.php');
    exit();		
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/header_footer.css">
    <link rel="stylesheet" href="../css/dashboard.css">
    

    <title>Dashboard | CORE Commertial Construction</title>

</head>
<body>
    <?php
    include('header.php'); //Linking header section
    ?>
    <div class="dash_container">
        <div class="db_panel">
            <div class="mini_profile">
                <img id="ds_profile" src="../images/fa/svgs/regular/user.svg" alt="">
                <div style="float:right; margin:20px 18px 0 5px">
                    <a href="mailto:support@cms.net" class="ds_mini_btn">Verify Account</a><br> 
                    <a href="logout.php" class="ds_mini_btn">Log out</a>
                </div>
            </div>
            <a href="dashboard.php"><h3 class="side_menu">Account Summery</h3></a>
            <a href="#"><h3 class="side_menu">Available Downloads</h3></a>
            <a href="#"><h3 class="side_menu">Live Support</h3></a>
            <a href="dashboard_update.php"><h3 class="side_menu">Edit Profile</h3></a>
            <a href="#"><h3 class="side_menu">Purchase History</h3></a>
            <a href="#"><h3 class="side_menu">Payment Details</h3></a>


        </div>
        <div class="db_pan">
                <?php
                    if(isset( $_SESSION['user'] ) ) {
                        $user_id = $_SESSION['user'];

                        require 'config.php';
                        $sql ="SELECT * from customers WHERE id='$user_id'";
                        $result = $con->query($sql);
                        $row = $result->fetch_assoc();

                        echo "<h3 class=\"dash_greeting\">Welcome back ".$row["first_name"]." ".$row["last_name"].", Checkout your profile section weekly for new updates.</h3>";                                
                    }                        
                ?>
                <br>
                <fieldset>
                    <legend><h3 class="dash_greeting">Profile Summery:</h3></legend>
                    <ul>                        
                        <?php
                            echo "<li><h4 class=\"dash_greeting\">Username : ".$row["user_name"]." </h4></li>";                                
                            echo "<li><h4 class=\"dash_greeting\">First Name : ".$row["first_name"]." </h4><a href=\"dashboard_update.php\" class = \"edit_links\">Edit Now</a></li>";  
                            echo "<li><h4 class=\"dash_greeting\">Last Name : ".$row["last_name"]." </h4><a href=\"dashboard_update.php\" class = \"edit_links\">Edit Now</a></li>";                                
                            echo "<li><h4 class=\"dash_greeting\">Work Title : ".$row["title"]." </h4><a href=\"dashboard_update.php\" class = \"edit_links\">Edit Now</a></li>";                                
                            echo "<li><h4 class=\"dash_greeting\">Company Name : ".$row["company"]." </h4><a href=\"dashboard_update.php\" class = \"edit_links\">Edit Now</a></li>";                                
                            echo "<li><h4 class=\"dash_greeting\">Mobile Number : ".$row["cNumber"]." </h4><a href=\"dashboard_update.php\" class = \"edit_links\">Edit Now</a></li>";  
                            echo "<li><h4 class=\"dash_greeting\">Direct Contact : ".$row["dc_number"]." </h4><a href=\"dashboard_update.php\" class = \"edit_links\">Edit Now</a></li>";                                
                            echo "<li><h4 class=\"dash_greeting\">Email Address : ".$row["email"]." </h4><a href=\"dashboard_update.php\" class = \"edit_links\">Edit Now</a></li>";                                
                        ?>


                    </ul>
                </fieldset>
                <fieldset>
                    <legend><h3 class="dash_greeting">Recommendations:</h3></legend>
                    <ul>
                        <li><h4 class="dash_greeting">Check Download section for new updates.</h4></li>
                        <li><h4 class="dash_greeting">Setup multifactor authentication.</h4></li>
                        <li><h4 class="dash_greeting">Add a secondary payments method.</h4></li>
                        <li><h4 class="dash_greeting">Review payment summery.</h4></li>

                    </ul>
                </fieldset>
                
        </div>
    </div>
    <?php
    include('footer.php'); //linking to footer section
    ?>



<!-- 
    Student name: D.D.K.S. Dias
    Student ID: IT21220760
    Module: IWT (1st Yr: 2nd Sem: Final Assignment: 2022)
 -->