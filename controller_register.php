<?php

if (!empty($_POST["btnenter"])) {
    // echo "HELLO WORLD!";
    if (empty($_POST['username']) || empty($_POST['email']) || empty($_POST['password']) || empty($_POST['confirmPassword'])) {
        echo "<h3 class='alert alert-danger'>El usuario, correo, contraseña y la contraseña por confirmar no pueden estar vacíos</h3>";
    } else {
        $formUsername = $_POST['username'];
        $formEmail = $_POST['email'];
        $formPassword = $_POST['password'];
        $formConfirmPassword = $_POST['confirmPassword'];

        // Validación de longitud de contraseña
        if (strlen($formPassword) < 8) {
            echo "<h3 class='alert alert-danger'>La contraseña debe tener al menos 8 caracteres</h3>";
        } elseif ($formPassword != $formConfirmPassword) {
            echo "<h3 class='alert alert-danger'>Las contraseñas no coinciden</h3>";
        } elseif (!preg_match('/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,})+$/', $formEmail)) {
            echo "<h3 class='alert alert-danger'>El formato del correo electrónico es inválido</h3>";
        } else {
            // Consulta para verificar si el nombre de usuario o correo electrónico ya existen
            $query = "SELECT COUNT(*) AS count FROM user WHERE username='$formUsername' OR email='$formEmail'";
            $result = mysqli_query($connDb, $query);
            $row = mysqli_fetch_assoc($result);
            $count = $row['count'];

            if ($count > 0) {
                echo "<h3 class='alert alert-danger'>El nombre de usuario o correo electrónico ya existe</h3>";
            } else {
                // Insertar el nuevo usuario en la base de datos
                $sql = "INSERT INTO user (username, email, password) VALUES ('$formUsername', '$formEmail', '$formPassword')";
                $insertResult = mysqli_query($connDb, $sql);
                if ($insertResult) {
                    echo '<script>window.location.href = "login.php";</script>';
                    exit();
                } else {
                    echo "<h3 class='alert alert-danger'>Error al registrar el usuario</h3>";
                }
            }
        }
    }
}

?>
