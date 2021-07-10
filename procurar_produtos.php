
<?php
	include "cabecalho.php";
?>
<body>
	<main>
		<!-- Search Products -->
		<div id="procurar-produtos">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<h3 class ="main-title-search">Encontre Diversos Produtos</h3>
                    </div>
					<div class="col-md-11">
						<div class="input-group">
							<input type="text" class="form-control input-produtos" id="procurar_produto" aria-describedby="Procurar Produto" placeholder="Procurar por produtos e marcas">
						</div>
					</div>
					<div class="col-md-1">
						<button type="button" class="btn btn-danger">
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
					<div class="col-md-3 search-box">
						<div class="card">
							<img src="img/card-camiseta.jpg" class="card-img-top" alt="Imagem Produto 1">
							<div class=" card-body">
								<h5 class = "card-title">Roupas</h5>
								<p class = "card-text">Informação</p>
							</div>
						</div>
					</div>
					<div class="col-md-3 search-box">
						<div class="card">
							<img src="img/card-doces.png" class="card-img-top" alt="Imagem Produto 2">
							<div class=" card-body">
								<h5 class = "card-title">Doces</h5>
								<p class = "card-text">Informação</p>
							</div>
						</div>
					</div>
					<div class="col-md-3 search-box">
						<div class="card">
							<img src="img/card-comida.png" class="card-img-top" alt="Imagem Produto 3">
							<div class=" card-body">
								<h5 class = "card-title">Comidas</h5>
								<p class = "card-text">Informação</p>
							</div>
						</div>
					</div>
					<div class="col-md-3 search-box">
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
					<div class="col-md-4">
						<div class="form-group">
							<label for="filtragem_produtos">Ordem Preço:</label>
							<select class="form-control" id="filtragem_produtos">
								<option>Menor</option>
								<option>Maior</option>
							</select>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div id="tabela_produtos"></div>
		
		<!-- Table Produtos e demais
		<div class="tabela-produtos">
			<div class="container">
				<div class="row">
					<div class="col-md-3">
						<div class="card">
							<img src="img/exemplo-card.jpg" class="card-img-top" alt="Imagem Produto 4">
							<div class=" card-body">
								<!-- Nome Produto 
								<h5 class = "card-title">Bola de Vôlei</h5>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<!-- Nome Produto 
						<h6>Bola de Vôlei</h6>
						<!-- Informação 
						<p class="info_produto">Bola de Vôlei Mikasa MVA350 </p>
						<br/><br/>
						<i class="fas fa-phone"></i> (99)99999-9999
						<p class="produto_vendedor">Vendedor: João Pedro Catarina Conçolaro</p>
					</div>
					<div class="col-md-5">
						<!-- Preço 
						<p class = "preco_produto">R$ 150,00</p>
						<br/>
						<h7>Seção:</h7><p class=secao_produtos>Esportes</p>
					</div>
				</div>
			</div>
		</div>-->
	</main>
</body>
<?php
	include "inc/footer.inc";
?>
</html>