<?php
	include "cabecalho.php";
	include "conexao.php";
?>

<body>
	<main>
		<div class="container">
			<div class="row">
				<div class="col-12">
					<h3 class ="main-title-search">Lista Usuários</h3>
				</div>
				<div class="col-md-6">
					<label for="select_usuarios">Filtro de usuarios:</label>
					<select class="form-control" id="select_usuarios">
						<option label="Escolha um Usuario" value="0">Escolha um Usuario</option>
						<?php
							$select="SELECT nome, id_usuario FROM usuarios";
							$res = mysqli_query($con, $select) or die(mysqli_error($con));
							while($linha=mysqli_fetch_assoc($res)){
								echo '<option value="'.$linha["id_usuario"].'">'.$linha["nome"].'</option>';
							}
						?>
					</select>
				</div>
			</div>
		</div>
		<div id="recebe_usuarios"></div>
	</main>
</body>

<?php
	include "modal_altera_usuario.php";
	include "rodape.php";
?> 