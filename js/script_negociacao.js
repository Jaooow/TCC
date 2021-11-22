if(sessionStorage.getItem("produto")){
	var itens_negociacao="";
	var id_negociacao=JSON.parse(sessionStorage.getItem("produto"));
	var valor_negociacao= JSON.parse(sessionStorage.getItem("quantidade")); 
	var url="";
	for(i=0; i < id_negociacao.length; i++){
		var dados_negociacao ={"id":id_negociacao[i],
								"quant":valor_negociacao[i],
								"tipo":1};
								console.log(id_negociacao[i]);
		if(id_negociacao[i]!=null){
			$.post("seleciona_itens.php", dados_negociacao, function(v){
				itens_negociacao=$("#itens_negociacao").html();
				itens_negociacao+=JSON.parse(v).conteudo;
				$("#itens_negociacao").html(itens_negociacao);
				
				url+="\n "+JSON.parse(v).nome+": "+JSON.parse(v).quant+" Unidade(s) ";
				var m=id_negociacao.length;
				var menos=m-1;
				console.log(i+"/"+menos+"/"+id_negociacao.length);
				if(i==id_negociacao.length){
					
					var aux="Meu nome é "+JSON.parse(v).nome_usuario+" e estou interessado no(s) seguinte(s) produto(s): "+url;
					var conteudo = encodeURIComponent(aux).replace("%5Cn", "%0A");
					itens_negociacao+='<a href="https://wa.me/55'+JSON.parse(v).tel+'?text='+conteudo+'"target="_blank"><button id="confirmar" class="btn btn-success">Confirmar Compra</button></a> <button id="retornar" class="btn btn-primary" href="procurar_produtos.php">Voltar</button> <button id="cancelar_compra" class="btn btn-danger">Cancelar Compra</button>';
					$("#itens_negociacao").html(itens_negociacao);
					confirma();
				}
			});
		}
	}
}
	function confirma(){
		$("#confirmar").click(function(){
			console.log("confirmaaaa");
			var id_confirmar=JSON.parse(sessionStorage.getItem("produto"));
			var quantidade_confirmar= JSON.parse(sessionStorage.getItem("quantidade")); 
			for(i=0; i < id_confirmar.length; i++){
				var dados_confirmar ={"id":id_confirmar[i],
							"quant":quantidade_confirmar[i]};
				if(id_confirmar[i]!=null){
					$.post("cadastra_negociacao.php", dados_confirmar, function(v){
					});
				}
			}
			sessionStorage.removeItem("produto");
			sessionStorage.removeItem("quantidade");
			$("#mensagem_negociacao").html("Sua compra foi tranferida para Negociações em Andamento!!");
		});
	}
		
		$("#cancelar_compra").click(function(){
			var id_cancelar=JSON.parse(sessionStorage.getItem("produto"));
			var quantidade_cancelar= JSON.parse(sessionStorage.getItem("quantidade")); 
			for(i=0; i < id_confirmar.length; i++){
				id_cancelar[i]=null;
				quantidade_cancelar[i]=null;
			}
			sessionStorage.setItem("produto", JSON.stringify(id_cancelar));
			sessionStorage.setItem("quantidade", JSON.stringify(quantidade_cancelar));
		});