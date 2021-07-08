<?php
	include "cabecalho.php";

    include "conexao.php";

    $select="SELECT id_produto, produtos.nome as nome_produto, descricao, preco, foto FROM fotos inner join produtos on cod_produto=id_produto inner join usuarios on cod_vendedor=id_usuario WHERE id_usuario=".$_SESSION["id_usuario"]."";
    $res = mysqli_query($con, $select) or die(mysqli_error($con));
    while($linha=mysqli_fetch_assoc($res)){
        echo '<div class="container">
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
	<br />';
    }
	
	include "rodape.php";
?>