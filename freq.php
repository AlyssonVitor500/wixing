<?php 
    include_once '_includes/arqCima.php';
?>
    


    <div id="conteudo"  style="height: 100vh; padding-bottom: 5vh;" class="container">
        <div class="row">
            <div class="col-md-12 text-center mt-2">
                <h1><strong><i class="fas fa-table"></i> Frequências</strong></h1>
            </div>
        </div>
        
        <div class="row">
            <div class="col-md-12">
                <table style="cursor: default" class="table  table-hover bg-light">
                    <thead class="text-center">
                        
                        <th>Produto</th>
                        <th>Fabricante do Produto</th>
                        <th>Tipo da Frequência</th>
                        <th>Quantidade de Produtos na Operação</th>
                        <th>Data do Ocorrido</th>
                        
                        
                       
                    </thead>
                    <tbody style="font-weight: bold" class="text-center">
                        <?php
                            include_once '_sqlC/listFreq.php';
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

<?php 
    include_once '_includes/arqBaixo.php';
?>