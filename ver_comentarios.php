<section class="calendario_clases">
				<?php
				include("conexion_servidor.php");
				$consulta = mysqli_query($datos_bd, 'SELECT * FROM consultas');
				while ($listar = mysqli_fetch_assoc($consulta)) {  ?>
					<article class="caja">
						<p>Nombre: <?php echo $listar['nombre']; ?></h4>
						<p>Apellido: <?php echo $listar['apellido']; ?></p>
						<p>Email: <?php echo $listar['email']; ?></p>
                        <p>Consulta: <?php echo $listar['consulta']; ?></p>
					</article>
				<?php } ?>
				<div class="empty"></div>
			</section>