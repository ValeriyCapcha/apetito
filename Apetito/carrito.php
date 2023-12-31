<?php include("bd/conexion.php"); ?>
<?php
session_start();
$Subtotal = 0;
$Con = new conexion();
$IdUsuario = 0;
//Sesion
if (isset($_SESSION["txtEmail"])) {
    $correo = $_SESSION["txtEmail"];
    $usuario = $Con->consultar("SELECT * FROM `usuario` WHERE `usuario`.`Correo` = '$correo'");
    $ObtenerIdUsuario = $Con->IdUsuario($usuario);
    $IdUsuario = $ObtenerIdUsuario[0];
}
//Eliminar
if (isset($_POST['txtItem'])) {
    $Item = $_POST['txtItem'];
    $sql = "DELETE FROM carrito WHERE `carrito`.`id_Carrito` = $Item;";
    $Con->ejecutar($sql);
}
//Sumar
if (isset($_POST['sumar'])) {
    $Prod = $_POST['prod'];
    $Cant = $_POST['cant'];
    $Cant = $Cant + 1;
    $sql = "UPDATE `carrito` SET `Cantidad` = '$Cant' WHERE `carrito`.`id_Carrito` = $Prod";
    $Con->ejecutar($sql);
    header("location:carrito.php");
}
//Restar
if (isset($_POST['restar'])) {
    $Prod = $_POST['prod'];
    $Cant = $_POST['cant'];
    if ($Cant > 1) {
        $Cant = $Cant - 1;
        $sql = "UPDATE `carrito` SET `Cantidad` = '$Cant' WHERE `carrito`.`id_Carrito` = $Prod";
        $Con->ejecutar($sql);
        header("location:carrito.php");
    }
}
$productos = $Con->consultar("SELECT IMAGEN, NOMBRES, PRECIO, Descuento, id_Carrito, Cantidad FROM `carrito` C 
    INNER JOIN productos P ON P.ID_PRODUCTO = C.id_Producto WHERE C.id_Usuario = $IdUsuario");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>aPETito Pet Shop</title>
    <link rel="stylesheet" href="css/carrito.css">
    <link rel="stylesheet" href="css/grid.css">
    <link rel="stylesheet" href="css/style.css">


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
                    <li><a href="user.php"><img src="imgs/SesionIniciada.png" alt=""></a></li>
                <?php } else { ?>
                    <li><a href="login.php"><img src="imgs/login.png" alt=""></a></li>
                <?php } ?>
                <li><a class="active" href="carrito.php"><img src="imgs/shopcar.png" alt=""></a></li>
            </ul>
        </nav>
    </section>

    <div class="unoo">
        <h2>Mi carrito</h2>
    </div>

    <?php
    if (empty($productos)) {
        echo "<h1>El carrito está vacío.</h1><br>";
    } else { ?>
        <?php foreach ($productos as $producto) { ?>
            <div class="contenedorcar">
                <img class="imagencar" src="<?php echo $producto['IMAGEN']; ?>" alt="">
                <p class="textocar"><?php echo $producto['NOMBRES']; ?></p>
                <p class="numeroscar">S/.<?php echo ($producto['PRECIO'] - $producto['Descuento']); ?></p>
                <div class="cantidad-control">
                    Cantidad:
                    <form method="post">
                        <input type="hidden" name="cant" value="<?php echo $producto['Cantidad']; ?>">
                        <input type="hidden" name="prod" value="<?php echo $producto['id_Carrito']; ?>">
                        <button type="submit" name="restar"><a>-</a></button>
                        <a><?php echo $producto['Cantidad']; ?></a>
                        <button type="submit" name="sumar"><a>+</a></button>
                    </form>
                </div>

                <form action="#" class="resultado-form">
                    Total: S/
                    <?php
                    $Total = ($producto['Cantidad']) * ($producto['PRECIO'] - $producto['Descuento']);
                    $Subtotal = $Subtotal + $Total;
                    ?>
                    <div class="resultado-control">
                        <b><?php echo $Total; ?></b>
                    </div>
                </form>
                <div id="eliminar">
                    <form method="post">
                        <input type="hidden" name="txtItem" value="<?php echo $producto['id_Carrito']; ?>">
                        <button type="submit" name="wishlist-submit">
                            <img src="imgs/basura-eliminar.png" alt="">
                        </button>
                    </form>
                </div>
            </div><br>
            <hr><br>
        <?php } ?>
    <?php } ?>

    <?php
    if (!empty($productos)) { ?>
        <div class="ofer-container">
            <div class="prod">

                <div class="des">
                    <span><b>TOTAL A PAGAR</b></span>
                    <p class="texto-rojo" style="font-size: 50px">S/.<?php echo $Subtotal; ?></p>
                </div>
                <div class="metodoRecojo" style="margin: 20px 0;">
                    <form>
                        <label for="frutas">Selecciona un metodo de recojo:</label>
                        <select id="frutas" name="frutas">
                            <option value="manzana">--Elija</option>
                            <option value="platano">Recojo en tienda</option>
                            <option value="uva">Delivery</option>
                        </select>
                    </form>
                </div>
                <a href="assets/succes.html" class="btnAgregarCarrito1">Hacer pedido</a>
            </div>
        </div>
    <?php } ?>





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
            <a href="https://maps.app.goo.gl/njPn3YR1Kv2Br38o8" target="_blank"><img src="imgs/ubi.png" alt="">Av. Mateo Pumacahua Villa EL Salvador 15842</a>
        </div>
        <div class="horario">
            <h4>HORARIOS</h4>
            <a href=""><img src="imgs/reloj.png" alt="">Lunes - Sábado 9am - 6pm</a>
            <a href="reclamos.php" class="libro-reclamaciones-logo"><img src="imgs/libro-reclamaciones.png" alt=""></a>
        </div>
    </footer>
    <script src="js/script.js"></script><!-- 
    <script src="js/carrito.js"></script> -->
</body>

</html>