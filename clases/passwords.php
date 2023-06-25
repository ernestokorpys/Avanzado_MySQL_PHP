<?php
class Registro
{
  private $conexion; // Objeto de conexión a la base de datos
  private $error; // Propiedad para almacenar el mensaje de error en caso de fallo de conexión

  function __construct($servidor, $usuario, $password, $base)
  {
    if (!$this->_connect($servidor, $usuario, $password, $base)) {
      $this->error = $this->conexion->connect_error;
    }
  }

  private function _connect($servidor, $usuario, $password, $base)
  {
    $this->conexion = new mysqli($servidor, $usuario, $password, $base);
    if ($this->conexion->connect_error) {
      die("Error de conexión: " . $this->conexion->connect_error);
    }
  }

  public function __destruct()
  {
    // Cerrar la conexión a la base de datos al destruir el objeto
    $this->conexion->close();
  }

  public function listarRegistros()
  {
    // Consultar los datos de la tabla "registros" en MySQL y mostrarlos
    $query = "SELECT email, password FROM registros";
    $resultado = $this->conexion->query($query);

    if ($resultado->num_rows > 0) {
      while ($row = $resultado->fetch_assoc()) {
        echo "Email: " . $row['email'] . "<br>";
        echo "Password: " . $row['password'] . "<br><br>";
      }
    } else {
      echo "No se encontraron registros en la tabla 'registros'.";
    }
  }

  public function agregar_registro($email, $password)
  {
    // Escapar las variables para evitar inyección de SQL
    $email = $this->conexion->real_escape_string($email);
    $password = $this->conexion->real_escape_string($password);

    // Verificar si el email ya está registrado en la tabla
    $query = "SELECT COUNT(*) AS count FROM registros WHERE email = '$email'";
    $resultado = $this->conexion->query($query);

    if ($resultado && $resultado->num_rows > 0) {
      $row = $resultado->fetch_assoc();
      $count = $row['count'];

      if ($count > 0) {
        return "error_carga";
      }
    }

    // Consulta SQL para insertar el registro en la tabla "registros"
    $query = "INSERT INTO registros (email, password) VALUES ('$email', '$password')";
    if ($this->conexion->query($query)) {
      return "ok_carga";
    } else {
      return "error_carga";
    }
  }

  public function verificar_cuenta($email, $password)
  {
    // Escapar el email para evitar inyección de SQL
    $email = $this->conexion->real_escape_string($email);

    // Consulta SQL para buscar el email en la tabla "registros"
    $query = "SELECT password FROM registros WHERE email = '$email'";
    $resultado = $this->conexion->query($query);

    if ($resultado->num_rows > 0) {
      $row = $resultado->fetch_assoc();
      $password_bd = $row['password'];

      // Verificar si el password coincide utilizando password_verify()
      if (password_verify($password, $password_bd)) {
        return "ok_datos";
      } else {
        return "bad_password";
      }
    } else {
      return "bad_email";
    }
  }
}
?>
