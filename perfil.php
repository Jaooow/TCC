<?php
	session_start();
	include "cabecalho.php";
?>
<main>
	<div class = "container">
		<div id = "perfil">
			<img src="img/avatar.png" alt="avatar" name = "avatar"/>

			<ul class="list-group">
				<li class="list-group-item disabled"><i class="fas fa-user"></i><span id="nome_perfil">Nome</span></li>
				<li class="list-group-item"><i class="fas fa-envelope"></i><span id="email_perfil">Email</span></li>
				<li class="list-group-item"><i class="fas fa-id-card"></i><span id="documentacao">Cargo</span></li>
				<li class="list-group-item"><i class="far fa-chart-bar"></i><span id="tipo_negocio">Negócio</span></li>
				<li class="list-group-item"><i class="fas fa-folder-open "></i><span id="documentacao">Documentação</span></li>
			</ul>
				<button type="button" class="btn btn-warning">Alterar</button>

			
			<!--<table>
				<tr>
					<td>Nome:<span id="nome_perfil"></span></td>
				</tr>
				<br />
				<tr>
					<td>E-mail:<span id="email_perfil"></span></td>
				</tr>
				<br />
				<div id="tipo_negocio"></div>
				<br />
				<div id="documentacao"></div>
				<br />
				<tr>
					<td>Cargo:<span id="cargo_perfil"></span> 
					<button id="mudar_cargo" href="#" data-toggle="modal" data-target="#modal_cargo">Mudar cargo</button></td>
				</tr>
			</table> -->
		</div>
	</div>
</main>
<?php
	include "rodape.php";
?>