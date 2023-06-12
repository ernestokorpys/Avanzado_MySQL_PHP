<?php
	include("usuarios.php");
    //Cargar Usuario de forma manual ya que no solicitaba mediante formulario
	$usuario = new Usuarios("Ernesto", "Andres", "2000-05-15");
	// Llamar al método imprime_caracteristicas()
	$usuario->imprime_caracteristicas();
    //Cargar Usuario de forma manual ya que no solicitaba mediante formulario
    $usuario = new Usuarios("Camila", "Pérez", "1990-05-15");
	// Llamar al método imprime_caracteristicas()
	$usuario->imprime_caracteristicas();
?>