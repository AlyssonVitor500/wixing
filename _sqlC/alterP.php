<?php
    include_once 'conexao.php';
    session_start();
    if($_POST['fabricante'] != 0 && $_POST['tipo'] != 0) {
        $nome = isset($_POST['nome'])?$_POST['nome']:"";
        $fabricanteID = isset($_POST['fabricante'])?$_POST['fabricante']:"";
        $peso = isset($_POST['peso'])?$_POST['peso']:"";
        $tipo = isset($_POST['tipo'])?$_POST['tipo']:"";
        $valor = isset($_POST['valor'])?$_POST['valor']:"";
        $desc = isset($_POST['desc'])?$_POST['desc']:"";
        $id = $_GET['id'];
        
        if ($tipo == 1) {
            $tipo = "Perecível";
        }else {
            $tipo = "Não Perecível";
        }


        $sql = "UPDATE produtos SET nome = '$nome', peso = '$peso', tipo_produto = '$tipo', valor_produto = '$valor', descricao = '$desc', idFornFK = '$fabricanteID' WHERE id = '$id'";
        if (mysqli_query($conn, $sql)) {
            $_SESSION['Alter'] = true;
            header("Location: ../listProd.php");
        }else {
        
            $_SESSION['AlterE'] = true;
             header("Location: ../listProd.php");
        }
    }else {
        $_SESSION['AlterE'] = true;
        header("Location: ../listProd.php");
    }
    

?>