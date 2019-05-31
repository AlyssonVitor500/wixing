<?php 
    include_once 'conexao.php';

    
    $cmd =  "SELECT * FROM fornecedor ORDER BY nomeForn";
    $sql = mysqli_query($conn, $cmd);
    $sql1 = mysqli_query($conn, $cmd);
    $qnt = 0;
    while ($sql->fetch_assoc()) {
        $qnt++;
       
    }
    
    if ($qnt>0) {
        
        while ($dados = $sql1->fetch_assoc()) {
           
           $idF = $dados['idForn'];
           $nomeF = $dados['nomeForn'];
           $cnpj = $dados['cnpj'];
           $nomeF = mb_convert_case($nomeF, MB_CASE_TITLE, 'UTF-8');
           
            echo "
                <tr>
                    <td> $idF </td>
                    <td> $nomeF </td>
                    <td> $cnpj </td>
                    
                    
                    <td><a href='alterFornecedor.php?id=$idF' class='btn'><i id='edit' style='cursor: pointer' title='Editar' class='far fa-edit fa-1x'></i> </a></td>
                    <td><a href='confirmForn.php?id=$idF' class='btn'><i id='del' style='cursor: pointer' title='Apagar' class='far fa-times-circle fa-1x'></i> </a></td>
                </tr>
            "; 
        }


    }else {
        echo "
            <tr  class='text-center'>
                <td colspan='5'> <h5>Nenhum valor foi encontrado! Inisira alguns Fornecedores</h5> 
            </tr>
        ";
    }
    

?>