<?php 
	session_start();
    include "conexao.php";
		$id=$_POST["id"];
		$quant=$_POST["quant"];
		$resultado=[];
        $select="SELECT telefone, produtos.nome as nome_produto, preco, descricao FROM produtos inner join vendedores on produto.cod_vendedores=vendedores.id_vendedores WHERE id_produto='$id'";
		$res = mysqli_query($con, $select) or die(mysqli_error($con));
		while($linha=mysqli_fetch_assoc($res)){
			$resultado["nome"]= $linha["nome_produto"];
			$resultado["quant"]= $quant;
			$resultado["id"]= $id;
			$resultado["descricao"]= $linha["descricao"];
			$resultado["tel"]= $linha["telefone"];
		}
		$id_usuario=$_SESSION["id_usuario"];
		$select2="SELECT nome_usuario FROM usuarios  WHERE id_usuario='$id_usuario'";
		$res2 = mysqli_query($con, $select2) or die(mysqli_error($con));
		while($linha2=mysqli_fetch_assoc($res2)){
			$resultado["nome_usuario"]= $linha2["nome_usuario"];
		}
	echo json_encode($resultado);
?>
