
<?php
	include "cabecalho.php";
?>
<body>
	<main>
		<h2>Confirme os itens da sua compra:</h2>
		<br />
		<div id="compras"></div>
	</main>
</body>
<script>
	$(document).ready(function(){
		if(sessionStorage.getItem("produto")){
			var itens="";
			var id=JSON.parse(sessionStorage.getItem("produto"));
			var valor = JSON.parse(sessionStorage.getItem("quantidade")); 
			for(i=0; i < id.length; i++){
				if(id[i]!=null){
					$.post("seleciona_itens.php", {"id":id[i]}, function(v){
						var soma= valor[i]*v.preco;
						itens += "<label for='produto"+i+"'>Produto:</label><br /><input typw='text' value='"+v.nome+"' id='produto"+i+"' readonly='readonly'/><br /><label for='descricao"+i+"'>Descrição:</label><textarea id='descricao"+i+"'>"+v.descricao+"</textarea><br /><label for='quantidade"+i+"'>Quantidade:</label><input type='number' id='quantidade"+i+"' value='"+valor[i]+"' readonly='readonly'/> <label for='preco"+i+"'>Preço:</label><input type='number' id='preco"+i+"' value='"+v.preco+"' readonly='readonly'/> <label for='valor"+i+"'>Valor Total:</label><input type='number' id='valor"+i+"' value='"+soma+"' readonly='readonly'/><br />";
					});
				}
			}
			itens+="<button id='confirmar' >Confirmar Compra</button><button id='retornar'>Voltar</button><button id='cancelar'>Cancelar Compra</button>";
			var aux=id.length-1;
			if(i==aux){
				$("#compras").html(itens);
			}
		}
		
		$("#confirmar").click(function(){
			
		});
	});
</script>
<?php
	include "modal_carrinho.php";
	include "inc/footer.inc";
?>
</html>