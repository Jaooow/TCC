<?php 
    header("Content-Type: application/json");
    include "conexao.php";

	$select="SELECT nome, email, tipo_de_usuario FROM usuarios where id_usuario='1'";
 
    $res = mysqli_query($con, $select) or die(mysqli_error($con));
    while($linha=mysqli_fetch_assoc($res)){
        $resultado[]= $linha;
    }
    echo json_encode($resultado);
?>
