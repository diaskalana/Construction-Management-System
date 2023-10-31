<?php session_start();  
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login | CORE Commertial Construction</title>
	<link rel="stylesheet" href="../css/login_register.css">
    <link rel="stylesheet" href="../css/header_footer.css">
    <script src="../js/login.js"></script>

    <style>
        fieldset {
            padding: 10px;
            margin-top: 0;
        }

        #copyrights_text {
            display: inline-block;
            margin-top: 15px;
        }
    </style>
</head>

<body>

    <?php
        include('header.php'); //Linking header section
    ?>

    <div style="height:1000px;">

<!--Content Section Begins-->

<div class="container">
            <form method="post" action="login_logic.php">
                <fieldset class="fieldset">
                    <legend><h3>Welcome to Member Portal</h3></legend>
                    <hr>
                    <div id="formTxt"><p>If you are not a member already, please create an account in order to access the site.</p></div>
                    <img id="logok" src="../images/logo.png"><br>
                    <li class="li">Username or Email</li><br>
                    <input id="userName" class="txt" required type="text" name="userName"><br>
                    <li class="li">Password</li><br>
                    <input id="password" class="txt" required type="password" name="password"><br>
                    <input class="box" type="checkbox" value="keepMe" name="remember[]"> Keep me signed in<br>
                    <input id="submit" class="btn" type="submit" value="Login" name="login_user" >
                    <input class="btn" type="button" value="Register" onclick="location.href='register.php'">
                    <center><p id="regP"><a id="fgot" href="fogotPassword.html">fogot your password?</a></p></center>
                </fieldset>
            </form>
        </div>
    </div>

        <!--Content Section Ends-->
    
    <?php
        include('footer.php'); //linking to footer section
    ?>



<!-- 
    Student name: Thathsara S.M.K. 
    Student ID: IT21219566 
    Module: IWT (1st Yr: 2nd Sem: Final Assignment: 2022)
 -->