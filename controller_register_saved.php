<?php

if (!empty($_POST["btnenter"])) {
    echo "HELLO WORLD!";
    if (empty($_POST['username']) || empty($_POST['email']) || empty($_POST['password']) || empty($_POST['confirmPassword'])) {
        echo "<h3 class='alert alert-danger'>El usuario, correo, contraseña y la contraseña por confirmar no pueden estar vacios</h3>";
    } else {
        $formUsername = $_POST['username'];
        $formEmail = $_POST['email'];
        $formPassword = $_POST['password'];
        $formConfirmPassword = $_POST['confirmPassword'];

        $isError = false;

        // Validación de longitud de contraseña
        if (strlen($formPassword) < 8) {
            $isError = true;
            echo "<h3 class='alert alert-danger'>La contraseña debe tener al menos 8 caracteres</h3>";
            
        }

        if ($formPassword != $formConfirmPassword) {
            $isError = true;
            echo "<h3 class='alert alert-danger'>Las contraseñas no coinciden</h3>";
        }

        if (!preg_match('/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,})+$/', $formEmail)) {
            $isError = true;
            echo "<h3 class='alert alert-danger'>El formato del correo electrónico es inválido</h3>";
        }

        if ($isError) {
        } else {
            $sql = $connDb->query("INSERT INTO user (username, email, password) VALUES ('$formUsername', '$formEmail', '$formPassword')");
            if ($sql) {
                // echo "Usuario registrado correctamente";
                echo '<script>window.location.href = "login.php";</script>';
                exit();
            } else {
                echo "<h3 class='alert alert-danger'>Error al registrar el usuario</h3>";
            }
        }

        
    }
}

?>
