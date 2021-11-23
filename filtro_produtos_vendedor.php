<?php 
	session_start();
    include "conexao.php";
		$tipo_produto=$_POST["tipo_produto"];
		$tipo_produto=strtoupper($tipo_produto);
		$preco=$_POST["preco"];
		$dados="";
		$id=$_SESSION["id_usuario"];
		
        $select="SELECT foto, id_produto, produtos.nome as nome_produto, preco, tipo_produto, descricao, telefone, usuarios.nome as nome_usuario FROM produtos 
				inner join vendedores on produtos.cod_vendedor=vendedores.cod_vendedor 
				inner join usuarios on vendedores.cod_vendedor=id_usuario WHERE vendedores.cod_vendedor='$id' ";
		
		if(!empty($tipo_produto)){
			$select.="and tipo_produto='$tipo_produto' ";
		}
		if(!empty($preco)){
			$select.="and preco>='$preco' ";
		}
		$select.="ORDER BY nome_usuario";
		$res = mysqli_query($con, $select) or die(mysqli_error($con));
		while($linha=mysqli_fetch_assoc($res)){
			$dados.='<!-- Table Produtos e demais-->
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
						</div>
						<div class="col-md-5">
							<!-- Preço -->
							<p class = "preco_produto">R$ '.$linha["preco"].'</p>
							<br />
							<h7>Seção:</h7><p class=secao_produtos>'.$linha["tipo_produto"].'</p>
							<br/>
							<button type="button" onclick="deleta_produto('.$linha["id_produto"].')" value="'.$linha["id_produto"].'" class="btn btn-danger">Deletar</button>
							<button type="button" onclick="monta_modal_altera_produto('.$linha["id_produto"].')"  value="'.$linha["id_produto"].'" href="#" data-toggle="modal" data-target="#modal_alterar_produto" class="btn btn-warning">Alterar</button>
						</div>
					</div>
				</div>
			</div>
			<br />';
		}
	echo $dados;
?>
