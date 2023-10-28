<?php
if(!empty($_POST["btnIngresar"])){
    if (empty($_POST["txtEmail"]) and empty($_POST[""])) {
        echo "<div><h3 style='color:red;'>DATOS VACIOS</h3></div>";
    } else {
        $correo = $_POST["txtEmail"];
        $clave = $_POST["txtPassword"];
        $sql = $connn->query("SELECT * FROM usuario WHERE Correo = '$correo' AND Password='$clave'");
        if ($datos = $sql ->fetch_object()) {
            header("location:index.php");
        } else {
            echo "<div><h3 style='color:red;'>DATOS INCORRECTOS</h3></div>";
        }
    }
}
?>