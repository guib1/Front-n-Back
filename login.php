<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
	<link rel="icon" href="img/logo.png" type="image/extension" sizes="16x16">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link rel="stylesheet" href="css/login.css">

    <title>Login | Front n' Back</title>
</head>

<body>

<div class="container h-100">
	<div class="d-flex justify-content-center h-100">
		<div class="user_card">
			<div class="d-flex justify-content-center">
				<div class="brand_logo_container">
					<img src="img/logo.png"
						class="brand_logo" alt="Logo">
				</div>
			</div>
			<div class="d-flex justify-content-center form_container">
				<form method="POST" action="">
					<div class="input-group mb-3">
						<div class="input-group-append">
						</div>
						<input type="text" name="user" id="buser" class="form-control input_user" value="" placeholder="usuario">
					</div>
					<div class="input-group mb-2">
						<div class="input-group-append">
						</div>
						<input type="password" name="pwd" id="bpassword" class="form-control input_pass" value="" placeholder="senha">
					</div>
					<div class="form-group">
						<div class="custom-control custom-checkbox">
							<input type="checkbox" class="custom-control-input" id="customControlInline" name="remember">
							<label class="custom-control-label" for="customControlInline">Lembrar</label>
						</div>
					</div>
					<div class="d-flex justify-content-center mt-3 login_container">
						<button type="submit" id="blogin" name="button" class="btn login_btn">Login</button>
					</div>
				</form>
			</div>

			<div class="mt-4">
				<div class="d-flex justify-content-center links">
					<a href="register-chose.html" class="ml-2"> Cadastro</a>
				</div>
				<div class="d-flex justify-content-center links">
					<a href="#">Esqueci minha senha</a>
				</div>
			</div>
		</div>
	</div>
</div>

	<!--JavaScript-->
	<!--Bootstrap-->
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
		integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk"
		crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js"
		integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy"
		crossorigin="anonymous"></script>
</body>

</html>

<?php
session_start();
if ($_SESSION['user_name_front_n_back'] != "" && ($_SESSION['user_pwd_front_n_back'] != "")) {
	header("Location: home.php");
}
else if (!empty($_POST['user']) && !empty($_POST['pwd'])) {
    $name = $_POST['user'];
    $pwd = $_POST['pwd'];
	$remember = $_POST['remember'];
	$conn = mysqli_connect("localhost", "root", "", "bdcadastro");
	$sql = "SELECT * FROM `tbusuarios` WHERE NOME='$name' AND SENHA='$pwd';";
    $resultado = mysqli_query($conn, $sql);
    $resultado = mysqli_fetch_assoc($resultado);    
    if(isset($resultado)){
            if(isset($remember)) {
				$_SESSION['user_name_front_n_back'] = $name;
				$_SESSION['user_pwd_front_n_back'] = $pwd;
				header("Location: home.php");
			} else {
				$_SESSION['user_name_front_n_back'] = "";
				$_SESSION['user_pwd_front_n_back'] = "";
			}
	} else {
		echo "
		<span id='incorretUser'
		style='transition: all 2s; position: fixed; width: auto; height: auto; right: 1%; top: -100%; text-align: center; background: #c0392b; color: white; padding: 10px; font-size: 120%; border-radius: 10px; box-shadow: 0px 0px 10px black;
		'>
		Usuário e/ou senha incorretos
		</span>
		";
		echo "<script>
		setTimeout(() => document.getElementById('incorretUser').style.top = '1%', 1);
		setTimeout(() => document.getElementById('incorretUser').style.top = '-50%', 5000);
		</script>";
	}
	$conn->close();
}
?>