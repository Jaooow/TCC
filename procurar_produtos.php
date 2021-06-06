<?php
	session_start();
	include "cabecalho.php";
?>
	<form>
		<input class="form-control" type="text" name="procurar" id="procurar" placeholder="Digite o nome do comersiante ou nome do produto ou região em que deseja procurar comersiantes"/>
		<input type="submit" id="submeter_procura" value="Procurar"/> 
	</form>
	<div id="lista de produtos"></div>
<?php
	include "rodape.html";
?>