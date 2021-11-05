
<?php
	include "cabecalho.php";
?>
<body>
	<main>
		<div class="carrinho">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-10">

					</div>
					<div class="col-md-2">
						
					</div>
				</div>
			</div>
		</div>
		<!-- Search Products -->
		<div id="procurar-produtos">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<h3 class ="main-title-search">Encontre Diversos Produtos</h3>
                    </div>
					<div class="col-md-10">
						<div class="input-group">
							<input type="text" class="form-control input-produtos" id="procurar_produto" aria-describedby="Procurar Produto" placeholder="Procurar por produtos e marcas">
						</div>
					</div>
					<div class="col-md-1">
						<button type="button" id="procurar" class="btn btn-danger">
							<i class="fas fa-search"> Procurar </i>
						</button>
					</div>
				</div>
			</div>
		</div>
		<div class="products-area">
			<!--  Adicionar 3 a 6 imagens de produtos para compra com containers 12-4 -->
			<div class="container">
				<div class="row">
					<div class="col-md-3 search-box" id="roupas">
						<div class="card">
							<img src="img/card-camiseta.jpg" class="card-img-top" alt="Imagem Produto 1">
							<div class=" card-body">
								<h5 class = "card-title">Roupas</h5>
								<p class = "card-text">Informação</p>
							</div>
						</div>
					</div>
					<div class="col-md-3 search-box" id="doces">
						<div class="card">
							<img src="img/card-doces.png" class="card-img-top" alt="Imagem Produto 2">
							<div class=" card-body">
								<h5 class = "card-title">Doces</h5>
								<p class = "card-text">Informação</p>
							</div>
						</div>
					</div>
					<div class="col-md-3 search-box" id="comidas">
						<div class="card">
							<img src="img/card-comida.png" class="card-img-top" alt="Imagem Produto 3">
							<div class=" card-body">
								<h5 class = "card-title">Comidas</h5>
								<p class = "card-text">Informação</p>
							</div>
						</div>
					</div>
					<div class="col-md-3 search-box" id="esportes">
						<div class="card">
							<img src="img/card-esporte.png" class="card-img-top" alt="Imagem Produto 4">
							<div class=" card-body">
								<h5 class = "card-title">Esporte</h5>
								<p class = "card-text">Informação</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="filtragem_produtos">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="underline"></div>
					</div>
					<div class="col-md-4">
						<div class="form-group">
							<label for="filtragem_produtos">Filtro:</label>
							<select class="form-control" id="filtragem_produtos">
								<option value="Roupas">Roupas</option>
								<option value="Doces">Doces</option>
								<option value="Comidas">Comidas</option>
								<option value="Esportes">Esportes</option>
								<option value="Verduras/Legumes">Verduras/Legumes</option>
							</select>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div id="tabela_produtos"></div>
		
	</main>
</body>
<?php
	include "modal_carrinho.php";
	include "inc/footer.inc";
?>
</html>