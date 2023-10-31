<?php session_start(); 
session_unset();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/header_footer.css">

</head>
<body>
    
<!-- Header Area -->
<div id="header">

    <!-- Top Bar Begins-->

    <div class="top_bar">
        <a class="top_links" id="head_login_btn" href="#"><img src="../images/fa/svgs/regular/circle-user.svg" > Client Area</a>
        <a class="top_links" href="#"><img src="../images/fa/svgs/regular/address-book.svg" > Resources</a>
        <a class="top_links" href="#"><img src="../images/fa/svgs/regular/flag.svg" > About Us</a>

        <button class="top_contact" onclick="location.href='tel:+1-202-555-0116'" type="button">Call us: +1-202-555-0116</button>
        <button class="top_contact" onclick="location.href='mailto:support@cms.net'" type="button">Email: support@cms.net</button>
        
        <div class="search_container">
            <form action="https://www.google.com/search" target="_blank">
                <input id="top_search" type="text" placeholder="Type something.." name="q">
                <button type="submit">Search</button>
            </form>
        </div>      
    </div>
    <!-- End of Top bar -->
    <?php
        if(isset( $_SESSION['user'] ) ) {
            echo "
            <script>
                document.getElementById('head_login_btn').innerHTML = '<img src=\"../images/fa/svgs/regular/circle-user.svg\" > Dashboard';
            </script>"; 
        }
    ?>

    <!-- Main Navigation Begins-->

    <div class="main_nav">
        <img id="logo" width="200px" src="../images/logo.png" >
        <nav id="main_nav">
            <a class="nav_links" id="index" href="index.html">Home</a>
            <a class="nav_links" id="features" href="features.html">Features</a>
            <a class="nav_links" id="testimonials" href="testimonials.html">Testimoials</a>
            <a class="nav_links" id="integrations" href="integrations.html">Integrations</a>
            <a class="nav_links" id="contact" href="contact.html">Contact</a>
            <button id="demo">Book a demo</button>
        </nav>
    </div>

    <script>
        var page = location.href.split('/').pop();
        const current_page = page.split('.').shift();

        var new_style = document.getElementById(current_page);
        new_style.style.borderBottom = "3px solid #F18240";
    </script>

    <!--End of Main Navigation -->

</div>

<!-- End of header area -->

<div style="height:1000px;"></div>

<!-- Footer Section Begins -->

<div id="footer">
    <table>
        <tr>
            <td>
                <!-- Footer 1st Section Begins -->
                <div id="fsec1">
                    <h4>Why purchase from us?</h4>
                    <p id="footer_intro">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Repellat nostrum asperiores commodi, nemo sed a quod saepe optio repellendus reiciendis recusandae voluptatum accusamus eum sit, doloribus ipsum quam perspiciatis dicta unde esse totam ut dolore. Assumenda ea suscipit nihil quas, quae laboriosam quibusdam, laudantium doloribus maiores qui laborum aliquid veritatis?
                    </p>  
                    <div>
                        <a href="https://www.instagram.com/sliit.life/"><img class="social_icons" src="../images/fa/svgs/brands/instagram-square.svg" > </a>
                        <a href="https://www.facebook.com/sliit.lk/"><img class="social_icons" src="../images/fa/svgs/brands/facebook-square.svg" > </a>
                        <a href="https://twitter.com/SLIITinfo"><img class="social_icons" src="../images/fa/svgs/brands/twitter-square.svg" > </a>
                        <a href="https://www.linkedin.com/school/sliit/"><img class="social_icons" src="../images/fa/svgs/brands/linkedin.svg" > </a>
                    </div>
                    <br>
                    <h4>Still not impressed?</h4><br>
                    <button class="top_contact" onclick="location.href='tel:+1-202-555-0116'" type="button">Toll-free calls</button>
                    <button class="top_contact" onclick="location.href='mailto:support@cms.net'" type="button">Drop us a line</button>
                    
                </div>
                <!-- Footer 1st Section Ends -->
            </td>
            <td>
                <!-- Footer 2nd Section Begins -->
                <fieldset>
                    <legend><h3>[Customer Updates]</h3></legend>
                    <div id="fsec2">
                        <div class="pay_promo">
                            <h4>Hazzle free payment options with both </h4><h3><i>Security</i></h3><h4> and </h4><h3><i>Accessibility</i></h3><h4>. So you can enjoy the maximum benifits from your side!</h4><br>
                        </div>
                        <img class="pay_icons" src="../images/fa/svgs/brands/cc-visa.svg" >
                        <img class="pay_icons" src="../images/fa/svgs/brands/cc-mastercard.svg" >
                        <img class="pay_icons" src="../images/fa/svgs/brands/cc-apple-pay.svg" >
                        <img class="pay_icons" src="../images/fa/svgs/brands/cc-paypal.svg" >
                        <div>
                            <br><h4>We are at your finger tips... Mobile apps avialable to download at </h4><h3><i><img class="app_icons" src="../images/fa/svgs/brands/app-store-ios.svg" ><a href="https://www.sliit.lk/">Apple Appstore</a></i></h3><h4> and </h4><h3><i><img class="app_icons" src="../images/fa/svgs/brands/google-play.svg" ><a href="https://www.sliit.lk/">Android Playstore</a></i></h3><h4>.</h4>
                            <button id="demo">Book a demo</button>    
                        </div>
                    </div>
                </fieldset>
                <!-- Footer 2nd Section Ends -->
            </td>
            <td>
                <div id="fsec3">
                    <!-- Footer 3rd Section Begins -->
                    <h4>Quick links <br></h4>
                    
                    <a class="footer_links" id="index" href="index.html">Home</a>
                    <a class="footer_links" id="features" href="features.html">Features</a>
                    <a class="footer_links" id="testimonials" href="testimonials.html">Testimoials</a>
                    <a class="footer_links" id="integrations" href="integrations.html">Integrations</a>
                    <a class="footer_links" id="contact" href="contact.html">Contact</a>
                    <!-- Footer 3rd Sections Ends -->
                </div>
            </td>
            <td>
                <div id="fsec4">
                    <!-- Footer 4th Section Begins -->
                    <h3>Join our <span style="color:#F18240; font-style: italic;">Weekly Newsletter</span></h3>
                    <span style="
                        display:none;
                        color:#0071CE;
                        font-weight:bold
                    " id="news_success">Successfully Subscribed!</span>
                        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
                            <h4>Full Name: </h4><br>
                            <input required type="text" name="news_first_name" style="width: 110px;" placeholder="First Name">
                            <input required type="text" name="news_last_name" style="width: 110px;" placeholder="Last Name">
                            <br><h4>Email Address</h4><br>
                            <input required type="email" style="width: 250px;" name="news_email" placeholder="Working email address" >
                            <br>
                            <details ><summary>Read more</summary>Don't worry! we won't spam you and fill up your inbox with useless junk promotional emails as we respect your concerns about our brand.</details>
                            <br>
                            <input type="checkbox" value="compliance" name="newletter_check" required >Yes, I would like to join the weekly newsletter.
                            <button type="submit" name="btnSub">Subscribe Now</button>
                        </form>
                    <!-- Footer 4th Section Ends -->
                </div>
            </td>
        </tr>
    </table>
</div>
<!-- End of Footer Section -->
<!-- Bottom bar begins -->
<div id="bottom_bar">
    <p id="copyrights_text">&copy;CopyRights2022, MLB_02.02_04, SriLanka Institute of Information Technology.</p>
</div>
<!-- Bottom bar Ends -->

<!-- Bottom to top begins -->
<div class="t2b">
    <a href="#header">
        <img id="t2b_img" src="../images/fa/svgs/regular/circle-up.svg" >
    </a>
</div>
<!-- Bottom to top ends -->
<!-- newsletter signups -->

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

</body>
</html>