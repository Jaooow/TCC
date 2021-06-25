$(document).ready(function(){
	$("#tipo_de_negocio").change(function(){
		if(this.value ==1){
			$("cnpj").attr("required", "false");
			$("documento").attr("required", "false");
			console.log("foi sem");
		}
		else{
			$("cnpj").attr("required", "true");
			$("documento").attr("required", "true");
			console.log("foi com");
		}
	});
	
	/*$("#cadastrar_mudanca").click(function(){
		var dados= { tipo_de_negocio: $("#tipo_de_negocio").val(),
					 cnpj: $("#cnpj").val(),
                     documento: $("#documento").val()};
		$.post("cadastrar_mudanca.php", dados, function(r){
			console.log("mudança feita com sucesso!!");
			//window.location.href = "perfil.php";
			console.log(r);
		})
	});*/
});