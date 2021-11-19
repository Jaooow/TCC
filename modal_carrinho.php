<div class="modal fade" id="modal_carrinho" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Carrinho de compras</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					  <span aria-hidden="true">&times;</span>
					</button>
				</div>
			<div class="modal-body">
				<form method="post">
					<div class="row">
						<div class="col-md-3">
							<img src="img/logo.png" class = "imgcarrinho" alt="Foto Produto Selecionado" width="100px">
						</div>
						<div class="col-md-9">
							<input type="text" class="form-control" readonly placeholder="Nome Produto">
						</div>
						<div class="col-md-3">
							
						</div>
						<div class="col-md-9">
							<input type="text" class="form-control" placeholder="Quantidade">
						</div>
						<div class="col-md-9">
							
						</div>
						<div class="col-md-3">
							<br/>
							<button type="button" class="btn btn-danger">Deletar</button>
						</div>
						<div class="col-12">
							<br/>
							<div class="underline"></div>
						</div>
					</div>
					<br/><br/><br/><br/>
					<div id="recebe_modal"></div>
				</form>
			</div>
			<div class="modal-footer">
			<a href="negociacao.php"><button class="btn btn-success" >Finalizar Compras</button></a>
			</div>
		</div>
	</div>
</div>