<?php
	include "cabecalho.php";
?>
<main>
	<div class = "container">
		<div id = "perfil">
			<img src="img/avatar.png" alt="avatar" name = "avatar"/>

			<ul class="list-group">
				<li class="list-group-item disabled"><i class="fas fa-user"></i>Nome:<span id="nome_perfil"></span></li>
				<li class="list-group-item"><i class="fas fa-envelope"></i>Email:<span id="email_perfil"></span></li>
				<li class="list-group-item"><i class="fas fa-id-card"></i>Cargo:<span id="cargo"></span> <a id="mudar_cargo" class="btn btn-primary" href="mudar_cargo.php" >Mudar cargo para vendedor</a></li>
				<li class="list-group-item"><i class="far fa-chart-bar"></i>Negócio:<span id="tipo_negocio"></span></li>
				<li class="list-group-item"><i class="fas fa-folder-open "></i>Documentação:<span id="documentacao"></span></li>
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