
	function atualiza(){
		var dados = {id:1};
		$.post("atualiza_produtos.php", dados, function(d){
			$("#recebe_filtrado").html(d);
		});
	}
	atualiza();
	
	
	$("#filtrar").click(function(){
		var dados= {tipo_produto: $("#filtro_produtos").val(),
					 usuario: $("#filtro_usuarios").val(),
                     preco: $("#filtro_preco").val()};
					 console.log("test");
		$.post("filtro_produtos_adm.php", dados, function(d){
			
			$("#recebe_filtrado").html(d);
		});
	});
	
	function deleta_produto(a){
		var dados = {id: a};
		$.post("deleta_produtos.php", dados, function(d){
			alert("Produto deletado com sucesso!!!");
			atualiza();
			$("#atualiza"+a).remove();
		});
	}
	
	function monta_modal_altera_produto(a){
		var id={id: a};
		$.post("seleciona_dados_produtos.php", id, function(d){
			$("#hidden").val(d.id_produto);
			$("#nome_produto_modal").val(d.nome);
			$("#preco_produto").val(d.preco);
			$("#descricao_produto").val(d.descricao);
			$("#quantidade_produto").val(d.quantidade);
			var ft="<a href='fotos/"+d.foto+"' > Arquivo de Foto</a>";
			$("#foto_produto_span").html(ft);
		});
	}
