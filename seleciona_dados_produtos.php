<?php 
    header("Content-Type: application/json");
    include "conexao.php";
		$id=$_POST["id"];
		$vetor=[];
        $select="SELECT foto, id_produto, nome, preco, tipo_produto, descricao, quantidade FROM produtos WHERE id_produto='$id'";
		$res = mysqli_query($con, $select) or die(mysqli_error($con));
		while($linha=mysqli_fetch_assoc($res)){
			$vetor["id_produto"]=$linha["id_produto"];
			$vetor["nome"]=$linha["nome"];
			$vetor["preco"]=$linha["preco"];
			$vetor["tipo_produto"]=$linha["tipo_produto"];
			$vetor["descricao"]=$linha["descricao"];
			$vetor["quantidade"]=$linha["quantidade"];
			$vetor["foto"]=$linha["foto"];
		}
		echo json_encode($vetor);
?>
