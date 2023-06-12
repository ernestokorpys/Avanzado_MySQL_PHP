<?php
session_start();

$nombre = $_POST['name_form'];
$apellido = $_POST['surname_form'];
$mail = $_POST['mail_form'];
$comentario = $_POST['comment_form'];
$codigo = $_POST['captcha_form'];
include("conexion_servidor.php");

if($codigo == $_SESSION["captcha"]){
    echo "<p>Codigo correcto</p>";
    echo $codigo;
    echo $_SESSION["captcha"];
    mysqli_query($datos_bd,"INSERT INTO consultas (nombre, apellido, email, consulta) VALUES ('$nombre','$apellido','$mail','$comentario')");
    header('Location: unidad5.php?carga_exitosa');

} else{
    echo "<p>Codigo incorrecto</p>";
    echo $codigo;
    echo $_SESSION["captcha"];
    header('Location: unidad5.php?carga_fallida');

}
// añadir en la base de datos
    
//header('Location: unidad5.php?ok_db');

?>