<?php
if (!empty($_POST["cambiarContra"])) {
    $contraActual = $_POST["contraActual"];
    $sql1 = $connn->query("SELECT * FROM usuario WHERE Password='$contraActual'");
    if ($sql1) {
        $contraNueva = $_POST["contraNueva"];
        if (!empty($contraNueva)) {
            $sql2 = $connn->query("UPDATE usuario
            SET Password = '$contraNueva'
            WHERE Password = '$contraActual'; -- Puedes ajustar la condición según tus necesidades
            ");
            echo "<script>alert('CONTRASEÑA ACTUALIZADA CORRECTAMENTE');</script>";
        }
    } else {
        echo "<div><h3 style='color:red;'>La contraseña actual que ha ingresado no coincide</h3></div>";
    }
}
