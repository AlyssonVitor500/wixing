<?php 
    include_once '_includes/arqCima.php';
    include_once '_sqlC/conexao.php';

?>    
<?php
    $id = $_SESSION['idUser'];
   $nome = mb_convert_case($_SESSION['user'],MB_CASE_TITLE,'UTF-8');
   $sql = mysqli_query($conn, "SELECT * FROM users WHERE id = '$id'");
   while ($dados = $sql->fetch_assoc()) {
        $img = $dados['perfilFoto'];
   }
   $nivel = $_SESSION['nivel'];
?>
<style>
        button#pesquisar {
            background-color: deepskyblue;
            color:white;
        }
        button#fechar {
            background-color: #427fbc;
            color: white;
        }
    div.perfil {
        width: 20vw;
        height: 65vh;
        background-size: cover;
        background-position: 50% 50%;
        background-repeat: no-repeat;

    }
    input#nome {
        width: 80%;
        text-align: center;
        margin: auto;
        background-color: white;
        border: none;
        border-bottom: 1px solid #041042;
    }
    @media only screen and (max-width: 1000px) {
        div.perfil {
            width: 40vw;
            height: 50vh;
            background-position: cover;
            background-position: 50% 50%;
            background-repeat: no-repeat;
        }
    }
</style>
<?php if (@$_SESSION['erroDELL']){ ?>
        <div class="alert alert-danger fixed-top text-center alert-dismissible fade show" role="alert">
            <strong>Erro ao apagar a conta!</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    <?php unset($_SESSION['erroDELL']); } ?>

    

    <?php if (@$_SESSION['DellAll']){ ?>
        <div class="alert alert-success fixed-top text-center alert-dismissible fade show" role="alert">
            <strong>Todos os dados foram apagados!</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    <?php unset($_SESSION['DellAll']); } ?>

    <?php if (@$_SESSION['NotDellAll']){ ?>
        <div class="alert alert-danger fixed-top text-center alert-dismissible fade show" role="alert">
            <strong>Erro ao apagar todos os dados!</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    <?php unset($_SESSION['NotDellAll']); } ?>

<div id="conteudo"  style="padding-bottom: 3vh;" class="container">
    <div class="container">
        <div class="row text-center">
            <div class="col-md-12"><h1><i class="far fa-user"></i> Ficha do Usuário </h1></div>
        </div>

        <div class="row mt-2">
            <div class="col-md-12 text-center">
                <div class="perfil container" style="background-image: url('_usersImg/<?php echo $img; ?>')">
                
                </div>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-md-6 text-center">
                <label for=""><h2>Nome do Usuário</h2></label>
                <input type="text" disabled name="" style="font-weight: bold"  class="form-control" value="<?php echo $nome;?>" id="nome">
            </div>
            <div class="col-md-6 text-center">
                <label for=""><h2>Nível do Usuário</h2></label>
                <?php if ($nivel == 1) { ?>
                    <input type="text" disabled name="" style="font-weight: bold"  class="form-control" value="Usuário Administrador" id="nome">
                <?php } else { ?>
                    <input type="text" disabled name="" style="font-weight: bold"  class="form-control" value="Usuário Padrão" id="nome">
                <?php } ?>
            </div>
            
        </div>

        <div class="row mt-5 text-center">
            <div class="col-md-4">
                    <button class="btn btn-lg" data-toggle="modal" data-target="#AlterPerfil" style="background-color:#041042; color: white; width: 100%;">Alterar dados do Perfil <i class="fas fa-user-edit"></i></button>
            </div>
            
            <div class="col-md-4">
                    <button class="btn btn-lg" data-toggle="modal" data-target="#AlterPerfilFoto" style="background-color:#041042; color: white; width: 100%;">Alterar foto de Perfil <i class="fas fa-images"></i></button>
            </div>
            <div class="col-md-4">
                    <?php if($id == 1){ ?>
                        <button disabled class="btn btn-lg" style="background-color:#041042; color: white; width: 100%;">Deletar Conta <i class="fas fa-user-minus"></i></button>
                    <?php } else { ?>
                        <a href="confirmDellUser.php?id=<?php echo $id;?>" class="btn btn-lg" style="background-color:#041042; color: white; width: 100%;">Deletar Conta <i class="fas fa-user-minus"></i></a>
                    <?php } ?>
            </div>
            
        </div>
        
        <?php if ($nivel == 1) { ?>
            <hr>
            <div class="row mt-5 text-center">
                <div class="col-md-12"><h2>Área de Usuários ROOT</h2></div>
            </div> 
            <div class="row mt-2 text-center">
                <div class="col-md-5 ">
                        <button class="btn btn-lg" data-target="#addConta" data-toggle="modal" style="background-color:#480720; color: white; width: 100%;">Adicionar uma nova Conta <i class="fas fa-user-plus"></i></button>
                </div>
                <?php if($id == 1){ ?>
                    <div class="col-md-4">
                            <button  class="btn btn-lg" data-target="#deleteAll" data-toggle="modal"  style="background-color:#480720; color: white; width: 100%;">Deletar TODOS os DADOS <i class="fas fa-trash-alt"></i></button>
                    </div>
                <?php } else { ?>
                    <div class="col-md-4">
                            <button disabled class="btn btn-lg"  style="background-color:#480720; color: white; width: 100%;">Deletar TODOS os DADOS <i class="fas fa-trash-alt"></i></button>
                    </div>
                <?php } ?>
                <div class="col-md-3">
                        <a href="listUsers.php" class="btn btn-lg" style="background-color:#480720; color: white; width: 100%;">Ver Usuários <i class="fas fa-users"></i></a>
                </div>
                
            </div>
        <?php } ?>    
        
    </div>
    
    
</div>
<?php 
    include_once '_includes/arqBaixo.php';
    include_once '_modais/alterPerfil.php';
    include_once '_modais/alterFoto.php';
    include_once '_modais/novaConta.php';
    include_once '_modais/deleteAll.php';
?>
