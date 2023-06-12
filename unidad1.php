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
			<h2>Agenda de clases</h2>
			<article id="login">
				<form action="insertar_clases.php" method="POST" class="formulario">
					<div class="title">Bienvenido</div>
					<div class="subtitle">Por favor Complete el formulario!</div>
					<div class="input-container ic2">
						<input id="email" class="input" name="unidad_form" type="text" placeholder=" " />
						<div class="cut cut-short"></div>
						<label for="email" class="placeholder">Unidad</>
					</div>
					<div class="input-container ic1">
						<input id="firstname" class="input" name="fecha_form" type="date" placeholder=" " />
						<div class="cut"></div>
						<label for="firstname" class="placeholder">Fecha</label>
					</div>
					<input type="submit" class="submit" value="Confirmar">
				</form>
			</article>
			<?php
			if (isset($_GET['ok_db'])) {
				echo '<section> <p>Dato cargado con exito</p> </section>';
			}
			?>

			<?php
			if (isset($_GET['ver_clases'])) { ?>
				<section>
				Ocultar ver clases. Click aquí!
				<a href="unidad1.php" style="color: red">Ocultar clases</a>
				</section>
			<?php include('ver_clases.php');
			} else { ?>
				<section>
					Quiere ver las clases? Click aquí!
					<a href="unidad1.php?ver_clases" style="color: red">Ver clases</a>
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