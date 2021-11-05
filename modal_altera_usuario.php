<div class="modal fade" id="modal_alterar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Alterar dados</h5>
        <button type="button" id="fecha" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
			<label for="nome_altera">Nome:</label>
			<input class="form-control" type="text" name="nome_altera" id="nome_altera"/>
			<br />
			<label for="email_altera">E-mail:</label>
			<input class="form-control" type="email" name="email_altera" id="email_altera"/>
			<br />
			<label for="senha_altera">Senha:</label>
			<input required="required" class="form-control" type="password" name="senha_altera" id="senha_altera" placeholder="Insira uma nova Senha"/>
			<div id="mensagem" style="color:red;"></div>
			<br />
      </div>
      <div class="modal-footer">
        <button type="button" id="cancelar_modal_altera" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="button" id="alterar_usuario" value="" class="btn btn-primary">Alterar</button>
      </div>
    </div>
  </div>
</div>