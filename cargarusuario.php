<?php
$email= $_POST['email_form'];
$password= password_hash($_POST['pass_form'],PASSWORD_DEFAULT, array('cost=>4'));

include('clases\passwords.php');
include('constantes.php');

$verificacion = new registro(SERVIDOR, USUARIO, PASS, BASE);
$resultado = $verificacion->agregar_registro($email, $password);
header("Location: unidad8.php?resultado=" . urlencode($resultado));
exit();

?>