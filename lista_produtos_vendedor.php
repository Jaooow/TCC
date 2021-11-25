<?php
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
			<div class="lista_vendedor">
				<div class="row">
					<div class="col-md-12">
						<h3 class ="main-title-search">Meus Produtos</h3>
					</div>
					<div class="col-md-6">
						<label for="filtro_produtos_vendedor">Filtro:</label>
						<select class="form-control" id="filtro_produtos_vendedor">
							<option label="Escolha um tipo" value="0">Escolha um tipo</option>
							<option value="Roupas">Roupas</option>
							<option value="Doces">Doces</option>
							<option value="Comidas">Comidas</option>
							<option value="Esportes">Esportes</option>
							<option value="Verduras/Legumes">Verduras/Legumes</option>
						</select>
						<br/>
					</div>
					<div class="col-md-5">
						<label for="filtro_preco_vendedor">Filtro por preço:</label>
						<input type="number" name="filtro_preco_vendedor" class="form-control" id="filtro_preco_vendedor" placeholder="Ex: R$ 000,00"/>
						<br/>
					</div>
					<div class="col-md-1">
						<label for=""><br/></label>
						<button type="button" id="filtrar_produtos" class="btn btn-danger" name="filtrar_produtos">Filtrar</button>
					</div>
					<div class="col-md-12">
						<br/>
						<div class="underline">
						
						</div>
					</div>
				</div>
			</div>
		</div>
	</main>
</body>
	

					
	<div id="recebe_produtos_vendedor">

	</div>
<?php
		include "modal_altera_produto.php";
		include "rodape.php"
?>