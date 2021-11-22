
	function atualiza_negiciacao(){
		$.post("atualiza_historico_negociacao.php", function(d){
			$("#recebe_filtrado_negociacao").html(d);
		});
	}
	atualiza_negiciacao();
	
	
	$("#filtrar_negociacao").click(function(){
		var dados= {status:$("#status_negociacao").val(),
					tipo_produto: $("#filtro_produtos_negociacao").val(),
					 usuario_consumidor: $("#filtro_usuarios_negociacao_consumidores").val(),
					 usuario_vendedor: $("#filtro_usuarios_negociacao_vendedores").val(),
                     preco: $("#filtro_preco_negociacao").val()};
					 console.log("test");
		$.post("filtro_historico_negociacao.php", dados, function(d){
			
			$("#recebe_filtrado_negociacao").html(d);
		});
	});
