
	$.getJSON("seleciona_perfil.php", function(r){
		$.each(r, function(i,v){
			$("#nome_perfil").html(v.nome);
			$("#email_perfil").html(v.email);
			$("#tipo_negocio").html(v.tipo_de_negocio);
			$("#id_usuario").val(v.id_usuario);
			if(v.tipo_de_usuario==1){
				$("#cargo").html("Cliente");
			}
			else{
				$("#cargo").html("Cliente/Vendedor");
				if(v.documentacao && v.documentacao!=""){
					$("#documentacao").html("<a href='documentos/"+v.documentacao+"'>documentos/"+v.documentacao+"</a>");
				}
				else{
					$("#documentacao").html("Ausente");
				}
			}
		});
	});


