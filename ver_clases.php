
<section class="calendario_clases">
				<?php
				include("conexion_servidor.php");
				$consulta = mysqli_query($datos_bd, 'SELECT * FROM clases');
				while ($listar = mysqli_fetch_assoc($consulta)) {  ?>
					<article class="caja">
						<h4>ID Clase: <?php echo $listar['id_clase']; ?></h4>
						<p>Unidad: <?php echo $listar['unidad']; ?></p>
						<p>Fecha: <?php echo $listar['fecha']; ?></p>
					</article>
				<?php } ?>
				<div class="empty"></div>
			</section>