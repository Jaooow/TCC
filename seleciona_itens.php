<?php 
	session_start();
    include "conexao.php";
		$id=$_POST["id"];
		$quant=$_POST["quant"];
		$resultado=[];
		if(isset($_POST["tipo"])){
			$select="SELECT nome_vendedor, telefone, produtos.nome as nome_produto, preco, descricao FROM produtos inner join vendedores on produtos.cod_vendedor=vendedores.cod_vendedor WHERE id_produto='$id'";
			$res = mysqli_query($con, $select) or die(mysqli_error($con));
			while($linha=mysqli_fetch_assoc($res)){
				$valor=$linha["preco"]*$quant;
				$resultado["conteudo"]='<div class="col-12">
							<div class="compras">
								<div class="form-row">
									<div class="col">
										<img src="img/logo.png" alt="..." width="120px">
										<label for="">Produto:</label>
										<input type="text" value="'.$linha["nome_produto"].'" class="form-control" placeholder="" readonly="readonly"/>
									</div>
									<div class="col">
										<label for="">Descrição:</label>
										<input type="text" value="'.$linha["descricao"].'" class="form-control" readonly="readonly"/>
									</div>
								</div>
								<div class="form-row">
									<div class="col">
										<label for="">Quantidade:</label>
										<input type="text" name="quantidade_negociacao" id="'.$id.'" value="'.$quant.'" class="form-control" placeholder=""/>
									</div>
									<div class="col">
										<label for="">Preço Unitario:</label>
										<input type="number" value="'.$linha["preco"].'" class="form-control" readonly="readonly"/>
									</div>
									<div class="col">
										<label for="">Valor Total:</label>
										<input type="text" value="'.$valor.'" class="form-control" placeholder="" readonly="readonly"/>
									</div>
								</div>
								<div class="form-row">
									<div class="col">
										<label for="">Vendedor:</label>
										<input type="text" value="'.$linha["nome_vendedor"].'" class="form-control" placeholder="" readonly="readonly"/>
									</div>
								</div>
							</div>
						</div>';
				$resultado["nome"]= $linha["nome_produto"];
				$resultado["quant"]= $quant;
				$resultado["id"]= $id;
				$resultado["preco"]= $linha["preco"];
				$resultado["descricao"]= $linha["descricao"];
				$resultado["tel"]= $linha["telefone"];
				$resultado["nome_vendedor"]= $linha["nome_vendedor"];
			}
			$id_usuario=$_SESSION["id_usuario"];
			$select2="SELECT usuarios.nome as nome_usuario FROM usuarios  WHERE id_usuario='$id_usuario'";
			$res2 = mysqli_query($con, $select2) or die(mysqli_error($con));
			while($linha2=mysqli_fetch_assoc($res2)){
				$resultado["nome_usuario"]= $linha2["nome_usuario"];
			}
		}
		else{
			$select="SELECT nome_vendedor, telefone, produtos.nome as nome_produto, preco, descricao FROM produtos inner join vendedores on produtos.cod_vendedor=vendedores.cod_vendedor WHERE id_produto='$id'";
			$res = mysqli_query($con, $select) or die(mysqli_error($con));
			while($linha=mysqli_fetch_assoc($res)){
				$resultado["nome"]= $linha["nome_produto"];
				$resultado["quant"]= $quant;
				$resultado["id"]= $id;
				$resultado["preco"]= $linha["preco"];
				$resultado["descricao"]= $linha["descricao"];
				$resultado["tel"]= $linha["telefone"];
				$resultado["nome_vendedor"]= $linha["nome_vendedor"];
			}
			$id_usuario=$_SESSION["id_usuario"];
			$select2="SELECT usuarios.nome as nome_usuario FROM usuarios  WHERE id_usuario='$id_usuario'";
			$res2 = mysqli_query($con, $select2) or die(mysqli_error($con));
			while($linha2=mysqli_fetch_assoc($res2)){
				$resultado["nome_usuario"]= $linha2["nome_usuario"];
			}
		}
	echo json_encode($resultado);
?>
