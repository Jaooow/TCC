<div class="modal fade" id="modal_alterar_produto" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Alterar dados</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
		<form method="post" enctype="multipart/form-data" action="alterar_produto.php">
		<input type="hidden" id="hidden" name="hidden" value="">
			<p>Foto produto:<span id="foto_produto_span"></span></p>
			<label for="nome_produto">Nome produto:</label>
			<input class="form-control" type="text" name="nome_produto_modal" id="nome_produto_modal"/>
			<br />
			<label for="preco_produto">Preço produto:</label>
			<input class="form-control" type="number" name="preco_produto" id="preco_produto"/>
			<br />
			<label for="tipo_produto">Tipo de Produto:</label>
			<select required="required" class="form-select" id="tipo_produto_modal" name="tipo_produto_modal">
				<option label="Escolha um tipo">Escolha um tipo</option>
				<option value="Roupas">Roupas</option>
				<option value="Doces">Doces</option>
				<option value="Comidas">Comidas</option>
				<option value="Esportes">Esportes</option>
				<option value="Verduras/Legumes">Verduras/Legumes</option>
			</select>
			<br />
			<label for="descricao_produto">Descrição do Produto:</label>
			<input class="form-control" type="text" name="descricao_produto" id="descricao_produto"/>
			<br />
			<label for="quantidade_produto">Quantidade do Produto:</label>
			<input class="form-control" type="number" name="quantidade_produto" id="quantidade_produto"/>
			<br />
			<label for="foto">Nova foto do Produto:</label>
			<input type="file" accept=".jpg,.jpeg,.png,.pdf" id="foto_produto" name="foto_produto" />
			<br />
      </div>
      <div class="modal-footer">
        <button type="button" id="cancelar_modal_altera_produto" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="submit" id="btn_altera_produto_vendedor" value="" class="btn btn-primary">Alterar</button>
      </div>
		</form>
    </div>
  </div>
</div>