<?php
    include_once 'conexao.php';
    session_start();
    
        $nome = isset($_POST['fornNome'])?$_POST['fornNome']:"";
        $cnpj = isset($_POST['cnpj'])?$_POST['cnpj']:"";
        
        $id = $_GET['id'];
        
      


        $sql = "UPDATE fornecedor SET nomeForn = '$nome', cnpj = '$cnpj' WHERE idForn = '$id'";
        if (mysqli_query($conn, $sql)) {
            $_SESSION['Alter'] = true;
            header("Location: ../listForn.php");
        }else {
            
            $_SESSION['AlterE'] = true;
             header("Location: ../listForn.php");
        }
   
    

?>