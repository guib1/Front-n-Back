<!doctype html>
<html lang="pt-br">

<head>
	<meta charset="utf-8">
	<link rel="icon" href="img/logo.png" type="image/extension" sizes="16x16">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link rel="stylesheet" href="css/register.css">

	<title>Cadastro | Front n' Back</title>
</head>

<body>

	<div class="container h-100">
		<div class="d-flex justify-content-center h-100">
			<div class="user_card">
				<div class="d-flex justify-content-center mb-3">
					<div class="brand_logo_container">
						<img src="img/logo.png" class="brand_logo" alt="Logo">
					</div>
				</div>
				<div class="d-flex justify-content-center form_container">
					<form method="POST" action="">
						<div class="input-group mb-3">
							<div class="input-group-append">
							</div>
						</div>
						<div class="input-group mb-3">
							<div class="input-group-append">
							</div>
							<input type="text" name="nome" id="bname" class="form-control output_user" value="" placeholder="nome">
						</div>
						<div class="input-group mb-3">
							<div class="input-group-append">
							</div>
							<input type="text" name="endereco" id="bemail" class="form-control output_user" value="" placeholder="endereco">
						</div>
						<div class="input-group mb-3">
							<div class="input-group-append">
							</div>
							<input type="number" name="cnpj" id="bcnpj" class="form-control output_user" value="" placeholder="CNPJ">
						</div>
						<div class="input-group mb-2">
							<div class="input-group-append">
							</div>
							<input type="password" name="pwd" id="bpassword" class="form-control output_pass" value="" placeholder="senha">
						</div>
						<div class="input-group mb-2">
							<div class="input-group-append">
							</div>
							<input type="password" name="pwd2" id="bconfirmpassword" class="form-control output_pass" value="" placeholder="confirmar senha">
						</div>
						<div class="d-flex justify-content-center mt-4 login_container">
							<button type="submit" id="bregister" name="button" class="btn login_btn">Cadastrar-se</button>
						</div>
					</form>
				</div>
				<div class="mt-5">
				</div>
			</div>
		</div>
	</div>

	<!--JavaScript-->
	<!--Bootstrap-->
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
</body>

</html>

<?php
if (!empty($_POST['nome']) && !empty($_POST['endereco']) && !empty($_POST['cnpj']) && !empty($_POST['pwd']) && !empty($_POST['pwd2'])) {
	$name = $_POST['nome'];
	$endereco = $_POST['endereco'];
	$cnpj = $_POST['cnpj'];
	$pwd = $_POST['pwd'];
	$pwd2 = $_POST['pwd2'];
	$conn = mysqli_connect("localhost", "root", "", "bdcadastro");
	$sql = "SELECT * FROM `tbusuarios` WHERE CPF_CNPJ='$cnpj';";
	$resultado = mysqli_query($conn, $sql);
	$resultado = mysqli_fetch_assoc($resultado);
	if (isset($resultado)) {
		echo "
		<span id='incorretUser'
		style='transition: all 2s; position: fixed; width: auto; height: auto; right: 1%; top: -100%; text-align: center; background: #c0392b; color: white; padding: 10px; font-size: 120%; border-radius: 10px; box-shadow: 0px 0px 10px black;
		'>
		Usuário já existente!
		</span>
		";
		echo "<script>
		setTimeout(() => document.getElementById('incorretUser').style.top = '1%', 1);
		setTimeout(() => document.getElementById('incorretUser').style.top = '-50%', 5000);
		</script>";
	} else {
		if ($pwd == $pwd2) {
			$sql = "INSERT INTO tbusuarios (ID, NOME, ENDERECO, CPF_CNPJ, SENHA) VALUES ('','$name','$endereco',$cnpj,'$pwd');";
			$resultado = mysqli_query($conn, $sql);
			echo "
		<span id='correctUser'
		style='transition: all 2s; position: fixed; width: auto; height: auto; right: 1%; top: -100%; text-align: center; background: green; color: white; padding: 10px; font-size: 120%; border-radius: 10px; box-shadow: 0px 0px 10px black;
		'>
		Cadastrado com sucesso!
		</span>
		";
		echo "<script>
		setTimeout(() => document.getElementById('correctUser').style.top = '1%', 1);
		setTimeout(() => document.getElementById('correctUser').style.top = '-50%', 5000);
		setTimeout(() => window.location.href = 'login.php', 6000);
		</script>";
		} else {
			echo "
		<span id='incorretUser'
		style='transition: all 2s; position: fixed; width: auto; height: auto; right: 1%; top: -100%; text-align: center; background: #c0392b; color: white; padding: 10px; font-size: 120%; border-radius: 10px; box-shadow: 0px 0px 10px black;
		'>
		Senhas não correspondentes!
		</span>
		";
	echo "<script>
		setTimeout(() => document.getElementById('incorretUser').style.top = '1%', 1);
		setTimeout(() => document.getElementById('incorretUser').style.top = '-50%', 5000);
		</script>";
		}
	}
	$conn->close();
} else {
	echo "
		<span id='incorretUser'
		style='transition: all 2s; position: fixed; width: auto; height: auto; right: 1%; top: -100%; text-align: center; background: #c0392b; color: white; padding: 10px; font-size: 120%; border-radius: 10px; box-shadow: 0px 0px 10px black;
		'>
		Preencha todos os campos!
		</span>
		";
	echo "<script>
		setTimeout(() => document.getElementById('incorretUser').style.top = '1%', 1);
		setTimeout(() => document.getElementById('incorretUser').style.top = '-50%', 5000);
		</script>";
}
?>