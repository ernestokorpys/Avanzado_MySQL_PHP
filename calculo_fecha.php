<?php
$dia = $_POST['day'];
$mes = $_POST['month'];
$anio = $_POST['year'];


if (checkdate($mes, $dia, $anio)) {
    $fecha_actual = strtotime('today'); // Obtiene la fecha actual
    $fecha_ingresada = strtotime("$anio-$mes-$dia"); // Crea la fecha a partir de las variables ingresadas
    $diferencia = intval(($fecha_ingresada - $fecha_actual) / 86400);
   
    header('Location: unidad2.php?fecha_valida&diferencia=' . $diferencia);

} else {
    header('Location: unidad2.php?fecha_no_valida');
}
