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
			<h2>Productos</h2>
			<?php
			// Crear un objeto de Producto para verlos
			include('clases\producto.php');
			include('constantes.php');
			$producto1 = new Producto(SERVIDOR, USUARIO, PASS, BASE);
			$producto1->listar_productos();
			?>

		</section>
		<aside>
			
			<?php
			include('clases/carrito.php');
			$carrito = new Carrito(SERVIDOR, USUARIO, PASS, BASE);
			echo "<h2>Contenido del Carrito</h2>";
			// Procesar la acción de agregar al carrito
			if (isset($_POST['agregarCarrito'])) {
				$codigo = $_POST['codigo'];
				$carrito->introducir_compra($codigo);
				echo "<script>window.location.href = 'unidad7.php';</script>";
			}
			// Procesar la acción de eliminar del carrito
			if (isset($_POST['eliminarCompra'])) {
				$idCompra = $_POST['idCompra'];
				$carrito->eliminar_compra($idCompra);

			}
			$carrito->listar_compra();



			?>
		</aside>
		<footer>
			<a href="https://site.elearning-total.com/courses/?com=lb">Programación en PHP y MySQL - Nivel Avanzado</a>
		</footer>

	</div>
</body>

</html>