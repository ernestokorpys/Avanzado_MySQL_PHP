<?php

class Usuarios {
    private $nombre;
    private $apellido;
    private $fecha_nacimiento;

    public function __construct($nombre, $apellido, $fecha_nacimiento) {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->fecha_nacimiento = $fecha_nacimiento;
    }

    private function calcular_edad() {
        $fecha_actual = new DateTime();
        $fecha_nac = new DateTime($this->fecha_nacimiento);
        $edad = $fecha_nac->diff($fecha_actual)->y;
        return $edad;
    }

    public function imprime_caracteristicas() {
        $edad = $this->calcular_edad();
        echo "<p>Nombre: " . $this->nombre . "</p>";
        echo "<p>Apellido: " . $this->apellido . "</p>";
        echo "<p>Edad: " . $edad . " años</p>";
    }
}
?>