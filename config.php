<?php

$dsn = "mysql:dbname=cadastro;host=127.0.0.1";
$dbuser = "root";
$dbpass = "";

try {
	$pdo = new PDO($dsn, $dbuser, $dbpass);

} catch (PDOException $e) {
	echo "Falhou a conexão: ".$e->getMessage();
}	

?>