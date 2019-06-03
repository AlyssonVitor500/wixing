<?php if (@$_SESSION['successAlterar']){ ?>
        <div class="alert alert-success fixed-top text-center alert-dismissible fade show" role="alert">
            <strong>Dados apagados com Sucesso!</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
<?php unset($_SESSION['successAlterar']); } ?>

<?php if (@$_SESSION['errorAlterar']){ ?>
        <div class="alert alert-danger fixed-top text-center alert-dismissible fade show" role="alert">
            <strong>Dados não apagados!</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
<?php unset($_SESSION['errorAlterar']); } ?>

<div class="modal fade" id="deleteAll" tabindex="-1" role="dialog" aria-labelledby="deleteAll" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="deleteAll"><i style="color: orange;" class="fas fa-exclamation-triangle fa-2x"></i><strong> Deletar TUDO</strong></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            
                <div class="row">
                    <p style="text-indent: 5%; text-align: justify">
                        Se você fizer essa operação, <strong>TODOS</strong> os arquivos serão&nbsp;  <strong>APAGADOS</strong>.
                        Isso inclui tudo menos as contas já registradas no sistema.

                        Quer continuar mesmo assim? 
                    </p>
                </div>
            
      </div>
      <div class="modal-footer">
            <button type="button" class="btn" id="fechar" data-dismiss="modal">Não, quero voltar! <i class="fas fa-undo"></i></button>
            <button type="button" class="btn" data-target="#EscolhaDeDelete" data-toggle="modal" id="pesquisar">Sim, quero continuar! <i class="far fa-trash-alt"></i></button>
      </div>
    </div>
  </div>
</div>
 
