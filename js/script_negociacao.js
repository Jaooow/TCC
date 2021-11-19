if(sessionStorage.getItem("produto")){
	var itens_negociacao="";
	var id_negociacao=JSON.parse(sessionStorage.getItem("produto"));
	var valor_negociacao= JSON.parse(sessionStorage.getItem("quantidade")); 
	var url="";
	for(i=0; i < id_negociacao.length; i++){
		var dados_negociacao ={"id":id_negociacao[i],
								"quant":valor_negociacao[i]};
		if(id_negociacao[i]!=null){
			$.post("seleciona_itens.php", dados_negociacao, function(v){
				itens_negociacao=$("#itens_negociacao").html();
				var soma= JSON.parse(v).quant*JSON.parse(v).preco;
				itens_negociacao+= "<label for='produto_negiciacao"+JSON.parse(v).id+"'>Produto:</label><br /><input type='text' value='"+JSON.parse(v).nome+"' id='produto_negociacao"+JSON.parse(v).id+"' readonly='readonly'/><br /><label for='descricao"+JSON.parse(v).id+"'>Descrição:</label><textarea id='descricao"+JSON.parse(v).id+"' readonly='readonly'>"+JSON.parse(v).descricao+"</textarea><br /><label for='quantidade"+JSON.parse(v).id+"'>Quantidade:</label><input type='number' id='quantidade"+JSON.parse(v).id+"' value='"+JSON.parse(v).id+"' readonly='readonly'/> <label for='preco"+JSON.parse(v).id+"'>Preço:</label><input type='number' id='preco"+JSON.parse(v).id+"' value='"+JSON.parse(v).preco+"' readonly='readonly'/> <label for='valor"+JSON.parse(v).id+"'>Valor Total:</label><input type='number' id='valor"+JSON.parse(v).id+"' value='"+soma+"' readonly='readonly'/><br />";
				$("#itens_negociacao").html(itens_negociacao);
				url+="\n "+JSON.parse(v).nome+": "+JSON.parse(v).quant+" Unidade(s) ";
				if(i==id.length-1){
				var aux="Meu nome é "+JSON.parse(v).nome_usuario+" e estou interessado no(s) seguinte(s) produto(s): "+url;
				var conteudo = encodeURIComponent(aux).replace("%5Cn", "%0A");
				itens_negociacao+="<button id='confirmar' href='https://wa.me/55"+JSON.parse(v).tel+"?text='"+conteudo+"' target='_blank'>Confirmar Compra</button><button id='retornar' href='procurar_produtos.php'>Voltar</button><button id='cancelar_compra'>Cancelar Compra</button>";
				$("#itens_negociacao").html(itens_negociacao);
						}
			});
		}
	}		
}
		
		$("#confirmar").click(function(){
			var id_confirmar=JSON.parse(sessionStorage.getItem("produto"));
			var quantidade_confirmar= JSON.parse(sessionStorage.getItem("quantidade")); 
			for(i=0; i < id_confirmar.length; i++){
				var dados_confirmar ={"id":id_confirmar[i],
							"quant":quantidade_confirmar[i]};
				if(id_confirmar[i]!=null){
					$.post("cadastra_negociacao.php", dados_confirmar, function(v){
						window.location="negociacao_andamento.php";
					});
				}
			}
		});