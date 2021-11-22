<?php
	include "conexao.php";
	include "cabecalho.php";
?>
<main>
	<?php
		if(isset($_GET["conteudo"])){
			echo"<div class='text-danger'>".$_GET['conteudo']."</div>";
		}
	?>
	<label for="status_negociacao">Filtro:</label>
	<select class="form-control" id="status_negociacao">
		<option label="Escolha um tipo" value="0">Escolha o Status</option>
		<option value="0">Em andamento</option>
		<option value="1">Finalizada</option>
	</select>
	<label for="filtro_produtos_negociacao">Filtro:</label>
	<select class="form-control" id="filtro_produtos_negociacao" name="filtros[]">
		<option label="Escolha um tipo" value="0">Escolha um tipo</option>
		<option value="Roupas">Roupas</option>
		<option value="Doces">Doces</option>
		<option value="Comidas">Comidas</option>
		<option value="Esportes">Esportes</option>
		<option value="Verduras/Legumes">Verduras/Legumes</option>
	</select>
	
	<label for="filtro_usuarios_negociacao_vendedores">Filtro de usuarios Vendedores:</label>
	<select class="form-control" id="filtro_usuarios_negociacao_vendedores">
		<option label="Escolha um Usuario" value="0">Escolha um Usuario</option>
		<?php
			$select="SELECT nome, id_usuario FROM usuarios inner join vendedores on id_usuario=cod_vendedor";
			$res = mysqli_query($con, $select) or die(mysqli_error($con));
			while($linha=mysqli_fetch_assoc($res)){
				echo '<option value="'.$linha["id_usuario"].'">'.$linha["nome"].'</option>';
			}
		?>
	</select>
	
	<label for="filtro_usuarios_negociacao_consumidores">Filtro de usuarios Consumidores:</label>
	<select class="form-control" id="filtro_usuarios_negociacao_consumidores">
		<option label="Escolha um Usuario" value="0">Escolha um Usuario</option>
		<?php
			$select="SELECT nome, id_usuario FROM usuarios";
			$res = mysqli_query($con, $select) or die(mysqli_error($con));
			while($linha=mysqli_fetch_assoc($res)){
				echo '<option value="'.$linha["id_usuario"].'">'.$linha["nome"].'</option>';
			}
		?>
	</select>
	
	<label for="filtro_preco_negociacao">Filtro por preço:</label>
	<input type="number" name="filtro_preco_negociacao" id="filtro_preco_negociacao"/>
	
	<button type="button" id="filtrar_negociacao" name="filtrar_negociacao">Filtrar</button>
	
	<div id="recebe_filtrado_negociacao"></div>
</main>
<?php
	include "modal_altera_produto.php";
	include "rodape.php";
?> 