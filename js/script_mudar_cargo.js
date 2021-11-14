
	
	$("#tipo_de_negocio_perfil").change(function(){
		if(this.value ==1){
			$("cnpj_perfil").attr("required", "false");
			$("documento_perfil").attr("required", "false");
			console.log("foi sem");
		}
		else{
			$("cnpj_perfil").attr("required", "true");
			$("documento_perfil").attr("required", "true");
			console.log("foi com");
		}
	});
	
	$("#cadastrar_mudanca").click(function(){
		var dados= { tipo_de_negocio: $("#tipo_de_negocio_perfil").val(),
					 cnpj: $("#cnpj_perfil").val(),
                     documento: $("#documento_perfil").val(),
					 telefone: $("#telefone_perfil").val()};
		$.post("cadastrar_mudanca.php", dados, function(){
			alert("mudança feita com sucesso!!");
			window.location.href = "perfil.php";
		})
	});