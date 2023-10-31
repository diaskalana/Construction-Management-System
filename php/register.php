<?php session_start();  
?>
<!DOCTYPE html>
<html>
<head>
	<title>Register | CORE Commertial Construction</title>
	<link rel="stylesheet" href="../css/login_register.css">
    <link rel="stylesheet" href="../css/header_footer.css">
    <script src="../js/register.js"></script>
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
                <div class="form-box">
                    <form method="post" action="profile.html">
                        <fieldset class="fieldset">
                            <legend><h3>Member Registration</h3></legend>
                            <img id="logok" src="../images/logo.png"><br>
                            <li class="li">Username (block letters only)</li><br>
                            <input id="detail0" class="txt" required type="text" name="userName"><br>
                            <li class="li">First Name (block letters only)</li><br>
                            <input id="detail1" class="txt" required type="text" name="firstName"><br>
                            <li class="li">Last Name (block letters only)</li><br>
                            <input id="detail2" class="txt" required type="text" name="lastName"><br>
                            <li class="li">Work Title (block letters only)</li><br>
                            <input id="detail3" class="txt" required type="text" name="workTitle"><br>
                            <li class="li">Company Name (block letters only)</li><br>
                            <input id="detail4" class="txt" required type="text" name="companyName"><br>
                            <li class="li">Customer Number</li><br>
                            <input id="detail5" class="txt" required type="text" name="cutomerNum"><br>
                            <li class="li">Direct Contact Number</li><br>
                            <input id="detail6" class="txt" required type="text" name="contact"><br>
                            <li class="li">Email Address</li><br>
                            <input id="detail7" class="txt" required type="text" name="email"><br>
                            <li class="li">Password</li><br>
                            <input id="detail8" class="txt" required type="password" name="userName"><br>
                            <li class="li">Confirm Password</li><br>
                            <input id="detail9" class="txt" required type="password" name="password"><br>
                            <p id="regP">By creating an account you agree to our <a id="fgot" href="termsandconditions.html">Terms & Conditions</a></p><br>
                            <input class="btnReg" type="submit" value="Register" onclick="registration()"><br>
                            <center><p id="regP">Already have an account? <a id="fgot" href="login.php">Sign in</a></p></center>
                        </fieldset>
                    </form>
                </div>
            </div>

            <!--Content Section Ends-->
        
        </div>

	<?php
        include('footer.php'); //linking to footer section
    ?>



<!-- 
    Student name: Thathsara S.M.K. 
    Student ID: IT21219566 
    Module: IWT (1st Yr: 2nd Sem: Final Assignment: 2022)
 -->