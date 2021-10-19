<?php
	session_start();
    include "conexao.php";
    $email=$_POST["email"];
    $senha=$_POST["senha"];
    $senha=md5($senha);
	$destino=0;

	
    $select="SELECT id_adm FROM adm WHERE email=? and senha=?";
    if($stmt = mysqli_prepare($con, $select)) { 

        mysqli_stmt_bind_param($stmt, "ss", $email, $senha);
        

        mysqli_stmt_execute($stmt);
      

        $resultado = mysqli_stmt_get_result($stmt);
        
        
        if(mysqli_num_rows($resultado) == 1) {
            
            $l = mysqli_fetch_assoc($resultado);
			
			$_SESSION["cargo"]=0;
			$_SESSION["tipo_de_usuario"]=0;
			$destino=1;
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
			$_SESSION["id_usuario"]=$l["id_usuario"];
			$_SESSION["cargo"]=1;
			$_SESSION["tipo_de_usuario"]=$l["tipo_de_usuario"];
			
			if($destino==0){
				$destino=2;
			}

            echo 1;
        }
        else {
			if($destino==0){
				$destino=3;
			}
            echo 0;
        }
        mysqli_stmt_close($stmt);
        
    }
    else {
        echo "Houve um erro na preparação da consulta SQL:".mysqli_error($con);
    }
    mysqli_close($con);
    
	if($destino==0){
		header("Location: login.php?id=2");
	}
  
	if($destino==1){
		header("Location: adm.php");
	}
	
	if($destino==2){
		header("Location: procurar_produtos.php");
	}
	
	if($destino==3){
		header("Location: login.php?id=1");
	}
?>