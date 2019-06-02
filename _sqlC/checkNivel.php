<?php
    session_start();
    if($_SESSION['nivel'] != 1) {
        $_SESSION['ERRORACESSAR'] = true;
        header("Location: home.php");
    } 

 ?>   