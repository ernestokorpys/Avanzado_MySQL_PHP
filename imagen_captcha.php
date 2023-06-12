<?php 
session_start();
header("Content-type: imgage/jpeg");
$img = imagecreate(120,40);
$color_fondo = imagecolorallocate($img, 156, 216,245);
$color_texto = imagecolorallocate($img, 10,20, 30);
imagestring($img, 5, 20, 10, $_SESSION["captcha"], $color_texto);
imagejpeg($img);

?>