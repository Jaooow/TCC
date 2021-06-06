<?php
	session_start();
	include "cabecalho.php";
?>
	<div>
		<img src=""/>
		<table>
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
				<td>Cargo:<span id="cargo_perfil"></span> <button id="mudar_cargo" href="#" data-toggle="modal" data-target="#modal_cargo">Mudar cargo</button></td>
			</tr>
		</table>
	</div>
<?php
	include "rodape.html";
?>