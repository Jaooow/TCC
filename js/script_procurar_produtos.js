$(document).ready(function(){
	$.getJSON("seleciona_produtos.php", function(g){
		var tabelas="";
		console.log("teste");
		$.each(g, function(i, v){
			tabelas+="<table border='1'><tr><td rowspan='2'><img src='skdnv.png'></td><td>Nome: "+v.nome+"</td></tr> <tr><td>Descrição: "+v.descricao+"</td></tr></table><br />";
		});
		$("#lista_de_produtos").html(tabelas);
	});
	


});