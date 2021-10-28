<?php 
    include "conexao.php";
		if(isset($_POST["id"])){

			$id=$_POST["id"];
			$dados="";
			
			$select="SELECT tipo_de_usuario, id_usuario, tipo_de_negocio, email, nome FROM usuarios WHERE id_usuario='$id'";
			
			$res = mysqli_query($con, $select) or die(mysqli_error($con));
			while($linha=mysqli_fetch_assoc($res)){
				if($linha["tipo_de_usuario"]==2){
					$select2="SELECT cnpj, documentacao, regiao, telefone FROM vendedores WHERE cod_vendedor='$id'";
					$res = mysqli_query($con, $select) or die(mysqli_error($con));
					while($linha2=mysqli_fetch_assoc($res)){
						$dados.='<fieldset>
							<legend>Dados dos usuarios</legend>
							<p><b>Nome:</b>'.$linha["nome"].'</p>
							<p><b>Email:</b>'.$linha["email"].'</p>
							<p><b>telefone:</b>'.$linha2["telefone"].'</p>
							<p><b>Tipo de usuario:</b>Comersiante</p>
							<p><b>Tipo de negocio:</b>'.$linha["tipo_de_negocio"].'</p>
							<p><b>CNPJ:</b>'.$linha2["cnpj"].'</p>
							<p><b>Região:</b>'.$linha2["regiao"].'</p>
							<p><b>Documento:</b><a href="documentos/'.$linha2["documentacao"].'">'.$linha2["documentacao"].'</a></p>
							<button onclick="deleta_usuario('.$linha["id_usuario"].')">Deletar usuario</button>
							<button onclick="deleta_usuario_vendedor('.$linha["id_usuario"].')">Remover como vendedor</button>
							<button onclick="monta_modal_vendedor('.$linha["id_usuario"].')" href="#" data-toggle="modal" data-target="#modal_alterar_vendedor">Alterar</button>
						</fieldset>
						<br />';
					}
				}
				else{
					$dados.='<fieldset>
						<legend>Dados dos usuarios</legend>
						<p><b>Nome:</b>'.$linha["nome"].'</p>
						<p><b>Email:</b>'.$linha["email"].'</p>
						<p><b>Tipo de negocio:</b>'.$linha["tipo_de_negocio"].'</p>
						<p><b>Tipo de usuario:</b>Cliente</p>
						<button onclick="deleta_usuario('.$linha["id_usuario"].')">Deletar usuario</button>
						<button onclick="monta_modal('.$linha["id_usuario"].')" href="#" data-toggle="modal" data-target="#modal_alterar">Alterar</button>
					</fieldset>
					<br />';
				}
			}
			echo $dados;
		}
		else{
			$dados="";
			
			$select="SELECT tipo_de_usuario, id_usuario, tipo_de_negocio, email, nome FROM usuarios";
			
			$res = mysqli_query($con, $select) or die(mysqli_error($con));
			while($linha=mysqli_fetch_assoc($res)){
				if($linha["tipo_de_usuario"]==2){
					$select2="SELECT cnpj, documentacao, regiao, telefone FROM vendedores WHERE cod_vendedor='$id'";
					$res = mysqli_query($con, $select) or die(mysqli_error($con));
					while($linha2=mysqli_fetch_assoc($res)){
						$dados.='<fieldset>
							<legend>Dados dos usuarios</legend>
							<p><b>Nome:</b>'.$linha["nome"].'</p>
							<p><b>Email:</b>'.$linha["email"].'</p>
							<p><b>telefone:</b>'.$linha2["telefone"].'</p>
							<p><b>Tipo de usuario:</b>Comersiante</p>
							<p><b>Tipo de negocio:</b>'.$linha["tipo_de_negocio"].'</p>
							<p><b>CNPJ:</b>'.$linha2["cnpj"].'</p>
							<p><b>Região:</b>'.$linha2["regiao"].'</p>
							<p><b>Documento:</b><a href="documentos/'.$linha2["documentacao"].'">'.$linha2["documentacao"].'</a></p>
							<button onclick="deleta_usuario('.$linha["id_usuario"].')">Deletar usuario</button>
							<button onclick="deleta_usuario_vendedor('.$linha["id_usuario"].')">Remover como vendedor</button>
							<button onclick="monta_modal_vendedor('.$linha["id_usuario"].')" href="#" data-toggle="modal" data-target="#modal_alterar_vendedor">Alterar</button>
						</fieldset>
						<br />';
					}
				}
				else{
					$dados.='<fieldset>
						<legend>Dados dos usuarios</legend>
						<p><b>Nome:</b>'.$linha["nome"].'</p>
						<p><b>Email:</b>'.$linha["email"].'</p>
						<p><b>Tipo de negocio:</b>'.$linha["tipo_de_negocio"].'</p>
						<p><b>Tipo de usuario:</b>Cliente</p>
						<button onclick="deleta_usuario('.$linha["id_usuario"].')">Deletar usuario</button>
						<button onclick="monta_modal('.$linha["id_usuario"].')" href="#" data-toggle="modal" data-target="#modal_alterar">Alterar</button>
					</fieldset>
					<br />';
				}
			}
			echo $dados;
		}
?>
