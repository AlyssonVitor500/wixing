<?php 
    include_once '_includes/arqCima.php';
?>
    
    <style>
        tr.tabela-chegou {
            background-color: rgba(11,156,49,.4);
            color: white;
            transition: .2s;
        }
        tr.tabela-saiu {
            background-color: rgba(255,0,0,.4);
            transition: .2s;
            color: white;
        }
        tr.tabela-chegou:hover {
            background-color: rgba(11,156,49,.5);
           
        }
        tr.tabela-saiu:hover {
            background-color: rgba(255,0,0,.5);
            
           
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

    <div id="conteudo"  style="height: 100vh; padding-bottom: 5vh;" class="container">
        <div class="row">
            <div class="col-md-12 text-center mt-2">
                <h1><strong><i class="fas fa-table"></i> Frequências</strong><button data-toggle="modal" data-target="#FreqSearchAll" data- class="btn ml-5" style="background-color: #480720; color: white"><strong>Pesquisa Inteligente</strong></button> <button data-toggle="modal" data-target="#FreqTipo" data- class="btn ml-1" style="background-color: #3a073a; color: white"><strong>Pesquisar por Tipo</strong></button> <a href="freq.php" style="background-color:#041042; color: white" class="btn"><strong>Todos os Registros</strong></a></h1>
            </div>
        </div>
        
        <div class="row">
            <div class="col-md-12">
                <table style="cursor: default" class="table table-light">
                    <thead style="background-color: #062e5e; color: white" class="text-center">
                        
                        <th>Produto</th>
                        <th>Fabricante do Produto</th>
                        <th>Tipo da Frequência</th>
                        <th>Quantidade de Produtos na Operação</th>
                        <th>Data do Ocorrido</th>
                        
                        
                       
                    </thead>
                    <tbody style="font-weight: bold" class="text-center">
                        <?php
                            include_once '_sqlC/FrenEspec.php';
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <form class="form-group" action="frenEspec.php" method="post">
        <div class="modal fade" id="FreqSearchAll" tabindex="-1" role="dialog" aria-labelledby="FreqSearch" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="FreqSearch"><strong><i class="fas fa-search"></i> Pesquisar frequência por período</strong> </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
    
                <div class="modal-body text-center">
                        <div class="row">
                            <div class="col-md-6 text-center mx-auto">
                                
                                    <label for="fabr">De</label>
                                    <input class="form-control" required type="date" name="de" id="">
                                
                            </div>
                            <div class="col-md-6 text-center mx-auto">
                                
                                    <label for="fabr">Até</label>
                                    <input class="form-control" required type="date" name="ate" id="">
                                
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 text-center mx-auto">
                                <label for="">Pesquisar Por:</label>
                                <select class="custom-select" required name="selectSmart" id="">
                                    <option value="1" selected>Ambos (Chegada e Saida)</option>
                                    <option value="2">Só Saida</option>
                                    <option value="3" >Só Chegada</option>
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
            </div>    
    </form>

    <!-- Pesquisar po Tipo -->
    <form class="form-group" action="frenTipo.php" method="post">
        <div class="modal fade" id="FreqTipo" tabindex="-1" role="dialog" aria-labelledby="FreqSearch1" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="FreqSearch1"><strong><i class="fas fa-search"></i> Pesquisar frequência por Tipo</strong></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
    
                <div class="modal-body text-center">
                        
                        <div class="row">
                            <div class="col-md-12 text-center mx-auto">
                                <label for="">Pesquisar Por:</label>
                                <select class="custom-select" required name="selectSmartTipo" id="">
                                    <option value="2" selected>Só Saida</option>
                                    <option value="1" >Só Chegada</option>
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
            </div>
        </div>        
    </form>
    
<?php 
    include_once '_includes/arqBaixo.php';
?>