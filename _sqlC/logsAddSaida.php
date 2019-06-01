<?php
    include_once 'conexao.php';
    session_start();
    if ($_POST['selectDia'] == 1){
        if ($_POST['prodID'] > 0) {
            $idProd = isset($_POST['prodID'])?$_POST['prodID']:"";
            #setando dia e hora atual
            date_default_timezone_set('America/Sao_Paulo');
            $dateDia = date('Y-m-d');
            $dateHora = date('H:i:s');
            
            $qnt = isset($_POST['qnt'])?$_POST['qnt']:"";
    
            $sql1C = mysqli_query($conn, "SELECT * FROM produtos WHERE id = '$idProd'");
            while ($dados = $sql1C->fetch_assoc()){
                $quant = $dados['quant'];
            }
            if ($qnt > $quant) {
                //Verificando para não ficar um estoque negativo
                $_SESSION['NUMENOR'] = true;
                $_SESSION['qtd'] = $quant;
                header("Location: ../saida.php");
            }else {
                $newQuant = $quant - $qnt;
    
                $sql2C = mysqli_query($conn, "UPDATE produtos SET quant = '$newQuant' WHERE id = '$idProd'");
    
                $sql3C = mysqli_query($conn, "INSERT INTO logs(quant_prod, tipo, prodIdFK, dia, hora) VALUES ('$qnt', 2, '$idProd', '$dateDia', '$dateHora')");                if(mysqli_affected_rows($conn)){
                    $_SESSION['CERTO'] = true;
                    header("Location: ../saida.php");
                }
            }
            
    
        }else {
            $_SESSION['FALTA'] = true;
            header("Location: ../saida.php");
    
        }
    }else {
        if ($_POST['prodID'] > 0) {
            $idProd = isset($_POST['prodID'])?$_POST['prodID']:"";
            #se ele escolher setar o dia
            $dateDia = isset($_POST['dia'])?$_POST['dia']:"";
            $dateHora = isset($_POST['hora'])?$_POST['hora']:"";
            $dateHora = $dateHora.":00";
            
            $qnt = isset($_POST['qnt'])?$_POST['qnt']:"";
    
            $sql1C = mysqli_query($conn, "SELECT * FROM produtos WHERE id = '$idProd'");
            while ($dados = $sql1C->fetch_assoc()){
                $quant = $dados['quant'];
            }
            if ($qnt > $quant) {
                //Verificando para não ficar um estoque negativo
                $_SESSION['NUMENOR'] = true;
                $_SESSION['qtd'] = $quant;
                header("Location: ../saida.php");
            }else {
                $newQuant = $quant - $qnt;
    
                $sql2C = mysqli_query($conn, "UPDATE produtos SET quant = '$newQuant' WHERE id = '$idProd'");
    
                $sql3C = mysqli_query($conn, "INSERT INTO logs(quant_prod, tipo, prodIdFK, dia, hora) VALUES ('$qnt', 2, '$idProd', '$dateDia', '$dateHora')");                if(mysqli_affected_rows($conn)){
                    $_SESSION['CERTO'] = true;
                    header("Location: ../saida.php");
                }
            }
            
    
        }else {
            $_SESSION['FALTA'] = true;
            header("Location: ../saida.php");
    
        }
    }

    
?>