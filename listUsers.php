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
        div#fotoUser {
            width: 50px;
            height: 50px;
            border: solid 1px #062e5e;
            background-size: cover;
            padding: 1px;
            background-position: 50% 50%;
            border-radius: 100%;
        }
        button#pesquisar {
            background-color: deepskyblue;
            color:white;
        }
        button#fechar {
            background-color: #427fbc;
            color: white;
        }
        tr#eu {
            background-color: rgba(6, 46, 94,1);
            transition: .2s;
            color: white;
            font-weight: bold;
            
        }
      
       
        
        tr#eu:hover {
            background-color: rgba(6, 46, 94,.8);
            
           
        }
       
    </style>
    <!-- ALERTs -->
    <?php if (@$_SESSION['certoDELL']){ ?>
        <div class="alert alert-success fixed-top text-center alert-dismissible fade show" role="alert">
            <strong>Usuário removido com Sucesso!</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    <?php unset($_SESSION['certoDELL']); } ?>
    
    <?php if (@$_SESSION['erroDELL']){ ?>
        <div class="alert alert-danger fixed-top text-center alert-dismissible fade show" role="alert">
            <strong>Não foi possível remover o usuário, tente novamente!</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    <?php unset($_SESSION['erroDELL']); } ?>

    <?php if (@$_SESSION['trocaNivelS']){ ?>
        <div class="alert alert-success fixed-top text-center alert-dismissible fade show" role="alert">
            <strong>Nível alterado com Sucesso!</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    <?php unset($_SESSION['trocaNivelS']); } ?>

    <?php if (@$_SESSION['trocaNivelD']){ ?>
        <div class="alert alert-danger fixed-top text-center alert-dismissible fade show" role="alert">
            <strong>Não foi possível trocar o nível!</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    <?php unset($_SESSION['trocaNivelD']); } ?>
   

     <!-- Fim - ALERTs -->


    <div id="conteudo"  style="height: 100vh; padding-bottom: 5vh;" class="container">
        
        <div class="row">
            <div class="col-md-12 text-center mt-2">
                <h1><strong><i class="fas fa-user-friends"></i> Listagem de Usuários</strong> <button data-toggle="modal" data-target="#UserSearch" data- class="btn ml-5" style="background-color: #480720; color: white"><strong>Pesquisar por Tipo de Usuário</strong></button></h1>
            </div>
        </div>
        
        <div class="row">
            <div class="col-md-12">
                <table style="cursor: default" class="table  table-hover table-light">
                    <thead class="text-center"  style="background-color: #062e5e; color: white">
                        
                        <th>Nome do Usuário</th>
                        <th>Tipo do Usuário</th>
                        <th>Foto do Usuário</th>
                        <th></th><th></th>
                       
                    </thead>
                    <tbody style="font-weight: bold" class="text-center">
                        <?php
                            include_once '_sqlC/listUsers.php';
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    
<?php 
    include_once '_includes/arqBaixo.php';
?>
<form action="listUserEspec.php" method="post">
<div class="modal fade" id="UserSearch" tabindex="-1" role="dialog" aria-labelledby="Search" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="Search"><strong><i class="fas fa-search"></i> Pesquisar por Tipo de Usuário</strong></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body text-center">
                <div class="row">
                    <div class="col-md-12">
                        
                            <label for="fabr">Escolha o tipo de Usuário</label>
                            <select style="font-weight: bold;"  name="tipo" class="custom-select"> 
                                <option value="1" selected> Usuário Administrador</option>
                                <option value="2"> Usuário Padrão </option>
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