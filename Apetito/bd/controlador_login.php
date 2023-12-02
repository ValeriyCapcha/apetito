<?php
session_start();
if (!empty($_POST["btnIngresar"])) {
    if (empty($_POST["txtEmail"]) || empty($_POST["txtPassword"])) {
        echo "<div><h3 style='color:red;'>DATOS VACIOS</h3></div>";
    } else {
        $correo = $_POST["txtEmail"];
        $clave = $_POST["txtPassword"];
        $sql = $connn->query("SELECT * FROM usuario WHERE Correo = '$correo'");
        if ($datos = $sql->fetch_object()) {
            if (password_verify($clave, $datos->Password)) {
                $_SESSION["txtEmail"] = $correo;
                header("location:user.php");
            } else {
                echo "<div><h3 style='color:red;'>DATOS INCORRECTOS</h3></div>";
            }
        } else {
            echo "<div><h3 style='color:red;'>DATOS INCORRECTOS</h3></div>";
        }
    }
}
