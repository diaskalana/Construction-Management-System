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
    <style>
        
    </style>
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
                <h3 id="dash_success">Successfully Updated! <br><br><a href="dashboard.php" style="color:black; border:black solid;border-radius:5px; padding:5px 10px;">View Changes</a></h3>
                <br>
                <fieldset>
                    <legend><h3 class="dash_greeting">Edit Profile:</h3></legend>
                    <ul>
                        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
                            <li class="li">First Name (block letters only)</li>
                            <input id="detail1" class="txt" type="text" name="ds_firstName"><br>
                            <li class="li">Last Name (block letters only)</li>
                            <input id="detail2" class="txt" type="text" name="ds_lastName"><br>
                            <li class="li">Work Title (block letters only)</li>
                            <input id="detail3" class="txt" type="text" name="ds_workTitle"><br>
                            <li class="li">Company Name (block letters only)</li>
                            <input id="detail4" class="txt" type="text" name="ds_companyName"><br>
                            <li class="li">Customer Number</li>
                            <input id="detail5" class="txt" type="text" name="ds_cutomerNum"><br>
                            <li class="li">Direct Contact Number</li>
                            <input id="detail6" class="txt" type="text" name="ds_contact"><br>
                            <li class="li">Email Address</li>
                            <input id="detail7" class="txt" type="text" name="ds_email"><br>  
                            <li class="li">Update the following: </li>
                            <input class="ds_cb" type="checkbox" name="cb_list[]" value="fName"><span class="li">First Name</span>  
                            <input class="ds_cb" type="checkbox" name="cb_list[]" value="lName"><span class="li">Last Name </span>
                            <input class="ds_cb" type="checkbox" name="cb_list[]" value="title"><span class="li">Work Title </span>
                            <input class="ds_cb" type="checkbox" name="cb_list[]" value="cName"><span class="li">Company Name </span><br>
                            <input class="ds_cb" type="checkbox" name="cb_list[]" value="cNumber"><span class="li">Contact Number </span>
                            <input class="ds_cb" type="checkbox" name="cb_list[]" value="contact"><span class="li">Direct Contact Number </span>
                            <input class="ds_cb" type="checkbox" name="cb_list[]" value="email"><span class="li">Email </span><br>

                            <button class="dash_btn" type="submit" name="dashUpdt">Update Profile</button>      
                            <input class="dash_btn" type="reset" value="Reset" />                
                        </form>

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

                <?php
                    include('profile_update_logic.php'); //linking to update mechanisms
                ?>  
                
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
