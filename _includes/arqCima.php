<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php
        session_start();
        include_once '_sqlC/validaLogin.php';
        
    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="_imgs/logoP.png" >
    <title>Wixing</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<style>

        @media only screen and (max-width: 600px) {
           
            
            

            div#tag  {
                background-color: #0b2877;
               
            }

            div.horizontal{
                position: fixed;
                float: right;
                width: 100vw;
                height: 5vh;
                position: fixed;
                
                display: block;
            }
        }

    @font-face {
        font-family: "FontePrincipal";
        src: url("_font/caviar_dreams/CaviarDreams.ttf");
    } 
    @font-face {
        font-family: "FontePrincipalTabela";
        src: url("_font/GeosansLight.ttf");
    }    
    div.modal {
        font-family: "FontePrincipal";
        src: url("_font/caviar_dreams/CaviarDreams.ttf");
    }
    ::-webkit-scrollbar { width: 1.7px; background-color:white;} 
    ::-webkit-scrollbar-thumb{background-color: #0b2877;}   

    @-webkit-keyframes fadeIn {
		0% { opacity: 0; }
		100% { opacity: 1; } 
	}
	@-moz-keyframes fadeIn {
		0% { opacity: 0;}
		100% { opacity: 1; }
	}
	@-o-keyframes fadeIn {
		0% { opacity: 0; }
		100% { opacity: 1; }
	}
	@keyframes fadeIn {
		0% { opacity: 0; }
		100% { opacity: 1; }
	}

	
    div#tag {
        
        background-color: #0b2877;
    }
   
    div.horizontal{
        position: fixed;
        float: right;
        width: 100vw;
        height: 7vh;
        position: fixed;
        padding-top: .4vh;
        
        display: block;
        z-index: 2;
    }
    div#tag div i {
        color: white;
        transition: .2s;
    }
    div#tag div i:hover {
        color: rgba(255, 255, 255, 0.76);
        -webkit-transform: scale(1.1);
    }

    div#conteudo {
        padding-top: 8vh;
        padding-left: 6vw;
        font-family: "FontePrincipal";
    }

    div#conteudo {
        -webkit-animation: fadeIn .9s ease-in-out;
		-moz-animation: fadeIn .9s ease-in-out;
		-o-animation: fadeIn .9s ease-in-out;
		animation: fadeIn .9s ease-in-out;
    }
    table.table {
        font-family: 'FontePrincipalTabela';
    }

            /* ESTILO DO MENU LATERAL*/
            
            
           div.card-menu-aside {
               background-color: rgba(255,255,255,0);
               border: none;
               height: 95vh
           }
           div.card-menu-aside div.card-header {
                color: white
           }
           div.card-menu-aside div i {
                color: white;
                
                transition: .2s;
             }
            div.card-menu-aside div i:hover {
                color: rgba(255, 255, 255, 0.76);
                -webkit-transform: scale(1.1);
            }
            div.card-menu-aside div.lateral td {
                padding: 14%;
            }
           
            
            div.nav-Side {
              
                position: fixed;
                height: 100vh;
                z-index: 2;
                float: left;
                display: block;
                padding-top: 5vh;
                width: 5vw;

            }
            div.card-menu-aside div.lateral table {
                position: absolute;
                left: 15%;
            }

            @media only screen  and (max-width: 1200px) {
                div.nav-Side{
                    width: 8vw;
                }
                
            }
</style>
                                    
    <div id="tag"  class="nav-Side">
            

        <div class="card card-menu-aside">
                    
                    <div class="card-body lateral">
                            
                                <table class="mx-auto text-center">
                                    
                                    <tr>
                                        <td> <a href="home.php"><i title="Home" class="fa fa-home fa-2x"></i></a> </td>
                                    </tr>
                                    <tr>
                                        <td> <a href="estoque.php"><i  title="Estoque"   class="fas fa-clipboard fa-2x"></i></a> </td>
                                    </tr>
                                
                                    <tr>
                                        <td> <a href="menuAdd.php"><i  title="Adicionar Produto/Fornecedor" class="fas fa-folder-plus fa-2x"></i></a> </td>
                                    </tr>
                                    <tr>
                                        <td> <a href="menuVer.php"><i title="Ver Produtos e Fornecedores" class="fas fa-th fa-2x"></i></a> </td>
                                    </tr>
                                    <tr>
                                        <td><a href="saida.php"><i title="Registrar Saida"  class="fas fa-money-bill-alt fa-2x"></i></a> </td>
                                    </tr>
                                    <tr>
                                        <td> <a href="chegada.php"><i title="Registrar Chegada" class="fas fa-angle-double-up fa-2x"></i></a> </td>
                                    </tr>
                                    <tr>
                                        <td> <a href="freq.php"><i title="Frequência" class="fas fa-wave-square fa-2x"></i></a> </td>
                                    </tr>
                                    <tr>
                                        <td> <a href="info.php"><i title="Informação" class="fas fa-info-circle fa-2x"></i></a> </td>
                                    </tr>
<body onload="comecarSlider()" >

                                </table>
                            
                    </div>
                    <div class="card-footer ">
                                <table class="mx-auto">
                                    <tr>
                                        <td><a href="_sqlC/logout.php"><i   title="Sair" class="fas fa-sign-out-alt fa-2x"></i></a></td>
                                    </tr>

                                </table>
                    </div>
                </div>
            
    </div>
    <div id="tag" class="horizontal navbar-default navbar-static">
        <?php 

            include_once '_includes/fadeMenu.php';

        ?>
        <div class="container text-center">
            
            <img src="_imgs/logo.png" width="45" alt=""> <span style="color: white;">Wixing</span>
            
        </div>

    </div>
