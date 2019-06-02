<?php if (@$_SESSION['successAlterar']){ ?>
        <div class="alert alert-success fixed-top text-center alert-dismissible fade show" role="alert">
            <strong>Foto alterada com Sucesso!</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
<?php unset($_SESSION['successAlterar']); } ?>

<?php if (@$_SESSION['errorAlterar']){ ?>
        <div class="alert alert-danger fixed-top text-center alert-dismissible fade show" role="alert">
            <strong>Foto não alterada!</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
<?php unset($_SESSION['errorAlterar']); } ?>

<div class="modal fade" id="AlterPerfilFoto" tabindex="-1" role="dialog" aria-labelledby="AlterPerfilFoto" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="AlterPerfilFoto"><i class="fas fa-portrait fa-2x"></i> Alterar Foto de Perfil</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            <form action="_sqlC/uploadFile.php" method="post" enctype="multipart/form-data">
                <div class="col-md-12 text-center">
                    Escolha o diretório da imagem
                    <div class="custom-file text-center">
                        
                        <input type="file" required class="custom-file-input" name="arqv">
                        <label class="custom-file-label"  for="inputGroupFile01">Escolher arquivo</label>
                    </div>
                    
                </div>
            
            
      </div>
      <div class="modal-footer">
            <button type="button" class="btn" id="fechar" data-dismiss="modal">Fechar <i class="far fa-times-circle"></i></button>
            <button type="submit" class="btn " id="pesquisar">Alterar <i class="fas fa-paper-plane"></i></button>
      </div>
    </div>
  </div>
</div>
</form>  

    
