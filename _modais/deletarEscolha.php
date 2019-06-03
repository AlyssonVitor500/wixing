<form action="_sqlC/deleteAll.php" method="post">
    <div class="modal fade" id="EscolhaDeDelete" tabindex="-1" role="dialog" aria-labelledby="deleteAll" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="deleteAll"><i style="color: orange;" class="fas fa-exclamation-triangle fa-2x"></i> Deletar TUDO</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
                
                    <div class="row">
                        <div class="col-md-12 text-center" style="font-weight: bold">

                                <label for="">O que você deseja deletar?</label>
                                <select name="opc" class="custom-select" id="">
                                        <option value="0" disabled>Escolha uma opção</option>
                                        <option value="1">Apagar TUDO</option>
                                        <option value="2">Apagar só Fornecedores</option>
                                        <option value="3">Apagar só Produtos</option>
                                        <option value="4">Apagar só Registros</option>

                                </select>

                        </div>
                    </div>
                
        </div>
        <div class="modal-footer">
                <button type="button" class="btn" id="fechar" data-dismiss="modal">Fechar <i class="far fa-times-circle"></i></button>
                <button type="submit" class="btn"  id="pesquisar">Enviar <i class="fas fa-paper-plane"></i></button>
        </div>
        </div>
    </div>
    </div>
</form>