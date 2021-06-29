<?php
	include "cabecalho.php";
?>
<main>
	<div class = "container">
		<div id = "mudar_cargo">
			<form action="cadastrar_mudanca.php" methhod="POST">
				<div class="form-group">
					<label for="tipo_de_negocio">Tipo de Negocio</label>
					<select class="form-control" id="tipo_de_negocio_select" name="tipo_de_negocio">
					<option value="1">Autonomo</option>
					<option value="2">Micro Produtor / Micro Empresario</option>
					<option value="3">Produtor ou vendedor de meio/alto porte</option>
					</select>
				</div>
				<div class="form-group">
					<input type="email" class="form-control" id="cnpj" name="cnpj" placeholder="CNPJ (Caso Tenha)">
				</div>
				<div class="documento">
					<label for="documento">Documentação (Caso Tenha):</label>
					<input type="file" accept=".docx,.pdf" class="form-control-file" name="documento" id="documento">
				</div>
				</br>
				<input type="button" id="cadastrar_mudanca" name="cadastrar_mudanca" value="mudar" class = "alter_button">
			</form>
		</div>
	</div>
</main>
<script src="js/script_mudar_cargo.js"></script>
<?php
	include "rodape.php";
?>