
    <style>
        
        div#navSide {
            display: none;
            visibility: hidden;
           
        }
        span.fechar {
            margin-left: 30%;
        }
        button#btn-expandir {
            display: none;
        }

        @media only screen and (max-width: 700px) {
            button#btn-expandir {
                display: block;
                position: absolute;
                color: white;
                top: 8%;
            }
            div.horizontal{
               
                height: 9vh;
                
            }
            div.vertical {
                display: none;
            }
            div#navSide {
                position: absolute;
                width: 30vw;
                display: block;
                visibility: visible;
                transition: .3s;
                padding-right: 1%;
                height: 100vh;
                background-color:  #0b2877;
                top: 0;
                left: -200%;

            }
            div#navSide div.saudacao {
                position: absolute;
                top: 2%;

            }
            
            div.menu {
                position: absolute;
                width: 100%;
                z-index: 3;
            }
            
           div.card-menu {
               background-color: rgba(255,255,255,0);
               border: none;
               height: 100vh
           }
           div.card-menu div.card-header {
                color: white
           }
           div.card-menu div i {
                color: white;
                
                transition: .2s;
             }
            div.card-menu div i:hover {
                color: rgba(255, 255, 255, 0.76);
                -webkit-transform: scale(1.1);
            }
            div.card-menu div.card-body td {
                padding: 14%;
            }
            i.icon {
                margin-left: 2%;
            }
            span.label {
                color: white;
                text-decoration: none;
                font-weight: bold;
            }
            span.label:hover {
               text-decoration: none;
            }
           
        }
    </style>
    <button onclick="entra()" id="btn-expandir" class="btn expandir">
        <i class="fas fa-bars fa-2x"></i>
    </button>
    <div id="navSide">
            
            <div class="card card-menu">
                <div class="card-header">
                    <?php echo mb_convert_case($_SESSION['user'],MB_CASE_TITLE, 'UTF-8');?> <i class="fas fa-times-circle icon"  onclick="sai()"></i>
                </div>
                <div class="card-body">
                        <div class="container-fluid"  >
                            <table class="mx-auto text-center" >
                                <tr>
                                    <td> <div class="container" style=""><a href="home.php"><i title="Home" class="fa fa-home fa-2x"></i></a></div> </td>
                                </tr>
                                <tr>
                                    <td> <div class="container" style=""><a href="estoque.php"><i  title="Estoque"   class="fas fa-clipboard fa-2x"></i></a></div> </td>
                                </tr>
                               
                                <tr>
                                    <td> <div class="container" style=""><a href="menuAdd.php"><i  title="Adicionar Produto/Fornecedor" class="fas fa-folder-plus fa-2x"></i></a></div> </td>
                                </tr>
                                <tr>
                                    <td> <div class="container" style=""><a href="vender.php"><i title="Registrar Saida"  class="fas fa-money-bill-alt fa-2x"></i></a></div> </td>
                                </tr>
                                <tr>
                                    <td> <div class="container" style=""><a href="chegada.php"><i title="Registrar Chegada" class="fas fa-angle-double-up fa-2x"></i></a></div> </td>
                                </tr>
                                <tr>
                                    <td> <div class="container" style=""><a href="freq.php"><i title="Frequência" class="fas fa-wave-square fa-2x"></i></a></div> </td>
                                </tr>
                                <tr>
                                    <td> <div class="container" style=""><a href="info.php"><i title="Informação" class="fas fa-info-circle fa-2x"></i></a></div> </td>
                                </tr>
                                

                            </table>
                        </div>
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
<script>
    

    function entra() {
       
            document.getElementById("navSide").style.left="0%";
        

       
    } 
    function sai() {
    
            document.getElementById("navSide").style.left="-200%";
       

       
    } 
</script>
