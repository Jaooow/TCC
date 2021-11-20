<?php
	session_start();
	include "cabecalho.php";
?>
	<main>
		<?php
		$dados="";
		$id=$_SESSION["id_usuario"];
			$select="SELECT usuarios.nome as nome_usuario, nome_vendedor, produtos.nome as nome_produto, preco_unitario, preco_final, itens_negociacao.quantidade as quantidade, descricao 
			FROM negociacao 
			inner join itens_negociacao on negociacao.id_negociacao=itens_negociacao.cod_negociacao 
			inner join produtos on itens_negociacao.cod_produto=produto.id_produto 
			inner join vendedores on produto.cod_vendedores=vendedores.id_vendedores 
			inner join usuarios on usuarios.id_usuario=id_vendedores 
			WHERE cod_comprador='$id' and negociacao.status='1'";
			$res = mysqli_query($con, $select) or die(mysqli_error($con));
			while($linha=mysqli_fetch_assoc($res)){
				$dados+='<div class="col-12">
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
										<input type="text" value="'.$linha["quantidade"].'" class="form-control" placeholder="" readonly="readonly"/>
									</div>
									<div class="col">
										<label for="">Preço Unitario:</label>
										<input type="number" value="'.$linha["preco_unitario"].'" class="form-control" readonly="readonly"/>
									</div>
									<div class="col">
										<label for="">Valor Total:</label>
										<input type="text" value="'.$linha["preco_final"].'" class="form-control" placeholder="" readonly="readonly"/>
									</div>
								</div>
								<div class="form-row">
									<div class="col">
										<label for="">Vendedor:</label>
										<input type="text" value="'.$linha["nome_vendedor"].'" class="form-control" placeholder="" readonly="readonly"/>
									</div>
								</div>
								<div class="form-row">
									<div class="col">
										<label for="">Status:</label>
										<input type="text" value="Compra Finalizada" class="form-control" placeholder="" readonly="readonly"/>
									</div>
								</div>
							</div>
						</div>';
			}
			echo $dados;
		?>
	</main>
<?php
	include "modal_carrinho.php";
	include "rodape.php";
?>