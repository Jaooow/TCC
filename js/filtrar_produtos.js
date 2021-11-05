$(document).ready(function(){
	//FILTRAGEM POR ROUPAS
	$("#roupas").click(function(){
		var id="ROUPAS";
		$.post("seleciona_produtos.php", {"id":id}, function(v){
			$("#tabela_produtos").html(v);
		});
	});
	//FILTRAGEM POR DOCES 
	$("#doces").click(function(){
		var id="DOCES";
		$.post("seleciona_produtos.php", {"id":id}, function(v){
			$("#tabela_produtos").html(v);
		});
	});
	//FILTRAGEM POR COMIDAS
	$("#comidas").click(function(){
		var id="COMIDAS";
		$.post("seleciona_produtos.php", {"id":id}, function(v){
			$("#tabela_produtos").html(v);
		});
	});
	//FILTRAGEM POR ESPORTES
	$("#esportes").click(function(){
		var id="ESPORTES";
		$.post("seleciona_produtos.php", {"id":id}, function(v){
			$("#tabela_produtos").html(v);
		});
	});
	//FILTRAGEM SELECT
	$("#filtragem_produtos").change(function(){
		var id=$("#filtragem_produtos").val();
		$.post("seleciona_produtos.php", {"id":id}, function(v){
			$("#tabela_produtos").html(v);
		});
	});
		
	
	
	$("#procurar").click(function(){
		var valor=$("#procurar_produto").val();
		$.post("seleciona_itens.php", {"valor":valor}, function(v){
			$("#tabela_produtos").html(v);
		});	
	});
});
