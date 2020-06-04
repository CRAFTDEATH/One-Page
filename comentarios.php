<?php 

include "conexao.php";

if(isset($_POST) && !empty($_POST)){

	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$mensagem = $_POST['mensagem'];
	$sql = "INSERT INTO posts(nome,email,mensagem)VALUES('$nome','$email','$mensagem')";
	mysqli_query($conect,$sql);
	mysqli_close($conect);
	header("Location:index.php?#comentarios");
}
else{
	header("Location:index.php?#comentarios");
}

 ?>