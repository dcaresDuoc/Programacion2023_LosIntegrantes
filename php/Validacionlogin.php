<?php

$usuario=$_POST['usuario'];
$clave=$_POST['clave'];

$servername = "localhost";
$username = "root";
$password = "";
$database = "pruebas";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}else{
  echo "conectado";
}

$consulta=("SELECT * FROM usuarios WHERE usuario='$usuario' and clave='$clave'");
$resultado=mysqli_query($conexion, $consulta);

$filas=mysqli_num_rows($resultado);

if ($filas>0) {
header("location:index.html");


  }else {
  echo "Error en la autenticacion";
  }

mysqli_free_result($resultado);
mysqli_close($conexion);

?>
