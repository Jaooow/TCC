<?php
	session_start();
    include "conexao.php";
    $nome_produto=$_POST["nome_produto"];
    $descricao=$_POST["descricao"];
    $preco=$_POST["preco"];
	$foto=$_POST["foto"];
	$tipo_produto=$_POST["tipo_produto"];
	$tipo_produto=strtoupper($tipo_produto);
	$quatidade=$_POST["quantidade"];
	$id=$_SESSION["id_usuario"];
	
    $insert= "INSERT INTO produtos(
                                    nome,
                                    preco,
                                    descricao,
									cod_vendedor,
									tipo_produto, 
									quantidade
                                ) VALUES (
                                    ?,
                                    ?,
                                    ?,
                                    ?,
									?,
									?
                                )";


	if($stmt = mysqli_prepare($con, $insert)) { 
		mysqli_stmt_bind_param($stmt, "ssssss", $nome_produto, $preco,$descricao, $id, $tipo_produto, $quantidade);
			

		mysqli_stmt_execute($stmt);
	  
		mysqli_stmt_close($stmt);
	}

   $id= mysqli_insert_id($con);
   
   $insert= "INSERT INTO fotos(
                                    foto,
									cod_produto
                                ) VALUES (
                                    ?,
                                    ?
                                )";
	
	if($stmt = mysqli_prepare($con, $insert)) {

    mysqli_stmt_bind_param($stmt, "ss", $foto, $id);
    

    mysqli_stmt_execute($stmt);
  
    mysqli_stmt_close($stmt);
}
   
mysqli_close($con);
?>