<?php include("bd/conexion.php"); ?>
<?php
session_start();
$Con = new conexion();
$IdUsuario = 0;

//Sesion
if (isset($_SESSION["txtEmail"])) {
    $correo = $_SESSION["txtEmail"];
    $usuario = $Con->consultar("SELECT * FROM `usuario` WHERE `usuario`.`Correo` = '$correo'");
    $ObtenerIdUsuario = $Con->IdUsuario($usuario);
    $IdUsuario = $ObtenerIdUsuario[0];
}
if (isset($_POST['cerrar'])) {
    session_unset();
    session_destroy();
    header("location:login.php");
}

//Saludo solo si el carrito esta vacío, dando a entender que solo se dará la primera vez que uses la página o 
//la vuelvas a usar luego de comprar algo.
/*$array2 = $Con->consultar("SELECT * FROM `carrito` WHERE id_Usuario = $IdUsuario");
if (empty($array2) && isset($_SESSION["txtEmail"])) {
    $ObtenerNombre = $Con->Nombre($usuario);
    $nombre = $ObtenerNombre[0];
    echo "<script>alert('Bienvenido " . $nombre . "');</script>";
}*/
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>aPETito Pet Shop</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/grid.css">
    <link rel="stylesheet" href="css/user.css">
    <link rel="stylesheet" href="css/servicios.css">
    <link rel="icon" href="imgs/logopet.png" type="image/x-icon">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&family=Raleway:wght@100;200;400;500;800;900&display=swap');
    </style>
</head>

<body>
    <section id="header">
        <a href="index.php"><img src="imgs/logopet.png" alt="" class="logo"></a>

        <button class="lista">
            <img src="imgs/list.svg">
        </button>

        <nav class="nav">
            <ul class="navbar">
                <li><a href="index.php">Ofertas</a></li>
                <li><a href="Productos.php">Productos</a></li>
                <li><a href="servicios.php">Baño de mascotas</a></li>
                <li><a href="index.php#sobre-nosotros">Nosotros</a></li>
                <li><a href="index.php#encuentranos">Encuentranos</a></li>
                <?php if (isset($_SESSION["txtEmail"])) { ?>
                    <li><a class="active" href="user.php"><img src="imgs/SesionIniciada.png" alt=""></a></li>
                <?php } else { ?>
                    <li><a href="login.php"><img src="imgs/login.png" alt=""></a></li>
                <?php } ?>
                <li><a href="carrito.php"><img src="imgs/shopcar.png" alt=""></a></li>
            </ul>
        </nav>
    </section>
    <!--CONTENIDO USUARIO-->
    <?php if (isset($_SESSION["txtEmail"])) { ?>
        <div class="containerUser">
            <?php foreach ($usuario as $usuarios) { ?>
                <h1>¡Hola,
                    <?php
                    echo $usuarios['Nombre'];; ?>
                    !</h1>
                <h2 style="color:brown">Informacion Personal</h2>
                <h3>Correo:
                    <?php
                    echo $usuarios['Correo'];; ?>
                </h3>
                <h3 style="margin-bottom: 20px;">Teléfono:
                    <?php
                    echo $usuarios['Telefono'];; ?>
                </h3>
            <?php } ?>

            <form method="post">
                <button type="submit" name="cerrar" class="btnCerrarSesion">Cerrar Sesión</button>
            </form><br>

            <?php if($usuarios['Correo'] == "Administrador@gmail.com"){
                include("admin.php");
            } ?>
            <form method="post" style="border: 2px solid black; padding: 10px; border-radius: 10px; margin:auto;">
                <?php
                include("bd/conn.php");
                include("bd/controlador_actualizar_contra.php");
                ?>
                <h3 style="margin-bottom: 10px;">Actualizar contraseña</h3>
                <input type="text" placeholder=" Ingrese la contraseña actual" name="contraActual" style="border-radius: 10px; min-height:40px; min-width:250px; margin-bottom:10px;"></input><br>
                <input type="text" placeholder=" Ingrese la contraseña nueva" name="contraNueva" style="border-radius: 10px; min-height:40px; min-width:250px;"></input><br>
                <input type="submit" name="cambiarContra" class="btnCerrarSesion" value="Actualizar" style="min-height:40px; min-width:250px; background-color:greenyellow;"></input>
            </form>
        </div>
    <?php } ?>

    <!---->
    <hr class="line-footer">
    <footer id="footer">
        <div class="socials">
            <h4>CONTACTANOS</h4>
            <a href=""><img src="imgs/ico_ig.png" alt="">apetitoPetOf</a>
            <a href=""><img src="imgs/ico_fb.png" alt="">Apetito Pet Shop</a>
            <a href=""><img src="imgs/ico_wssp.png" alt="">+51 932 311 331</a>
        </div>
        <div class="ubicacion">
            <h4>UBICANOS</h4>
            <a href="https://maps.app.goo.gl/njPn3YR1Kv2Br38o8" target="_blank"><img src="imgs/ubi.png" alt="">Av. Mateo
                Pumacahua Villa EL Salvador 15842</a>
        </div>
        <div class="horario">
            <h4>HORARIOS</h4>
            <a href=""><img src="imgs/reloj.png" alt="">Lunes - Sábado 9am - 6pm</a>
            <a href="reclamos.php" class="libro-reclamaciones-logo"><img src="imgs/libro-reclamaciones.png" alt=""></a>
        </div>
    </footer>

    <script src="js/script.js"></script>
</body>

</html>