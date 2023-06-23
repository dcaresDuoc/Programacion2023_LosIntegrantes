<?php
$dbHost = "localhost";
$dbUser = "root";
$dbPassword = "leandro123";
$dbName = "fran_app";
$dbPort = "3306";

try {
    // Crear la conexión
    $connDb = new mysqli($dbHost, $dbUser, $dbPassword, $dbName);
    //$connDb->set_charset("utf8");
} catch (Exception $e) {
    echo "Error al conectar a la base de datos: " . $e->getMessage();
    exit;
}
?>
