<?php
	include "cabecalho.php";
if($_SESSION["tipo_de_usuario"]==0){
	echo'<div class = "container">
		<h1> Usuario ADM logado</h1>
	</div>';
}
else{
	

	echo'<main>
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
							<a class = "mudar_cargo" href="mudar_cargo.php">Mudar Cargo</a>';
									$id= $_SESSION["id_usuario"];
									echo'<button type="button" id="id_usuario" href="#" data-toggle="modal" data-target="#modal_alterar" value="'.$id.'" class="btn btn-warning">Alterar</button>';
						echo'</div>
					</div>	
				</div>
			</div>
	</main>
	<div class="modal fade" id="modal_alterar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog" role="document">
		<div class="modal-content">
		  <div class="modal-header">
			<h5 class="modal-title" id="exampleModalLabel">Alterar dados</h5>
			<button type="button" id="fecha" class="close" data-dismiss="modal" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>
		  </div>
		  <div class="modal-body">
				<label for="nome_altera">Nome:</label>
				<input class="form-control" type="text" name="nome_altera" id="nome_altera"/>
				<br />
				<label for="email_altera">E-mail:</label>
				<input class="form-control" type="email" name="email_altera" id="email_altera"/>
				<br />
				<label for="senha_altera">Senha:</label>
				<input required="required" class="form-control" type="password" name="senha_altera" id="senha_altera" placeholder="Insira uma nova Senha"/>
				<div id="mensagem" style="color:red;"></div>
				<br />
		  </div>
		  <div class="modal-footer">
			<button type="button" id="cancelar_modal_altera" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
			<button type="button" id="alterar_usuario_perfil" value="" class="btn btn-primary">Alterar</button>
		  </div>
		</div>
	  </div>
	</div>';
}

	include "rodape.php";
?>