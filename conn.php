<?php

$dbHost = "localhost";
$dbUser = "root";
$dbPassword = "";
$dbName = "dbconnect";

// Crear la conexión
$connDb = mysqli_connect($dbHost, $dbUser, $dbPassword, $dbName);

if (mysqli_connect_errno()) {
    //echo "Failed to connect to database: " . mysqli_connect_error();
    //echo "Failed to connect to database: ";
} else {
    //echo "Connected to database!";
}

?>
