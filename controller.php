<?php

if (!empty($_POST["btnenter"])) {
    if (empty($_POST['username']) || empty($_POST['password'])) {
        //header("Location: ../index.php");
        //exit();
        echo "<h3 class='alert alert-danger'>El usuario y la contraseña no pueden estar vacios</h3>";
    } else {
        $formUsername = $_POST['username'];
        $formPassword = $_POST['password'];
    
        $sql = $connDb->query("SELECT * FROM user WHERE username='$formUsername' AND password='$formPassword'");
        if ($datos = $sql->fetch_object()) {
            //echo "Bienvenido ".$datos->username."";
            //header("Location:index.php");
            // redirect to index.php
            echo '<script>window.location.href = "index.html";</script>';
            exit();
        } else {
            echo "<h3 class='alert alert-danger'>El username o password son incorrectos</h3>";
        }
        //echo "El username es " . $_POST['username'] . " y el password es " . $_POST['password'];
    }
}

?>
