<?php session_start();     
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Integrations | CORE Commertial Construction</title>
    <link rel="stylesheet" href="../css/integrations.css">
    <link rel="stylesheet" href="../css/header_footer.css">

</head>
<body>
    <?php
        include('header.php'); //Linking header section
    ?>

    <!-- Body Section Begins -->
    <div id="int_main">
        <div id="int_hero_left">
            <div id="int_desc">
                <h2>Possible Integrations</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis eveniet fuga minus eligendi eius dolorem a blanditiis culpa facere soluta. Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus in eum cum autem aspernatur quisquam reprehenderit rem harum. Sed, nisi.</p>
                <button id="int_learn_more" type="button">Learn More</button>
            </div>
        </div>
        <div id="int_hero_right">
            <div id="int_slideshow">
                <div class="int_slide_wrapper">
                    <img class="int_slides" src="../images/quickbook.webp">
                    <img class="int_slides" src="../images/zapier.jpg">
                    <img class="int_slides" src="../images/asana.png">
                    <img class="int_slides" src="../images/mailchimp.webp">

                    <button id="display_left"class=" int_slide_ctr" onclick="plusDivs(-1)">&#10094;</button>
                    <button id="display_right"class=" int_slide_ctr" onclick="plusDivs(1)">&#10095;</button>
                </div>
            </div>
          
            <script src="../js/slide_show_ctrl.js"></script>
            
        </div>
    </div>

    <div class="int_container1 int_container">
        <div class="container-left">
            <div class="container_desc">
                <h2>Mailchimp Integration</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus, cumque vel! Nisi, eum. Doloremque reprehenderit quaerat expedita reiciendis quae, sunt ducimus vitae vel quia? Odio inventore facilis itaque excepturi alias. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore distinctio cumque aliquid sint tenetur maiores sequi velit illum laboriosam aspernatur.</p>
                <button class="int_button" type="button">Learn More</button>
            </div>
        </div>
        <div class="container-right">
            <div class="image_wrapper">
                <img class="int_img" src="../images/dashboard-mailchimp.png" >
                <a href="#"><img title="Watch Tutorial" class="int_ico" src="../images/fa/svgs/brands/youtube.svg" ></a>
            </div>
            
        </div>
    </div>
    <!-- Container 2 begins-->
    <div class="int_container2 int_container">
        <div class="int_subcontainer">
            <div class="container-left">
                <div class="container_desc">
                    <h2>Asana Integration</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus, cumque vel! Nisi, eum. Doloremque reprehenderit quaerat expedita reiciendis quae, sunt ducimus vitae vel quia? Odio inventore facilis itaque excepturi alias. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore distinctio cumque aliquid sint tenetur maiores sequi velit illum laboriosam aspernatur.</p>
                    <button class="int_button" type="button">Learn More</button>
                </div>
            </div>
            <div class="container-right">
                <div class="image_wrapper">
                    <img class="int_img" src="../images/dashboard-asana.png" >
                    <a href="#"><img title="Watch Tutorial" class="int_ico" src="../images/fa/svgs/brands/youtube.svg" ></a>
                </div>
            </div>
        </div>
    </div>
    <!--Conatiner 2 Ends  -->
    <!-- Container 3 begins -->
    <div class="int_container3 int_container">
        <div class="container-left">
            <div class="container_desc">
                <h2>Zapier Integration</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus, cumque vel! Nisi, eum. Doloremque reprehenderit quaerat expedita reiciendis quae, sunt ducimus vitae vel quia? Odio inventore facilis itaque excepturi alias. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore distinctio cumque aliquid sint tenetur maiores sequi velit illum laboriosam aspernatur.</p>
                <button class="int_button" type="button">Learn More</button>
            </div>
        </div>
        <div class="container-right">
            <div class="image_wrapper">
                <img class="int_img" src="../images/dashboard-zapier.png" >
                <a href="#"><img title="Watch Tutorial" class="int_ico" src="../images/fa/svgs/brands/youtube.svg" ></a>
            </div>
            
        </div>
    </div>
    <!-- Container 3 Ends -->
    <!-- Container 4 begins -->
    <div class="int_container4 int_container">
        <div class="int_subcontainer">
            <div class="container-left">
                <div class="container_desc">
                    <h2>Quickbooks Integration</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus, cumque vel! Nisi, eum. Doloremque reprehenderit quaerat expedita reiciendis quae, sunt ducimus vitae vel quia? Odio inventore facilis itaque excepturi alias. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore distinctio cumque aliquid sint tenetur maiores sequi velit illum laboriosam aspernatur.</p>
                    <button class="int_button" type="button">Learn More</button>
                </div>
            </div>
            <div class="container-right">
                <div class="image_wrapper">
                    <img class="int_img" src="../images/dashboard_quickbook.jpg" >
                    <a href="#"><img title="Watch Tutorial" class="int_ico" src="../images/fa/svgs/brands/youtube.svg" ></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Container 4 ends -->
    <!-- Body Section Ends -->
    <?php
        include('footer.php'); //linking to footer section
    ?>


<!-- 
    Student name: D.D.K.S. Dias
    Student ID: IT21220760
    Module: IWT (1st Yr: 2nd Sem: Final Assignment: 2022)
 -->