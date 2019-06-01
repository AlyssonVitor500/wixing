<?php
    include_once 'conexao.php';
    session_start();
    if ( ($_POST['fabricante'] != 0) && ($_POST['tipo'] != 0)){
        $nome = isset($_POST['nome'])?$_POST['nome']:"";
        $marca = isset($_POST['fabricante'])?$_POST['fabricante']:"";
        $peso = isset($_POST['peso'])?$_POST['peso']:"";
        $tipo = isset($_POST['tipo'])?$_POST['tipo']:"";
        $valor = isset($_POST['valor'])?$_POST['valor']:"";
        $desc = isset($_POST['desc'])?$_POST['desc']:"";
        
        if ($tipo == 1) {
            $tipo = "Perecível";
        }else {
            $tipo = "Não Perecível";
        }
    
    
        $sql = "INSERT INTO produtos (nome, idFornFK, peso, tipo_produto, valor_produto, descricao) VALUES 
        ('$nome', '$marca', '$peso', '$tipo', '$valor', '$desc')";
        if (mysqli_query($conn, $sql)) {
            $_SESSION['ADDS'] = true;
            header("Location: ../add.php");
        }else {
            
           $_SESSION['ADDD'] = true;
           header("Location: ../add.php");
        }
    
    }else {
        
        $_SESSION['ADDD'] = true;
        header("Location: ../add.php");
    }
    
?>