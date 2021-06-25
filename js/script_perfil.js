$(document).ready(function(){
	console.log("teste1");
	$.getJSON("seleciona_perfil.php", function(r){
		console.log("teste");
		$.each(r, function(i,v){
			$("#nome_perfil").html(v.nome);
			$("#email_perfil").html(v.email);
			console.log(v.tipo_de_usuario);
			if(v.tipo_de_usuario==1){
				$("#cargo").html("Cliente");
			}
			else{
				$("#cargo").html("Cliente/Vendedor");
			}
		});
	});
});

