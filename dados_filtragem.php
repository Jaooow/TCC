<!-- Table Produtos e demais-->
		<div class="tabela-produtos">
			<div class="container">
				<div class="row">
					<div class="col-md-3">
						<div class="card">
							<img src="img/exemplo-card.jpg" class="card-img-top" alt="Imagem Produto 4">
							<div class=" card-body">
								<!-- Nome Produto -->
								<h5 class = "card-title">"+valor.nome_produto+"</h5>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<!-- Nome Produto -->
						<h6>"+valor.nome_produto+"</h6>
						<!-- Informação -->
						<p class="info_produto">"+valor.descricao+"</p>
						<br/><br/>
						<i class="fas fa-phone"></i> "+valor.telefone+"
						<p class="produto_vendedor">"+valor.nome_vendedor+"</p>
					</div>
					<div class="col-md-5">
						<!-- Preço -->
						<p class = "preco_produto">R$"+valor.preco+"</p>
						<br/>
						<h7>Seção:</h7><p class=secao_produtos>"+valor.tipo_produto+"</p>
					</div>
				</div>
			</div>
		</div>