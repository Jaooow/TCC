$(document).ready(function(){
	$("#filtrar").click(function(){
		console.log($("#filtro_produtos").val());
	});
	
	$("#filtrar").click(function(){
		var dados= {tipo_produto: $("#filtro_produtos").val(),
					 usuario: $("#filtro_usuarios").val(),
                     preco: $("#filtro_preco").val()};
		$.post("filtro_produtos_adm.php", dados, function(d){
			alert("Usuario cadastrado com sucesso!!!");
			window.location.href = "index.php";
		});
	});
});