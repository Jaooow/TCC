<?php 
    header("Content-Type: application/json");
    include "conexao.php";

    if(!empty($_POST))
    {
        /*$id=$_POST["id"];
        $select="SELECT  FROM ='$id'";*/
    }
    else{
        $select="SELECT nome, preco, descricao, cod_vendedor FROM produtos";
    }
    $res = mysqli_query($con, $select) or die(mysqli_error($con));
    while($linha=mysqli_fetch_assoc($res)){
        $resultado[]= $linha;
    }
    echo json_encode($resultado);
?>
