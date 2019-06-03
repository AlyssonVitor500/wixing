<?php if (@$_SESSION['successAlterar']){ ?>
        <div class="alert alert-success fixed-top text-center alert-dismissible fade show" role="alert">
            <strong>Dados alterados com Sucesso!</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
<?php unset($_SESSION['successAlterar']); } ?>

<?php if (@$_SESSION['errorAlterar']){ ?>
        <div class="alert alert-danger fixed-top text-center alert-dismissible fade show" role="alert">
            <strong>Dados não alterados!</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
<?php unset($_SESSION['errorAlterar']); } ?>

<div class="modal fade" id="AlterPerfil" tabindex="-1" role="dialog" aria-labelledby="AlterPerfil" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="AlterPerfil"><i class="fas fa-user-edit fa-2x"></i> <strong>Alterar Perfil</strong></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            <form action="_sqlC/alterUser.php" method="post">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <label>
                        <strong>O que você deseja Alterar?</strong> 
                        </label>
                        <select class="form-control" name="select" id="selectAlter">
                            <option id="senha&User" value="0" selected>Senha e Nome de Usuário</option>
                            <option id="onlyNome" value="1">Só nome</option>
                            <option id="onlySenha" value="2">Só senha</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 text-center">
                        <label>
                        <strong>Nome</strong>
                        </label>
                        <input type="text" id="nomeU" class="form-control" name="nome">
                        
                    </div>

                    <div class="col-md-6 text-center">
                        <label>
                        <strong>Senha</strong>
                        </label>
                        <input type="password"  class="form-control" name="senha" id="senha">
                        
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
<script>
    var opc = document.getElementById("senha&User");
    var opc1 = document.getElementById("onlyNome");
    var opc2 = document.getElementById("onlySenha");
    setInterval(verifica, 500)

        function verifica() {
            if(opc.selected == true) {
                document.getElementById("nomeU").disabled=false;
                document.getElementById("senha").disabled=false;
                document.getElementById("nomeU").required=true;
                document.getElementById("senha").required=true;
            } else if(opc1.selected == true) {
                document.getElementById("nomeU").disabled=false;
                document.getElementById("senha").disabled=true;
                document.getElementById("nomeU").required=true;
                document.getElementById("senha").required=false;
            }else if(opc2.selected == true) {
            
                document.getElementById("nomeU").disabled=true;
                document.getElementById("senha").disabled=false;
                document.getElementById("nomeU").required=false;
                document.getElementById("senha").required=true;
            
            }
        } 
        
    
</script>