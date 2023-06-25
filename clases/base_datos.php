<?php
class Basedatos {
private $conexion;
public $error;
function __construct($servidor, $usuario, $password, $base) {
    if(!$this->_connect($servidor, $usuario, $password, $base)) {
        $this->error = $this->conexion->connect_error;
    }
}
private function _connect ($servidor, $usuario, $password, $base) {
    $this->conexion = new mysqli ($servidor, $usuario, $password, $base);
    }
}

public function EjecutarConsulta($query){   //Se le pasa una sentencia de SQl como puede ser SELECT, DELETE, ADD, etc
    $tipo = strtoupper(substr($query, 0,6)); //
    switch ($tipo){
        case "INSERT":
            

    }


}

?>