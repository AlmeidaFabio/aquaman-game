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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>
      
    <div class="full-landing-image">
        <div class="header">
            <div class="logo">
                <img src="img/tt.png" alt="">
            </div>
            <input type="checkbox" id="chk">
            <label for="chk" class="show-menu-btn">
            <i class="fas fa-ellipsis-h"></i>
            </label>

            <ul class="menu">
            <a href="index.php">Home</a>
            <a href="login.php">Login</a>
            <a href="cadastro.php">Cadastrar</a>
            <a href="#">Jogar</a>
            <a href="social.html">Contatos</a>
            <label for="chk" class="hide-menu-btn">
                <i class="fas fa-times"></i>
            </label>
            </ul>
        </div>


        <div class="container-fluid">
        <div class="row">
            <div class="col" >
                <div class="card middle">
                    <div class="front">
                        <img src="img/atlanna.jpg" alt="">
                    </div>
                    <div class="back">
                    <div class="back-content middle">
                            <h2>Atlanna</h2>
                            <span><a href="skillsAtlanna.html">Skills</a></span><br>
                            <span>Aquaman Online</span>
                    <div class="sm">
                        <a href=""><i class="fab fa-facebook-f"></i></a>
                        <a href=""><i class="fab fa-twitter"></i></a>
                        <a href=""><i class="fab fa-instagram"></i></a>
                        <a href=""><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
                </div>
                </div>
            </div>

            <div class="col">
                <div class="card middle">
                    <div class="front">
                        <img src="img/aquaman.jpg" alt="">
                    </div>
                    <div class="back">
                    <div class="back-content middle">
                            <h2>Aquaman</h2>
                            <span><a href="skillsAquaman.html">Skills</a></span><br>
                            <span>Aquaman Online</span>
                    <div class="sm">
                        <a href=""><i class="fab fa-facebook-f"></i></a>
                        <a href=""><i class="fab fa-twitter"></i></a>
                        <a href=""><i class="fab fa-instagram"></i></a>
                        <a href=""><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
                </div>
                </div>
            </div>

            <div class="col">
                <div class="card middle">
                    <div class="front">
                        <img src="img/mera.jpg" alt="">
                    </div>
                    <div class="back">
                    <div class="back-content middle">
                            <h2>Mera</h2>
                            <span><a href="skillsMera.html">Skills</a></span><br>
                            <span>Aquaman Online</span>
                    <div class="sm">
                        <a href=""><i class="fab fa-facebook-f"></i></a>
                        <a href=""><i class="fab fa-twitter"></i></a>
                        <a href=""><i class="fab fa-instagram"></i></a>
                        <a href=""><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
                </div>
                </div>
            </div>
        </div>
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