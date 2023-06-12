<?php session_start(); ?>
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
			<h2>Consultas</h2>
			<?php
			function codigo_captcha()
			{
				$pattern = "123456789@abcdefghijkImnopgrstuvwxyz#$%/?";
				$clave = "";
				for ($i = 0; $i < 5; $i++) {
					$clave .= substr($pattern, rand(0, strlen($pattern) - 1), 1);
				}
				return $clave;
			}
			$_SESSION["captcha"] = codigo_captcha();
			?>

			<article id="login">
				<form action="cargar.php" method="POST" class="formulario">
					<div class="title">Bienvenido</div>
					<div class="subtitle">Por favor, complete el formulario y deje su comentario!</div>
					<div class="input-container ic2">
						<input id="email" class="input" name="name_form" type="text" placeholder=" " required />
						<div class="cut cut-short"></div>
						<label for="email" class="placeholder">Nombre</label>
					</div>
					<div class="input-container ic2">
						<input id="email" class="input" name="surname_form" type="text" placeholder=" " required />
						<div class="cut cut-short"></div>
						<label for="email" class="placeholder">Apellido</label>
					</div>
					<div class="input-container ic1">
						<input id="firstname" class="input" name="mail_form" type="email" placeholder=" " required />
						<div class="cut"></div>
						<label for="firstname" class="placeholder">Mail</label>
					</div>
					<div class="input-container ic1">
						<input id="firstname" class="input" name="comment_form" type="text" placeholder=" " required />
						<div class="cut"></div>
						<label for="firstname" class="placeholder">Comentario</label>
					</div>
					<div class="input-container ic1">
						<input id="firstname" class="input" name="captcha_form" type="text" placeholder=" " required />
						<div class="cut"></div>
						<label for="firstname" class="placeholder">Captcha</label>
					</div>
					<img src="imagen_captcha.php">
					<input type="submit" class="submit" value="Confirmar">
				</form>
			</article>
			<?php	// Mostrar los comentarios almacenados
			if (isset($_GET['carga_exitosa'])) {
				echo "<p> Carga Exitosa </p>";
			}
			if (isset($_GET['carga_fallida'])) {
				echo "<p> Carga fallida, pruebe de nuevo </p>";
			}
			?>

			<?php
			if (isset($_GET['ver_comentarios'])) { ?>
				<section>
					Ocultar ver los comentarios. Click aquí!
					<a href="unidad5.php" style="color: red">Ocultar comentarios</a>
				</section>
			<?php include('ver_comentarios.php');
			} else { ?>
				<section>
					Quiere ver los comentarios? Click aquí!
					<a href="unidad5.php?ver_comentarios" style="color: red">Ver comentarios</a>
				</section>
			<?php } ?>




		</section>
		<aside>

		</aside>
		<footer>
			<a href="https://site.elearning-total.com/courses/?com=lb">Programación en PHP y MySQL - Nivel Avanzado</a>
		</footer>

	</div>
</body>

</html>