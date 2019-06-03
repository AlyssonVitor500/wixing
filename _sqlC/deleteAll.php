<?php
    include_once 'conexao.php';
    session_start();
    
    $sql1 =  "DELETE FROM logs";

    if(mysqli_query($conn, $sql1)) {
        $sql2 =  "DELETE FROM produtos";
        if(mysqli_query($conn, $sql2)) {
            $sql3 =  "DELETE FROM fornecedor";
            if(mysqli_query($conn, $sql3)) {
                
                $_SESSION['DellAll'] = true;
                header("Location: ../config.php");
            }else {
                 $_SESSION['NotDellAll'] = true;
                header("Location: ../config.php");
            }
        }else {
            $_SESSION['NotDellAll'] = true;
            header("Location: ../config.php");
        }
        
    }else {
       
         $_SESSION['NotDellAll'] = true;
         header("Location: ../config.php");
    }

?>