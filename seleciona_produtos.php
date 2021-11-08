<?php 
    
    include "conexao.php";

	if(!empty($_POST))
    {	
		if(isset($_POST["id"])){
			$id=$_POST["id"];
			$id=strtoupper($id);
			$tabela="";
			$select="SELECT foto, id_produto, produtos.nome as nome_produto, preco, tipo_produto, descricao, telefone, usuarios.nome as nome_usuario FROM produtos 
			inner join vendedores on produtos.cod_vendedor=vendedores.cod_vendedor 
			inner join usuarios on id_usuario=vendedores.cod_vendedor where tipo_produto='$id'";
			$res = mysqli_query($con, $select) or die(mysqli_error($con));
			while($linha=mysqli_fetch_assoc($res)){
				$tabela.='<!-- Table Produtos e demais-->
			<div class="tabela-produtos">
				<div class="container">
					<div class="row">
						<div class="col-md-3">
							<div class="card">
								<img src="fotos/'.$linha["foto"].'" class="card-img-top" alt="Imagem Produto 4">
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
							<br/><br/>
							<i class="fas fa-phone"></i> '.$linha["telefone"].'
							<p class="produto_vendedor">'.$linha["nome_usuario"].'</p>
						</div>
						<div class="col-md-5">
							<!-- Preço -->
							<p class = "preco_produto">R$ '.$linha["preco"].'</p>
							
							<label for="">Quantidade:</label>
							<input type="number" class="form-control" id="produto'.$linha["id_produto"].'" />
							<br />
							<button type="button" class="btn btn-primary" value="'.$linha["id_produto"].'">Selecionar Quantidade</button>
							<br /><br />
							<h7>Seção:</h7><p class=secao_produtos>'.$linha["tipo_produto"].'</p>
						</div>
					</div>
				</div>
			</div>
			<br />';
			}
			echo $tabela;
		}
        if(isset($_POST["valor"])){
			$valor=strtoupper($_POST["valor"]);
			$tabela="";
			$select="SELECT regiao, foto, id_produto, produtos.nome as nome_produto, preco, tipo_produto, descricao, telefone, usuarios.nome as nome_usuario FROM produtos 
			inner join vendedores on produtos.cod_vendedor=vendedores.cod_vendedor 
			inner join usuarios on id_usuario=vendedores.cod_vendedor";
			$res = mysqli_query($con, $select) or die(mysqli_error($con));
			while($linha=mysqli_fetch_assoc($res)){
				$nome_vendedor=strpos(strtoupper($linha["nome_usuario"]), $valor);
				$nome_produto=strpos(strtoupper($linha["nome_produto"]), $valor);
				$regiao=strpos(strtoupper($linha["regiao"]), $valor);
				if($nome_vendedor !== false || $nome_produto !== false || $regiao !== false ){
					$tabela.='<!-- Table Produtos e demais-->
					<div class="tabela-produtos">
						<div class="container">
							<div class="row">
								<div class="col-md-3">
									<div class="card">
										<img src="fotos/'.$linha["foto"].'" class="card-img-top" alt="Imagem Produto 4">
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
									<br/><br/>
									<i class="fas fa-phone"></i> '.$linha["telefone"].'
									<p class="produto_vendedor">'.$linha["nome_usuario"].'</p>
								</div>
								<div class="col-md-5">
									<!-- Preço -->
									<p class = "preco_produto">R$ '.$linha["preco"].'</p>
									<br/>
									<label for="">Quantidade:</label>
									<input type="number" id="produto'.$linha["id_produto"].'" />
									<br />
									<button type="button" class="btn btn-primary" value="'.$linha["id_produto"].'">Selecionar quantidade</button>
									<br />
									<h7>Seção:</h7><p class=secao_produtos>'.$linha["tipo_produto"].'</p>
								</div>
							</div>
						</div>
					</div>
					<br />';
				}
			}
			echo $tabela;
		}

	}
    else{
		header("Content-Type: application/json");
        $select="SELECT foto, id_produto, produtos.nome as nome_produto, preco, tipo_produto, descricao, telefone, usuarios.nome as nome_usuario FROM produtos inner join vendedores on produtos.cod_vendedor=vendedores.cod_vendedor inner join usuarios on id_usuario=vendedores.cod_vendedor";
		$res = mysqli_query($con, $select) or die(mysqli_error($con));
		while($linha=mysqli_fetch_assoc($res)){
			$resultado[]= $linha;
		}
		echo json_encode($resultado);
    }
?>
