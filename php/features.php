<?php session_start();  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/header_footer.css">
    <link rel="stylesheet" href="../css/integrations.css">
    <link rel="stylesheet" href="../css/features.css">
    <title>Features | CORE Commertial Construction</title>

</head>
<body>
    <?php
        include('header.php'); //Linking header section
    ?>
    <!-- Body section begins -->
    <!-- hero section begins -->
    <div class="fe_main">
        <div class="fe_intro">
            <h1>Platform Features</h1>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Magni cum porro enim eligendi tenetur consequatur repellendus ratione deserunt quisquam iure. Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam, cumque!</p>
            <button class="fe_button" onclick="location.href='demo.php'">Book a demo</button>
            <button class="fe_button" id="fe_login_btn" onclick="location.href='dashboard.php'">Log in / Register</button>
        </div>
    </div>
    <!-- Hero section ends -->
    <?php
        if(isset( $_SESSION['user'] ) ) {
            echo "<script>
            (function test_form() {
                var fe_login_btn = document.getElementById('fe_login_btn');
                fe_login_btn.innerHTML = 'Dashboard';})();      
            </script>";                                
        }                        
        ?>
    <!-- Conatiner 1 begins -->
    <div class="int_container1 int_container">
        <div class="container-left">
            <div class="container_desc">
                <fieldset>
                    <img class="fe_img" src="../images/fa/svgs/regular/calendar.svg" alt="">
                    <h2>Project Delivery</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus, cumque vel! Nisi, eum. Doloremque reprehenderit quaerat expedita reiciendis quae, sunt ducimus vitae vel quia? Odio inventore facilis itaque excepturi alias. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore distinctio cumque aliquid sint tenetur maiores sequi velit illum laboriosam aspernatur.</p>
                    <button class="int_button" type="button">Learn More</button>
                </fieldset>
            </div>
        </div>
        <div class="container-right">
            <div class="container_desc">
                <fieldset>
                    <img class="fe_img" src="../images/fa/svgs/regular/money-bill-1.svg" alt="">
                    <h2>Finance & Operations</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus, cumque vel! Nisi, eum. Doloremque reprehenderit quaerat expedita reiciendis quae, sunt ducimus vitae vel quia? Odio inventore facilis itaque excepturi alias. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore distinctio cumque aliquid sint tenetur maiores sequi velit illum laboriosam aspernatur.</p>
                    <button class="int_button" type="button">Learn More</button>
                </fieldset>
            </div>            
        </div>
    </div>
    <!-- Container 1 ends -->

    <!-- Container 2 begins-->
    <div class="int_container2 int_container fe_sd">
        <div class="int_subcontainer">
            <div class="container-left">
                <div class="container_desc">
                    <fieldset>
                        <img class="fe_img" src="../images/fa/svgs/regular/clock.svg" alt="">
                        <h2>Time Management</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus, cumque vel! Nisi, eum. Doloremque reprehenderit quaerat expedita reiciendis quae, sunt ducimus vitae vel quia? Odio inventore facilis itaque excepturi alias. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore distinctio cumque aliquid sint tenetur maiores sequi velit illum laboriosam aspernatur.</p>
                        <button class="int_button" type="button">Learn More</button>
                    </fieldset>
                    
                </div>
            </div>
            <div class="container-right">
                <div class="container_desc">
                    <fieldset>
                        <img class="fe_img" src="../images/fa/svgs/regular/square-check.svg" alt="">
                        <h2>Supply Chain Management</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus, cumque vel! Nisi, eum. Doloremque reprehenderit quaerat expedita reiciendis quae, sunt ducimus vitae vel quia? Odio inventore facilis itaque excepturi alias. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore distinctio cumque aliquid sint tenetur maiores sequi velit illum laboriosam aspernatur.</p>
                        <button class="int_button" type="button">Learn More</button>
                    </fieldset>
                </div>
            </div>
        </div>
        <!-- Shape devider begins, generated using:https://www.shapedivider.app/-->
        <div class="custom-shape-divider-top-1653078005">
            <svg data-name="Layer 1" xmlns="../images/tilt.svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M1200 120L0 16.48 0 0 1200 0 1200 120z" class="shape-fill"></path>
            </svg>
        </div>
        <div class="custom-shape-divider-bottom-1653078696">
            <svg data-name="Layer 1" xmlns="../images/tilt.svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M1200 120L0 16.48 0 0 1200 0 1200 120z" class="shape-fill"></path>
            </svg>
        </div>
        <!-- Shape devider ends -->
    </div>
    <!--Conatiner 2 Ends  -->
    <!-- Conatiner 3 begins -->
    <div class="int_container3 int_container">
        <div class="container-left">
            <div class="container_desc">
                <fieldset>
                    <img class="fe_img" src="../images/fa/svgs/regular/thumbs-up.svg" alt="">
                    <h2>Service Management</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus, cumque vel! Nisi, eum. Doloremque reprehenderit quaerat expedita reiciendis quae, sunt ducimus vitae vel quia? Odio inventore facilis itaque excepturi alias. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore distinctio cumque aliquid sint tenetur maiores sequi velit illum laboriosam aspernatur.</p>
                    <button class="int_button" type="button">Learn More</button>
                </fieldset>
            </div>
        </div>
        <div class="container-right">
            <div class="container_desc">
                <fieldset>
                    <img class="fe_img" src="../images/fa/svgs/regular/square-plus.svg" alt="">
                    <h2>Third-party Integrations</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus, cumque vel! Nisi, eum. Doloremque reprehenderit quaerat expedita reiciendis quae, sunt ducimus vitae vel quia? Odio inventore facilis itaque excepturi alias. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore distinctio cumque aliquid sint tenetur maiores sequi velit illum laboriosam aspernatur.</p>
                    <button class="int_button" type="button">Learn More</button>
                </fieldset>
            </div>            
        </div>
    </div>
    <!-- Container 3 ends -->
    <!-- Container 4 begins-->
    <div class="int_container4 int_container fe_sd">
        <div class="int_subcontainer">
            <div class="container-left">
                <div class="container_desc">
                    <fieldset>
                        <img class="fe_img" src="../images/fa/svgs/regular/pen-to-square.svg" alt="">
                        <h2>Inventory Management</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus, cumque vel! Nisi, eum. Doloremque reprehenderit quaerat expedita reiciendis quae, sunt ducimus vitae vel quia? Odio inventore facilis itaque excepturi alias. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore distinctio cumque aliquid sint tenetur maiores sequi velit illum laboriosam aspernatur.</p>
                        <button class="int_button" type="button">Learn More</button>
                    </fieldset>
                </div>
            </div>
            <div class="container-right">
                <div class="container_desc">
                    <fieldset>
                        <img class="fe_img" src="../images/fa/svgs/regular/chart-bar.svg" alt="">
                        <h2>Real-time Stats</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus, cumque vel! Nisi, eum. Doloremque reprehenderit quaerat expedita reiciendis quae, sunt ducimus vitae vel quia? Odio inventore facilis itaque excepturi alias. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore distinctio cumque aliquid sint tenetur maiores sequi velit illum laboriosam aspernatur.</p>
                        <button class="int_button" type="button">Learn More</button>
                    </fieldset>
                </div>
            </div>
        </div>
        <!-- Shape devider begins, generated using:https://www.shapedivider.app/-->
        <div class="custom-shape-divider-top-1653078005">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M1200 120L0 16.48 0 0 1200 0 1200 120z" class="shape-fill"></path>
            </svg>
        </div>
        <!-- Shape devider ends -->
    </div>
    <!--Conatiner 4 Ends  -->
    <!-- Body section ends -->
    <?php
        include('footer.php'); //linking to footer section
    ?>