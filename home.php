<!DOCTYPE HTML>
<html lang="pt-br">

<head>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta charset="utf-8" />
    <link rel="icon" href="img/logo.png" type="image/extension" sizes="16x16">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/home.css">
    <title>Front And Back</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Rubik&display=swap" rel="stylesheet">
    
</head>

<body>
    <div class="vignette"></div>
    <nav class="navbar navbar-expand-lg">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">
          <img src="img/logo.png" class="navbar-logo mx-3" alt="Bootstrap" width="60" height="60">
        </a>
		<form action="" method="POST">
		<input type="submit" class="btn btn btn-danger me-2" name="logout" value="Logout">
		</form>
	  </div>
    </nav>

    <center>
    <div class="row row-cols-1 row-cols-md-2 g-4 cards">
      <div class="col">
        <div class="card card1 w-50">
            <img src="img/ipcm.png" class="card-img-top" alt="...">
          </a>
          <div class="card-body">
            <p class="card-text mini-title ipcm"> IPCM
            <p class="card-text mini ipcm">IPCM recruta para auxilio de criação de software</p>
            <a href="compra/ipcm.html" target="_blank">
            <button class="aceitar ipcm">Prestar Serviço</button>
            </a>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card card2 w-50">
            <img src="img/ll-tech.png" class="card-img-top" alt="...">
          </a>
          <div class="card-body">
            <p class="card-text mini-title"> LL Tech
            <p class="card-text mini">LL Tech precisa de auxilio para design de website.</p>
            <a href="compra/lltech.html" target="_blank">
            <button class="aceitar">Prestar Serviço</button>
            </a>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card card1 w-50">
            <img src="img/Djamba-tech.png" class="card-img-top" alt="...">
          </a>
          <div class="card-body">
            <p class="card-text mini-title dt"> Djamba Technologies</p>
            <p class="card-text mini dt">Djamba Technologies precisa de auxilio para código css.</p>
            <a href="compra/djamba.html" target="_blank">
            <button class="aceitar dt">Prestar Serviço</button>
            </a>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card card2 w-50">
            <img src="img/tomate.png" class="card-img-top" alt="...">
          </a>
          <div class="card-body">
            <p class="card-text mini-title">Tomate Entertainment</p>
            <p class="card-text mini">Tomate Entertainment precisa de auxilio para design de website.</p>
            <a href="compra/tomate.html" target="_blank">
            <button class="aceitar">Prestar Serviço</button>
            </a>
          </div>
        </div>
      </div>
    </div>
</center>

<footer class="py-2 bg-dark text-white">
    <div class="container">
        <p class="footer-text">Copyright 2022 © PicTec</p>
    </div>
</footer>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8"
        crossorigin="anonymous"></script>
    <script type="text/javascript">
        function ocultar() {
            pages = document.querySelectorAll('section article');
            for (var i = 0; i < pages.length; i++) {
                pages[i].classList.remove("show");
            }
        }

        links = document.querySelectorAll('.MENU a');
        for (var i = 0; i < links.length; i++) {
            links[i].addEventListener('click', function () {
                id = this.getAttribute('href');
                ocultar();
                document.querySelectorAll(id)[0].classList.add("show");
                return false;
            });
        }
    </script>
</body>

</html>

<?php
session_start();
if (isset($_POST['logout'])) {
	$_SESSION['user_pwd_front_n_back'] = "";
	$_SESSION['user_name_front_n_back'] = "";
	echo "<script>window.location.replace('index.php');</script>";
}
?>