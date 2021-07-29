$(document).ready(function(){	
	var produto=[];
	var quantidade=[];
			/*
			var recebe= $("#recebe").html();
			var item = JSON.parse(sessionStorage.getItem("produto")); 
			var quant= JSON.parse(sessionStorage.getItem("quantidade")); 
			console.log(item);
			console.log(item.length);
			console.log(quant);
			console.log(quant.length);
			var input="";
			for (var i = 0; i < item.length; i++) {
				if(item[i]!=null){
					var id=item[i];
					$.post("seleciona_itens.php", {"id":id}, function(g){
						console.log("y");
							input+=""+recebe+"<div id='item"+id+"'><input type='text' readonly='readonly' value='"+g+"'/><input type='number' name='"+id+"' value='"+quant[i]+""/><button type='button' name='deletar' value='"+id+"'>deletar</button><br /></div>";		
						console.log(input);
					});			
				}
			}
			$("#recebe").html(input);*/
			
	function carrinho(){
		$("div#tabela_produtos button").click(function(){
				console.log(quantidade);
				console.log(produto);
				if(produto[$(this).val()]==null){
					console.log("teste");
					
					var id=$(this).val();
					var valor=$("#produto"+id).val();
					
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