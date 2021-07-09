<?php
	include "cabecalho.php";
?>
<main>
	<div class = "container">
		<div id="perfil">
			<div class="container">
				<div class="row">
					<div class="col-md-3">
						<img src="img/avatar.png"  class = "img_perfil" alt="avatar" name = "avatar"/>
						<div class="col-12">
							<p><i class="fas fa-user"></i><a href="">Minha Conta</a></p>
							<p><i class="fas fa-shopping-cart"></i><a href="">Minhas Compras</a></p>
						</div>
					</div>
					<div class="col-md-8">
						<h3>Minha Conta</h3>
						<ul class="list-group">
							<li class="list-group-item"><i class="fas fa-user"></i>Nome: <span id="nome_perfil" ></span></li>
							<li class="list-group-item"><i class="fas fa-envelope"></i>Email: <span id="email_perfil"></span></li>
							<li class="list-group-item"><i class="fas fa-id-card"></i>Cargo: <span id="cargo"></span> 
							<li class="list-group-item"><i class="far fa-chart-bar"></i>Negócio: <span id="tipo_negocio"></span></li>
							<li class="list-group-item"><i class="fas fa-folder-open "></i>Documentação: <span id="documentacao"></span></li>
						</ul>
						<a class = "mudar_cargo" href="mudar_cargo.php">Mudar Cargo</a>
						<button type="button" class="btn btn-warning">Alterar</button>
					</div>
				</div>	
			</div>
		</div>


		<!--
		<div id = "perfil">
			<img src="img/avatar.png" alt="avatar" name = "avatar"/>

			<ul class="list-group">
				<li class="list-group-item disabled"><i class="fas fa-user"></i>Nome:<span id="nome_perfil"></span></li>
				<li class="list-group-item"><i class="fas fa-envelope"></i>Email:<span id="email_perfil"></span></li>
				<li class="list-group-item"><i class="fas fa-id-card"></i>Cargo:<span id="cargo"></span> 
				<br/><br/>
				<a id="mudar_cargo" href="mudar_cargo.php" >Mudar cargo para vendedor</a></li>
				<li class="list-group-item"><i class="far fa-chart-bar"></i>Negócio:<span id="tipo_negocio"></span></li>
				<li class="list-group-item"><i class="fas fa-folder-open "></i>Documentação:<span id="documentacao"></span></li>
			</ul>
			<button type="button" class="btn btn-warning">Alterar</button>
		</div>
	</div>-->
</main>
<?php
	include "rodape.php";
?>