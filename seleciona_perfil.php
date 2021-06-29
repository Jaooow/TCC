<?php 
session_start();
    header("Content-Type: application/json");
    include "conexao.php";
	$id=$_SESSION["id_usuario"];
	$select="SELECT nome, email, tipo_de_usuario FROM usuarios WHERE id_usuario='$id'";
    $res = mysqli_query($con, $select) or die(mysqli_error($con));
    while($linha=mysqli_fetch_assoc($res)){
        $resultado[]= $linha;
    }
    echo json_encode($resultado);
?>
