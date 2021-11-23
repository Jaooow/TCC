<?php
	session_start();
    include "conexao.php";
    $id=$_POST["id"];
    $quant=$_POST["quant"];
	$resultado=[];
	$select="SELECT  preco, vendedores.cod_vendedor as cod_vendedores FROM vendedores inner join produtos on produtos.cod_vendedor=vendedores.cod_vendedor WHERE id_produto='$id'";
		$res = mysqli_query($con, $select) or die(mysqli_error($con));
		while($linha=mysqli_fetch_assoc($res)){
			$resultado["preco"]= $linha["preco"];
		}
		echo print_r($resultado);
	$id_negociacao= $_SESSION["insert_id"];
	echo "/////$id_negociacao";
	$preco_final= $resultado["preco"]*$quant;
	$insert2= "INSERT INTO itens_negociacao(
										cod_produto,
										cod_negociacao, 
										preco_unitario, 
										preco_final,
										quantidade
									) VALUES (
										?,
										?,
										?,
										?,
										?
									)";
									
	if($stmt = mysqli_prepare($con, $insert2)) { 

		mysqli_stmt_bind_param($stmt, "sssss", $id, $id_negociacao, $resultado["preco"], $preco_final, $quant);
		

		mysqli_stmt_execute($stmt);
	  
		mysqli_stmt_close($stmt);
	}
	
	mysqli_close($con);
?>