<div class="modal fade" id="modal_cadastro" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Cadastrar-se</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
		<form action = "">
      <label for="nome">Nome:</label>
      <input type="text" name="nome" id="nome" placeholder="Insira seu Nome"/>
      <br />
      <label for="email">E-mail:</label>
      <input type="email" name="email" id="email" placeholder="Insira seu E-mail"/>
      <br />
      <label for="email">Senha:</label>
      <input type="password" name="senha" id="senha" placeholder="Insira uma Senha"/>
      <br />
      <label for="email">Confirmação de Senha:</label>
      <input type="password" name="confirma_senha" id="confirma_senha" placeholder="Insira sua Senha novamente"/>
      <br />
      <div id="mensagem" style="color:red;"></div>
		</form>
      </div>
      <div class="modal-footer">
        <button type="button" id="cancelar_modal" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="button" id="cadastrar" class="btn btn-primary">Cadastrar</button>
      </div>
    </div>
</div>
  </div>