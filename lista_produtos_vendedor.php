<?php
	include "cabecalho.php";

    include "conexao.php";

	echo'<div class="container">
			<div class="row">
				<div class = "col-12">
					<h3 class ="main-title-search">Meus Produtos</h3>
				</div>';

    $select="SELECT id_produto, produtos.nome as nome_produto, descricao, preco, foto FROM fotos inner join produtos on cod_produto=id_produto inner join usuarios on cod_vendedor=id_usuario WHERE id_usuario=".$_SESSION["id_usuario"]."";
    $res = mysqli_query($con, $select) or die(mysqli_error($con));
    while($linha=mysqli_fetch_assoc($res)){
		echo '<div class="container">
				<div class="row">
					<div class="col-sm-3">
						<div class="card">
							<img src="img/exemplo-card.jpg" class="card-img-top" alt="Imagem Produto 1">
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
							<button type="button" class="btn btn-warning" id="altera"  name="altera" value="'.$linha["id_produto"].'">Alterar</button>
							<button type="button" class="btn btn-danger" id="remove"  name="remove" value="'.$linha["id_produto"].'">Remover</button>
						</div>
					</div>
						
				</div>
			</div>';

       /* echo'<div class="container">
				<table class="text-center table table-dark table-bordered table-responsive">
					<tr>
						<td scope="col" rowspan="3">'.$linha["foto"].'</td>
						<td scope="col">Nome: '.$linha["nome_produto"].'</td>
					</tr>
					<tr>
						<td scope="col">Descrição: '.$linha["descricao"].'</td>
					</tr>
					<tr>
						<td scope="col">Preço: '.$linha["preco"].'</td>
					</tr>
					<tr>
						<td scope="col"><button id="remove" name="remove" value="'.$linha["id_produto"].'">Remover</button></td>
						<td scope="col"><button id="altera" name="altera" value="'.$linha["id_produto"].'">Alterar</button></td>
					</tr>
				</table>
			</div>
			<br />';*/
		}
	
	include "rodape.php";
?>