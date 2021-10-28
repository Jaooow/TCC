<?php 
    header("Content-Type: application/json");
    include "conexao.php";
		$id=$_POST["id"];
		$vetor=[];
        $select="SELECT tipo_de_usuario, id_usuario, tipo_de_negocio, email, nome FROM usuarios WHERE id_usuario='$id'";
		$res = mysqli_query($con, $select) or die(mysqli_error($con));
		while($linha=mysqli_fetch_assoc($res)){
			if($linha["tipo_de_usuario"]==2){
				$select2="SELECT cnpj, documentacao, regiao, telefone FROM vendedores WHERE cod_vendedor='$id'";
				$res = mysqli_query($con, $select) or die(mysqli_error($con));
				while($linha2=mysqli_fetch_assoc($res)){
					$vetor["id_usuario"]=$linha["id_usuario"];
					$vetor["nome"]=$linha2["nome"];
					$vetor["email"]=$linha2["email"];
					$vetor["cnpj"]=$linha2["cnpj"];
					$vetor["telefone"]=$linha2["telefone"];
				}
			}
			else{
				$vetor["id_usuario"]=$linha["id_usuario"];
				$vetor["nome"]=$linha["nome"];
				$vetor["email"]=$linha["email"];
			}
		}
		echo json_encode($vetor);
?>
