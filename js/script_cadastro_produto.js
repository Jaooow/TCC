$(document).ready(function(){
	function cadastrar_produto(){
		var dados= { nome_produto: $("#nome_produto").val(),
					 descricao: $("#descricao").val(),
                     preco: $("#preco").val(),
					 foto: $("#foto").val(),
					 tipo_produto: $("#tipo_produto").val(),
					 quantidade: $("#quantidade").val()};
		$.post("cadastrar_produto.php", dados, function(d){
			alert("Produto cadastrado com sucesso!!!");
			$("#limpar").click();
		});
	}
	
	
	$("#cadastrar_produto").click(function(){
		if($("#nome_produto").val()=="" || $("#descricao").val()=="" || $("#preco").val()=="" || $("#tipo_produto").val()==""){
			$("#msg").html("Todos os campos (Nome, descrição, preço, tipo de produto e foto) devem der preenchidos devidamente, veja se estao devidamente preenchidos!!");
		}
		else{
			cadastrar_produto();
		}
	});
});