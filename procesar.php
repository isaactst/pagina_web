<?php
include 'conexion.php'; // Incluir el archivo de conexión

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nombre = $_POST['nombre'];
  $domicilio = $_POST['domicilio'];
  $telefono = $_POST['telefono'];
  $codigo_postal = $_POST['codigo_postal'];
  $correo_electronico = $_POST['correo_electronico'];
  $cantidad = $_POST['cantidad'];
  $fecha = $_POST['fecha'];
  $tamaño = $_POST['tamaño'];
  $precio = $_POST['precio'];

  $sql = "INSERT INTO Productos (nombre, domicilio, telefono, codigo_postal, correo_electronico, cantidad, fecha, tamaño, precio) 
          VALUES ('$nombre', '$domicilio', '$telefono', '$codigo_postal', '$correo_electronico', '$cantidad', '$fecha', '$tamaño', '$precio')";

  if ($conn->query($sql) === TRUE) {
    echo "Nuevo registro creado exitosamente";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
}

$conn->close();
?>
