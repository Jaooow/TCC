<?php
	include "cabecalho.php";
?>
<main>
	<div class = "container">
		<div id = "mudar_cargo">
			<?php
				if(isset($_GET["conteudo"])){
					echo"<div class='text-danger'>".$_GET['conteudo']."</div>";
				}
			?>
			<form action="cadastrar_mudanca.php" enctype="multipart/form-data" method="POST">
				<div class="form-group">
					<label for="tipo_de_negocio_perfil"><h3>Tipo de Negocio</h3></label>
					<select class="form-control" id="tipo_de_negocio_perfil" name="tipo_de_negocio_perfil" required="required">
					<option value="1">Autonomo</option>
					<option value="2">Micro Produtor / Micro Empresario</option>
					<option value="3">Produtor ou vendedor de Meio/Alto Porte</option>
					</select>
				</div>
				<div class="form-group">
					<label for="telefone_perfil"><h3>Digite seu nimero de celular com Whatsapp:</h3></label>
					<input type="text" class="form-control" id="telefone_perfil" name="telefone_perfil" required="required" placeholder="+55(16)xxxxx-xxxx">
				</div>
				<div class="form-group">
					<label for="cnpj_perfil">CNPJ:</label>
					<input type="text" class="form-control" id="cnpj_perfil" name="cnpj_perfil" placeholder="CNPJ (Caso Tenha)">
				</div>
				<div class="documento">
					<label for="documento_perfil">Documentação (Caso Tenha):</label>
					<input type="file" accept=".docx,.pdf" class="form-control-file" name="documento_perfil" id="documento_perfil">
				</div>
				</br>
				<input type="submit" id="cadastrar_mudanca" name="cadastrar_mudanca" value="Mudar" class = "alter_button">
			</form>
		</div>
	</div>
</main>
<?php
	include "rodape.php";
?>