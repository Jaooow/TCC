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
				if(!isset($_SESSION["tipo_de_usuario"])){
					echo'
					<!-- NavBar -->
					<div class="container" id="nav-container">
						<nav class = "navbar navbar-expand-lg navbar-dark">
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
					if($_SESSION["cargo"]==1){
						echo'
						<!-- NavBar -->
						<div class="container" id="nav-container">
							<nav class = "navbar navbar-expand-lg navbar-dark">
								<a href="img/logo.png" class="navbar-brand">
									<img  id="logo" src="img/Logo.png" alt="Logo Site" href="index.html"> Nome Empresa
								</a>
								<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-links" 
									aria-controls="navbar-links" aria-expanded="false" aria-label="Toggle navigation">
									<span class = "navbar-toggler-icon"></span>
								</button>
								<div class="collapse navbar-collapse justify-content-end" id="navbar-links">
									<div class ="navbar-nav">
										<a class="nav-item nav-link" href="">Home</a>
										<a class="nav-item nav-link" href="">Procurar</a>
										<a class="nav-item nav-link" href="">Negociações</a>
										<a class="nav-item nav-link" id="perfil" href="perfil.php">Perfil</a>
										<a class="nav-item nav-link" href="">Sobre nós</a>
										<a class="nav-item nav-link" href="logout.php">Sair</a>';
										if($_SESSION["tipo_de_usuario"]>1){
										echo'<div class="nav-item nav-link">
												<a class="btn btn-primary" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
													alterar usuario
												</a>
												</p>
												<div class="collapse" id="collapseExample">
													<div class="card card-body">
														<a class="text-dark" href="alterar_cabecalho.php?id=1">Alterar para usuario Cliente</a>
														<a class="text-dark" href="alterar_cabecalho.php?id=2">Alterar para usuario Vendedor</a>
													</div>
												</div>
											</div>';
									}
									echo'</div>
								</div>
							</nav>
						</div>';
					}
					else{
						echo'
						<!-- NavBar -->
						<div class="container" id="nav-container">
							<nav class = "navbar navbar-expand-lg navbar-dark">
								<a href="img/logo.png" class="navbar-brand">
									<img  id="logo" src="img/Logo.png" alt="Logo Site" href="index.html"> Nome Empresa
								</a>
								<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-links" 
									aria-controls="navbar-links" aria-expanded="false" aria-label="Toggle navigation">
									<span class = "navbar-toggler-icon"></span>
								</button>
								<div class="collapse navbar-collapse justify-content-end" id="navbar-links">
									<div class ="navbar-nav">
										<a class="nav-item nav-link" href="">Home/negocioações</a>
										<a class="nav-item nav-link" href="cadastro_de_produtos.php">Cadastrar Produtos</a>
										<a class="nav-item nav-link" href="">Meus Produtos</a>
										<a class="nav-item nav-link" id="perfil" href="perfil.html">Perfil</a>
										<a class="nav-item nav-link" href="">Sobre nós</a>
										<a class="nav-item nav-link" href="logout.php">Sair</a>';
										if($_SESSION["tipo_de_usuario"]>1){
											
											echo'<div class="text-dark nav-item nav-link">
												<a class="btn btn-primary" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
													alterar usuario
												</a>
												</p>
												<div class="collapse" id="collapseExample">
													<div class="card card-body">
														<a class="text-dark" href="alterar_cabecalho.php?id=1">Alterar para usuario Cliente</a>
														<a class="text-dark" href="alterar_cabecalho.php?id=2">Alterar para usuario Vendedor</a>
													</div>
												</div>
											</div>';
									}
									echo'</div>
								</div>
							</nav>
						</div>';
					}
				}
			?>
        </header>