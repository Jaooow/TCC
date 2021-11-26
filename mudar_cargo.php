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
			<div class="row">
				<form action="cadastrar_mudanca.php">
					<div class="col-md-6">
						<div class="form-group">
							<label for="tipo_de_negocio_perfil"><h5>Tipo de Negócio</h5></label>
							<select class="form-control" id="tipo_de_negocio_perfil" name="tipo_de_negocio_perfil" required="required">
								<option value="1">Autonomo</option>
								<option value="2">Micro Produtor / Micro Empresario</option>
								<option value="3">Produtor ou vendedor de Meio/Alto Porte</option>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label for="telefone_perfil"><h5>Digite seu número de Whatsapp:</h5></label>
							<input type="text" class="form-control" maxlength="11" id="telefone_perfil" name="telefone_perfil" required="required" placeholder="(00) 90000-0000">
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label for="cnpj_perfil">CNPJ:</label>
							<input type="text" class="form-control" value="" id="cnpj_perfil" name="cnpj_perfil" placeholder="CNPJ (Caso Tenha)">
						</div>
					</div>
					<div class="col-md-6">
						<div class="documento">
							<br/>
							<label for="documento_perfil">Documentação (Caso Tenha):</label>
							<input type="file" accept=".docx,.pdf" value="" class="form-control-file" name="documento_perfil" id="documento_perfil">
							<br/>
						</div>
					</div>
					<div class="col-md-6">
						<label for="regiao_perfil">Bairro do seu estabelecimento:</label>
						<input type="text"  value=""  name="regiao_perfil" class="form-control" id="regiao_perfil" placeholder="Ex: Av. Heitor da Silva, Jardim Europa">
					</div>
					<div class="col-md-12">
						<br/>
						<input type="submit" href="cadastrar_mudanca.php" id="cadastrar_mudanca" name="cadastrar_mudanca" value="Mudar" class = "alter_button">
					</div>
				</form>
			</div>
		</div>
	</div>
</main>
<?php
	include "rodape.php";
?>
