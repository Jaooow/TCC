<?php 
	session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <!-- Meta tags Obrigatórias -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Nome do site</title>
        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="css/styles.css">
        <!-- Script -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <!--Fonte Awersome-->
        <script src="https://kit.fontawesome.com/827d4800d4.js" crossorigin="anonymous"></script>
        <!-- Progress Bar-->
        <script src="js/progressbar.min.js"></script>
        <!--Paralax -->
        <script src="https://cdn.jsdelivr.net/parallax.js/1.4.2/parallax.min.js"></script>
		<!--Scipt usado-->
		<script src="js/scripts.js"></script>
		<script src="js/script_procurar_produtos.js"></script>
		<script src="js/jquery-3.5.1.min.js"></script>
		<script src="js/script_perfil.js"></script>
    </head>
    <body>
        <header>
            <!-- NavBar -->
			<?php
				if(!isset($_SESSION["tipo_usuario"])){
					echo'
					<!-- NavBar -->
					<div class="container" id="nav-container">
						<nav class = "navbar navbar-expand-lg fixed-top navbar-dark">
							<a href="img/logo.png" class="navbar-brand">
								<img  id="logo" src="img/Logo.png" alt="Logo Site" href="index.html"> Nome Empresa
							</a>
							<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-links" 
								aria-controls="navbar-links" aria-expanded="false" aria-label="Toggle navigation">
								<span class = "navbar-toggler-icon"></span>
							</button>
							<div class="collapse navbar-collapse justify-content-end" id="navbar-links">
								<div class ="navbar-nav">
									<a class="nav-item nav-link" id="home-menu" href="#home">Home</a>
									<a class="nav-item nav-link" id="about-menu" href="#about">Sobre Nós</a>
									<a class="nav-item nav-link" id="services-menu" href="#services">Serviços</a>
									<a class="nav-item nav-link" id="contact-menu" href="#contact">Contato</a>
									<a class="nav-item nav-link" id="login-menu" href="login.html">Login</a>
									<a class="nav-item nav-link" id="cadastro-menu" href="cadastro.html">Cadastro</a>
								</div>
							</div>
						</nav>
					</div>';
				}
				else{
					if($_SESSION["tipo_usuario"]==0){
						echo'
						<!-- NavBar -->
						<div class="container" id="nav-container">
							<nav class = "navbar navbar-expand-lg fixed-top navbar-dark">
								<a href="img/logo.png" class="navbar-brand">
									<img  id="logo" src="img/Logo.png" alt="Logo Site" href="index.html"> Nome Empresa
								</a>
								<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-links" 
									aria-controls="navbar-links" aria-expanded="false" aria-label="Toggle navigation">
									<span class = "navbar-toggler-icon"></span>
								</button>
								<div class="collapse navbar-collapse justify-content-end" id="navbar-links">
									<div class ="navbar-nav">
										<a class="nav-item nav-link">Home</a>
										<a class="nav-item nav-link">Procurar</a>
										<a class="nav-item nav-link">Negociações</a>
										<a class="nav-item nav-link" id="perfil" href="perfil.html">Perfil</a>
										<a class="nav-item nav-link">Sobre nós</a>
									</div>
								</div>
							</nav>
						</div>';
					}
				}
			?>
        </header>