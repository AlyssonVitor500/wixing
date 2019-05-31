<?php
    include_once 'conexao.php';
    session_start();
    $id = $_SESSION['IDAPAGAR'];

    $sql = "DELETE FROM fornecedor WHERE idForn = '$id'";

    if (mysqli_query($conn, $sql)) {
        $_SESSION['DELOK'] = true;
        unset($_SESSION['IDAPAGAR']);
        header("Location: ../listForn.php");
    }else {
        $_SESSION['DELOKF'] = true;
        unset($_SESSION['IDAPAGAR']);
        header("Location: ../listForn.php");
    }


?>