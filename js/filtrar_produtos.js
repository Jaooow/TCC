$(document).ready(function(){
	$("#filtragem_produtos").change(function(){
		var id=$("#filtragem_produtos").val();
		$.post("seleciona_produtos.php", {"id":id}, function(v){
			$("#tabela_produtos").html(v);
		});
	});
});
