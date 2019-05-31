<?php 
    include_once '_includes/arqCima.php';
    include_once '_sqlC/conexao.php';
    
    $sql = $conn->query("SELECT * FROM fornecedor");
    $lastID = 0;

    while ($dados = $sql->fetch_assoc()) {
        $id = $dados ['idForn'];
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
    <?php if (@$_SESSION['ADDS']){ ?>
        <div class="alert alert-success fixed-top text-center alert-dismissible fade show" role="alert">
            <strong>Fornecedor cadastrado com Sucesso!</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    <?php unset($_SESSION['ADDS']); } ?>
    <?php if (@$_SESSION['ADDD']){ ?>
        <div class="alert alert-danger fixed-top text-center alert-dismissible fade show" role="alert">
            <strong>Fornecedor não cadastrado! Verifique se o nome ou cnpj do fornecedor já estão cadastradods e tente novamente</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    <?php unset($_SESSION['ADDD']); } ?>
    <div id="conteudo"  style="height: 100vh;" class="container">
        <form class="form form-group" action="_sqlC/addForn.php" method="post"> 
            <div class="container-fluid text-center mt-4">
                <div class="row">
                    <div class="col-md-12"><h1><i class="far fa-address-card"></i> Cadastrar Fornecedor </div>
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
                        <label for="nome"><strong>Nome do Fornecedor</strong></label>
                        <input type="text" class="form-control" name="fornNome" required id="nome">
                        
                    </div>
                    <div class="col-md-4">
                        <label for="nome"><strong>CNPJ do Fornecedor</strong></label>
                        <input type="text" class="form-control" name="cnpj" required id="cnpj">
                        
                    </div>
                    
                </div>
                </div>
            
                    <div class="row mt-5">
                        <div class="col-md-4 text-center">
                            <a href="listForn.php" class="btn btn-lg" id="mandar"> Listar Fornecedores Cadastrados <i class="fas fa-list"></i> </a>
                        </div>
                        <div class="col-md-4 text-center">
                            <button type="reset" class="btn btn-lg" id="apagar">Apagar Valores <i class="fas fa-backspace"></i> </button>
                        </div>
                        <div class="col-md-4 text-center">
                        <button type="submit" id="enviar" class="btn  btn-lg" >Enviar <i class="far fa-paper-plane"></i> </button>

                        </div>
                        
                    </div>

                </div>
                
            </div>
            
            
        </form>
    </div>
<?php 
    include_once '_includes/arqBaixo.php';
?>
<script src="_arqvsImport/jquery.mask.js"></script>
<script>
    $(document).ready(function(){
        $("#cnpj").mask('000.000.000/0000-00');
    });
</script>