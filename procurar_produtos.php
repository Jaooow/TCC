<!DOCTYPE html>
<html lang="pt-Br">
	<?php
		session_start();
		include "inc/head.inc";
	?>
	<body>
		<form>
			<input class="form-control" type="text" name="procurar" id="procurar" placeholder="Pesquise pelo produto, comerciante, região !"/>
			<input type="submit" id="submeter_procura" value="Procurar"/> 
		</form>
		<div id="lista de produtos"></div>
	</body>
	<?php
		include "inc/footer.inc";
	?>
</html>