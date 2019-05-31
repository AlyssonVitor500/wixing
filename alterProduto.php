<?php 
    include_once '_includes/arqCima.php';
    include_once '_sqlC/conexao.php';
    $id = $_GET['id'];
    $sql = $conn->query("SELECT * FROM produtos WHERE id = '$id'");
    
    while ($dados = $sql->fetch_assoc()) {
        $idP = $dados['id'];
        $nomeP = $dados['nome'];
        $marca_p = $dados['marca_produto'];
        $pesoP = $dados['peso'];
        $tipo_p = $dados['tipo_produto'];
        $valor_p = $dados['valor_produto'];
        $descricaoP = $dados['descricao'];
    }

 
?>

    <style>
        label,small {
            font-size: 1.2em;
        }
        input[type="text"],select {
            font-weight: bold;
        }
        body{
            overflow-x: hidden;
 
        }
        #apagar{
            background-color:deepskyblue; 
            width: 90%;
            color: white;
        }
        #enviar {
            background-color:midnightblue;
            color: white;
            width: 90%;
        }
        #mandar {
            
            color: white;
            width: 90%;
            background-color: #427fbc;
        }
        
        @media only screen and (max-width: 600px) {
            input[type="text"]{
                margin-left: 10%;
                width: 80%;
            } 
            select {
                margin-left: 5%;
                
            }
            textarea{
                padding-right: 10%;
                margin-left: 10%;
                
                
            }
            #apagar{
                margin-top: 1%
                
            }
            #enviar{
                margin-top: 1%
            }
            #apagar, #enviar, #mandar {
                margin-left: 8%;
                width: 55vh;
            }

        }
    </style>
   
    <div id="conteudo"  style="height: 100vh;" class="container">
        <form class="form form-group" action="_sqlC/alterP.php?id=<?php echo $id; ?>" method="post"> 
            <div class="container-fluid text-center mt-4">
                <div class="row">
                    <div class="col-md-12"><h1><i class="fas fa-pen"></i> Alterar Produtos </h1></div>
                </div>
                <div class="row mt-3">
                    <?php if ($idP > 0 && $idP < 10) { ?>
                        <div class="col-md-4">
                            <label for="ident"><strong>Identificador</strong></label>
                            <input type="text" style="text-align: center" class="form-control" required  value="000<?php  echo $idP; ?>" name="" disabled id="ident">
                            
                        </div>
                    <?php }else if($idP >= 10 && $idP < 100){ ?>
                        <div class="col-md-4">
                            <label for="ident"><strong>Identificador</strong></label>
                            <input type="text" style="text-align: center" class="form-control" required value="00<?php  echo $idP; ?>" name="" disabled id="ident">
                        
                        </div>

                    <?php }else if($idP >= 100 && $idP < 1000){ ?>
                        <div class="col-md-4">
                            <label for="ident"><strong>Identificador</strong></label>
                            <input type="text" style="text-align: center" class="form-control" required value="0<?php  echo $idP; ?>" name="" disabled id="ident">
                        
                        </div>

                    <?php }else if($idP >= 1000){ ?>
                        <div class="col-md-4">
                            <label for="ident"><strong>Identificador</strong></label>
                            <input type="text" style="text-align: center" class="form-control" required value="<?php  echo $idP; ?>" name="" disabled id="ident">
                        
                        </div>

                    <?php } ?>
                    <div class="col-md-4">
                        <label for="nome"><strong>Nome do Produto</strong></label>
                        <input type="text" class="form-control" name="nome" value="<?php echo $nomeP; ?>" required id="nome">
                        <small><strong>Ex.: Biscoito</strong></small>
                    </div>
                    <div class="col-md-4">
                        <label for="nome"><strong>Marca do Produto</strong></label>
                        <select class="form-control" name="fabricante" id="">
                            <option value="0" selected disabled>Escolha um Fornecedor</option>
                            <?php 
                                $sql = mysqli_query($conn,"SELECT * FROM fornecedor ORDER BY nomeForn");

                                $value = 0;

                                while ($dados = $sql->fetch_assoc()){
                                    $id = $dados['idForn'];
                                    $nome = $dados['nomeForn'];

                                    $nome = mb_convert_case($nome, MB_CASE_TITLE, 'UTF-8');

                                    echo "
                                        <option value='$id'> 
                                            $nome
                                        </option>
                                    ";

                                }
                                
                            ?>
                        </select>
                    </div>
                    
                </div>
            </div>
            <hr>
            <div class="row mt-3 text-center">
                    <div class="col-md-4">
                        <label for="ident"><strong>Peso do Produto (em Quilogramas)</strong></label>
                        <input type="text" class="form-control" value="<?php echo $pesoP; ?>" name="peso" required  id="ident">
                        <small><strong>Ex.: 1kg (Utilize ponto como vírgula)</strong></small>
                        
                    </div>
                    <div class="col-md-4">
                        <label for="tipo"><strong>Tipo do Produto</strong></label>
                        <select style="font-weight: bold" class="form-control" name="tipo" required id="tipo">
                            <option value="0" selected disabled>Escolha o tipo do Produto</option>
                            <option value="1" >Perecível</option>
                            <option value="2">Não Perecível</option>
                        </select>
                      
                    </div>
                        
                        <div class="col-md-4">
                    
                           
                            <label for="value"><strong>Valor do Produto</strong></label>
                            <input type="text" class="form-control" value="<?php echo $valor_p; ?>" name="valor" required id="value">
                            <small><strong>Ex.: 100.00 (Utilize ponto como vírgula)</strong></small>
                      
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-12 text-center">
                            
                                
                            <label for="desc"><strong>Descrição do Produto</strong></label>
                            <input type="text"   style="font-weight: bold; resize: none;" class="form-control" required  value="<?php echo $descricaoP; ?>" name="desc"  id="value"> 
                            
                    
                        </div>
                        
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-4 text-center">
                            <a href="listProd.php" class="btn btn-lg" id="mandar"> Retornar <i class="fas fa-undo"></i> </a>
                        </div>
                        <div class="col-md-4 text-center">
                            <button type="reset" class="btn btn-lg" id="apagar">Retornar Valores Originais <i class="fas fa-backspace"></i> </button>
                        </div>
                        <div class="col-md-4 text-center">
                         <button type="submit" id="enviar" class="btn  btn-lg" >Alterar <i class="far fa-paper-plane"></i> </button>

                        </div>
                        
                    </div>

                </div>
                
            </div>
            
            
        </form>
    </div>
<?php 
    include_once '_includes/arqBaixo.php';
?>