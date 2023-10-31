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
                                <button onclick="location.href='demo.php'" id="demo">Book a demo</button>    
                            </div>
                        </div>
                    </fieldset>
                    <!-- Footer 2nd Section Ends -->
                </td>
                <td>
                    <div id="fsec3">
                        <!-- Footer 3rd Section Begins -->
                        <h4>Quick links <br></h4>
                        
                        <a class="footer_links" href="index.php">Home</a>
                        <a class="footer_links" href="features.php">Features</a>
                        <a class="footer_links" href="testimonials.php">Testimoials</a>
                        <a class="footer_links" href="integrations.php">Integrations</a>
                        <a class="footer_links" href="contact.php">Contact</a>
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
            include('newsletter.php'); //Linking newsletter mechanisms
    ?>
    <!-- newsletter signups ends -->

</body>
</html>

<!-- 
    Student name: D.D.K.S. Dias
    Student ID: IT21220760
    Module: IWT (1st Yr: 2nd Sem: Final Assignment: 2022)
 -->