<?php
    include_once 'conexao.php';
    session_start();
    $sql = mysqli_query($conn, "DELETE FROM fornecedor,logs,produtos");

    if(mysqli_affected_rows($sql)) {
        $_SESSION['DellAll'] = true;
        header("Location: config.php");
    }else {
        $_SESSION['NotDellAll'] = true;
        header("Location: config.php");
    }

?>