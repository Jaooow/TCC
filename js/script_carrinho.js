$(document).ready(function(){	
	var produto=[];
	var quantidade=[];
	$("div#tabela_produtos").click(function(){
		carrinho();
	});
	$("div#tabela_produtos").keyup(function(){
		carrinho();
	});
			/*valores[0]=1;
			valores[2]=0;
			valores[10]=2;
			var resultado=[];
			sessionStorage.setItem("valores", JSON.stringify(valores));
			var val = JSON.parse(sessionStorage.getItem("valores")); 
			console.log(val);
			console.log(val.length);
			for (var i = 0; i < val.length; i++) {
				if(val[i]!=null){
					resultado[i] = val[i];
					console.log("t"+i);
				}
			}*/
			
	function carrinho(){
		$("div#tabela_produtos input").change(function(){
			if(parseFloat($(this).val())){
				console.log(quantidade);
				console.log(produto);
				if(produto[$(this).attr("id")]==null){
					console.log("teste");
					
					var id=$(this).attr("id");
					var valor=$(this).val();
					
					produto[id]=id;
					quantidade[id]=valor;
					
					sessionStorage.setItem("produto", JSON.stringify(produto));
					sessionStorage.setItem("quantidade", JSON.stringify(quantidade));
					
					var input="";
					var div = $("#recebe").html();
					
					$.post("seleciona_itens.php", {"id":id}, function(g){
						console.log("y");
							input+=""+div+"<div id='item"+id+"'><input type='text' readonly='readonly' value='"+g+"'/><input type='number' name='"+id+"'/><button type='button' name='deletar' value='"+id+"'>deletar</button><br /></div>";		
						
					});			
						$("#recebe").html(input);
				}
				else{
					var id=$(this).attr("id");
					var valor=$(this).val();
					if(valor!=0){
						$("input[name='"+id+"']").val($(this).val());
					}
					else{
						produto[id]=null;
						sessionStorage.setItem("produto", JSON.stringify(produto));
						$("item"+id).remove();
					}
				}
			}
		});
		
		$("div#tabela_produtos input").keyup(function(){
			if(parseFloat($(this).val())){
				
				if(produto[$(this).attr("id")]==null){
					
					var id=$(this).attr("id");
					var valor=$(this).val();
					
					produto[id]=id;
					quantidade[id]=valor;
					
					sessionStorage.setItem("produto", JSON.stringify(produto));
					sessionStorage.setItem("quantidade", JSON.stringify(quantidade));
					
					var input="";
					var div = $("#recebe").html();
					
					$.post("seleciona_itens.php", {"id":id}, function(g){
							input+=""+div+"<div id='item"+id+"'><input type='text' readonly='readonly' value='"+g+"'/><input type='number' name='"+id+"'/><button type='button' name='deletar' value='"+id+"'>deletar</button><br /></div>";		
						
					});			
						$("#recebe").html(input);
				}
				else{
					var id=$(this).attr("id");
					var valor=$(this).val();
					if(valor!=0){
						$("input[name='"+id+"']").val($(this).val());
					}
					else{
						produto[id]=null;
						sessionStorage.setItem("produto", JSON.stringify(produto));
						$("item"+id).remove();
					}
				}
			}
		});
		
		
		$("input[name='deletar']").click(function(){
			var valor=$(this).val();
			produto[valor]=null;
			sessionStorage.setItem("produto", JSON.stringify(valores));
			$("item"+val).remove();
		});
	
	}
	$("div#p input").keyup(function(){
		if(parseFloat(6)){
			console.log("teste");
		}
		
	});
	$("#u").change(function(){
		console.log($(this).val());
		
	});
});