<?php
session_start();

if(isset($_POST['email']) && empty($_POST['email']) == false){
	$email = addslashes($_POST['email']);
	$senha = md5(addslashes($_POST['senha']));

	$dsn = "mysql:dbname=cadastro;host=127.0.0.1";
    $dbuser = "root";
	$dbpass = "";

try {
	$pdo = new PDO($dsn, $dbuser, $dbpass);

	$sql = $pdo->query("SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'");
	if($sql->rowCount() > 0) {

		$dado = $sql->fetch();

		$_SESSION['id'] = $dado['id'];

		header('Location: index.php');

	}

} catch (PDOException $e) {
	echo "Falhou a conexão: ".$e->getMessage();
}	

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
		<h1>Login</h1>
		<input type="email" name="email" placeholder="E-mail">
		<input type="password" name="senha" placeholder="Senha">
		<input type="submit" value="Login">
	</form>

</body>
</html>