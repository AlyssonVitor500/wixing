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
            #adicionando o valor ao estoque
            #pega o valor e adiciona ao existente
            while ($dados = $sql1C->fetch_assoc()){
                $quant = $dados['quant'];
            }
            
            $newQuant = $qnt + $quant;
    
            $sql2C = mysqli_query($conn, "UPDATE produtos SET quant = '$newQuant' WHERE id = '$idProd'");
    
            $sql3C = mysqli_query($conn, "INSERT INTO logs(quant_prod, tipo, prodIdFK, dia, hora) VALUES ('$qnt', 1, '$idProd', '$dateDia', '$dateHora')");
            if(mysqli_affected_rows($conn)){
                $_SESSION['CERTO'] = true;
                header("Location: ../chegada.php");
            }
    
        }else {
            $_SESSION['FALTA'] = true;
            header("Location: ../chegada.php");
        }
    }else {
        #se ele setar o dia e a hora
        if ($_POST['prodID'] > 0) {
            $idProd = isset($_POST['prodID'])?$_POST['prodID']:"";
            
           
            $dateDia = isset($_POST['dia'])?$_POST['dia']:"";
            $dateHora = isset($_POST['hora'])?$_POST['hora']:"";
            $dateHora = $dateHora.":00";
            $qnt = isset($_POST['qnt'])?$_POST['qnt']:"";
    
            $sql1C = mysqli_query($conn, "SELECT * FROM produtos WHERE id = '$idProd'");
            #adicionando o valor ao estoque
            #pega o valor e adiciona ao existente
            while ($dados = $sql1C->fetch_assoc()){
                $quant = $dados['quant'];
            }
            
            $newQuant = $qnt + $quant;
    
            $sql2C = mysqli_query($conn, "UPDATE produtos SET quant = '$newQuant' WHERE id = '$idProd'");
    
            $sql3C = mysqli_query($conn, "INSERT INTO logs(quant_prod, tipo, prodIdFK, dia, hora) VALUES ('$qnt', 1, '$idProd', '$dateDia', '$dateHora')");
            if(mysqli_affected_rows($conn)){
                $_SESSION['CERTO'] = true;
                header("Location: ../chegada.php");
            }
    
        }else {
            $_SESSION['FALTA'] = true;
            header("Location: ../chegada.php");
        }
    }
    
?>