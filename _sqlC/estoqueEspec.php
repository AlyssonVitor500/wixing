<?php   
    include_once 'conexao.php';
    
    $idFabri = isset($_GET['fabricante'])?$_GET['fabricante']:"";
    
    if ($idFabri != 0) {
            $cmd =  "SELECT * FROM produtos as p,fornecedor as f WHERE  p.idFornFK = f.idForn and p.idFornFK = '$idFabri' ORDER BY nome";
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
                        
                        if ($quant > 100) {
                            echo "
                                <tr>
                                    <td> $idP </td>
                                    <td> $nomeP </td>
                                    <td> $nomeForn </td>
                                    <td> $pesoP Kg/L</td>
                                    <td> $tipo_p </td>
                                    <td>R$ $valor_p </td>
                                    <td> $descricaoP </td>
                                    <td> $quant
                                    <td><div class='bg-success' style='padding: 10px; width:10px; height: 10px; border-radius: 100%'> </div>
                                </tr>
                            "; 
                        }else if ($quant > 0 && $quant <=100) {
                            echo "
                                <tr>
                                    <td> $idP </td>
                                    <td> $nomeP </td>
                                    <td> $nomeForn </td>
                                    <td> $pesoP Kg/L</td>
                                    <td> $tipo_p </td>
                                    <td>R$ $valor_p </td>
                                    <td> $descricaoP </td>
                                    <td> $quant
                                    <td><div class='bg-warning' style='padding: 10px; width:10px; height: 10px; border-radius: 100%'> </div>
                                </tr>
                            "; 
                    } else {
                        
                        echo "
                            <tr>
                                <td> $idP </td>
                                <td> $nomeP </td>
                                <td> $nomeForn </td>
                                <td> $pesoP Kg/L</td>
                                <td> $tipo_p </td>
                                <td>R$ $valor_p </td>
                                <td> $descricaoP </td>
                                <td> $quant
                                <td><div class='bg-danger' style='padding: 10px; width:10px; height: 10px; border-radius: 100%'> </div>
                            </tr>
                        "; 
                    }
                }   
            } else {

    
                echo "
                            <tr  class='text-center'>
                                <td colspan='9'> <h5>Nenhum valor foi encontrado!</h5> 
                            </tr>
                        ";
            }  
        
    }else{
        echo "
                            <tr  class='text-center'>
                                <td colspan='9'> <h5>Nenhum valor foi encontrado!</h5> 
                            </tr>
                        ";
            }  
    
?>