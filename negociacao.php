
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
						<a href="negociacao_andamento.php"><button type="button" class = "alter_button"><i class="fas fa-eye"> Veja</i></button></a>
						<br/>
					</div>
					<div class="col-md-6">
						<h4>Negociações finalizadas:</h4><br/>
						<a href="negociacao_finalizada.php"><button type="button" class = "alter_button" ><i class="fas fa-eye"> Veja</i></button></a>
					</div>
				</div>
				<br/><br/><br/><br/>
				<div class="row">
					<div class="col-12">
						<h2>Confirme os itens:</h2>
					</div>
						
				<br/>
				<div class="tabela-produtos">
					<div id="itens_negociacao"></div>
					<h8> Deseja-se ver o status da sua solicitação? Vá em: <a href="negociacao_andamento.php">Negociações em Andamento.</a></h8>
				</div>
			</div>
		</div>
		<br />
		
	</main>
<?php
	include "modal_carrinho.php";
	include "rodape.php";
?>