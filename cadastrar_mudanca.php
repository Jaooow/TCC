<?php
	session_start();
    include "conexao.php";
    $tipo_de_negocio=$_POST["tipo_de_negocio_perfil"];
	if($_POST["tipo_de_negocio_perfil"]==1){
		$tipo_de_negocio="Autonomo";
		echo "teste1";
	}
	if($_POST["tipo_de_negocio_perfil"]==2){
		$tipo_de_negocio="Micro produtor / Micro empresario";
		echo "teste2";
	}
	if($_POST["tipo_de_negocio_perfil"]==3){
		$tipo_de_negocio="Produtor ou vendedor de meio/alto porte";
		echo "teste3";
	}
	
	if($_POST["tipo_de_negocio_perfil"]==3 || $_POST["tipo_de_negocio_perfil"]==2){
		echo "teste4";
		$arquivo=$_FILES["documento_perfil"];
		
        // Tamanho máximo do arquivo em bytes
        $tamanho = 100000000;
        $error = array();
        // Verifica se o arquivo é uma imagem
        if(!preg_match("/.pdf\$/i",$arquivo["type"])){
            $error[1] = "Isso não é um Arquivo PDF.";
			$notifica="";
			foreach ($error as $erro) {
                $notifica.= $erro."//";
            }
			echo $arquivo["type"];
			header("Location: mudar_cargo.php?conteudo=$notifica");
            } 
        // Verifica se o tamanho da imagem é maior que o tamanho permitido
        if($arquivo["size"] > $tamanho) {
               $error[2] = "O arquivo deve ter no máximo ".$tamanho." bytes";
			foreach ($error as $erro) {
                $notifica.= $erro."//";
            }
			header("Location: mudar_cargo.php?conteudo=$notifica");
        }
        // Se não houver nenhum erro
        if (count($error) == 0) {
        
            // Gera um nome único para a imagem
            $nome_arquivo = md5(uniqid(time())) . ".pdf";
            // Caminho de onde ficará a imagem
            $caminho_arquivo = "documentos/" . $nome_arquivo;
            // Faz o upload da imagem para seu respectivo caminho
            move_uploaded_file($arquivo["tmp_name"], $caminho_arquivo);
        
            // Insere os dados no banco
			$tipo_de_usuario=2;
			$id=$_SESSION["id_usuario"];
			$_SESSION["tipo_de_usuario"]=2;
			
			$update= "UPDATE usuarios SET
											tipo_de_negocio='$tipo_de_negocio',
											tipo_de_usuario='$tipo_de_usuario'
										 WHERE 
											id_usuario = '$id'
										";
			mysqli_query($con, $update)or die(mysqli_error($con));
			
			$select="SELECT usuarios.nome as nome_vendedor FROM usuarios WHERE id_usuario='$id'";
			$res = mysqli_query($con, $select) or die(mysqli_error($con));
			while($linha=mysqli_fetch_assoc($res)){
				$resultado= $linha["nome_vendedor"];
			}
			
			$cnpj=$_POST["cnpj_perfil"];
			$telefone=$_POST["telefone_perfil"];
			
				

				$insert= "INSERT INTO vendedores(
												nome_vendedor,
												tipo_negocio,
												cnpj,
												documentacao,
												cod_vendedor,
												telefone
											) VALUES (
												?,
												?,
												?,
												?,
												?,
												?
											)";


			if($stmt = mysqli_prepare($con, $insert)) { 

				mysqli_stmt_bind_param($stmt, "ssssss", $resultado, $tipo_de_negocio, $cnpj, $nome_arquivo, $id, $telefone);
				

				mysqli_stmt_execute($stmt);
			  
				mysqli_stmt_close($stmt);
			}
			mysqli_close($con);
			header("Location: perfil.php");
        }
		
	}
	else{
		$tipo_de_usuario=2;
		$id=$_SESSION["id_usuario"];
		$_SESSION["tipo_de_usuario"]=2;
		
		$update= "UPDATE usuarios SET
										tipo_de_negocio='$tipo_de_negocio',
										tipo_de_usuario='$tipo_de_usuario'
									 WHERE 
										id_usuario = '$id'
									";
		mysqli_query($con, $update)or die(mysqli_error($con));
		
		$cnpj=$_POST["cnpj_perfil"];
		$telefone=$_POST["telefone_perfil"];
		

		$insert= "INSERT INTO vendedores(
										tipo_negocio,
										cnpj,
										cod_vendedor,
										telefone
									) VALUES (
										?,
										?,
										?,
										?
									)";


		if($stmt = mysqli_prepare($con, $insert)) { 

			mysqli_stmt_bind_param($stmt, "ssss", $tipo_de_negocio, $cnpj, $id, $telefone);
			

			mysqli_stmt_execute($stmt);
		  
			mysqli_stmt_close($stmt);
		}
		mysqli_close($con);
	}
	

header("Location: perfil.php")
?>