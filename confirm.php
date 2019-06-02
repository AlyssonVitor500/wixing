<?php 
    include_once '_sqlC/checkNivel.php';
   @include_once '_includes/arqCima.php';
    $_SESSION['IDAPAGAR'] = $_GET['id'];
?>

    <style>
        #n{
            background-color:deepskyblue; 
            width: 90%;
            color: white;
        }
       
        #s {
            
            color: white;
            width: 90%;
            background-color: #427fbc;
        }
        img#loading {
            -webkit-transform: scale(0.5);
            margin-top: -5%;
            -webkit-user-select: none;
        }

        @media only screen and (max-width: 700px) {
            #s {
                margin-top: 1%;
            }
        }

    </style>
    <div id="conteudo"  style="height: 100vh; padding-bottom: 5vh;" class="container">
        <div class="container text-center mt-5">
            <div class="row">
                <div class="col-md-12">
                    <h1>Essa ação é Irreversível! Deseja continuar mesmo assim?</h1>
                </div>
            </div>
            <div class="row text-center mt-5">
                <div class="col-md-6">
                    <a href="listProd.php" style="font-weight: bold" id="n" class="btn btn-lg"><i class="fas fa-undo"></i> Não, desejo retornar!</a>
                </div>
                <div class="col-md-6">
                    <a href="_sqlC/deleteP.php"  style="font-weight: bold" id="s" class="btn btn-lg">Sim! Estou ciente e quero continuar <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <div class="row text-center mt-1">
                <div class="col-md-12 ">
                    <img id="loading" src="_imgs/loading.gif">
                </div>
                
            </div>
            
        </div>
    </div>

<?php 
    include_once '_includes/arqBaixo.php';
?>