<?php

$email= $_POST['email_form'];
$password= $_POST['pass_form'];

include('clases\passwords.php');
include('constantes.php');
echo $email;
echo $password;
$verificacion = new registro(SERVIDOR, USUARIO, PASS, BASE);
$resultado = $verificacion->verificar_cuenta($email, $password);
header("Location: unidad8.php?resultado=" . urlencode($resultado));
exit();
?>