<!DOCTYPE HTML>
<html lang="pt-br">

<head>
    <meta charset="utf-8" />
    <link rel="icon" href="img/logo.png" type="image/extension" sizes="16x16">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="css/index.css">
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
            <div class="d-flex flex-row-reverse">
                <a href="register-chose.html"><button class="btn btn btn-danger me-2"
                        type="button">Registra-se</button></a>
                <a href="login.php"><button class="btn btn-outline-secondary me-2" type="button">Entrar</button></a>
            </div>
        </div>
    </nav>

    <section>
        <article id="home" class="first show">
            <header>
                <h2 class="fnb-text" id="title"></h2>
                <p>Conheça o nosso site de serviços na área de informatica, destinado a auxiliar empresas e programadores ao redor do mundo.</p>
            </header>
            <p></p>
        </article>
    </section>

    <center>
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="carousel-images">
                  <img src="img/1.jpeg" class="d-block w-100" alt="...">
              </a>
          </div>
          <div class="carousel-caption d-none d-md-block">
            <h4>Contratação Empresarial</h4>
            <p>Empresas ao redor do mundo utilizam o Front n' Back para a contratação temporaria de profissionais na área de informatica.</p>
          </div>
        </div>
        <div class="carousel-item">
          <div class="carousel-images">
                  <img src="img/2.jpeg" class="d-block w-100" alt="...">
              </a>
          </div>
          <div class="carousel-caption d-none d-md-block">
            <h4>Contratação Freelancer</h4>
            <p>Auxilie outros profissionais ou estudantes na área de informatica em serviços rapidos e freelancer. </p>
          </div>
        </div>
        <div class="carousel-item">
          <div class="carousel-images">
                  <img src="img/3.jpeg" class="d-block w-100" alt="...">
              </a>
          </div>
          <div class="carousel-caption d-none d-md-block">
            <h4>Auxilio para estudantes</h4>
            <p>Serviços de auxilio a estudantes que estão começando a seguir na área de informatica.</p>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
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
if(!empty($_SESSION['user_name_front_n_back'])) echo "<script>window.location.replace('index.php');</script>";
?>