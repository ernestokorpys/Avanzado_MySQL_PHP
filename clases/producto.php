<link rel="stylesheet" href="estilos.css">

<?php
class Producto {
  private $conexion; // Objeto de conexión a la base de datos

  function __construct($servidor, $usuario, $password, $base) {
    if(!$this->_connect($servidor, $usuario, $password, $base)) {
      $this->error = $this->conexion->connect_error;
    }
  }

  private function _connect ($servidor, $usuario, $password, $base) {
    $this->conexion = new mysqli ($servidor, $usuario, $password, $base);
    if ($this->conexion->connect_error) {
      die("Error de conexión: " . $this->conexion->connect_error);
    }
  }

  public function __destruct() {
    // Cerrar la conexión a la base de datos al destruir el objeto
    $this->conexion->close();
  }

  public function listar_productos() {
    // Consultar los datos de la tabla existente en MySQL y mostrarlos
    $query = "SELECT codigo, producto, descripcion, precio FROM productos";
    $resultado = $this->conexion->query($query);

    if ($resultado && $resultado->num_rows > 0) {
      while ($fila = $resultado->fetch_assoc()) {
        echo '<div class="caja_productos">';
        echo "<p>Código: " . $fila['codigo'] . "</p>";
        echo "<p>Producto: " . $fila['producto'] . "</p>";
        echo "Descripción: " . $fila['descripcion'] . "<br>";
        echo "Precio: " . $fila['precio'] . "<br>";
        
        // Botón para agregar al carrito
        echo "<form method='post' action='unidad7.php'>";
        echo "<input type=\"hidden\" name=\"codigo\" value=\"" . $fila['codigo'] . "\">";
        echo "<input type=\"submit\" name=\"agregarCarrito\" value=\"Agregar al carrito\">";
        echo "</form>";
        echo "</div>";
        echo "<br>";

      }
    } else {
      echo "No hay productos disponibles.";
    }
  }
}
?>