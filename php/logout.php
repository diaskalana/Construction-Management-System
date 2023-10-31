<?php
    session_start();
    setcookie('user','', time() -3600);
    session_destroy();
    header("Location: index.php");
?>


<!-- 
    Student name: D.D.K.S. Dias
    Student ID: IT21220760
    Module: IWT (1st Yr: 2nd Sem: Final Assignment: 2022)
 -->