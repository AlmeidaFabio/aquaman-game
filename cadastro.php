<?php
require 'config.php';
if(isset($_POST['email']) && empty($_POST['email']) == false){
	$email = addslashes($_POST['email']);
	$senha = md5(addslashes($_POST['senha']));


	$sql = "INSERT INTO usuarios SET email = '$email', senha = '$senha'";
	$pdo->query($sql);

	header("Location: index.php");
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Login</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	
	<form class="box" method="POST">
		<h1>Cadastro</h1>
		<input type="email" name="email" placeholder="E-mail">
		<input type="password" name="senha" placeholder="Senha">
		<input type="submit" value="Cadastrar">
	</form>

</body>
</html>