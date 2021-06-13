
	<?php
		
		include "cabecalho.php";
	?>
	<body>
		<form>
			<input class="form-control" type="text" name="procurar" id="procurar" placeholder="Pesquise pelo produto, comerciante, região !"/>
			<button type="button" id="submeter_procura">Procurar</button> 
		</form>
		<div id="lista de produtos"></div>
	</body>
	<?php
		include "inc/footer.inc";
	?>
</html>