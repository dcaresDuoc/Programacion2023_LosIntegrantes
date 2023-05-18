<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST["luser"]);
    $password = trim($_POST["lpass"]);

    if ($username === '') {
        showError($usernameInput, 'Por favor, ingresa tu nombre de usuario');
    } else if ($password === '') {
        showError($passwordInput, 'Por favor, ingresa tu contraseña');
    } else {
        // Realiza la lógica de inicio de sesión, como enviar los datos al servidor o realizar comprobaciones adicionales
        // Aquí puedes incluir la conexión a la base de datos y verificar las credenciales

        // Ejemplo de conexión a la base de datos utilizando MySQLi
        $servername = "localhost";
        $username_db = "tu_usuario";
        $password_db = "tu_contraseña";
        $database = "nombre_de_tu_base_de_datos";

        // Crear la conexión
        $conn = new mysqli($servername, $username_db, $password_db, $database);

        // Verificar si hay errores de conexión
        if ($conn->connect_error) {
            die("Error de conexión: " . $conn->connect_error);
        }

        // Escapar los valores de los campos para prevenir inyección de SQL
        $username = $conn->real_escape_string($username);
        $password = $conn->real_escape_string($password);

        // Realizar la consulta para verificar las credenciales
        $sql = "SELECT * FROM usuarios WHERE username = '$username' AND password = '$password'";
        $result = $conn->query($sql);

        if ($result->num_rows == 1) {
            // Las credenciales son válidas, el usuario puede iniciar sesión
            echo 'Inicio de sesión exitoso';
            // Puedes agregar el código adicional necesario para procesar el inicio de sesión correctamente
        } else {
            // Las credenciales son inválidas
            echo 'Inicio de sesión fallido';
        }

        // Cerrar la conexión a la base de datos
        $conn->close();
    }
}

function showError($input, $message) {
    $field = $input->parentNode;
    $errorSpan = $field->querySelector('span');

    $errorSpan->innerText = $message;
    $field->classList->add('error');
}
?>
