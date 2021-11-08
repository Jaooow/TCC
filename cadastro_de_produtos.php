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
		<div class="row">
			<div class="col-12">
				<h3 class ="main-title-search">Cadastro Produtos</h3>
			</div>
		</div>
		<div class="cadastro_produtos">
			<form method="post" enctype="multipart/form-data" action="cadastrar_produto.php">
				<!--<label for="nome_produto">Nome do Produto:</label>
					<input type="text" id="nome_produto" name="nome_produto" class="form-control"/>
				<br />
				<label for="descricao">Descrição do Produto:</label>
					<input type="text" id="descricao" name="descricao" class="form-control"/>
				<br />-->

				<div class="form-row">
					<div class="form-group col-md-6">
						<label for="nome_produto">Nome do Produto:</label>
						<input type="text" class="form-control" id="nome_produto" name = "nome_produto" placeholder="Nome">
					</div>
					<div class="form-group col-md-6">
						<label for="descricao">Descrição do Produto:</label>
						<input type="text" class="form-control" id="descricao" name = "descricao" placeholder="Descrição">
					</div>
				</div>
				<div class="form-row">
					<div class="form-group col-md-6">
						<label for="preco">Preço do Produto:</label>
						<input type="text" class="form-control" id="preco" name = "preco" placeholder="R$">
					</div>
					<div class="form-group col-md-6">
						<label for="quantidade">Quantidade:</label>
						<input type="text" class="form-control" id="quantidade" name = "quantidade" placeholder="Quantidade">
					</div>
				</div>
				<div class="form-row">
					<div class="form-group col-md-6">
						<label for="tipo_produto">Categoria:</label>
						<select  id="tipo_produto" name="tipo_produto" class="form-control">
							<option value="Roupas" selected>Roupas</option>
							<option value="Doces">Doces</option>
							<option value="Comidas">Comidas</option>
							<option value="Esportes">Esportes</option>
							<option value="Verduras/Legumes">Verduras/Legumes</option>
						</select>
					</div>
					<div class="form-group col-md-6">
						<label for="foto">Foto do Produto:</label>
						<input type="file" accept=".jpg,.jpeg,.png,.pdf" id="foto" name="foto" />
						<br />
					</div>
				</div>
				
				<div id="msg" class="text-danger"></div>
				<br />

				<button type="submit" class="btn btn-primary" id="cadastrar_produto" name="cadastrar_produto">Cadastrar</button>
				<button type="reset" class="btn btn-secondary" id="limpar" name="limpar">Limpar</button>
			</form>
		</div>
	</div>
</main>
<?php
	include "rodape.php";
?> 