<?php
	session_start();
    include "conexao.php";
	$id=$_POST["hidden"];
    $nome_produto=$_POST["nome_produto_modal"];
    $descricao=$_POST["descricao_produto"];
    $preco=$_POST["preco_produto"];
	$foto=$_FILES["foto_produto"];
	$tipo_produto=$_POST["tipo_produto_modal"];
	$tipo_produto=strtoupper($tipo_produto);
	$quantidade=$_POST["quantidade_produto"];
	
	if (!empty($foto["name"])) {

        // Largura máxima em pixels
        $largura = 10000;
        // Altura máxima em pixels
        $altura = 10000;
        // Tamanho máximo do arquivo em bytes
        $tamanho = 100000000;
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
			$update= "UPDATE produtos SET
									foto='$nome_imagem',
                                    nome='$nome_produto',
									descricao='$descricao',
									preco='$preco',
									tipo_produto='$tipo_produto',
									quantidade='$quantidade'
									WHERE
									id_produto='$id'
									";

			mysqli_query($con, $update) or die(mysqli_error($con));
			mysqli_close($con);
			$notifica="Produto alterado com Sucesso!!!";
			header("Location: lista_produtos.php?conteudo=$notifica");
        }
        // Se houver mensagens de erro, exibe-as
        if (count($error) != 0) {
            foreach ($error as $erro) {
                $notifica.= $erro."//";
            }
			if($_SESSION["tipo_de_usuario"]==0){
				header("Location: lista_produtos.php?conteudo=$notifica");
			}
			else{
				header("Location: lista_produtos_vendedor.php?conteudo=$notifica");
			}
        }
    }
	else{
		$update= "UPDATE produtos SET
                                    nome='$nome_produto',
									descricao='$descricao',
									preco='$preco',
									tipo_produto='$tipo_produto',
									quantidade='$quantidade'
									WHERE
									id_produto='$id'
									";

			mysqli_query($con, $update) or die(mysqli_error($con));
			mysqli_close($con);
			$notifica= "Produto Alterado Com Sucesso";
		if($_SESSION["tipo_de_usuario"]==0){
				header("Location: lista_produtos.php?conteudo=$notifica");
			}
			else{
				header("Location: lista_produtos_vendedor.php?conteudo=$notifica");
			}
	}
?> 