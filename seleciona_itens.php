<?php 
    //header("Content-Type: application/json");
    include "conexao.php";
        $select="SELECT nome FROM produtos WHERE id_produto='4'";
		$res = mysqli_query($con, $select) or die(mysqli_error($con));
		while($linha=mysqli_fetch_assoc($res)){
			$resultado= $linha["nome"];
		}
	echo $resultado;
?>
