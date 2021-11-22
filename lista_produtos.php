<?php
include "conexao.php";
	include "cabecalho.php";
?>

<body>
	<main>
		<?php
			if(isset($_GET["conteudo"])){
				echo"<div class='text-danger'>".$_GET['conteudo']."</div>";
			}
		?>
		<div class="container">
			<div class="row">
				<div class="col-12">
					<h3 class ="main-title-search">Lista Produtos</h3>
                </div>
				<div class="col-md-4">
					<label for="filtro_produtos">Filtro:</label>
					<select class="form-control" id="filtro_produtos" name="filtros[]">
						<option label="Escolha um tipo" value="0">Escolha um tipo</option>
						<option value="Roupas">Roupas</option>
						<option value="Doces">Doces</option>
						<option value="Comidas">Comidas</option>
						<option value="Esportes">Esportes</option>
						<option value="Verduras/Legumes">Verduras/Legumes</option>
					</select>
				</div>
				<div class="col-md-4">
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
					<br/>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4">
					<input type="number" name="filtro_preco" class="form-control" id="filtro_preco" placeholder="Filtro por preço"/>
				</div>
				<div class="col-md-1">
					<button type="button" id="filtrar" name="filtrar" class="btn btn-danger">Filtrar</button>
				</div>
			</div>
			<div id="recebe_filtrado"></div>
		</div>
	</main>
</body>

<?php
	include "modal_altera_produto.php";
	include "rodape.php";
?> 