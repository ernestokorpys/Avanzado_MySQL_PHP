<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" href="estilos.css">
	<link href="dist\css\lightbox.css" rel="stylesheet" />
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
			<h2>Imágenes con PHP</h2>
			<?php /*
			if (imagetypes() & IMG_GIF) {
				echo "<p>El tipo GIF es soportable.</p>";
			} else {
				echo "<p>El tipo GIF no es soportable.</p>";
			}
			if (imagetypes() & IMG_PNG) {
				echo "<p>El tipo PNG es soportable.</p>";
			} else {
				echo "<p>El tipo PNG no es soportable.</p>";
			}

			if (imagetypes() & IMG_JPEG) {
				echo "<p>El tipo JPEG es soportable.</p>";
			} else {
				echo "<p>El tipo JPEG no es soportable.</p>";
			}
			*/
			?>
			<h1>Imagen con Marca de Agua</h1>
			<img src="marca_agua.php">
			<h1>Thumbnail</h1>
			<?php include("thumbnail.php")?>
			<a href="imagenes\unidad4.jpg" data-lightbox="image-1" data-title="Imagen Original">
			<img src="imagenes/new_thumb.jpg"></a>
			<p>Click sobre la imagen para verla en tamaño completo</p>

		</section>
		<aside>

		</aside>
		<footer>
			<a href="https://site.elearning-total.com/courses/?com=lb">Programación en PHP y MySQL - Nivel Avanzado</a>
		
		</footer>
		<script type="text/javascript" src="dist\js\lightbox-plus-jquery.js"></script>
		<script type="text/javascript" src="dist\js\lightbox.js"></script>



	</div>
</body>

</html>