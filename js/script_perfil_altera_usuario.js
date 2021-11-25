
		var id={id: $("#id_usuario").val()};
		$.post("seleciona_dados.php", id, function(d){
			console.log("foi");
			$("#alterar_usuario_perfil").val(d.id_usuario);
			$("#nome_altera").val(d.nome);
			$("#email_altera").val(d.email);
		});
	
	$("#alterar_usuario_perfil").click(function(){
		console.log($(this).val());
		var id={id_deleta: $(this).val(),
				tipo: 3,
				nome:$("#nome_altera").val(),
				email:$("#email_altera").val(),
				senha:$("#senha_altera").val()};
				console.log(id);
		$.post("deleta_altera_usuarios.php", id, function(d){
			alert("Usuario Alterado com sucesso!!!");
			window.location.href="perfil.php";
		});
	});
	
	
		
	