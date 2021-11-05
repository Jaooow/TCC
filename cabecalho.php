<?php 
	session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <!-- Meta tags Obrigatórias -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="icon" type="imagem/png" href="img/favicon.png" />
        <title>IFyou | Comercio Online</title>
        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="css/styles.css">
        <!-- Script -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <!--Fonte Awersome-->
        <script src="https://kit.fontawesome.com/827d4800d4.js" crossorigin="anonymous"></script>
        <!-- Google Fonts-->
        <link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;900&display=swap" rel="stylesheet">
        <!--Paralax -->
        <script src="https://cdn.jsdelivr.net/parallax.js/1.4.2/parallax.min.js"></script>
		<!--Scipt usado-->
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
							<a href="index.php" class="navbar-brand">
								<img  id="logo" src="img/Logo.png"  href = "index.php" alt="Logo Site" href="index.html"> IFyou
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
									<a class="nav-item nav-link" id="login-menu" href="login.php">Login</a>
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
								<a href="index.php" class="navbar-brand">
									<img  id="logo" src="img/Logo.png" href = "index.php"  alt="Logo Site" href="index.php"> IFyou
								</a>
								<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-links" 
									aria-controls="navbar-links" aria-expanded="false" aria-label="Toggle navigation">
									<span class = "navbar-toggler-icon"></span>
								</button>
								<div class="collapse navbar-collapse justify-content-end" id="navbar-links">
									<div class ="navbar-nav">
										<a class="nav-item nav-link" href="index.php">Home</a>
										<a class="nav-item nav-link" href="procurar_produtos.php">Procurar</a>
										<a class="nav-item nav-link" href="">Negociações</a>
										<a class="nav-item nav-link" id="perfil" href="perfil.php">Perfil</a>';
										if($_SESSION["tipo_de_usuario"]>1){
										echo'
										<li class="nav-item dropdown">
											<a class="nav-link dropdown-toggle nav-drop" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
												Alterar Usuário
											</a>
											<div class="dropdown-menu" aria-labelledby="navbarDropdown">
												<a class="dropdown-item text-dark" href="alterar_cabecalho.php?id=1">Usuário Cliente</a>
												<a class="dropdown-item text-dark" href="alterar_cabecalho.php?id=2">Usuário Vendedor</a>
												
											</div>
										</li>';
									}
									echo'
										<a class="nav-item nav-link" id="logout" href="logout.php">Sair</a>
									</div>
								</div>
							</nav>
						</div>';
					}
					if($_SESSION["cargo"]==2){
						echo'
						<!-- NavBar -->
						<div class="container" id="nav-container">
							<nav class = "navbar navbar-expand-lg navbar-dark">
								<a href="index.php" class="navbar-brand">
									<img  id="logo" src="img/Logo.png" href = "index.php" alt="Logo Site" href="index.html"> IFyou
								</a>
								<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-links" 
									aria-controls="navbar-links" aria-expanded="false" aria-label="Toggle navigation">
									<span class = "navbar-toggler-icon"></span>
								</button>
								<div class="collapse navbar-collapse justify-content-end" id="navbar-links">
									<div class ="navbar-nav">
										<a class="nav-item nav-link" href="">Home/Negocioações</a>
										<a class="nav-item nav-link" href="cadastro_de_produtos.php">Cadastrar Produtos</a>
										<a class="nav-item nav-link" href="lista_produtos_vendedor.php">Meus Produtos</a>
										<a class="nav-item nav-link" id="perfil" href="perfil.php">Perfil</a>';
										if($_SESSION["tipo_de_usuario"]>1){
											
											echo'
											<li class="nav-item dropdown">
												<a class="nav-link dropdown-toggle nav-drop" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
													Alterar Usuário
												</a>
												<div class="dropdown-menu" aria-labelledby="navbarDropdown">
													<a class="dropdown-item text-dark" href="alterar_cabecalho.php?id=1">Usuário Cliente</a>
													<a class="dropdown-item text-dark" href="alterar_cabecalho.php?id=2">Usuário Vendedor</a>
													
												</div>
											</li>';
									}
									echo'
										<a class="nav-item nav-link" id="perfil" href="logout.php">Sair</a>
									</div>
								</div>
							</nav>
						</div>';
					}
					if($_SESSION["cargo"]==0){
						echo'
						<!-- NavBar -->
						<div class="container" id="nav-container">
							<nav class = "navbar navbar-expand-lg navbar-dark">
								<a href="index.php" class="navbar-brand">
									<img  id="logo" src="img/Logo.png" href = "index.php" alt="Logo Site" href="index.html"> IFyou
								</a>
								<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-links" 
									aria-controls="navbar-links" aria-expanded="false" aria-label="Toggle navigation">
									<span class = "navbar-toggler-icon"></span>
								</button>
								<div class="collapse navbar-collapse justify-content-end" id="navbar-links">
									<div class ="navbar-nav">
										<a class="nav-item nav-link" href="adm.php">Inicio</a>
										<a class="nav-item nav-link" href="index.php">Inicio dos usuarios</a>
										<a class="nav-item nav-link" href="historico_de_negociacoes.php">Historico de Negociações</a>
										<a class="nav-item nav-link" href="lista_produtos.php">Lista de Produtos</a>
										<a class="nav-item nav-link" href="lista_usuarios.php">Lista de usuarios</a>
										<a class="nav-item nav-link" href="cadastro_de_produtos.php">Cadastrar Produtos</a>
										<a class="nav-item nav-link" id="cadastro-menu" href="cadastro.html">Cadastro de Usuarios</a>

										<a class="nav-item nav-link" id="perfil" href="logout.php">Sair</a>
									</div>
								</div>
							</nav>
						</div>';
					}
				}
			?>
        </header>
		<?php
			if(isset($_SESSION["tipo_de_usuario"])){
				echo "<div id='botao'></div>";
			}
		?>
		