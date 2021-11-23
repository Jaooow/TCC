<?php
	include "conexao.php";
		$dados="";
		$select="SELECT negociacao.status as status, foto, usuarios.nome as nome_usuario, nome_vendedor, produtos.nome as nome_produto, preco_unitario, preco_final, itens_negociacao.quantidade as quantidade, descricao 
				FROM negociacao 
				inner join itens_negociacao on negociacao.id_negociacao=itens_negociacao.cod_negociacao 
				inner join produtos on itens_negociacao.cod_produto=produtos.id_produto 
				inner join vendedores on produtos.cod_vendedor=vendedores.cod_vendedor 
				inner join usuarios on usuarios.id_usuario=vendedores.cod_vendedor";
		$res = mysqli_query($con, $select) or die(mysqli_error($con));
		while($linha=mysqli_fetch_assoc($res)){
			$dados.='<div class="container">
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
								<p class="info_produto">Vendedor: '.$linha["nome_vendedor"].'</p>
								<p class="info_produto">Comprador: '.$linha["nome_usuario"].'</p>';
								if($linha["status"]==0){
									$dados.='<p class="info_produto" style="color:red;">Compra em andamento</p>';
								}
								else{
									$dados.='<p class="info_produto" style="color:red;">Compra Finalizada</p>';
								}
								$dados.='<br/><br/>
							</div>
							<div class="col-md-5">
								<!-- Preço -->
								<p class = "preco_produto">Valor Total: R$ '.$linha["preco_final"].'</p>
								<p class="produto_vendedor">Preço (Un): R$ '.$linha["preco_unitario"].'</p>
								<label >Quantidade:</label>
								<input type="number" name="quantidade_negociacao"  class="produto_vendedor" value="'.$linha["quantidade"].'"/>
								<br /><br />
							</div>
						</div>
					</div>
			<br />';
		}
		echo $dados;
	?>