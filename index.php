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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.ripples/0.5.3/jquery.ripples.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css">
</head>
<body>
    

    <div class="full-landing-image">
        <div class="header">
            <h2 class="logo">MyPage</h2>
            <input type="checkbox" id="chk">
            <label for="chk" class="show-menu-btn">
            <i class="fas fa-ellipsis-h"></i>
            </label>

            <ul class="menu">
            <a href="index.php">Home</a>
            <a href="login.php">Login</a>
            <a href="cadastro.php">Cadastrar</a>
            <a href="skills.html">My Skills</a>
            <a href="social.html">Contatos</a>
            <label for="chk" class="hide-menu-btn">
                <i class="fas fa-times"></i>
            </label>
            </ul>
        </div>


    </div>

    <script>
        $(".full-landing-image").ripples({
            resolution:200,
            pertuberance: 0.04,
        });
    </script>
    
</body>
</html>