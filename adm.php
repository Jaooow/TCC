<?php
	include "cabecalho.php";
?>
<body>
	<main>
		<div class="products-area">
			<!--  Adicionar 3 a 6 imagens de produtos para compra com containers 12-4 -->
			<div class="container">
				<div class="row">
					<div class="col-md-3 search-box" id="Produtos_adm">
						<a href="lista_produtos.php"><div class="card">
							<img src="img/card-produtos.png" class="card-img-top" alt="Imagem Produto 1">
							<div class=" card-body">
								<h5 class = "card-title">Produtos</h5>
								
							</div>
						</div>
						</a>
					</div>
					<div class="col-md-3 search-box" id="usuarios_do_adm">
						<a href="lista_usuarios.php"><div class="card">
							<img src="img/card-usuarios.png" class="card-img-top" alt="Imagem Produto 2">
							<div class=" card-body">
								<h5 class = "card-title">Usuários</h5>
								
							</div>
						</div>
						</a>
					</div>
					<div class="col-md-3 search-box" id="gerenciamento">
						<a href="historico_de_negociacoes.php"><div class="card">
							<img src="img/card-gerenciamento.png" class="card-img-top" alt="Imagem Produto 3">
							<div class=" card-body">
								<h5 class = "card-title">Gerenciamento</h5>
								
							</div>
						</div>
						</a>
					</div>
					<div class="col-md-3 search-box" id="cadastros">
						<a href="cadastro.html"><div class="card">
							<img src="img/card-cadastros.png" class="card-img-top" alt="Imagem Produto 4">
							<div class=" card-body">
								<h5 class = "card-title">Cadastro de Usuarios</h5>
								
							</div>
						</div>
						</a>
					</div>
				</div>
			</div>
		</div>
	</main>
</body>
	<br/><br/><br/><br/>
<?php
	include "rodape.php";
?> 