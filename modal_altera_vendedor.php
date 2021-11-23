<div class="modal fade" id="modal_alterar_vendedor" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Alterar dados</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
			<label for="nome_altera_vendedor">Nome:</label>
			<input class="form-control" type="text" name="nome_altera_vendedor" id="nome_altera_vendedor"/>
			<br />
			<label for="email_altera_vendedor">E-mail:</label>
			<input class="form-control" type="email" name="email_altera_vendedor" id="email_altera_vendedor"/>
			<br />
			<label for="senha_altera_vendedor">Senha:</label>
			<input required="required" class="form-control" type="password" name="senha_altera_vendedor" id="senha_altera_vendedor" placeholder="Insira uma nova Senha"/>
			<br />
			<label for="tipo_de_negocio_altera_vendedor">Tipo de Negocio:</label>
			<select class="form-control" id="tipo_de_negocio_altera_vendedor" name="tipo_de_negocio_altera_vendedor" required="required">
				<option value="Autonomo">Autonomo</option>
				<option value="Micro Produtor / Micro Empresario">Micro Produtor / Micro Empresario</option>
				<option value="Produtor ou vendedor de meio/alto porte">Produtor ou vendedor de Meio/Alto Porte</option>
			</select>
			<br />
			<label for="cnpj_altera">CNPJ:</label>
			<input class="form-control" type="number" name="cnpj_altera" id="cnpj_altera" />
			<br />
			<br />
			<label for="telefone_altera">Telefone:</label>
			<input class="form-control" type="number" name="telefone_altera" id="telefone_altera"/>
			<br />
			<!-- <label for="regiao_altera">Tipo de Negocio:</label>
			<select class="form-control" id="regiao_altera" name="regiao_altera" required="required">
				<option value="Autonomo">Autonomo</option>
				<option value="Micro Produtor / Micro Empresario">Micro Produtor / Micro Empresario</option>
				<option value="Produtor ou vendedor de meio/alto porte">Produtor ou vendedor de Meio/Alto Porte</option>
			</select>-->
      </div>
      <div class="modal-footer">
        <button type="button" id="cancelar_modal_altera_vendedor" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="button" id="alterar_vendedor" value="" class="btn btn-primary">Alterar</button>
      </div>
    </div>
  </div>
</div>