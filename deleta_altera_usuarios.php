<?php 
    include "conexao.php";
		$id=$_POST["id"];
		$tipo=$_POST["tipo"];
	
		if($_POST["tipo"]==1){
			
			$delete="DELETE from usuarios where id_usuario='$id'";
			
			mysqli_query($con, $delete) or die(mysqli_error($con));
		}
		if($_POST["tipo"]==2){
			
			$delete="DELETE from vendedores where cod_vendedor='$id'";
			
			mysqli_query($con, $delete) or die(mysqli_error($con));
			
			$updade="UPDATE usuarios SET tipo_de_usuario='1', tipo_de_negocio='Ausente' where id_usuario='$id'";
			
			mysqli_query($con, $update) or die(mysqli_error($con));
		}
		if($_POST["tipo"]==3){
			
			$nome=$_POST["nome"];
			$email=$_POST["email"];
			$senha=$_POST["senha"];
			$senha=md5($senha);
			$updade="UPDATE usuarios SET nome='$nome', email='$email', senha='$senha' where id_usuario='$id'";
			
			mysqli_query($con, $update) or die(mysqli_error($con));
		}
		if($_POST["tipo"]==4){
			
			$nome=$_POST["nome"];
			$email=$_POST["email"];
			$senha=$_POST["senha"];
			$senha=md5($senha);
			$cnpj=$_POST["cnpj"];
			$telefone=$_POST["telefone"];
			$regiao=$_POST["regiao"];
			$tipo_de_negocio=$_POST["tipo_de_negocio"];
			
			$updade="UPDATE usuarios SET nome='$nome', email='$email', senha='$senha' where id_usuario='$id'";
			
			mysqli_query($con, $update) or die(mysqli_error($con));
			
			$updade="UPDATE vendedores SET cnpj='$cnpj', telefone='$telefone', regiao='$regiao', tipo_negocio='$tipo_de_negocio' where cod_vendedor='$id'";
			
			mysqli_query($con, $update) or die(mysqli_error($con));
		}
?>
