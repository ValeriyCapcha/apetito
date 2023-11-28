<?php
if (!empty($_POST["btnEnviarReclamo"])) {
    if (empty($_POST["usuarioR"]) and empty($_POST["correoR"]) and empty($_POST["reclamo"])) {
        echo "<div><h3 style='color:red;'>Datos del reclamo vacio</h3></div>";
    } else {
        $usuario = $_POST["usuarioR"];
        $correo = $_POST["correoR"];
        $reclamo = $_POST["reclamo"];
        $sql = $connn->query("INSERT INTO reclamos(nombreR,correoR,reclamo)VALUES('$usuario','$correo','$reclamo');");
        if ($sql) {
            echo "<script>alert('Reclamo enviado, muchas gracias por comunicarte con nosotros');</script>";
            header("location:index.php");
        } else {
            echo "<div><h3 style='color:red;'>DATOS INCORRECTOS</h3></div>";
        }
    }
}
