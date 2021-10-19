$(document).ready(function(){
	//FILTRAGEM POR ROUPAS
	$("#roupas").click(function(){
		var id="ROUPAS";
		$.post("seleciona_produtos.php", {"id":id}, function(v){
			$("#tabela_produtos").html(v);
		});
		carrinho();
	});
	//FILTRAGEM POR DOCES 
	$("#doces").click(function(){
		var id="DOCES";
		$.post("seleciona_produtos.php", {"id":id}, function(v){
			$("#tabela_produtos").html(v);
		});
		carrinho();
	});
	//FILTRAGEM POR COMIDAS
	$("#comidas").click(function(){
		var id="COMIDAS";
		$.post("seleciona_produtos.php", {"id":id}, function(v){
			$("#tabela_produtos").html(v);
			carrinho();
		});
	});
	//FILTRAGEM POR ESPORTES
	$("#esportes").click(function(){
		var id="ESPORTES";
		$.post("seleciona_produtos.php", {"id":id}, function(v){
			$("#tabela_produtos").html(v);
		});
		carrinho();
	});
	//FILTRAGEM SELECT
	$("#filtragem_produtos").change(function(){
		var id=$("#filtragem_produtos").val();
		$.post("seleciona_produtos.php", {"id":id}, function(v){
			$("#tabela_produtos").html(v);
		});
		carrinho();
	});
		if(sessionStorage.getItem("produto")){
			
		
			var item=[];
			var quant=[];
			var recebe= $("#recebe").html();
			item = JSON.parse(sessionStorage.getItem("produto")); 
			quant= JSON.parse(sessionStorage.getItem("quantidade")); 
			console.log(item);
			console.log(item.length);
			console.log(quant);
			console.log(quant.length);
			var input="";
			for (var i = 0; i < item.length; i++) {
				if(item[i]!=null){
					var id=item[i];
					var q=quant[i];
					$.post("seleciona_itens.php", {"id":id}, function(g){
						console.log("y");
							input=$("#recebe").html();
							input+="<div id='item"+id+"'><input type='text' readonly='readonly' value='"+g+"'/><input type='number' name='"+id+"' value='"+q+"'/><button type='button' name='deletar' value='"+id+"'>deletar</button><br /></div>";		
							$("input[name='produto"+id+"']").val(quant[i]);
							$("#botao").html('<button type="button" href="#" data-toggle="modal" data-target="#modal_carrinho">Abrir carrinho de compras</button>');
						console.log(input);
						$("#recebe").html(input);
					});			
				}
			}
		}
	
	
	var produto=[];
	var quantidade=[];
	console.log(quantidade);
				console.log(produto);
	function carrinho(){
		$("div#tabela_produtos button").click(function(){
				console.log(quantidade);
				console.log(produto);
				var id=$(this).val();
				if(produto[id]==null){	
					console.log("teste"+id);
					
					//var id=$(this).val();
					var valor=$("#produto"+id).val();
					
					produto[id]=id;
					quantidade[id]=valor;
					
					sessionStorage.setItem("produto", JSON.stringify(produto));
					sessionStorage.setItem("quantidade", JSON.stringify(quantidade));
					
					var input="";
					var div = $("#recebe").html();
					
					$.post("seleciona_itens.php", {"id":id}, function(g){
						console.log("y");
							input+=""+div+"<div id='item"+id+"'><input type='text' readonly='readonly' value='"+g+"'/><input type='number' name='"+id+"' value='"+valor+"'/><button type='button' name='deletar' value='"+id+"'>deletar</button><br /></div>";		
						console.log(input);
						$("#recebe").html(input);
					});			
					$("#botao").html('<button type="button" href="#" data-toggle="modal" data-target="#modal_carrinho">Abrir carrinho de compras</button>');
				}
				else{
					var id=$(this).val();
					var valor=$("#produto"+id).val();
					if(valor!=0){
						$("input[name='"+id+"']").val(valor);
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
	
	
	$("#procurar").click(function(){
		var valor=$("#procurar_produto").val();
		$.post("seleciona_itens.php", {"valor":valor}, function(v){
			$("#tabela_produtos").html(v);
		});	
	});
});
