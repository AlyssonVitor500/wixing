<?php

    include_once 'conexao.php';

    $sql = mysqli_query($conn, "SELECT * FROM logs as l,  produtos as p, fornecedor as f WHERE l.prodIdFK = p.id and p.idFornFK = f.idForn ORDER BY l.idLog DESC");
    while ($dados = $sql->fetch_assoc()) {
        $idLog = $dados['idLog'];
        $tipoLog = $dados['tipo'];
        $quant = $dados['quant_prod'];
        $prod_nome = $dados['nome'];
        $nomeForn = $dados['nomeForn'];
        $data = $dados['dia'];

        if ($tipoLog == 1) {
            echo "
                <tr style='background-color: rgba(11,156,49,.4); color: white; border-radius: 8%;'>
                    
                    <td> $prod_nome
                    <td> $nomeForn
                    <td> Chegada
                    <td> $quant
                    <td> $data
                </tr>
            ";
        }else {
            echo "
            <tr style='background-color: rgba(255,0,0,.4); color: white; border-radius: 8%;'>
                
                <td> $prod_nome
                <td> $nomeForn
                <td> Saida
                <td> $quant
                <td> $data
            </tr>
        ";
        }
    }



?>