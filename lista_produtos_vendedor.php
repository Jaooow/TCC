<?php
	include "cabecalho.php";
?>
	<label for="filtro_produtos_vendedor">Filtro:</label>
	<select class="form-control" id="filtro_produtos_vendedor">
		<option label="Escolha um tipo" value="0">Escolha um tipo</option>
		<option value="Roupas">Roupas</option>
		<option value="Doces">Doces</option>
		<option value="Comidas">Comidas</option>
		<option value="Esportes">Esportes</option>
		<option value="Verduras/Legumes">Verduras/Legumes</option>
	</select>
	
	<label for="filtro_preco_vendedor">Filtro por preço:</label>
	<input type="number" name="filtro_preco_vendedor" id="filtro_preco_vendedor"/>
	
	<button type="button" id="filtrar_produtos" name="filtrar_produtos">Filtrar</button>
	
	<h3 class ="main-title-search">Meus Produtos</h3>
					
	<div id="recebe_produtos_vendedor">

	</div>
<?php
		include "modal_altera_produto.php";
		include "rodape.php"
?>