	$(document).ready(function(){
		if(!localStorage.getItem("boas_vendas")){
			localStorage.setItem("boas_vendas", "1");
			$('#modal_boas_vindas').modal('show');
			console.log("c");
		}
	});
	//localStorage.removeItem("boas_vendas")
	function cadastrar(){
		var dados= { nome: $("#nome").val(),
					 email: $("#email").val(),
                     senha: $("#senha").val()};
		$.post("cadastrar.php", dados, function(d){
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

