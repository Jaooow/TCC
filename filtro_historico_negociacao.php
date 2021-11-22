<?php 
    include "conexao.php";
		$tipo_produto=$_POST["tipo_produto"];
		$tipo_produto=strtoupper($tipo_produto);
		$usuario_consumidor=$_POST["usuario_consumidor"];
		$usuario_vendedor=$_POST["usuario_vendedor"];
		$status=$_POST["status"];
		$preco=$_POST["preco"];
		$dados="";
		
        $select="SELECT negociacao.status as status, foto, usuarios.nome as nome_usuario, nome_vendedor, produtos.nome as nome_produto, preco_unitario, preco_final, itens_negociacao.quantidade as quantidade, descricao 
				FROM negociacao 
				inner join itens_negociacao on negociacao.id_negociacao=itens_negociacao.cod_negociacao 
				inner join produtos on itens_negociacao.cod_produto=produtos.id_produto 
				inner join vendedores on produtos.cod_vendedor=vendedores.id_vendedores 
				inner join usuarios on usuarios.id_usuario=id_vendedores 
				where 1=1 ";
		
		if(!empty($tipo_produto)){
			$select.="and tipo_produto='$tipo_produto' ";
		}
		if(!empty($usuario_consumidor)){
			$select.="and cod_comprador='$usuario_consumidor' ";
		}
		if(!empty($usuario_vendedor)){
			$select.="and cod_vendedor='$usuario_vendedor' ";
		}
		if(!empty($status)){
			$select.="and status='$status' ";
		}
		if(!empty($preco)){
			$select.="and preco>='$preco' ";
		}
		$select.="ORDER BY nome_usuario";
		$res = mysqli_query($con, $select) or die(mysqli_error($con));
		while($linha=mysqli_fetch_assoc($res)){
			$dados.='<div class="container">
						<div class="row">
							<div class="col-md-3">
								<div class="card">
									<img src="img/'.$linha["foto"].'" class="card-img-top" alt="Imagem Item">
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
								<p class="info_produto">Comprador:'.$linha["nome_usuario"].'</p>';
								
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
								<p class = "preco_produto">Valor Total: R$ '.$valor.'</p>
								<p class="produto_vendedor">Preço (Un): R$ '.$linha["preco"].'</p>
								<label for="'.$id.'">Quantidade:</label>
								<input type="number" readonly="readonly" name="quantidade_negociacao" id="'.$id.'" class="produto_vendedor" value="'.$quant.'"/>
								<br /><br />
								<h7>Seção:</h7><p class=secao_produtos>Comida</p>
							</div>
						</div>
					</div>
			<br />';
		}
	echo $dados;
?>
