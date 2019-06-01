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
                <h1><strong><i class="fas fa-box-open"></i> Listagem de Produtos</strong> </h1>
            </div>
        </div>
        
        <div class="row">
            <div class="col-md-12">
                <table style="cursor: default" class="table  table-hover bg-light">
                    <thead class="text-center">
                        <th>ID</th>
                        <th>Nome do Produto</th>
                        <th>Fabricante do Produto</th>
                        <th>Peso do Produto</th>
                        <th>Tipo do Produto</th>
                        <th>Valor do Produto</th>
                        <th>Descrição</th>
                        <th></th>
                        <th></th>
                    </thead>
                    <tbody style="font-weight: bold" class="text-center">
                        <?php
                            include_once '_sqlC/listarProdutos.php';
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

<?php 
    include_once '_includes/arqBaixo.php';
?>