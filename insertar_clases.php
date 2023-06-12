<?php 
$unidad = $_POST['unidad_form'];
$fecha = $_POST['fecha_form'];

include("conexion_servidor.php");
// Formatear la fecha en formato yyyy-mm-dd

mysqli_query($datos_bd,"INSERT INTO clases VALUES (DEFAULT,'$unidad','$fecha')");
header('Location: unidad1.php?ok_db');

?>
