<?php
	include "cabecalho.php";
?>
<main>
	<div class = "container">
		<div id = "mudar_cargo">	
			<form action="cadastrar_mudanca.php" methhod="POST">
				<div class="form-group">
					<label for="tipo_de_negocio"><h3>Tipo de Negocio</h3></label>
					<select class="form-control" id="tipo_de_negocio_select" name="tipo_de_negocio">
					<option value="1">Autonomo</option>
					<option value="2">Micro Produtor / Micro Empresario</option>
					<option value="3">Produtor ou vendedor de Meio/Alto Porte</option>
					</select>
				</div>
				<div class="form-group">
					<label for="telefone"><h3>Digite seu nimero de celular com Whatsapp:</h3></label>
					<input type="text" class="form-control" id="telefone" name="telefone" placeholder="+55(16)xxxxx-xxxx">
				</div>
				<div class="form-group">
					<input type="text" class="form-control" id="cnpj" name="cnpj" placeholder="CNPJ (Caso Tenha)">
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