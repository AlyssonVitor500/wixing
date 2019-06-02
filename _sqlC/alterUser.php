<?php
    include_once 'conexao.php';
    session_start();

    $select = isset($_POST['select'])?$_POST['select']:"";
    $id = $_SESSION['idUser'];
    if($select == 0) {
        $novoNome = strtolower(isset($_POST['nome'])?$_POST['nome']:"");
        $novaSenha = md5(isset($_POST['senha'])?$_POST['senha']:"");

        $sqlC = mysqli_query($conn, "UPDATE users set user = '$novoNome', senha = '$novaSenha' WHERE id = '$id'");
        if(mysqli_affected_rows($conn) > 0) {
            $_SESSION['successAlterar'] = true;
            $_SESSION['user'] = $novoNome;
            header("Location: ../config.php");
        }else {
            $_SESSION['errorAlterar'] = true;
            header("Location: ../config.php");
        }
    }else if($select == 1){
        $novoNome = strtolower(isset($_POST['nome'])?$_POST['nome']:"");
        

        $sqlC = mysqli_query($conn, "UPDATE users set user = '$novoNome' WHERE id = '$id'");
        if(mysqli_affected_rows($conn) > 0) {
            $_SESSION['successAlterar'] = true;
            $_SESSION['user'] = $novoNome;
            header("Location: ../config.php");
        }else {
            $_SESSION['errorAlterar'] = true;
            header("Location: ../config.php");
        }
    }else{
        
        $novaSenha = md5(isset($_POST['senha'])?$_POST['senha']:"");

        $sqlC = mysqli_query($conn, "UPDATE users set senha = '$novaSenha' WHERE id = '$id'");
        if(mysqli_affected_rows($conn) > 0) {
            $_SESSION['successAlterar'] = true;
            
            header("Location: ../config.php");
        }else {
            $_SESSION['errorAlterar'] = true;
            header("Location: ../config.php");
        }
    }

?>