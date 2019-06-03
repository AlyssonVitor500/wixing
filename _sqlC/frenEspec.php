<?php

    include_once 'conexao.php';
    $de = isset($_POST['de'])?$_POST['de']:"";
    $ate = isset($_POST['ate'])?$_POST['ate']:"";
    $select = isset($_POST['selectSmart'])?$_POST['selectSmart']:"";
    #Conversão dia Inicial
    $diaI = substr($de,-2);
    $mesI = substr($de,5 , +2);
    $anoI = substr($de,0,+4);
    #Conversão dia Final
    $diaF = substr($ate,-2);
    $mesF = substr($ate ,5 , +2);
    $anoF = substr($ate ,0,+4);
    if ($select == 1) {
                
                $sql = mysqli_query($conn, "SELECT * FROM logs as l,  produtos as p, fornecedor as f WHERE l.prodIdFK = p.id and p.idFornFK = f.idForn and l.dia >= '$de' and l.dia <= '$ate' ORDER BY l.dia, l.hora DESC");
                if(mysqli_num_rows($sql) > 0) {
                    while ($dados = $sql->fetch_assoc()) {
                        $idLog = $dados['idLog'];
                        $tipoLog = $dados['tipo'];
                        $quant = $dados['quant_prod'];
                        $hora = $dados['hora'];
                        $prod_nome = mb_convert_case($dados['nome'], MB_CASE_TITLE, 'UTF-8');
                        $nomeForn = mb_convert_case($dados['nomeForn'], MB_CASE_TITLE, 'UTF-8');
                        $data = $dados['dia'];
                        $dia = substr($data,-2);
                        $mes = substr($data,5 , +2);
                        $ano = substr($data,0,+4);
                        
                        if ($tipoLog == 1) {
                            echo "
                                <tr class='tabela-chegou'  style=' border-radius: 8%;'>
                                    
                                    <td> $prod_nome
                                    <td> $nomeForn
                                    <td> Chegada
                                    <td> $quant
                                    <td> $dia/$mes/$ano às $hora
                                </tr>
                            ";
                        }else {
                            echo "
                                <tr class='tabela-saiu'  style=' border-radius: 8%;'>
                                    
                                    <td> $prod_nome
                                    <td> $nomeForn
                                    <td> Saida
                                    <td> $quant
                                    <td> $dia/$mes/$ano às $hora
                                </tr>
                            ";
                        }
                    }    
                }else {
                        echo "
                        <tr style=' border-radius: 8%;'>
                            
                            <td colspan='5' class='text-center'> Nenhum registro foi encontrado 
                        </tr>
                    ";
                }   
               
            

    }else if ($select == 2) {
              
                $sql = mysqli_query($conn, "SELECT * FROM logs as l,  produtos as p, fornecedor as f WHERE l.prodIdFK = p.id and p.idFornFK = f.idForn and l.dia >= '$de' and l.dia <= '$ate' and l.tipo = 2 ORDER BY l.dia DESC");
                if (mysqli_num_rows($sql)> 0){
                    while ($dados = $sql->fetch_assoc()) {
                        $idLog = $dados['idLog'];
                        $tipoLog = $dados['tipo'];
                        $quant = $dados['quant_prod'];
                        $hora = $dados['hora'];
                        $prod_nome = mb_convert_case($dados['nome'], MB_CASE_TITLE, 'UTF-8');
                        $nomeForn = mb_convert_case($dados['nomeForn'], MB_CASE_TITLE, 'UTF-8');
                        $data = $dados['dia'];
                        $dia = substr($data,-2);
                        $mes = substr($data,5 , +2);
                        $ano = substr($data,0,+4);
                        
                          
                          
                        
                            echo "
                            <tr class='tabela-saiu'  style=' border-radius: 8%;'>
                                
                                <td> $prod_nome
                                <td> $nomeForn
                                <td> Saida
                                <td> $quant
                                <td> $dia/$mes/$ano às $hora
                            </tr>
                        ";
                        
                    }
                    
                }else {
                    echo "
                        <tr style=' border-radius: 8%;'>
                            
                            <td colspan='5' class='text-center'> Nenhum registro foi encontrado 
                        </tr>
                    ";
                }
                
    }else {
              
            $sql = mysqli_query($conn, "SELECT * FROM logs as l,  produtos as p, fornecedor as f WHERE l.prodIdFK = p.id and p.idFornFK = f.idForn and l.dia >= '$de' and l.dia <= '$ate' and l.tipo = 1 ORDER BY l.dia DESC");
            if (mysqli_num_rows($sql) > 0){
                while ($dados = $sql->fetch_assoc()) {
                    $idLog = $dados['idLog'];
                    $tipoLog = $dados['tipo'];
                    $quant = $dados['quant_prod'];
                    $hora = $dados['hora'];
                    $prod_nome = mb_convert_case($dados['nome'], MB_CASE_TITLE, 'UTF-8');
                    $nomeForn = mb_convert_case($dados['nomeForn'], MB_CASE_TITLE, 'UTF-8');
                    $data = $dados['dia'];
                    $dia = substr($data,-2);
                    $mes = substr($data,5 , +2);
                    $ano = substr($data,0,+4);
                    
                    echo "
                    <tr class='tabela-chegou'  style=' border-radius: 8%;'>
                        
                        <td> $prod_nome
                        <td> $nomeForn
                        <td> Chegada
                        <td> $quant
                        <td> $dia/$mes/$ano às $hora
                    </tr>
                    ";
                    
                    
                     
                    
                }
            }else {
                echo "
                        <tr style=' border-radius: 8%;'>
                            
                            <td colspan='5' class='text-center'> Nenhum registro foi encontrado 
                        </tr>
                    ";
            }
           
    }
    echo "
                    <tr style=' border-radius: 8%; background-color: #062e5e; color: white; font-weight: bold' class='text-center'>
                        
                        <td colspan='5'> Dados puxados do dia $diaI/$mesI/$anoI até $diaF/$mesF/$anoF
                        
                    </tr>
                ";
    



?>