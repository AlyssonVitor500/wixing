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
        img#logoHome {
            -webkit-transform: scale(0.8);
            -webkit-user-select: none;
            -moz-transform: scale(0.8);
            -o-transform: scale(0.8);
            transform: scale(0.8);
        }
    </style>
    <div id="conteudo"    style="height: 100vh; background-size: cover; background-position: 50% 50%;transition: background-image 1s;" class="container-fluid">
       
        <div class="container text-center mt-5">
            <img id="logoHome" src="_imgs/logo.png">
        </div>
        <div class="container text-center mt-5">
            <h1 style="color: white">Um sistema de estoque simples e funcional</h1>
        </div>
       
    </div>
   
 <?php 
        include_once '_includes/arqBaixo.php';
?>
<script>
    function comecarSlider() {
		min=1;
		max=5;
		document.getElementById("conteudo").style.backgroundImage = "URL(_imgs/imgS1.jpg)";
		timer=setInterval(trocaFoto,10000)
		f=min;
		}
		
		
		
	function trocaFoto() {
		f++;
        if (f == 2) {
            f=3;
        }
		if(f>max) {
			f=min;
			}
            document.getElementById("conteudo").style.backgroundImage = "URL(_imgs/imgS"+f+".jpg)";
		}
</script>