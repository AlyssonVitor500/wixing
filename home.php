    <?php 
        include_once '_includes/arqCima.php';
     ?>

    <?php

        $setor = $_SESSION['setor'];
      

    ?>
    <style>
        body {
            -webkit-animation: fadeIn .3s ease-in-out;
            -moz-animation: fadeIn .3s ease-in-out;
            -o-animation: fadeIn .3s ease-in-out;
            animation: fadeIn .3s ease-in-out;
        }
    </style>
    <div id="conteudo"    style="height: 100vh; background-image: url('_imgs/imgS1.jpg'); background-size: cover; background-position: 50% 50%;" class="container-fluid">
       
        
       
    </div>
    <script>
        var x = 1;
         function iniciaSlide() {
             document.getElementById("conteudo").style.backgroundImage = "url('_imgs/imgS1.jpg')";
            
            setInterval(passaSlide(), 100);
             
         }

         function passaSlide() {
             
             document.getElementById("conteudo").style.backgroundImage = "url('_imgs/imgS" + x +".jpg')";
             x++;
             if(x == 2) {
                 x=0;
             }
         }
    </script>
 <?php 
        include_once '_includes/arqBaixo.php';
?>