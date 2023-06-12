<?php

$marca_agua="imagenes/marca.png";
$imagen = "imagenes/fondo.jpg";

$img1 =imagecreatefrompng($marca_agua); //Crea una variable con el archivo de imagen imagen 
$extension = substr($imagen,-3); //Extrae los ultimos 3 caracteres del archivo cargado
$extension = strtolower($extension); //convierte la extensión a miniscula en caso que se encuentre en mayuscula

switch ($extension){
    case "gif":
        $img2 = imagecreatefromgif($imagen);
        break;
    case "jpg":
        $img2 = imagecreatefromjpeg($imagen);
        break;
    case "png":
        $img2 = imagecreatefrompng($imagen);
        break;
    }
// Obtener las dimensiones de las imágenes
$marca_agua_ancho = imagesx($img1);
$marca_agua_alto = imagesy($img1);
$imagen_ancho = imagesx($img2);
$imagen_alto = imagesy($img2);

// Calcular las coordenadas de destino para centrar la marca de agua
$dest_x = ($imagen_ancho - $marca_agua_ancho) / 2;
$dest_y = ($imagen_alto - $marca_agua_alto) / 2;

//imagecopy($img2, $img1, (imagesx($img2)/2), (imagesy($img2)/2), (imagesx($img1)/2), (imagesy($img1)/2), imagesx($img1), imagesy($img1));
// Combinar las imágenes respetando la transparencia
imagecopyresampled($img2, $img1, $dest_x, $dest_y, 0, 0, $marca_agua_ancho, $marca_agua_alto, $marca_agua_ancho, $marca_agua_alto);

header("Content-type: image/jpeg");     //le doy formato a la nueva imagen creada
imagejpeg($img2);
//Liberar memoria
imagedestroy($img1);
imagedestroy($img2);
?>