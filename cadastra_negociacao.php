<?php
	session_start();
    include "conexao.php";
    $id=$_POST["id"];
    $quant=$_POST["quant"];
	$resultado=[];
	$select="SELECT  preco, vendedores.cod_vendedor as cod_vendedores FROM vendedores inner join produtos on produtos.cod_vendedor=vendedores.cod_vendedor WHERE id_produto='$id'";
		$res = mysqli_query($con, $select) or die(mysqli_error($con));
		while($linha=mysqli_fetch_assoc($res)){
			$resultado["cod_vendedor"]= $linha["cod_vendedores"];
			$resultado["preco"]= $linha["preco"];
		}
	$id_comprador= $_SESSION["id_usuario"];
	
	date_default_timezone_set('America/Sao_Paulo');
	$hora=date("H");
	$hora-=1;
	$data=@date("l, d  F  Y, H:i:s");
	
    $insert= "INSERT INTO negociacao(
                                    cod_comprador,
                                    cod_vendedor, 
									data_negociacao,
									status
                                ) VALUES (
                                    ?,
                                    ?,
									?,
									?
                                )";

	if($stmt = mysqli_prepare($con, $insert)) { 
		$id_v=$resultado["cod_vendedor"];
		echo $id_v;
		$zero=0;
		mysqli_stmt_bind_param($stmt, "ssss", $id_comprador, $id_v, $data, $zero);
		

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