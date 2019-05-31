<?php

    include_once 'conexao.php';
    session_start();
    $nome = strtolower(isset($_POST['fornNome'])?$_POST['fornNome']:"");
    $cnpj = isset($_POST['cnpj'])?$_POST['cnpj']:"";

    $sql = "INSERT INTO fornecedor (nomeForn, cnpj) VALUES ('$nome', '$cnpj')";

    if (mysqli_query($conn, $sql)) {
        $_SESSION['ADDS'] = true;
        header("Location: ../addForn.php");
    }else {
        $_SESSION['ADDD'] = true;
        header("Location: ../addForn.php");
    }

?>