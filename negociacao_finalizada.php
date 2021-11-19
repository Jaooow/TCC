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
			WHERE cod_comprador='$id' and negociacao.status='0'";
			$res = mysqli_query($con, $select) or die(mysqli_error($con));
			while($linha=mysqli_fetch_assoc($res)){
				$dados+="<fiedset>
							<legend>Negocios em andamento</legend>
							<label for='produto_negiciacao'>Produto:</label>
							<br />
							<input type='text' value='' id='produto_negociacao' readonly='readonly'/>
							<br />
							<label for='descricao'>Descrição:</label><textarea id='descricao' readonly='readonly'></textarea>
							<br />
							<label for='quantidade'>Quantidade:</label><input type='number' id='quantidade' value='' readonly='readonly'/>
							<br />
							<label for='preco'>Preço:</label><input type='number' id='preco' value='' readonly='readonly'/> 
							<br />
							<label for='valor'>Valor Total:</label><input type='number' id='valor' value='' readonly='readonly'/>
							<br />
							<label for='vendedor'>Vendedor: </label><input type='text' id='vendedor' value=''/>
						</fieldset>
						<br />";
			}
			echo $dados;
		?>
	</main>
<?php
	include "modal_carrinho.php";
	include "rodape.php";
?>