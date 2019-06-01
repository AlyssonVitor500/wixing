<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Entrar - Wixing</title>
	<link rel="icon" href="_imgs/logoP.png">
	<?php 
		session_start();
		include_once '_includes/bootstrapCss.php';
		include_once '_sqlC/validaLoginIndex.php';
	 ?>
</head>
<?php 
	
?>
<style type="text/css">

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

	body {
		-webkit-animation: fadeIn .5s ease-in-out;
		-moz-animation: fadeIn .5s ease-in-out;
		-o-animation: fadeIn .5s ease-in-out;
		animation: fadeIn .5s ease-in-out;
	}
	div#Container {
		height: 100vh;
	
	}
	body{
		background-image: url(_imgs/blue.png);
	}
	div.card {
		width:25vw;
	}
	input#enter {
		width: 6vw;
	}
	h5, input[type="submit"],div.alert{
		font-family: "FontePrincipal";
	}
	@media only screen and (max-width: 600px) {
		div.card {
			width:70vw;
		}	

		input#enter {
			width: 50vw;
		}

	}
	@media only screen and (min-width: 600px) and (max-width: 1000px) {
		div.card {
			width:70vw;
		}	

		input#enter {
			width: 50vw;
		}

	}

	@font-face {
        font-family: "FontePrincipal";
        src: url("_font/caviar_dreams/CaviarDreams.ttf");
    } 
</style>
<body>
	<div id="Container" class="container">
		<form action="_sqlC/logar.php" method="post" class="form-group">
			
			<div style="display: hidden; height:20vh;"></div>

			<div class="card mx-auto" >
				<div class="card-header text-center">
					<img src="_imgs/logoP.png" width="45" alt="Logo"><span>Wixing</span>
				</div>
				<div class="card-body pb-3">
					<div class="form-row mt-2">
						<div class="col-md-12 text-center">
							<label class="" for=""><h5>Usuário</h5></label>
							<input type="text" name="userTxt" class="form-control">
						</div>
						
					</div>

					<div class="form-row mt-3">
						<div class="col-md-12 text-center" >
							<label for=""><h5>Senha</h5></label>
							<input type="password" name="senhaTxt" class="form-control">
						</div>
						
					</div>

					<?php

							if(@$_SESSION['empty']) {
								echo "
									<div class='form-row mt-3'>
										<div class='col-md-12 text-center' >
											<div class='alert alert-danger'> 
												Preencha os Campos!
											</div>
										</div>
								
									</div>
								";
								unset($_SESSION['empty']);
							}

							if(@$_SESSION['naoLogado']) {
								echo "
									<div class='form-row mt-3'>
										<div class='col-md-12 text-center' >
											<div class='alert alert-danger'> 
												Verifique a senha e o usuário e tente novamente!
											</div>
										</div>
								
									</div>
								";
								unset($_SESSION['naoLogado']);
							}

					?>
					
				</div>
				
				<div class="card-footer text-center">
					<input type="submit"  id="enter" class="btn btn-primary" value="Entrar">
					
				</div>
			</div>	

		</form>

	</div>
</body>
</html>
	<?php 
		include_once '_includes/bootstrapJs.php';
	 ?>