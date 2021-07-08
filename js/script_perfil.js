$(document).ready(function(){
	$.getJSON("seleciona_perfil.php", function(r){
		$.each(r, function(i,v){
			$("#nome_perfil").html(v.nome);
			$("#email_perfil").html(v.email);
			if(v.tipo_de_usuario==1){
				$("#cargo").html("Cliente");
			}
			else{
				$("#cargo").html("Cliente/Vendedor");
			}
		});
	});
});

