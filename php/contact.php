<?php session_start();  
?>
<!DOCTYPE html>
<html>
<head>
	<title>Contact us | CORE Commertial Construction</title>
	<link rel="stylesheet" type="text/css" href="../css/contact_style.css">
    <link rel="stylesheet" href="../css/header_footer.css">

	<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0">

</head>
<body>
	<?php
        include('header.php'); //Linking header section
    ?>
	<div class="container">
		<div class="contact-box">
			<div class="left"></div>
			<div class="right">
				<h2>Contact Us</h2>
				<input type="text" class="field" placeholder="Your Name">
				<input type="text" class="field" placeholder="Your Email">
				
				<input type="text" class="field" placeholder="Phone">
				<select id="country" class="field" name="country">
					<option value="Country">Country</option>
					<option value="australia">Australia</option>
					<option value="canada">Canada</option>
					<option value="usa">USA</option>
					<option value="Sri Lanka">Sri Lanka</option>
				</select>
				<textarea placeholder="Message" class="field"></textarea>
				
				<a href="login.html"><button class="btn">Send</button></a>
			</div>
		</div>
	</div>
	<?php
        include('footer.php'); //linking to footer section
    ?>


<!-- 
    Student name: Dissanayaka R.K.D.
    Student ID: IT21222818 
    Module: IWT (1st Yr: 2nd Sem: Final Assignment: 2022)
 -->