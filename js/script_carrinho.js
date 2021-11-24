
				console.log("teste carrinho");
					var produto=[];
					var quantidade=[];
				if(sessionStorage.getItem("produto")){
					var item=[];
					var quant=[];
					var recebe= $("#recebe_modal").html();
					item = JSON.parse(sessionStorage.getItem("produto")); 
					quant= JSON.parse(sessionStorage.getItem("quantidade"));
					console.log(quant);
					console.log(item);
					console.log(item.length);
					
					for (var i = 0; i < item.length; i++) {
						var input="";
						if(item[i]!=null){
							var id=item[i];
							var quantidade=quant[i];	
							var dados={"id":id,
										"quant":quantidade,
										"tipo":2};
							//console.log(id);
							console.log(quantidade);
							$.post("seleciona_itens.php", dados, function(g){
								
									input=$("#recebe_modal").html();
									input+=JSON.parse(g).conteudo;
									//$("input[name='produto"+id+"']").val(quant[i]);
								
								$("#recebe_modal").html(input);
							});			
						}
					}
				}
	
				
				function carrinho(){
					console.log("teste function");
					$("div#tabela_produtos button").click(function(){
console.log("teste function2");
						if(sessionStorage.getItem("produto")){
							produto=JSON.parse(sessionStorage.getItem("produto"));
							quantidade= JSON.parse(sessionStorage.getItem("quantidade")); 
						}
						var id=$(this).val();
						console.log(id);
						if(typeof produto[id] == "undefined" || typeof produto[id] == "object"){	
							console.log("teste"+id);
							
							var valor=$("#produto"+id).val();
							produto[id]=id;
							quantidade[id]=valor;
							console.log("teste "+produto);
							
							sessionStorage.setItem("produto", JSON.stringify(produto));
							sessionStorage.setItem("quantidade", JSON.stringify(quantidade));
							
							
							var dados={"id":id,
										"quant":quantidade[id],
										"tipo":2};
							$.post("seleciona_itens.php", dados, function(g){
								var input=$("#recebe_modal").html();
								input+=JSON.parse(g).conteudo;
								
								$("#recebe_modal").html(input);
							});			
						}
						else{
							var valor=$("#produto"+id).val();
							if(valor!=0){
								$("input[name='"+id+"']").val(valor);
								quantidade[id]=valor;
								sessionStorage.setItem("quantidade", JSON.stringify(quantidade));
							}
							else{
								produto[id]=null;
								sessionStorage.setItem("produto", JSON.stringify(produto));
								$("item"+id).html("");
							}
						}
						$("input[name='quantidade_negociacao']").click(function(){
							var id=$(this).attr('id');
							var quant=$(this).attr('value');
							
							var quantidade= JSON.parse(sessionStorage.getItem("quantidade")); 
							$("input[name='"+id+"']").val(quant);
							quantidade[id]=quant;
							sessionStorage.setItem("quantidade", JSON.stringify(quantidade));
						});
					});
				}
				carrinho();
			
				
		function deleta_item_carrinho(a){
			console.log("item"+a);
			produto=JSON.parse(sessionStorage.getItem("produto"));
			quantidade=JSON.parse(sessionStorage.getItem("quantidade"));
			produto[a]=null;
			quantidade[a]=null;
			console.log(produto);
			var p=[];
			for (var i = produto.length-1; i >=0; i--) {
				if(produto[i]==null ){
					console.log(produto[i]);
					produto.pop();
					 p[i]=i;
				}
				else{
					console.log(produto[produto.length-i]);
					i=0;
				}
			}
			console.log(p);
			sessionStorage.setItem("produto", JSON.stringify(produto));
			sessionStorage.setItem("quantidade", JSON.stringify(quantidade));
			$("#item"+a).remove();
		}
				