$(document).ready(function(){
	function cadastrar_produto(){
		var dados= { nome_produto: $("#nome_produto").val(),
					 descricao: $("#descricao").val(),
                     preco: $("#preco").val(),
					 foto: $("#foto").val()};
		$.post("cadastrar_produto.php", dados, function(d){
			console.log(d);
			alert("Produto cadastrado com sucesso!!!");
			$("#limpar").click();
		});
	}
	
	
	$("#cadastrar_produto").click(function(){
		if($("#nome_produto").val() || $("#descricao").val() || $("#preco").val() || $("#foto").val()){
			$("#msg").html("Todos os campos (Nome, descrição, preço e foto) devem der preenchidos devidamente, veja se estao devidamente preenchidos!!");
		}
		else{
			cadastrar_produto();
		}
	});
});