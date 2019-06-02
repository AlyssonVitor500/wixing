<?php

    include_once 'conexao.php';
    session_start();
    $tipo = isset($_POST['tipoUser'])?$_POST['tipoUser']:"";
    $nome = strtolower(isset($_POST['nomeUser'])?$_POST['nomeUser']:"");
    $senha = md5(isset($_POST['senhaUser'])?$_POST['senhaUser']:"");

    $sql =  "INSERT INTO users (user, senha, nivel) VALUES ('$nome', '$senha', '$tipo')";
    if(mysqli_query($conn,$sql)){
        $_SESSION['ContaSUCCESS'] = true;
        header("Location: ../config.php");
    }else {
        
         $_SESSION['ContaDENY'] = true;
         header("Location: ../config.php");
    }


?>