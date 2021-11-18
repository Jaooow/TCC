<?php
	session_start();
    include "conexao.php";
    $id=$_POST["id"];
    $quant=$_POST["quant"];
	
	$select="SELECT id_vendedores, preco FROM produtos inner join vendedores on produto.cod_vendedores=vendedores.id_vendedores WHERE id_produto='$id'";
		$res = mysqli_query($con, $select) or die(mysqli_error($con));
		while($linha=mysqli_fetch_assoc($res)){
			$resultado["id_vendedor"]= $linha["id_vendedores"];
			$resultado["preco"]= $linha["preco"];
		}
	$id_comprador= $_SESSION["id_usuario"];
	$data=@date("l, d de F de Y, ás H:i:s");
    $insert= "INSERT INTO negociacoes(
                                    cod_comprador,
                                    cod_vendedor, 
									data_negociacao
                                ) VALUES (
                                    ?,
                                    ?,
									?
                                )";

	if($stmt = mysqli_prepare($con, $insert)) { 

		mysqli_stmt_bind_param($stmt, "sss", $id_comprador, $resultado["id_vendedor"], $data);
		

		mysqli_stmt_execute($stmt);
	  
		mysqli_stmt_close($stmt);
	}

	$id_negociacao= mysqli_insert_id($con);
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