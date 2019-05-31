<?php
    include_once 'conexao.php';
    session_start();
    $id = $_SESSION['IDAPAGAR'];

    $sql = "DELETE FROM produtos WHERE id = '$id'";

    if (mysqli_query($conn, $sql)) {
        $_SESSION['DELOK'] = true;
        unset($_SESSION['IDAPAGAR']);
        header("Location: ../listProd.php");
    }else {
        $_SESSION['!DELOK'] = true;
        unset($_SESSION['IDAPAGAR']);
        header("Location: ../listProd.php");
    }


?>