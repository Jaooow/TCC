
<?php
	include "cabecalho.php";
?>
	<main>
		<button type="button" href="negociacao_andamento.php">Negociações em Andamento</button>
		<button type="button" href="negociacao_finalizada.php">Negociações finalizadas</button>
		<p> se deseja ver o status da sua solicitação va em <a href="negociacao_andamento.php">Negociações em Andamento</a></p>
		<h2>Confirme os itens da sua compra:</h2>
		<br />
		<div id="itens_negociacao"></div>
	</main>
<?php
	include "modal_carrinho.php";
	include "rodape.php";
?>