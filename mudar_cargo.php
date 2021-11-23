<?php
	include "cabecalho.php";
?>
<link rel="stylesheet" href="css/login.css">	
<main>
	<div class = "container">
		<div id = "mudar_cargo">
			<?php
				if(isset($_GET["conteudo"])){
					echo"<div class='text-danger'>".$_GET['conteudo']."</div>";
				}
				
					
			?>
			<form action="cadastrar_mudanca.php" enctype="multipart/form-data" method="POST">
			<?php
				if(isset($_GET["usuario"]))
				{
					$usuario=$_GET["usuario"];
					echo'<input type="hidden" id="usuario_selecionado" name="usuario_selecionado" value="'.$usuario.'">';
				}
			?>
				<div class="form-group">
					<label for="tipo_de_negocio_perfil"><h3>Tipo de Negócio</h3></label>
					<select class="form-control" id="tipo_de_negocio_perfil" name="tipo_de_negocio_perfil" required="required">
					<option value="1">Autonomo</option>
					<option value="2">Micro Produtor / Micro Empresario</option>
					<option value="3">Produtor ou vendedor de Meio/Alto Porte</option>
					</select>
				</div>
				<div class="form-group">
					<label for="telefone_perfil"><h3>Digite seu número de Whatsapp:</h3></label>
					<input type="text" class="form-control" id="telefone_perfil" name="telefone_perfil" required="required" placeholder="+55 (16) 99999-9999">
				</div>
				<div class="form-group">
					<label for="cnpj_perfil">CNPJ:</label>
					<input type="text" class="form-control" value="" id="cnpj_perfil" name="cnpj_perfil" placeholder="CNPJ (Caso Tenha)">
				</div>
				<div class="documento">
					<label for="documento_perfil">Documentação (Caso Tenha):</label>
					<input type="file" accept=".docx,.pdf" value="" class="form-control-file" name="documento_perfil" id="documento_perfil">
					<br/>
				</div>
				<div >
					<label for="regiao_perfil">Bairro do seu estabelecimento:</label>
					<input type="text"  value=""  name="regiao_perfil" class="form-control" id="regiao_perfil" placeholder="Ex: Av. Heitor da Silva, Jardim Europa">
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