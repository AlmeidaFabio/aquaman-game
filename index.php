<?php
session_start();

require 'config.php';

if(isset($_SESSION['id']) && empty($_SESSION['id']) == false) {

} else {
	header("Location: login.php");
}
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index</title>
    <link rel="stylesheet" href="style.css">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css">
</head>
<body>
    <div class="header">
        <h2 class="logo">MyPage</h2>
        <input type="checkbox" id="chk">
        <label for="chk" class="show-menu-btn">
            <i class="fas fa-ellipsis-h"></i>
        </label>

        <ul class="menu">
            <a href="#">Home</a>
            <a href="login.php">Login</a>
            <a href="cadastro.php">Cadastrar</a>
            <a href="#">Works</a>
            <a href="#">Contact</a>
            <label for="chk" class="hide-menu-btn">
                <i class="fas fa-times"></i>
            </label>
        </ul>
    </div>

    <center>
        <img src="" alt="">
    </center>
</body>
</html>