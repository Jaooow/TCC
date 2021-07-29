<?php 
session_start();
    header("Content-Type: application/json");
    include "conexao.php";
	$id=$_SESSION["id_usuario"];
	$tipo_usuario=$_SESSION["tipo_de_usuario"];
	if($tipo_usuario==2){
		$select="SELECT nome, email, tipo_de_negocio, documentacao, tipo_de_usuario FROM usuarios inner join vendedores on cod_vendedor=id_usuario WHERE id_usuario='$id'";
	}
	else{
		$select="SELECT nome, email, tipo_de_negocio, tipo_de_usuario FROM usuarios WHERE id_usuario='$id'";
	}
    $res = mysqli_query($con, $select) or die(mysqli_error($con));
    while($linha=mysqli_fetch_assoc($res)){
        $resultado[]= $linha;
    }
    echo json_encode($resultado);
?>
