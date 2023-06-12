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
			<h2>Comentarios</h2>
			<article id="login">
				<form action="comentarios.php" method="POST" class="formulario">
					<div class="title">Bienvenido</div>
					<div class="subtitle">Por favor, complete el formulario y deje su comentario!</div>
					<div class="input-container ic2">
						<input id="email" class="input" name="name_form" type="text" placeholder=" " required/>
						<div class="cut cut-short"></div>
						<label for="email" class="placeholder">Nombre</label>
					</div>
					<div class="input-container ic2">
						<input id="email" class="input" name="surname_form" type="text" placeholder=" " required/>
						<div class="cut cut-short"></div>
						<label for="email" class="placeholder">Apellido</label>
					</div>
					<div class="input-container ic1">
						<input id="firstname" class="input" name="mail_form" type="email" placeholder=" " required/>
						<div class="cut"></div>
						<label for="firstname" class="placeholder">Mail</label>
					</div>
					<div class="input-container ic1">
						<input id="firstname" class="input" name="comment_form" type="text" placeholder=" " required/>
						<div class="cut"></div>
						<label for="firstname" class="placeholder">Comentario</label>
					</div>
					<input type="submit" class="submit" value="Confirmar">
				</form>
			</article>

			<?php	// Mostrar los comentarios almacenados
			if (isset($_GET['carga_exitosa'])) {
				echo "<p> Carga Exitosa </p>";
			}
			?>

			<?php
			if (isset($_GET['ver_comentarios'])) { ?>
				<section style="width:97%">
					Ocultar ver comentarios. Click aquí!
					<a href="unidad3.php" style="color: red">Ocultar comentarios</a>
				</section>
				<?php
				if (file_exists("comentarios.txt")) {
					$contenido = file_get_contents("comentarios.txt");
					$comentarios = explode("\n", $contenido);
					
					foreach ($comentarios as $comentario) {
						// Ignorar líneas vacías
						if (!empty($comentario)) {
							echo "<p>" . $comentario . "</p>";
						}
					}
				} else {
					echo "<p>\n</p>";
					echo "<h1>No hay comentarios cargados aún :( prueba cargar algunos.</h1>";
				}
			} else { ?>
				<section style="width:97%">
					¿Quiere ver las comentarios? Click aquí!
					<a href="unidad3.php?ver_comentarios" style="color: red">Ver comentarios</a>
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