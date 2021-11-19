
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
				<br/><br/><br/><br/>
				<div class="row">
					<div class="col-12">
						<h2>Confirme os itens:</h2>
					</div>
						<div class="col-12">
							<div class="compras">
								<div class="form-row">
									<div class="col">
										<img src="img/logo.png" alt="..." width="120px">
										<label for="">Produto:</label>
										<input type="text" class="form-control" placeholder="">
									</div>
									<div class="col">
										<label for="">Quantidade:</label>
										<input type="text" class="form-control" placeholder="">
									</div>
								</div>
								<div class="form-row">
									<div class="col">
										<label for="">Descrição:</label>
										<textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
									</div>
									<div class="col">
										<label for="">Valor Total:</label>
										<input type="text" class="form-control" placeholder="$">
									</div>
								</div>
							</div>
						</div>
				</div>
			</div>
			<br/>
			<h6> Deseja-se ver o status da sua solicitação? Vá em: <a href="negociacao_andamento.php">Negociações em Andamento.</a></h6>
		</div>
		<br />
		<div id="itens_negociacao"></div>
	</main>
<?php
	include "modal_carrinho.php";
	include "rodape.php";
?>