
<?php
include "conexao.php";
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
					<div style="color:red;">Selecione apenas produtos do mesmo vendedor, se deseja comprar peodutos de vendedores diferentes faça negociações separadas com vendedores distintos.</div>
					<div class="col-md-10">
						<label for="select_usuarios_produtos">Filtre por Vendedores:</label>
						<select class="form-control" id="select_usuarios_produtos">
							<option label="Escolha um Usuario" value="0">Escolha um Vendedor</option>
							<?php
								$select="SELECT nome_vendedor, cod_vendedor FROM vendedores";
								$res = mysqli_query($con, $select) or die(mysqli_error($con));
								while($linha=mysqli_fetch_assoc($res)){
									echo '<option value="'.$linha["cod_vendedor"].'">'.$linha["nome_vendedor"].'</option>';
								}
							?>
						</select>
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
								<!--<p class = "card-text">Informação</p>-->
							</div>
						</div>
					</div>
					<div class="col-md-3 search-box" id="doces">
						<div class="card">
							<img src="img/card-doces.png" class="card-img-top" alt="Imagem Produto 2">
							<div class=" card-body">
								<h5 class = "card-title">Doces</h5>
								
							</div>
						</div>
					</div>
					<div class="col-md-3 search-box" id="comidas">
						<div class="card">
							<img src="img/card-comida.png" class="card-img-top" alt="Imagem Produto 3">
							<div class=" card-body">
								<h5 class = "card-title">Comidas</h5>
								
							</div>
						</div>
					</div>
					<div class="col-md-3 search-box" id="esportes">
						<div class="card">
							<img src="img/card-esporte.png" class="card-img-top" alt="Imagem Produto 4">
							<div class=" card-body">
								<h5 class = "card-title">Esporte</h5>
								
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
		
		<div id="tabela_produtos">
		<?php
			
			$tabela="";
			$select="SELECT foto, id_produto, produtos.nome as nome_produto, preco, tipo_produto, descricao, telefone, usuarios.nome as nome_usuario FROM produtos 
			inner join vendedores on produtos.cod_vendedor=vendedores.cod_vendedor 
			inner join usuarios on id_usuario=vendedores.cod_vendedor";
			$res = mysqli_query($con, $select) or die(mysqli_error($con));
			while($linha=mysqli_fetch_assoc($res)){
				$tabela.='<!-- Table Produtos e demais-->
			<div class="tabela-produtos">
				<div class="container">
					<div class="row">
						<div class="col-md-3">
							<div class="card">
								<img src="fotos/'.$linha["foto"].'" class="card-img-top" alt="Imagem Produto 4">
								<div class=" card-body">
									<!-- Nome Produto -->
									<h5 class = "card-title">'.$linha["nome_produto"].'</h5>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<!-- Nome Produto -->
							<h6>'.$linha["nome_produto"].'</h6>
							<!-- Informação -->
							<p class="info_produto">'.$linha["descricao"].'</p>
							<br/><br/>
							<i class="fas fa-phone"></i> '.$linha["telefone"].'
							<p class="produto_vendedor">'.$linha["nome_usuario"].'</p>
						</div>
						<div class="col-md-5">
							<!-- Preço -->
							<p class = "preco_produto">R$ '.$linha["preco"].'</p>
							
							<label for="">Quantidade:</label>
							<input type="number" class="form-control" id="produto'.$linha["id_produto"].'" />
							<br />
							<button type="button" class="btn btn-primary" value="'.$linha["id_produto"].'">Selecionar Quantidade</button>
							<br /><br />
							<h7>Seção:</h7><p class=secao_produtos>'.$linha["tipo_produto"].'</p>
						</div>
					</div>
				</div>
			</div>
			<br />';
			}
			echo $tabela;
		?>
		</div>
		
	</main>
</body>
<?php
	include "rodape.php";
?>
</html>