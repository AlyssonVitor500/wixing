<?php
    include_once 'conexao.php';
    session_start();
    $tipo = $_GET['nivelP'];
     $id = $_GET['id'];


    if ($tipo == 1) {
        $sql =  "UPDATE users SET nivel = 2 WHERE id = '$id'";
        if(mysqli_query($conn, $sql)){
            $_SESSION['trocaNivelS'] = true;
            header("Location: ../listUsers.php");
        }else {
            $_SESSION['trocaNivelD'] = true;
            header("Location: ../listUsers.php");
        }

        
    }else {
        $sql = mysqli_query($conn, "UPDATE users SET nivel = 1 WHERE id = '$id'");
        if(mysqli_query($conn, $sql)){
            $_SESSION['trocaNivelD'] = true;
            header("Location: ../listUsers.php");
        }else {
            $_SESSION['trocaNivelS'] = true;
            
            header("Location: ../listUsers.php");
        }
    }

?>