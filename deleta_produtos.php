<?php 
    include "conexao.php";
		$id=$_POST["id"];
			
			$delete="DELETE from produtos where id_produto='$id'";
			
			mysqli_query($con, $delete) or die(mysqli_error($con));
		
?>
