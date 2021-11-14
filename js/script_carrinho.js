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
										"quant":quantidade};
							//console.log(id);
							console.log(quantidade);
							$.post("seleciona_itens.php", dados, function(g){
								
									input=$("#recebe_modal").html();
									console.log(g);
									input+="<div id='item"+JSON.parse(g).id+"'><input type='text' readonly='readonly' value='"+JSON.parse(g).nome+"'/><input type='number' name='"+JSON.parse(g).id+"' value='"+JSON.parse(g).quant+"'/><button type='button' name='deletar' value='"+JSON.parse(g).id+"'>deletar</button><br /></div>";		
									//$("input[name='produto"+id+"']").val(quant[i]);
								
									
								$("#recebe_modal").html(input);
							});			
						}
					}
				}
				
				function carrinho(){
					console.log("teste function");
					$("div.tabela-produtos button").click(function(){
console.log("teste function2");
						if(sessionStorage.getItem("produto")){
							produto=JSON.parse(sessionStorage.getItem("produto"));
							quantidade= JSON.parse(sessionStorage.getItem("quantidade")); 
						}
						var id=$(this).val();
						console.log(id);
						if(typeof produto[id] == "undefined"){	
							console.log("teste"+id);
							
							var valor=$("#produto"+id).val();
							produto[id]=id;
							quantidade[id]=valor;
							console.log("teste "+produto);
							
							sessionStorage.setItem("produto", JSON.stringify(produto));
							sessionStorage.setItem("quantidade", JSON.stringify(quantidade));
							
							var input="";
							var div = $("#recebe_modal").html();
							var dados={"id":id,
										"quant":quantidade[id]};
							$.post("seleciona_itens.php", dados, function(g){
								console.log(g);
								
									input+=div+"<div id='item"+JSON.parse(g).id+"'><input type='text' readonly='readonly' value='"+JSON.parse(g).nome+"'/><input type='number' name='"+JSON.parse(g).id+"' value='"+JSON.parse(g).quant+"'/><button type='button' name='deletar' value='"+JSON.parse(g).id+"'>deletar</button><br /></div>";		
								console.log(input);
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
								$("item"+id).remove();
							}
						}
					
					});
				}
				carrinho();