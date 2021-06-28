<?php
	include "cabecalho.php";
?>
<main>
	<div class = "container">
		<form class="form-control">
			<label for="nome_produto">Nome do Produto:</label>
			<input type="text" id="nome_produto" name="nome_produto" class="form-control"/>
			<br />
			<label for="descricao">Descrição do Produto:</label>
			<input type="text" id="descricao" name="descricao" class="form-control"/>
			<br />
			<label for="preco">Preço do Produto:</label>
			<input type="number" id="preco" name="preco" />
			<br />
			<label for="foto">Foto do Produto:</label>
			<input type="file" accept=".jpg,.jpeg,.png,.pdf" id="foto" name="foto" />
			<br />
			<div id="msg" class="text-danger bg-dark"></div>
			<br />
			<button class="btn btn-primary" id="cadastrar_produto" name="cadastrar_produto">Cadastrar</button>
			<button type="reset" class="btn btn-secondary" id="limpar" name="limpar">limpar</button>
		</form>
	</div>
</main>
<script src="js/script_cadastro_produto.js"></script>
<?php
	include "rodape.php";
?>