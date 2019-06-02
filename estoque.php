<?php 
    include_once '_includes/arqCima.php';
?>
    <style> 
        #del, #edit {
            transition: .1s;
            -webkit-transform: scale(1.3);
        }
        #del:hover {
            color: #870e3c;
            -webkit-transform: scale(1.4);
        }
        #edit:hover {
            color: #0fbdfc;
            -webkit-transform: scale(1.4);
        }
        button#pesquisar {
            background-color: deepskyblue;
            color:white;
        }
        button#fechar {
            background-color: #427fbc;
            color: white;
        }
    </style>
    <!-- ALERTs -->

    <?php if (@$_SESSION['DELOK']){ ?>
        <div class="alert alert-success fixed-top text-center alert-dismissible fade show" role="alert">
            <strong>Produto removido com Sucesso!</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    <?php unset($_SESSION['DELOK']); } ?>
    
    <?php if (@$_SESSION['!DELOK']){ ?>
        <div class="alert alert-danger fixed-top text-center alert-dismissible fade show" role="alert">
            <strong>Não foi possível remover o produto, tente novamente!</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    <?php unset($_SESSION['!DELOK']); } ?>
        <!-- ALERTAS DE ALTERAÇÃO -->
    <?php if (@$_SESSION['Alter']){ ?>
        <div class="alert alert-success fixed-top text-center alert-dismissible fade show" role="alert">
            <strong>Produto alterado com Sucesso!</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    <?php unset($_SESSION['Alter']); } ?>

    <?php if (@$_SESSION['AlterE']){ ?>
        <div class="alert alert-danger fixed-top text-center alert-dismissible fade show" role="alert">
            <strong>Não foi possível alterar o produto, tente novamente!</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    <?php unset($_SESSION['AlterE']); } ?>

     <!-- Fim - ALERTs -->


    <div id="conteudo"  style="height: 100vh; padding-bottom: 5vh;" class="container">
        <div class="row">
            <div class="col-md-12 text-center mt-2">
                <h1><strong><i class="fas fa-box-open"></i> Estoque</strong> <button data-toggle="modal" data-target="#FornSearchAll" data- class="btn ml-5" style="background-color: #480720; color: white"><strong>Pesquisar por Fornecedor</strong></button></h1>
            </div>
        </div>
        
        <div class="row">
            <div class="col-md-12">
                <table style="cursor: default" class="table  table-hover ">
                    <thead class="text-center" style="background-color:#062e5e; color: white">
                        <th>ID</th>
                        <th>Nome do Produto</th>
                        <th>Fabricante do Produto</th>
                        <th>Peso do Produto</th>
                        <th>Tipo do Produto</th>
                        <th>Valor do Produto</th>
                        <th>Descrição</th>
                        <th>Quantidade no estoque</th>
                        
                    </thead>
                    <tbody style="font-weight: bold" class="text-center">
                        <?php

                           
                                include_once '_sqlC/listarEstoque.php';
                          
                            
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="modal fade" id="FornSearchAll" tabindex="-1" role="dialog" aria-labelledby="FornSearch" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="FornSearch"><strong><i class="fas fa-search"></i> Pesquisar por Fornecedor</strong></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body text-center">
                <div class="row">
                    <div class="col-md-12">
                        <form action="estoqueEspec.php" method="get">
                            <label for="fabr">Escolha o Fornecedor</label>
                            <select style="font-weight: bold;" class="custom-select" name="fabricante" id="fabr">
                                <option value="0" selected disabled>Escolher</option>
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
            <div class="modal-footer">
                
                <button type="button" class="btn" id="fechar" data-dismiss="modal">Fechar <i class="far fa-times-circle"></i></button>
                <button type="submit" class="btn " id="pesquisar">Pesquisar <i class="fas fa-paper-plane"></i></button>
            </div>
            </div>
        </div>
        </form>
    </div>
<?php 
    include_once '_includes/arqBaixo.php';
?>