$(document).ready(function(){
	function dados(){
		$.post("seleciona_usuarios.php", function(d){
			$("#recebe_usuarios").html(d);
		});
	}
	dados();
	
	$("#filtrar").click(function(){
		var dados= {tipo_produto: $("#filtro_produtos").val(),
					 usuario: $("#filtro_usuarios").val(),
                     preco: $("#filtro_preco").val()};
		$.post("filtro_produtos_adm.php", dados, function(d){
			
			$("#recebe_filtrado").html(d);
		});
	});
	
	function deleta_produto(a){
		var dados = {id: a};
		$.post("deleta_altera_produtos.php", dados, function(d){
			alert("Produto deletado com sucesso!!!");
		});
	}
	
	
	////////////////////////////////////////////////////////////////////
	
	
	$("#select_usuarios").change(function(){
		var id= {id: $(this).val()};
		$.post("seleciona_usuarios.php", id, function(d){
			$("#recebe_usuarios").html(d);
		});
	});
	
	function deleta_usuario(a){
		var id={id: a,
				tipo: 1};
		$.post("deleta_altera_usuarios.php", id, function(d){
			alert("Usuario deletado com sucesso!!!");
			dados();
		});
	}
	
	function deleta_usuario_vendedor(a){
		var id={id: a,
				tipo: 2};
		$.post("deleta_altera_usuarios.php", id, function(d){
			alert("Usuario deletado como vendedor com sucesso!!!");
			dados();
		});
	}
	
	$("#alterar_usuario").click(function(){
		var id={id: $(this).val(),
				tipo: 3,
				nome:$("#nome_altera").val(),
				email:$("#email_altera").val(),
				senha:$("#senha_altera").val()};
		$.post("deleta_altera_usuarios.php", id, function(d){
			alert("Usuario Alterado com sucesso!!!");
			dados();
		});
	});
	
	function monta_modal(a){
		var id={id: a};
		$.post("seleciona_dados.php", id, function(d){
			$("#altera_usuario").val(d.id_usuario);
			$("#nome_altera").val(d.nome);
			$("#email_altera").val(d.email);
		});
	}
	
	function monta_modal_vendedor(a){
		var id={id: a};
		$.post("seleciona_dados.php", id, function(d){
			$("#altera_vendedor").val(d.id_usuario);
			$("#nome_altera").val(d.nome);
			$("#email_altera").val(d.email);
			$("#cnpj_altera").val(d.cnpj);
			$("#telefone_altera").val(d.telefone);
		});
	}
	
	$("#alterar_vendedor").click(function(){
		var id={id: $(this).val(),
				tipo: 4
				nome:$("#nome_altera_vendedor").val(),
				email:$("#email_altera_vendedor").val(),
				senha:$("#senha_altera_vendedor").val(),
				cnpj:$("#cnpj_altera").val(),
				telefone:$("#telefone_altera").val(),
				regiao:$("#regiao_altera").val(),
				tipo_de_negocio:$("#tipo_de_negocio_altera_vendedor").val()};
		$.post("deleta_altera_usuarios.php", id, function(d){
			alert("Vendedor Alterado com sucesso!!!");
			dados();
		});
	});
});