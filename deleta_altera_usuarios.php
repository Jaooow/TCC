<?php 
    include "conexao.php";
		$id=$_POST["id_deleta"];
		$tipo=$_POST["tipo"];
	
		if($tipo==1){
			
			$delete="DELETE from usuarios where id_usuario='$id'";
			
			mysqli_query($con, $delete) or die(mysqli_error($con));
		}
		if($_POST["tipo"]==2){
			
			$delete="DELETE from vendedores where cod_vendedor='$id'";
			$update="UPDATE usuarios SET tipo_de_usuario='1', tipo_de_negocio='Ausente' where id_usuario='$id'";
			mysqli_query($con, $delete) or die(mysqli_error($con));
			mysqli_query($con, $update) or die(mysqli_error($con));
		}
		if($_POST["tipo"]==3){
			
			$nome=$_POST["nome"];
			$email=$_POST["email"];
			$senha=$_POST["senha"];
			$senha=md5($senha);
			$update="UPDATE usuarios SET nome='$nome', email='$email', senha='$senha' where id_usuario='$id'";
			
			mysqli_query($con, $update) or die(mysqli_error($con));
		}
		if($tipo==4){
			$nome=$_POST["nome"];
			$email=$_POST["email"];
			$senha=$_POST["senha"];
			$senha=md5($senha);
			$cnpj=$_POST["cnpj"];
			$telefone=$_POST["telefone"];
			//$regiao=$_POST["regiao"];
			$tipo_de_negocio=$_POST["tipo_de_negocio"];
			
			$update="UPDATE usuarios SET nome='$nome', email='$email', senha='$senha' where id_usuario='$id'";
			echo $id;
			mysqli_query($con, $update) or die(mysqli_error($con));
			//regiao='$regiao', 
			$update="UPDATE vendedores SET cnpj='$cnpj', telefone='$telefone', tipo_negocio='$tipo_de_negocio' where cod_vendedor='$id'";
			
			 mysqli_query($con, $update) or die(mysqli_error($con));
		}
?>
