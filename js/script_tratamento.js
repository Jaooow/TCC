function tratamento(){
	$("#andamento_tratamanto").click(function(){
		var id="0";
		$.post("botoes.php", {"id":id}, function(v){
			$("#botoes").html(v);
			console.log("dale"+v);
		});
		$("#tratamento").html("");
	});
}
tratamento();

$("#finalizadas_tratamento").click(function(){
	console.log("dale2");
	var id="1";
	$.post("botoes.php", {"id":id}, function(v){
		$("#botoes").html(v);
	});
});


function aparece_negociacao(a, b){
	var dados={ id:a,
				status:b};
	$.post("seleciona_status.php", dados, function(v){
		$("#tratamento").html(v);
	});
}

function finaliza(a){
	$.post("finaliza.php", {"id":a}, function(v){
		tratamento();
		alert("Compra finalizada com sucesso");
	});
	$('div[name="botao"]').remove();
	$("div[name='status']").remove();
}