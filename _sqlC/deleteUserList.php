<?php
    include_once 'conexao.php';
    session_start();
    $id = $_SESSION['IDAPAGAR'];

    $sql = mysqli_query($conn,"DELETE FROM users WHERE id = '$id'");

    if ( mysqli_affected_rows($conn) > 0) {
        unset($_SESSION['IDAPAGAR']);
        $_SESSION['certoDELL'] = true;
        header("Location: ../listUsers.php");
        
       
    }else{
        unset($_SESSION['IDAPAGAR']);
         $_SESSION['erroDELL'] = true;
         header("Location: ../listUsers.php");
    }
       
        


?>