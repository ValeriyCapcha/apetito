<?php
if (!empty($_POST["cambiarContra"])) {
    $contraActual = $_POST["contraActual"];
    $correoUsuario = $_SESSION["txtEmail"];
    $sql1 = $connn->query("SELECT Password FROM usuario WHERE Correo = '$correoUsuario'");
    if ($sql1 && $datos = $sql1->fetch_object()) {
        if (password_verify($contraActual, $datos->Password)) {
            $contraNueva = $_POST["contraNueva"];
            if (!empty($contraNueva)) {
                $hashContraNueva = password_hash($contraNueva, PASSWORD_DEFAULT);
                $sql2 = $connn->query("UPDATE usuario
                SET Password = '$hashContraNueva'
                WHERE Correo = '$correoUsuario';
                ");

                echo "<script>alert('CONTRASEÑA ACTUALIZADA CORRECTAMENTE');</script>";
            }
        } else {
            echo "<div><h3 style='color:red;'>La contraseña actual que ha ingresado no coincide</h3></div>";
        }
    }
}
