<?php
    include_once 'conexao.php';
    session_start();
    $id = $_SESSION['idUser'];
    if (isset($_FILES['arqv'])){
        $extensao = strtolower(substr($_FILES['arqv'] ['name'], -4));
        $novo_nome = md5(time()).$extensao;
        $diretorio = "../_usersImg/";
        move_uploaded_file($_FILES['arqv']['tmp_name'], $diretorio.$novo_nome);

        $sql = "UPDATE users SET perfilFoto = '$novo_nome' WHERE id = '$id'";
        if(mysqli_query($conn, $sql)){
            $_SESSION['successAlterar'] = true;
            header("Location: ../config.php");
        }else {
           $_SESSION['errorAlterar'] = true;
           header("Location: ../config.php");
           
        }
    }else {
        $_SESSION['errorAlterar'] = true;
        header("Location: ../config.php");
    }

?>