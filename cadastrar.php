<?php
    include "conexao.php";
    $nome=$_POST["nome"];
    $email=$_POST["email"];
    $senha=$_POST["senha"];
	$tipo_de_negocio="Ausente";
	$tipo_de_usuario=1;
	$cargo=1;
    $senha=md5($senha);

    $insert= "INSERT INTO usuarios(
                                    nome,
                                    email,
                                    senha,
									tipo_de_negocio,
									tipo_de_usuario,
									cargo
                                ) VALUES (
                                    ?,
                                    ?,
                                    ?,
                                    ?,
                                    ?,
									?
                                )";


if($stmt = mysqli_prepare($con, $insert)) { 

    mysqli_stmt_bind_param($stmt, "ssssss", $nome, $email, $senha, $tipo_de_negocio, $tipo_de_usuario, $cargo);
    

    mysqli_stmt_execute($stmt);
  
    mysqli_stmt_close($stmt);
}
mysqli_close($con);

?>