
<?php
	include "cabecalho.php";
?>
<body>
	<main>
		<!-- Search Products -->
		<div id="procurar-produtos">
				<form action="#" method="POST">
					<div class="form-group row">
						<label for="procurar" class="col-sm-2 col-form-label"><i class="fas fa-search"></i></label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="procurar" name="procurar" placeholder="Procure pelo produto, comerciante e região !">
						</div>
					</div>
				</form>
		</div>
		<div class="underline-table">
			<!--  Adicionar 3 a 6 imagens de produtos para compra com containers 12-4 -->
		</div>
		<!-- Table Produtos e demais-->
		<div id="tabela-produtos">
			<div class="container-fluid">
				<table class="table">
					<thead>
						<tr>
							<th scope="col">#</th>
							<th scope="col">Produto</th>
							<th scope="col">Comerciante</th>
							<th scope="col">Região</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<th scope="row">1</th>
							<td>Doces e Bolos</td>
							<td>Palmirinha</td>
							<td>Vila Xavier</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</main>
</body>
<?php
	include "inc/footer.inc";
?>
</html>