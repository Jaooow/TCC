<?php
	session_start();
    include "conexao.php";
    $email=$_POST["email"];
    $senha=$_POST["senha"];
    $senha=md5($senha);

    $select="SELECT id_adm FROM adm WHERE email=? and senha=?";
    if($stmt = mysqli_prepare($con, $select)) { 

        mysqli_stmt_bind_param($stmt, "ss", $email, $senha);
        

        mysqli_stmt_execute($stmt);
      

        $resultado = mysqli_stmt_get_result($stmt);
        
        
        if(mysqli_num_rows($resultado) == 1) {
            
            $l = mysqli_fetch_assoc($resultado);

            header("Location: procurar_produtos.php");
        }
        mysqli_stmt_close($stmt);
        
    }
    else {
        echo "Houve um erro na preparação da consulta SQL:".mysqli_error($con);
    }

    $select="SELECT tipo_de_usuario, id_usuario FROM usuarios WHERE email=? and senha=?";
    if($stmt = mysqli_prepare($con, $select)) { 

        mysqli_stmt_bind_param($stmt, "ss", $email, $senha);
        

        mysqli_stmt_execute($stmt);
      

        $resultado = mysqli_stmt_get_result($stmt);
        
        
        if(mysqli_num_rows($resultado) == 1) {
            
            $l = mysqli_fetch_assoc($resultado);
			header("Location: procurar_produtos.php");
			$_SESSION["id_usuario"]=$l["id_usuario"];
			$_SESSION["cargo1"]=1;
			$_SESSION["cargo2"]=$l["cargo"]
            echo 1;
        }
        else {
            echo 0;
        }
        mysqli_stmt_close($stmt);
        
    }
    else {
        echo "Houve um erro na preparação da consulta SQL:".mysqli_error($con);
    }
    mysqli_close($con);
    
  
?>