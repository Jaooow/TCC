	function atualiza_produto(){
		$.post("atualiza_produtos_vendedor.php", function(d){
			$("#recebe_produtos_vendedor").html(d);
		});
	}
	atualiza_produto();
	$("#filtrar").click(function(){
		var dados= {tipo_produto: $("#filtro_produtos").val(),
                     preco: $("#filtro_preco").val()};
					 console.log("test");
		$.post("filtro_produtos_vendedor.php", dados, function(d){
			
			$("#recebe_produtos_vendedor").html(d);
		});
	});
	
	function deleta_produto(a){
		var dados = {id: a};
		$.post("deleta_produtos.php", dados, function(d){
			alert("Produto deletado com sucesso!!!");
			atualiza_produto();
		});
	}
	
	function monta_modal_altera_produto(a){
		var id={id: a};
		$.post("seleciona_dados_produtos.php", id, function(d){
			$("#btn_altera_produto").val(d.id_produto);
			$("#nome_produto_modal").val(d.nome);
			$("#preco_produto").val(d.preco);
			$("#descricao_produto").val(d.descricao);
			$("#quantidade_produto").val(d.quantidade);
			var ft="<a href='fotos/"+d.foto+"' > Arquivo de Foto</a>";
			$("#foto_produto_span").html(ft);
		});
	}