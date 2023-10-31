<?php session_start();  
?>
<!DOCTYPE html>
<html>
<head>
    <title>Home | CORE Commertial Constructions</title>
    <link rel="stylesheet" href="../css/header_footer.css">
    <link rel="stylesheet" href="../css/home.css">
</head>
<body>
    <?php
        include('header.php'); //Linking header section
    ?>

    <div style="height:2100px;">

        <div id="hero-image">
            <div class="wrapper">
                <h2 class="h2"><strong>CORE</strong><br/>
                Control Your Construction Business</h2>
                <a href="#" class="button-1">See Pricing</a>
            </div>
        </div>

        <div id="primary-content">
            <div class="wrapper">
                <article>
                    <h3 class="h3">Featured Content</h3>
                    <p class="p">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec euismod leo a nibh dignissim tincidunt. Nam ultricies odio ac neque suscipit volutpat. Ut dictum adipiscing felis sed malesuada. Integer porta sem nec nibh hendrerit imperdiet. </p>
                    <img src="../images/feaCon.png">
                    <h5 class="h5"><a href="#">See More...</a></h5>
                </article>
            </div>
        </div>

        <div id="secondary-content">
            <div class="wrapper">
                <article style="background-image: url('../images/secCon1.jpg');">
                    <div class="overlay">
                        <h4 class="h4">Case Study</h4>
                        <p class="p"><small>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec euismod leo a nibh dignissim tincidunt nam.</small></p>
                        <a href="#" class="more-link">View more</a>
                    </div>
                </article>
                <article style="background-image: url('../images/secCon2.jpg');">
                    <div class="overlay">
                        <h4 class="h4">Case Study</h4>
                        <p class="p"><small>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec euismod leo a nibh dignissim tincidunt nam.</small></p>
                        <a href="#" class="more-link">View more</a>
                    </div>
                </article><div class="clear"></div>
            </div>
        </div>

        <div id="cta">
            <div class="wrapper">
                <h3 class="h3">Heard Enough?</h3>
                <p class="p">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec euismod leo a nibh dignissim tincidunt. Nam ultricies odio ac neque suscipit volutpat. Ut dictum adipiscing felis sed malesuada. Integer porta sem nec nibh hendrerit imperdiet. </p>
                <a href="demo.php" class="button-2">Try Demo</a>
            </div>
        </div>

    </div>
    <?php
        include('footer.php'); //linking to footer section
    ?>



<!-- 
    Student name: Thathsara S.M.K. 
    Student ID: IT21219566 
    Module: IWT (1st Yr: 2nd Sem: Final Assignment: 2022)
 -->
