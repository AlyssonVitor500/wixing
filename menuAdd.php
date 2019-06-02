<?php 
        include_once '_sqlC/checkNivel.php';
        @include_once '_includes/arqCima.php';
     ?>

    <?php

        $setor = $_SESSION['setor'];
      

    ?>
    <style>
         img#loading {
            -webkit-transform: scale(0.5);
            margin-top: -5%;
            -webkit-user-select: none;
        }
        img#loadingC {
            -webkit-transform: scale(0.9);
            margin-top: -5%;
            -webkit-user-select: none;
            display: none;
        }

        @media only screen and (max-width: 700px){
            img#loading{
                
                display: none;
            }
            img#loadingC {
                margin-left: 30%;
                display: block;
            }
            div#first{
                margin-top: -20%;
            }
        }

    </style>
    <div id="conteudo"    style="height: 100vh; " class="container-fluid">
       
        <div class="container text-center">
            <div class="row text-center mt-1">
                <div class="col-md-12 text-center">
                    <h1> O que você deseja cadastrar? </h1>
                </div>
            </div>
            <div class="row mt-1">
                <div class="col-md-12">
                    <img id="loadingC" src="_imgs/loadingCeluar.gif">
                </div>
            </div>
            <div class="row text-center mt-5" >
                <div class="col-md-6 "id="first">
                    <i class="fas fa-briefcase fa-9x"></i><br>
                    <h3><a href="addForn.php" style="width: 80%; background-color:deepskyblue; color: white" class="btn btn-lg mt-2">Adicionar Fornecedores </a></h3>
                </div>
                <div class="col-md-6 ">
                    <i class="fas fa-box fa-9x"></i><br>
                    <h3><a href="add.php" style="width: 80%; background-color:#427fbc;color: white" class="btn btn-lg mt-2">Adicionar Produtos </a></h3>
                </div>
            </div>
            <div class="row text-center mt-2">
                <div class="col-md-12 ">
                    <img id="loading" src="_imgs/loading.gif">
                </div>
            </div>
        </div>
       
    </div>
    
 <?php 
        include_once '_includes/arqBaixo.php';
?>