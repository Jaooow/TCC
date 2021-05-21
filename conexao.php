<?php

	$host = "localhost";
	$bd = "tcc";
	$usuario = "root";
	$senha = "usbw";

	$con = mysqli_connect($host,$usuario,$senha,$bd) or die("Erro ao abrir a conexão com o banco de dados.");

	mysqli_set_charset($con, "utf8");
?>