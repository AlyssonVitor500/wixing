<?php 
    include_once '_includes/arqCima.php';
    include_once '_sqlC/conexao.php';
    
    $sql = $conn->query("SELECT * FROM logs");
    $lastID = 0;
    $id = 0;
    while ($dados = $sql->fetch_assoc()) {
        $id = $dados['idLog'];
        if ($lastID < $id) {
            $lastID = $id;
        }
    }

    $lastID++;
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
            width: 100%;
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
    <?php if (@$_SESSION['CERTO']){ ?>
        <div class="alert alert-success fixed-top text-center alert-dismissible fade show" role="alert">
            <strong>Saida registrada com Sucesso!</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    <?php unset($_SESSION['CERTO']); } ?>
    <?php if (@$_SESSION['FALTA']){ ?>
        <div class="alert alert-danger fixed-top text-center alert-dismissible fade show" role="alert">
            <strong>Adicione um produto e tente novamente!</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    <?php unset($_SESSION['FALTA']); } ?>
    <?php if (@$_SESSION['NUMENOR']){ ?>
        <div class="alert alert-danger fixed-top text-center alert-dismissible fade show" role="alert">
            <strong>O número que você informou de saida é maior que o número no seu estoque! Verifique ou Peça mais produtos e tente novamente!<br>O estoque atual desse produto é: <?php echo $_SESSION['qtd']; ?> Produtos</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    <?php unset($_SESSION['NUMENOR']); unset($_SESSION['qtd']); } ?>
    <div id="conteudo"  style="height: 100vh;" class="container">
        <form class="form form-group" action="_sqlC/logsAddSaida.php" method="post"> 
            <div class="container-fluid text-center mt-4">
                <div class="row">
                    <div class="col-md-12"><h1><i class="fas fa-people-carry"></i> Registrar Saida de Produto </div>
                </div>
                <div class="row mt-3">
                    <?php if ($lastID > 0 && $lastID < 10) { ?>
                        <div class="col-md-4">
                            <label for="ident"><strong>Identificador</strong></label>
                            <input type="text" style="text-align: center" class="form-control" required value="000<?php  echo $lastID; ?>" name="" disabled id="ident">
                            
                        </div>
                    <?php }else if($lastID >= 10 && $lastID < 100){ ?>
                        <div class="col-md-4">
                            <label for="ident"><strong>Identificador</strong></label>
                            <input type="text" style="text-align: center" class="form-control" required value="00<?php  echo $lastID; ?>" name="" disabled id="ident">
                        
                        </div>

                    <?php }else if($lastID >= 100 && $lastID < 1000){ ?>
                        <div class="col-md-4">
                            <label for="ident"><strong>Identificador</strong></label>
                            <input type="text" style="text-align: center" class="form-control" required value="0<?php  echo $lastID; ?>" name="" disabled id="ident">
                        
                        </div>

                    <?php }else if($lastID >= 1000){ ?>
                        <div class="col-md-4">
                            <label for="ident"><strong>Identificador</strong></label>
                            <input type="text" style="text-align: center" class="form-control" required value="<?php  echo $lastID; ?>" name="" disabled id="ident">
                        
                        </div>

                    <?php } ?>
                    <div class="col-md-4">
                        <label for="nome"><strong>Nome do Produto</strong></label>
                        <select style="font-weight: bold" class="form-control" name="prodID" id="">
                            <option value="0" selected disabled>Selecione o Produto</option>
                            <?php 
                                $sql = mysqli_query($conn,"SELECT * FROM produtos ORDER BY id");

                                $value = 0;

                                while ($dados = $sql->fetch_assoc()){
                                    $id = $dados['id'];
                                    $nome = $dados['nome'];

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
                    <div class="col-md-4">
                        <label for="nome"><strong>Quantidade de Produtos que Sairam</strong></label>
                        <input type="text" class="form-control" name="qnt" required id="cnpj">
                        
                    </div>
                    
                </div>
                </div>
            
                    <div class="row mt-5">
                        
                        <div class="col-md-6 text-center">
                            <button type="reset" class="btn btn-lg" id="apagar">Apagar Valores <i class="fas fa-backspace"></i> </button>
                        </div>
                        <div class="col-md-6 text-center">
                            <button type="submit" id="enviar" class="btn  btn-lg" >Registrar Saida<i class="far fa-paper-plane"></i> </button>

                        </div>
                        
                    </div>

                </div>
                
            </div>
            
            
        </form>
    </div>
<?php 
    include_once '_includes/arqBaixo.php';
?>

