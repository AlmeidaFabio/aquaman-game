<?php
require 'config.php';
if(isset($_POST['email']) && empty($_POST['email']) == false){
	$email = addslashes($_POST['email']);
	$senha = md5(addslashes($_POST['senha']));


	$sql = "INSERT INTO usuarios SET email = '$email', senha = '$senha'";
	$pdo->query($sql);
	header("Location: login.php");
	
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
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.ripples/0.5.3/jquery.ripples.min.js"></script>
</head>
<body>
	<div class="full-landing-image">
	<form class="box" method="POST">
	<img src="img/tt.png" alt="">
		<h1>Cadastro</h1>
		<input type="email" name="email" placeholder="E-mail">
		<input type="password" name="senha" placeholder="Senha">
		<input type="submit" value="Cadastrar">
	</form>
	</div>
	
	<script>
        $(".full-landing-image").ripples({
            resolution:200,
            pertuberance: 0.04,
        });
    </script>
	
</body>
</html>