<!-- Header Area -->
<div id="header">

<!-- Top Bar Begins-->

<div class="top_bar">
    <a class="top_links" id="head_login_btn" href="dashboard.php"><img src="../images/fa/svgs/regular/circle-user.svg" > Client Area</a>
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
    <a href="index.php">
        <img id="logo" width="200px" src="../images/logo.png" >
    </a>
    <nav id="main_nav">
        <a class="nav_links" id="index" href="index.php">Home</a>
        <a class="nav_links" id="features" href="features.php">Features</a>
        <a class="nav_links" id="testimonials" href="testimonials.php">Testimoials</a>
        <a class="nav_links" id="integrations" href="integrations.php">Integrations</a>
        <a class="nav_links" id="contact" href="contact.php">Contact</a>
        <button id="demo" onclick="location.href='demo.php'">Book a demo</button>
    </nav>
</div>
<script src="../js/main_nav.js"></script>

<!--End of Main Navigation -->

</div>

<!-- End of header area -->
</body>
</html>

<!-- 
    Student name: D.D.K.S. Dias
    Student ID: IT21220760
    Module: IWT (1st Yr: 2nd Sem: Final Assignment: 2022)
 -->