
	//FILTRAGEM POR ROUPAS
	$("#roupas").click(function(){
		var id="ROUPAS";
		$.post("seleciona_produtos.php", {"id":id}, function(v){
			$("#tabela_produtos").html(v);
			carrinho();
		});
	});
	//FILTRAGEM POR DOCES 
	$("#doces").click(function(){
		var id="DOCES";
		$.post("seleciona_produtos.php", {"id":id}, function(v){
			$("#tabela_produtos").html(v);
			carrinho();
		});
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
			carrinho();
		});
	});
	//FILTRAGEM SELECT
	$("#filtragem_produtos").change(function(){
		var id=$("#filtragem_produtos").val();
		$.post("seleciona_produtos.php", {"id":id}, function(v){
			$("#tabela_produtos").html(v);
			carrinho();
		});
	});
	
	$("#select_usuarios_produtos").change(function(){
		var vendedor=$("#select_usuarios_produtos").val();
		$.post("seleciona_produtos.php", {"vendedor":vendedor}, function(v){
			$("#tabela_produtos").html(v);
			carrinho();
		});
	});
		
	
	
	/*$("#procurar").click(function(){
		var valor=$("#procurar_produto").val();
		$.post("seleciona_itens.php", {"valor":valor}, function(v){
			$("#tabela_produtos").html(v);
			carrinho();
		});	
	});*/
