<?php
class Carrito {
  private $conexion; // Objeto de conexión a la base de datos
  private $error; // Propiedad para almacenar el mensaje de error en caso de fallo de conexión

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

  public function introducir_compra($codigo) {
    // Obtener los datos del producto según el código recibido
    $query = "SELECT codigo, producto, descripcion, precio FROM productos WHERE codigo = '$codigo'";
    $resultado = $this->conexion->query($query);
  
    if ($resultado && $resultado->num_rows > 0) {
      $fila = $resultado->fetch_assoc();
      $producto = $fila['producto'];
      $descripcion = $fila['descripcion'];
      $precio = $fila['precio'];
  
      // Agregar el producto al carrito en la tabla "compras"
      $query = "INSERT INTO compras (codigo, producto, descripcion, precio) VALUES ('$codigo', '$producto', '$descripcion', '$precio')";
      $this->conexion->query($query);
      echo "Producto agregado al carrito.";

    } else {
      echo "No se pudo agregar el producto al carrito.";
    }
    
  }

  public function eliminar_compra($idCompra) {
    // Eliminar el producto del carrito en la tabla "compras"
    $query = "DELETE FROM compras WHERE id_compra = '$idCompra'";
    $resultado = $this->conexion->query($query);
  
    if ($resultado) {
      //echo "Producto eliminado del carrito.";
      //header('Location: unidad7.php');
    } else {
      echo "No se pudo eliminar el producto del carrito.";
    }
  }

  public function listar_compra() {
    // Consultar los productos en el carrito
    $query = "SELECT id_compra, codigo, producto FROM compras";
    $resultado = $this->conexion->query($query);

    if ($resultado && $resultado->num_rows > 0) {
      while ($fila = $resultado->fetch_assoc()) {
        echo '<div class="caja_carrito">';
        echo "ID Compra: " . $fila['id_compra'] . "<br>";
        echo "Código: " . $fila['codigo'] . "<br>";
        echo "Producto: " . $fila['producto'] . "<br>";
        // Botón para eliminar el producto del carrito
        echo "<form method=\"post\">";
        echo "<input type=\"hidden\" name=\"idCompra\" value=\"" . $fila['id_compra'] . "\">";
        echo "<input type=\"submit\" name=\"eliminarCompra\" value=\"Eliminar\">";
        echo "</form>";
        echo "</div>";
        echo "<br>";
      }
    } else {
      echo "El carrito está vacío.";
    }
  }
}
?>