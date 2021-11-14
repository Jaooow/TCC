<?php 
    include "conexao.php";
		$id=$_POST["id"];
		$quant=$_POST["quant"];
		$resultado=[];
        $select="SELECT nome, preco, descricao FROM produtos WHERE id_produto='$id'";
		$res = mysqli_query($con, $select) or die(mysqli_error($con));
		while($linha=mysqli_fetch_assoc($res)){
			$resultado["nome"]= $linha["nome"];
			$resultado["quant"]= $quant;
			$resultado["id"]= $id;
		}
	echo json_encode($resultado);
?>
