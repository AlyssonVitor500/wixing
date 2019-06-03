<?php if (@$_SESSION['ContaSUCCESS']){ ?>
        <div class="alert alert-success fixed-top text-center alert-dismissible fade show" role="alert">
            <strong>A conta foi criada com Sucesso!</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
<?php unset($_SESSION['ContaSUCCESS']); } ?>

<?php if (@$_SESSION['ContaDENY']){ ?>
        <div class="alert alert-danger fixed-top text-center alert-dismissible fade show" role="alert">
            <strong>A conta não foi criada!</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
<?php unset($_SESSION['ContaDENY']); } ?>

<div class="modal fade" id="addConta" tabindex="-1" role="dialog" aria-labelledby="addConta" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="addConta"><i class="fas fa-users fa-2x"></i><strong> Adicionar nova Conta</strong></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            <form action="_sqlC/addUser.php" method="post">
                <div class="row mt-2">
                    <div class="col-md-12 text-center">
                        <label for=""><strong>Nickname do Usuário</strong></label>
                        <input type="text" name="nomeUser" class="form-control" id="">
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-md-12 text-center">
                        <label for=""><strong>Senha do Usuário</strong></label>
                        <input type="password" name="senhaUser" class="form-control" id="">
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-md-12 text-center">
                        <label for=""><strong>Tipo de Usuário</strong></label>
                        <select name="tipoUser" style="color: black" class="custom-select" id="">
                            <option value="2" >Usuário Padrão</option>
                            <option value="1" >Usuário Root</option>
                        </select>
                    </div>
                </div>
                
            
      </div>
      <div class="modal-footer">
            <button type="button" class="btn" id="fechar" data-dismiss="modal">Fechar <i class="far fa-times-circle"></i></button>
            <button type="submit" class="btn " id="pesquisar">Adicionar <i class="fas fa-paper-plane"></i></button>
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
            } else if(opc1.selected == true) {
                document.getElementById("nomeU").disabled=false;
                document.getElementById("senha").disabled=true;
            }else if(opc2.selected == true) {
            
                document.getElementById("nomeU").disabled=true;
                document.getElementById("senha").disabled=false;
            
            }
        } 
        
    
</script>