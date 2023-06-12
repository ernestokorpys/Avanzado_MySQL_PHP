<?php
$nombre = $_POST['name_form'];
$apellido = $_POST['surname_form'];
$mail = $_POST['mail_form'];
$comentario = $_POST['comment_form'];
$fechaHoraActual = date("Y-m-d H:i:s");

if (!file_exists("comentarios.txt")) {
    $archivo = fopen("comentarios.txt", "w");
    fwrite($archivo, "--------------------------------------------------------------------- \n");
    fwrite($archivo, "Nombre: " . $nombre . "\n");
    fwrite($archivo, "Apellido: " . $apellido . "\n");
    fwrite($archivo, "Email: " . $mail . "\n");
    fwrite($archivo, "Comentario: " . $comentario . "\n");
    fwrite($archivo, "Fecha y hora de carga: " . $fechaHoraActual . "\n");

    fclose($archivo);
} else {
    $archivo = fopen("comentarios.txt", "a");
    fwrite($archivo, "\n");
    fwrite($archivo, "--------------------------------------------------------------------- \n");
    fwrite($archivo, "Nombre: " . $nombre . "\n");
    fwrite($archivo, "Apellido: " . $apellido . "\n");
    fwrite($archivo, "Email: " . $mail . "\n");
    fwrite($archivo, "Comentario: " . $comentario . "\n");
    fwrite($archivo, "Fecha y hora: " . $fechaHoraActual . "\n");

    fclose($archivo);
}

header('Location: unidad3.php?carga_exitosa');
?>