<?php 
    include_once 'conexao.php';

    
    $cmd =  "SELECT * FROM produtos,fornecedor WHERE idFornFK = idForn ORDER BY nome";
    $sql = mysqli_query($conn, $cmd);
    $sql1 = mysqli_query($conn, $cmd);
    $qnt = 0;
    $nomeForn = null;
    
   
    while ($sql->fetch_assoc()) {
        $qnt++;
       
    }
    
    if ($qnt>0) {
        
        while ($dados = $sql1->fetch_assoc()) {
           
           $idP = $dados['id'];

           $nomeP = $dados['nome'];
           $nomeForn = mb_convert_case($dados['nomeForn'], MB_CASE_TITLE, 'UTF-8');
           $pesoP = $dados['peso'];
           $tipo_p = $dados['tipo_produto'];
           $valor_p = $dados['valor_produto'];
           $descricaoP = $dados['descricao'];
           $quant = $dados['quant'];
            echo "
                <tr>
                    <td> $idP </td>
                    <td> $nomeP </td>
                    <td> $nomeForn </td>
                    <td> $pesoP Kg</td>
                    <td> $tipo_p </td>
                    <td>R$ $valor_p </td>
                    <td> $descricaoP </td>
                    <td> $quant
                </tr>
            "; 
        }


    }else {
        echo "
            <tr  class='text-center'>
                <td colspan='8'> <h5>Nenhum valor foi encontrado! Inisira alguns produtos para o estoque dos mesmos!</h5> 
            </tr>
        ";
    }
    

?>