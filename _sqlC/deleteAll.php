<?php
    include_once 'conexao.php';
    session_start();
    
    
    $opc = isset($_POST['opc'])?$_POST['opc']:"";
    if ($opc == 1){
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
    }else if ($opc == 2){
       

           
                $sql3 =  "DELETE FROM fornecedor";
                if(mysqli_query($conn, $sql3)) {
                    
                    $_SESSION['DellAll'] = true;
                    header("Location: ../config.php");
                }else {
                     $_SESSION['NotDellAll'] = true;
                    header("Location: ../config.php");
            
                }
    }else if ($opc == 3){
        $sql3 =  "DELETE FROM produtos";
                if(mysqli_query($conn, $sql3)) {
                    
                    $_SESSION['DellAll'] = true;
                    header("Location: ../config.php");
                }else {
                     $_SESSION['NotDellAll'] = true;
                    header("Location: ../config.php");
            
                }
    }else if($opc == 4){
                $sql3 =  "DELETE FROM logs";
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
    
    
    

?>