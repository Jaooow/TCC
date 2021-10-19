<?php
	include "cabecalho.php";
?>
<main>
	<label for="filtro_produtos">Filtro:</label>
	<select class="form-control" id="filtro_produtos" name="filtros[]">
		<option label="Escolha um tipo" value="0">Escolha um tipo</option>
		<option value="Roupas">Roupas</option>
		<option value="Doces">Doces</option>
		<option value="Comidas">Comidas</option>
		<option value="Esportes">Esportes</option>
		<option value="Verduras/Legumes">Verduras/Legumes</option>
	</select>
	
	<label for="filtro_usuarios">Filtro de usuarios:</label>
	<select class="form-control" id="filtro_usuarios">
		<option label="Escolha um Usuario" value="0">Escolha um Usuario</option>
		<?php
			$select="SELECT nome, id_usuario FROM usuarios inner join vendedores on id_usuario=cod_vendedor";
			$res = mysqli_query($con, $select) or die(mysqli_error($con));
			while($linha=mysqli_fetch_assoc($res)){
				echo '<option value="'.$linha["id_usuario"].'">'.$linha["nome"].'</option>';
			}
		?>
	</select>
	
	<label for="filtro_preco">Filtro por preço:</label>
	<input type="number" name="filtro_preco" id="filtro_preco"/>
	
	<button type="button" id="filtrar" name="filtrar">Filtrar</button>
	
	<div id="recebe_filtrado"></div>
</main>
 <script src="js/script_lista_produtos.js"></script>
<?php
	include "rodape.php";
?> 