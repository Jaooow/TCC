<?php
	include "cabecalho.php";
?>
<main>
	<div class = "container">
		<?php
			if(isset($_GET["conteudo"])){
				echo"<div class='text-danger'>".$_GET['conteudo']."</div>";
			}
		?>
		<form method="post" enctype="multipart/form-data" action="cadastrar_produto.php">
			<label for="nome_produto">Nome do Produto:</label>
			<input type="text" id="nome_produto" name="nome_produto" class="form-control"/>
			<br />
			<label for="descricao">Descrição do Produto:</label>
			<input type="text" id="descricao" name="descricao" class="form-control"/>
			<br />
			<label for="preco">Preço do Produto:</label>
			<input type="number" id="preco" name="preco" />
			<br />
			<label for="tipo_produto">Tipo de Produto:</label>
			<select class="form-select" id="tipo_produto" name="tipo_produto">
				<option value="Roupas">Roupas</option>
				<option value="Doces">Doces</option>
				<option value="Comidas">Comidas</option>
				<option value="Esportes">Esportes</option>
				<option value="Verduras/Legumes">Verduras/Legumes</option>
			</select>
			<br />
			<label for="quantidade">Quantidade:</label>
			<input type="number" id="quantidade" name="quantidade" />
			<br />
			<label for="foto">Foto do Produto:</label>
			<input type="file" accept=".jpg,.jpeg,.png,.pdf" id="foto" name="foto" />
			<br />
			<div id="msg" class="text-danger"></div>
			<br />
			<button type="submit" class="btn btn-primary" id="cadastrar_produto" name="cadastrar_produto">Cadastrar</button>
			<button type="reset" class="btn btn-secondary" id="limpar" name="limpar">limpar</button>
		</form>
	</div>
</main>
<?php
	include "rodape.php";
?>