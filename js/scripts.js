$(document).ready(function(){
	function cadastrar(){
		var dados= { nome: $("#nome").val(),
					 email: $("#email").val(),
                     senha: $("#senha").val()};
		$.post("cadastrar.php", dados, function(d){
			alert("Usuario cadastrado com sucesso!!!");
			window.location.href = "index.php";
		});
	}
	
	function confirmar_senha(){
		var senha = $("#senha").val(), confirma_senha = $("#confirma_senha").val();
		
		if(senha!=confirma_senha){
			$("#msg").html("As senhas estão diferentes, confirme a senha!!");
		}
		else{
			$("#mensagem").html("");
			cadastrar();
		}
	}
	
	
	$("#cadastrar").click(function(){
		confirmar_senha();
		console.log("teste");
	});
	


	
});