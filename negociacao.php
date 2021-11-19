
<?php
	include "cabecalho.php";
?>
	<main>
		<div class="container">
			<div id="negociacao">
				<div class="row">
					<div class="col-12">
						<h3 class ="main-title">Negociações</h3>
					</div>
					<div class="col-md-6">
						<h4>Negociações em Andamento:</h4><br/>
						<button type="button" class = "alter_button" href="negociacao_andamento.php"><i class="fas fa-eye"> Veja</i></button>
						<br/>
					</div>
					<div class="col-md-6">
						<h4>Negociações finalizadas:</h4><br/>
						<button type="button" class = "alter_button" href="negociacao_finalizada.php"><i class="fas fa-eye"> Veja</i></button>
					</div>
				</div>
				<br/>
				<div class="tabela-produtos">
					<div class="container">
						<div class="row">
							<div class="col-md-3">
								<div class="card">
									<img src="img/card-comida.png" class="card-img-top" alt="Imagem Item">
									<div class=" card-body">
										<!-- Nome Produto -->
										<h5 class = "card-title">Nome Produto</h5>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<!-- Nome Produto -->
								<h6>Nome Produto</h6>
								<!-- Informação -->
								<p class="info_produto">Descrição</p>
								<br/><br/>
							</div>
							<div class="col-md-5">
								<!-- Preço -->
								<p class = "preco_produto">Valor Total: R$ 000.00</p>
								
								<p class="produto_vendedor">Preço (Un): R$ 000,00</p>
								<p class="produto_vendedor">Quantidade: 10</p>
								<br /><br />
								<h7>Seção:</h7><p class=secao_produtos>Comida</p>
							</div>
						</div>
					</div>
					<h8> Deseja-se ver o status da sua solicitação? Vá em: <a href="negociacao_andamento.php">Negociações em Andamento.</a></h8>
				</div>
			</div>
		</div>
		<br />
		<div id="itens_negociacao"></div>
	</main>
<?php
	include "modal_carrinho.php";
	include "rodape.php";
?>