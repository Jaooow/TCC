<script>
	$(document).ready(function(){
		$("#filtragem_produtos").change(function(id){
			$.post("seleciona_produtos.php", {"id":id}, function(v){
				var tabela="";
				$.each(v, function(indice, valor){
					tabela+=;
				});
			});
		});
	});
</script>