$(document).ready(function(){
	console.log("teste1");
	$.getJSON("seleciona_perfil.php", function(r){
		console.log("teste");
		$.each(r, function(i,v){
			$("#nome_perfil").html(v.nome);
			$("#email_perfil").html(v.email);
			$("#cargo").html(v.tipo_de_negocio);
		});
	});
});

