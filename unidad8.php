<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" href="estilos.css">
</head>

<body>

	<div class="container">
		<header>
			<h1>Programación en PHP y MySQL - Nivel Avanzado</h1>
			<nav>
				<?php include("botonera.php"); ?>
			</nav>
		</header>
		<section>
			<h2>Registro</h2>
			<article id="login">
				<form action="cargarusuario.php" method="POST" class="formulario">
					<div class="title">Registro</div>
					<div class="subtitle">Por favor Complete el formulario!</div>
					<div class="input-container ic2">
						<input id="email" class="input" name="email_form" type="text" placeholder=" " />
						<div class="cut cut-short"></div>
						<label for="email" class="placeholder">Email</>
					</div>
					<div class="input-container ic1">
						<input id="firstname" class="input" name="pass_form" type="text" placeholder=" " />
						<div class="cut"></div>
						<label for="firstname" class="placeholder">Password</label>
					</div>
					<input type="submit" class="submit" value="Confirmar">
				</form>
			</article>
			<?php
			if (isset($_GET['resultado'])) {
				$resultado = $_GET['resultado'];
				if ($resultado === 'ok_carga') {
					echo "<h1>Carga realizada con éxito</h1>";
				} elseif ($resultado === 'error_carga') {
					echo "<h1>La carga no se pudo realizar. El email cargado ya existe en la base de datos</h1>";
				}
			}
			?>
		</section>

		<aside>
			<article id="login">
				<form action="verificarusuario.php" method="POST" class="formulario">
					<div class="title">Ingreso</div>
					<div class="subtitle">Si ya se registro ingrese desde aquí!</div>
					<div class="input-container ic2">
						<input id="email" class="input" name="email_form" type="text" placeholder=" " />
						<div class="cut cut-short"></div>
						<label for="email" class="placeholder">Email</>
					</div>
					<div class="input-container ic1">
						<input id="firstname" class="input" name="pass_form" type="text" placeholder=" " />
						<div class="cut"></div>
						<label for="firstname" class="placeholder">Password</label>
					</div>
					<input type="submit" class="submit" value="Confirmar">
				</form>
			</article>
			<?php
			if (isset($_GET['resultado'])) {
				$resultado = $_GET['resultado'];
				if ($resultado === 'ok_datos') {
					echo "<h1>Datos Validos</h1>";
				} elseif ($resultado === 'bad_password') {
					echo "<h1>Contraseña Incorrecta</h1>";
				}elseif ($resultado === 'bad_email') {
					echo "<h1>Correo no existente en la base de datos</h1>";
				}
			}
			?>
		</aside>

		<footer>
			<a href="https://site.elearning-total.com/courses/?com=lb">Programación en PHP y MySQL - Nivel Avanzado</a>
		</footer>

	</div>
</body>

</html>