<?php
if (!empty($_POST["btnCrearUsuario"])) {
    if (empty($_POST["nombre"]) and empty($_POST["telefono"]) and empty($_POST["correo"]) and empty($_POST["contraseña"])) {
        echo "<div><h3 style='color:red;'>DATOS VACIOS</h3></div>";
    } else {
        $nombre = $_POST["nombre"];
        $telefono = $_POST["telefono"];
        $correo = $_POST["correo"];
        $clave = $_POST["contraseña"];
        $claveHash = password_hash($clave, PASSWORD_BCRYPT);
        $sql = $connn->query("INSERT INTO usuario(Nombre,Correo,Password,Telefono)VALUES('$nombre','$correo','$claveHash',$telefono);");
        if ($sql) {
            echo "<script>alert('USUARIO REGISTRADO');</script>";
            header("location:index.php");
        } else {
            echo "<div><h3 style='color:red;'>DATOS INCORRECTOS</h3></div>";
        }
    }
}
