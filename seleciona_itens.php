<?php 
	session_start();
    include "conexao.php";
		$id=$_POST["id"];
		$quant=$_POST["quant"];
		$resultado=[];
		if(isset($_POST["tipo"]) and $_POST["tipo"] == 1){
			$select="SELECT foto, nome_vendedor, telefone, produtos.nome as nome_produto, preco, descricao FROM produtos inner join vendedores on produtos.cod_vendedor=vendedores.cod_vendedor WHERE id_produto='$id'";
			$res = mysqli_query($con, $select) or die(mysqli_error($con));
			while($linha=mysqli_fetch_assoc($res)){
				$valor=$linha["preco"]*$quant;
				$resultado["conteudo"]='<div class="container">
						<div class="row">
							<div class="col-md-3">
								<div class="card">
									<img src="fotos/'.$linha["foto"].'" class="card-img-top" alt="Imagem Item">
									<div class=" card-body">
										<!-- Nome Produto -->
										<h5 class = "card-title">'.$linha["nome_produto"].'</h5>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<!-- Nome Produto -->
								<h6>'.$linha["nome_produto"].'</h6>
								<!-- Informação -->
								<p class="info_produto">'.$linha["descricao"].'</p>
								<p class="info_produto">Vendedor:'.$linha["nome_vendedor"].'</p>
								<br/><br/>
							</div>
							<div class="col-md-5">
								<!-- Preço -->
								<p class = "preco_produto">Valor Total: R$ '.$valor.'</p>
								<p class="produto_vendedor">Preço (Un): R$ '.$linha["preco"].'</p>
								<label for="'.$id.'">Quantidade:</label>
								<input type="number" name="quantidade_negociacao" id="'.$id.'" class="produto_vendedor" value="'.$quant.'"/>
								<br /><br />
								<h7>Seção:</h7><p class=secao_produtos>Comida</p>
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
		
		
		if(isset($_POST["tipo"]) and $_POST["tipo"] == 2){
			$select="SELECT foto, nome_vendedor, telefone, produtos.nome as nome_produto, preco, descricao FROM produtos inner join vendedores on produtos.cod_vendedor=vendedores.cod_vendedor WHERE id_produto='$id'";
			$res = mysqli_query($con, $select) or die(mysqli_error($con));
			while($linha=mysqli_fetch_assoc($res)){
				$valor=$linha["preco"]*$quant;
				$resultado["conteudo"]='<div id="item'.$id.'">
				<div class="row">
						<div class="col-md-3">
							<img src="fotos/'.$linha["foto"].'" class = "imgcarrinho" alt="Foto Produto Selecionado" width="100px">
						</div>
						<div class="col-md-9">
							<label> Produto:</label>
							<input type="text" value="'.$linha["nome_produto"].'" class="form-control" readonly="readonly">
						</div>
						<div class="col-md-9">
							
						</div>
						<div class="col-md-9">
							<label> Quantidade:</label>
							<input type="nember" value="'.$quant.'" name="'.$id.'" class="form-control">
						</div>
						<div class="col-md-9">
							
						</div>
						<div class="col-md-9">
							<label> Preço total:</label>
							<input type="number" readonly="readonly" value="'.$valor.'" class="form-control" >
						</div>
						<div class="col-md-9">
							
						</div>
						<div class="col-md-3">
							<br/>
							<button type="button" class="btn btn-danger" onclick="deleta_item_carrinho('.$id.')" >Deletar</button>
						</div>
						<div class="col-12">
							<br/>
							<div class="underline"></div>
						</div>
					</div>
				</div>
				<br />';
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
		
		
		if(!isset($_POST["tipo"])){
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
