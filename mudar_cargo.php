<?php
	include "cabecalho.php";
?>
<main>
	<div class = "container">
		<form>
			<label for="tipo_de_negocio">Tipo de Negocio:</label>
			<select id="tipo_de_negocio" name="tipo_de_negocio">
				<option value="1">Autonomo</option>
				<option value="2">Micro produtor / Micro empresario</option>
				<option value="3">Produtor ou vendedor de meio/alto porte</option>
			</select>
			<br />
			<label for="CNJP">CNPJ (caso tenha):</label>
			<input type="number" id="cnpj" name="cnpj" />
			<br />
			<label for="CNJP">Documentação(caso tenha):</label>
			<input type="file" accept=".docx,.pdf" id="documento" name="documento" />
		</form>
	</div>
</main>
<?php
	include "rodape.php";
?>