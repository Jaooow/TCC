<?php
	session_start();
	$id=$_GET["id"];
	if($id==1){
		$_SESSION["cargo"]=1;
		header("Location: procurar_produtos.php");
	}
	else{
		$_SESSION["cargo"]=2;
		header("Location: perfil.php");
	}
?>