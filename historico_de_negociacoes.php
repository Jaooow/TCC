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
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h3 class ="main-title-search">Histórico Negociações</h3>
			</div>
			<div class="col-md-4">
				<label for="status_negociacao">Filtro de status:</label>
				<select class="form-control" id="status_negociacao">
					<option label="Escolha um tipo" value="">Escolha o Status</option>
					<option value="0">Em andamento</option>
					<option value="1">Finalizada</option>
				</select>
				<br/>
			</div>
			<div class="col-md-4">
				<label for="filtro_produtos_negociacao">Filtro de tipo de produto:</label>
				<select class="form-control" id="filtro_produtos_negociacao" name="filtros[]">
					<option label="Escolha um tipo" value="">Escolha um tipo</option>
					<option value="Roupas">Roupas</option>
					<option value="Doces">Doces</option>
					<option value="Comidas">Comidas</option>
					<option value="Esportes">Esportes</option>
					<option value="Verduras/Legumes">Verduras/Legumes</option>
				</select>
				<br/>
			</div>
			<div class="col-md-4">
				<label for="filtro_usuarios_negociacao_vendedores">Filtro de usuarios Vendedores:</label>
				<select class="form-control" id="filtro_usuarios_negociacao_vendedores">
					<option label="Escolha um Usuario" value="">Escolha um Usuario</option>
					<?php
						$select="SELECT nome, id_usuario FROM usuarios inner join vendedores on id_usuario=cod_vendedor";
						$res = mysqli_query($con, $select) or die(mysqli_error($con));
						while($linha=mysqli_fetch_assoc($res)){
							echo '<option value="'.$linha["id_usuario"].'">'.$linha["nome"].'</option>';
						}
					?>
				</select>
				<br/>
			</div>
			<div class="col-md-4">
				<label for="filtro_usuarios_negociacao_consumidores">Filtro de usuarios Consumidores:</label>
				<select class="form-control" id="filtro_usuarios_negociacao_consumidores">
					<option label="Escolha um Usuario" value="">Escolha um Usuario</option>
					<?php
						$select="SELECT nome, id_usuario FROM usuarios";
						$res = mysqli_query($con, $select) or die(mysqli_error($con));
						while($linha=mysqli_fetch_assoc($res)){
							echo '<option value="'.$linha["id_usuario"].'">'.$linha["nome"].'</option>';
						}
					?>
				</select>
				<br/>
			</div>
			<div class="col-md-4">
				<label for="filtro_preco_negociacao">Filtro por preço:</label>
				<input type="number" name="filtro_preco_negociacao" class="form-control" id="filtro_preco_negociacao" placeholder="Ex: R$ 000,00"/>
				<br/>
			</div>
			<div class="col-md-1">
				<label for="filtrar_negociacao"><br/></label>
				<button type="button" id="filtrar_negociacao" name="filtrar_negociacao" class="btn btn-danger">Filtrar</button>
			</div>
		</div>
	</div>
	
	<div id="recebe_filtrado_negociacao"></div>
</main>
<?php
	include "modal_altera_produto.php";
	include "rodape.php";
?> 