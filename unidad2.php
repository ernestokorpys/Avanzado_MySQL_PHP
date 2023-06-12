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
			<h2>Eventos</h2>

			<article id="login">
				<form action="calculo_fecha.php" method="POST" class="formulario">
					<div class="title">Bienvenido</div>
					<div class="subtitle">Por favor Complete el formulario! Ingrese una fecha</div>
					<div class="input-container ic2">
						<!---Log-in<label for="numero">Número:</label>
						<input type="number" id="numero" name="numero" min="0" max="12" required><br><br>
						-->
						<input id="numero" class="input" name="day" min="1" max="31" required type="number" placeholder=" " />
						<div class="cut cut-short"></div>
						<label for="firstname" class="placeholder">Dia</>
					</div>
					<div class="input-container ic1">
						<input id="numero" class="input" name="month" min="1" max="12" required type="number" placeholder=" " />
						<div class="cut"></div>
						<label for="firstname" class="placeholder">Mes</label>
					</div>
					<div class="input-container ic1">
						<input id="numero" class="input" name="year" min="1970" max="2100" required type="number" placeholder=" " />
						<div class="cut"></div>
						<label for="firstname" class="placeholder">Año</label>
					</div>
					<input type="submit" class="submit" value="Confirmar">
				</form>
			</article>
			<?php
			if (isset($_GET['fecha_valida'])) {
				$diferencia = $_GET['diferencia'];
				echo ' <p>Fecha valida </p> ';
				if ($diferencia >= 0) {
					echo "Faltan: " . $diferencia . " días para la fecha ingresada.";
				} else {
					echo "Han pasado: " . (-1)*$diferencia . " días desde la fecha ingresada.";
				}
			}
			if (isset($_GET['fecha_no_valida'])) {
				echo ' <p>Fecha no valida ya que no existe en el calendario.</p> ';
			}
			?>
		</section>
		<aside>

		</aside>
		<footer>
			<a href="https://site.elearning-total.com/courses/?com=lb">Programación en PHP y MySQL - Nivel Avanzado</a>
		</footer>

	</div>
</body>

</html>