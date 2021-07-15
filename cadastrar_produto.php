<?php
	session_start();
    include "conexao.php";
    $nome_produto=$_POST["nome_produto"];
    $descricao=$_POST["descricao"];
    $preco=$_POST["preco"];
	$foto=$_FILES["foto"];
	$tipo_produto=$_POST["tipo_produto"];
	$tipo_produto=strtoupper($tipo_produto);
	$quantidade=$_POST["quantidade"];
	$id=$_SESSION["id_usuario"];
	
	if (!empty($foto["name"])) {
        
        // Largura máxima em pixels
        $largura = 1000;
        // Altura máxima em pixels
        $altura = 1000;
        // Tamanho máximo do arquivo em bytes
        $tamanho = 1000;
        $error = array();
        // Verifica se o arquivo é uma imagem
        if(!preg_match("/^image\/(pjpeg|jpeg|png|gif|bmp)$/", $foto["type"])){
            $error[1] = "Isso não é uma imagem.";
            } 
    
        // Pega as dimensões da imagem
        list($largura_ft, $altura_ft) =getimagesize($foto["tmp_name"]);
    
        // Verifica se a largura da imagem é maior que a largura permitida
        if($largura_ft > $largura) {
            $error[2] = "A largura da imagem não deve ultrapassar ".$largura." pixels";
        }
        // Verifica se a altura da imagem é maior que a altura permitida
        if($altura_ft > $altura) {
            $error[3] = "Altura da imagem não deve ultrapassar ".$altura." pixels";
        }
        
        // Verifica se o tamanho da imagem é maior que o tamanho permitido
        if($foto["size"] > $tamanho) {
                $error[4] = "A imagem deve ter no máximo ".$tamanho." bytes";
        }
        // Se não houver nenhum erro
        if (count($error) == 0) {
        
            // Pega extensão da imagem
            preg_match("/\.(gif|bmp|png|jpg|jpeg){1}$/i", $foto["name"], $ext);
            // Gera um nome único para a imagem
            $nome_imagem = md5(uniqid(time())) . "." . $ext[1];
            // Caminho de onde ficará a imagem
            $caminho_imagem = "fotos/" . $nome_imagem;
            // Faz o upload da imagem para seu respectivo caminho
            move_uploaded_file($foto["tmp_name"], $caminho_imagem);
        
            // Insere os dados no banco
			$insert= "INSERT INTO produtos(
                                    nome,
                                    preco,
                                    descricao,
									cod_vendedor,
									tipo_produto, 
									quantidade,
									foto
                                ) VALUES (
                                    ?,
                                    ?,
                                    ?,
                                    ?,
									?,
									?,
									?
                                )";


			if($stmt = mysqli_prepare($con, $insert)) { 
				mysqli_stmt_bind_param($stmt, "sssssss", $nome_produto, $preco,$descricao, $id, $tipo_produto, $quantidade, $nome_imagem);
					

				mysqli_stmt_execute($stmt);
			  
				mysqli_stmt_close($stmt);
			}
	   
			mysqli_close($con);
			echo 1;
        }
        // Se houver mensagens de erro, exibe-as
        if (count($error) != 0) {
            foreach ($error as $erro) {
                echo $erro . "<br />";
            }
        }
    }
?>