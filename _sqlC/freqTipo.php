<?php

    include_once 'conexao.php';
    $tipo = isset($_POST['selectSmartTipo'])?$_POST['selectSmartTipo']:"";
    $sql = mysqli_query($conn, "SELECT * FROM logs as l,  produtos as p, fornecedor as f WHERE l.prodIdFK = p.id and p.idFornFK = f.idForn and l.tipo = '$tipo' ORDER BY l.dia, l.hora DESC");
    if(mysqli_num_rows($sql)>0){
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
                <tr  style=' border-radius: 8%;'>
                    
                    <td colspan='5'> Nenhum registro foi encontrado
                    
                </tr>
            ";
    }
   
    
    if (@$tipoLog == 2){
        echo "
                        <tr style=' border-radius: 8%; background-color: #062e5e; color: white; font-weight: bold' class='text-center'>
                            
                            <td colspan='5' class='text-center'> Somente Saidas
                        </tr>
                    ";
    }else {
        echo "
                        <tr style=' border-radius: 8%; background-color: #062e5e; color: white; font-weight: bold' class='text-center'>
                            
                            <td colspan='5' class='text-center'> Somente Chegada
                        </tr>
                    ";
    }



?>