<?php
	include "cabecalho.php";
?>

<body>
	<main>
		<div class="products-area">
			<!--  Adicionar 3 a 6 imagens de produtos para compra com containers 12-4 -->
			<div class="container">
				<div class="row">
					
					<div class="col-md-3 search-box" id="roupas">
						
					</div>
					<div class="col-sm-3 search-box" id="andamento_tratamanto">
						<div class="card">
							<img src="img/card-usuarios.png" class="card-img-top" alt="Imagem de Negociações me Andamento">
							<div class=" card-body">
								<h5 class = "card-title">Negociações em Andamento</h5>
								
							</div>
						</div>
					</div>
					<div class="col-md-3 search-box" id="finalizadas_tratamento">
						<div class="card">
							<img src="img/card-gerenciamento.png" class="card-img-top" alt="Imagem de Negociações Finalizadas">
							<div class=" card-body">
								<h5 class = "card-title">Negociações Finalizadas</h5>
								
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="botoes">
			<div class="container">
				<div class="row">
					<div class="col-md-6">

					</div>
					<div class="col-md-12">
						<div id="botoes"></div>
					</div>
				</div>
			</div>
		</div>
		<br />
		<div id="tratamento"></div>
	</main>
</body>
<br/><br/><br/><br/>
<?php
	include "modal_carrinho.php";
	include "rodape.php";
?>