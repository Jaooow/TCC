<?php
	session_start();
	include "conexao.php";
	$id=$_SESSION["id_usuario"];
    $select="SELECT foto, id_produto, produtos.nome as nome_produto, preco, tipo_produto, descricao, telefone, usuarios.nome as nome_usuario FROM produtos 
				inner join vendedores on produtos.cod_vendedor=vendedores.cod_vendedor 
				inner join usuarios on vendedores.cod_vendedor=id_usuario WHERE vendedores.cod_vendedor='$id'";
	$dados="";
    $res = mysqli_query($con, $select) or die(mysqli_error($con));
    while($linha=mysqli_fetch_assoc($res)){
		$dados.='<div id="atualiza'.$linha["id_produto"].'">
		<div class="container">
				<div class="row">
					<div class="col-sm-3">
						<div class="card">
							<img src="fotos/'.$linha["foto"].'" class="card-img-top" alt="Imagem Produto 1">
							<div class=" card-body">
								<h5 class = "card-title">'.$linha["nome_produto"].'</h5>
							</div>
						</div>
					</div>
					<div class="col-md-3">
						<p class = "meus_produtos">Descrição</p>
						<span>'.$linha["descricao"].'</span>
					</div>
					<div class="col-md-2">
						<p class = "meus_produtos">Preço</p>
						<span>R$ '.$linha["preco"].'</span>
					</div>
					<div class="col-md-4">
						<div class="meus_produtos_buttons">
							<button type="button" onclick="monta_modal_altera_produto('.$linha["id_produto"].')"  value="'.$linha["id_produto"].'" href="#" data-toggle="modal" data-target="#modal_alterar_produto" class="btn btn-warning">Alterar</button>
							<button type="button" onclick="deleta_produto('.$linha["id_produto"].')" value="'.$linha["id_produto"].'" class="btn btn-danger">Remover</button>
						</div>
					</div>
						
				</div>
			</div>
		</div>
			<br />';
		}
	echo $dados;
?>