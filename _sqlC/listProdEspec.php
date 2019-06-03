<?php 
    include_once 'conexao.php';

    $idFabri = isset($_GET['fabricante'])?$_GET['fabricante']:"";
    $cmd =  "SELECT * FROM produtos,fornecedor WHERE idFornFK = idForn and idFornFk = '$idFabri' ORDER BY nome";
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
           
            echo "
                <tr>
                    <td> $idP </td>
                    <td> $nomeP </td>
                    <td> $nomeForn </td>
                    <td> $pesoP Kg/L</td>
                    <td> $tipo_p </td>
                    <td>R$ $valor_p </td>
                    <td> $descricaoP </td>
                    <td><a href='alterProduto.php?id=$idP' class='btn'><i id='edit' style='cursor: pointer' title='Editar' class='far fa-edit fa-1x'></i> </a></td>
                    <td><a href='confirm.php?id=$idP' class='btn'><i id='del' style='cursor: pointer' title='Apagar' class='far fa-times-circle fa-1x'></i> </a></td>
                </tr>
            "; 
        }


    }else {
        echo "
            <tr  class='text-center'>
                <td colspan='9'> <h5>Nenhum valor foi encontrado! Inisira alguns produtos</h5> 
            </tr>
        ";
    }
    

?>