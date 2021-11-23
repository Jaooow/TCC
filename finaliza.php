<?php
	session_start();
	include "conexao.php";
			
			$id=$_POST["id"];
			$update="UPDATE negociacao SET
										status=1
										WHERE 
					 id_negociacao='$id'";
			mysqli_query($con, $update)or die(mysqli_error($con));

?>