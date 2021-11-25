<?php

	$host = "us-cdbr-east-04.cleardb.com";
	$bd = "heroku_dc4bc4f63154b1a";
	$usuario = "b16ab79e4f5db0";
	$senha = "c02b32de";

	$con = mysqli_connect($host,$usuario,$senha,$bd) or die("Erro ao abrir a conexão com o banco de dados.");

	mysqli_set_charset($con, "utf8");
?>