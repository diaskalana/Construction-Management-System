<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "cms";
    // Create connection
    $con = new mysqli($servername, $username, $password, $database);
    // Check connection
    if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
    }
?>


<!-- 
    Student name: D.D.K.S. Dias
    Student ID: IT21220760
    Module: IWT (1st Yr: 2nd Sem: Final Assignment: 2022)
 -->