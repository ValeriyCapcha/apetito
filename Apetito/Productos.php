<?php include("bd/conexion.php"); ?>
<?php
session_start();
$Con = new conexion();
$IdUsuario = 0;
$add1 = "";
$add2 = "";
$add3 = "";
//Sesión
if (isset($_SESSION["txtEmail"])) {
    $correo = $_SESSION["txtEmail"];
    $usuario = $Con->consultar("SELECT * FROM `usuario` WHERE `usuario`.`Correo` = '$correo'");
    $ObtenerIdUsuario = $Con->IdUsuario($usuario);
    $IdUsuario = $ObtenerIdUsuario[0];
}
//Añadir al carrito
if (isset($_POST['txtProducto'])) {
    if (empty($IdUsuario)) {
        echo "<script>alert('Inicie sesión para poder comprar productos.');</script>";
    } else {
        $id_Producto = $_POST['txtProducto'];
        $sql = "INSERT INTO `carrito` (`id_Usuario`, `id_Producto`) VALUES ('$IdUsuario', '$id_Producto');";
        $Con->ejecutar($sql);
    }
}
//Filtros
if (isset($_POST['txtAnimales'])) {
    $FiltroAnimales = $_POST['txtAnimales'];
    $add1 = " AND `Productos`.`ANIMAL` = '$FiltroAnimales'";
}
if (isset($_POST['txtProductos'])) {
    $FiltroProductos = $_POST['txtProductos'];
    $add2 = " AND `Productos`.`CATEGORIA` = '$FiltroProductos'";
}
if (isset($_POST['txtPrecios'])) {
    $FiltroPrecios = $_POST['txtPrecios'];
    $add3 = " ORDER BY `Productos`.`PRECIO` $FiltroPrecios";
}
$productos = $Con->consultar("SELECT * FROM `Productos` WHERE `Productos`.`Descuento` = 0" . $add1 . $add2 . $add3 . ";");
$ofertas = $Con->consultar("SELECT * FROM `Productos` WHERE `Productos`.`Descuento` != 0");
$array2 = $Con->consultar("SELECT * FROM `carrito` WHERE id_Usuario = $IdUsuario");
$carrito = $Con->IdProducto($array2);
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>aPETito Pet Shop</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/grid.css">
    <link rel="stylesheet" href="css/carrusel.css">
    <link rel="icon" href="imgs/logopet.png" type="image/x-icon">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&family=Raleway:wght@100;200;400;500;800;900&display=swap');
    </style>
</head>

<body>
    <div class="contenedor">
        <section id="header">
            <a href="index.php"><img src="imgs/logopet.png" alt="" class="logo"></a>

            <button class="lista">
                <img src="imgs/list.svg">
            </button>
            <nav class="nav">
                <ul class="navbar">
                    <li><a href="index.php">Ofertas</a></li>
                    <li><a class="active" href="Productos.php">Productos</a></li>
                    <li><a href="servicios.php">Baño de mascotas</a></li>
                    <li><a href="index.php#sobre-nosotros">Nosotros</a></li>
                    <li><a href="index.php#encuentranos">Encuentranos</a></li>
                    <?php if(isset($_SESSION["txtEmail"])){ ?>
                        <li><a href="user.php"><img src="imgs/login.png" alt=""></a></li>
                    <?php }else{ ?>
                        <li><a href="login.php"><img src="imgs/login.png" alt=""></a></li>
                    <?php }?>
                    <li><a href="carrito.php"><img src="imgs/shopcar.png" alt=""></a></li>
                </ul>
            </nav>
        </section>

        <div class="uno">
            <!-- Prueba 
        <div class="ofer-container" id="producto">
            <div class="prod">
                <img src="imgs/comidaPerro.jpg" alt="">
                <div class="des">
                    <span><b>COMIDA</b></span>
                    <h5>CANBO Adulto Cordero razas Pequeñas 7kg</h5>
                    <h4>S/.56.90</h4>
                </div>
                <a href="#" class="btnAgregarCarrito">Agregar al Carrito</a>
            </div>
        </div>-->


        <h1>¡OFERTAS!</h1>

        <section id="oferta1">
            <div class="container-carousel">
                <div class="carruseles" id="slider">
                    <?php
                    foreach ($ofertas as $producto) { ?>
                        <section class="slider-section">
                            <div class="ofer">
                                <img src="<?php echo $producto['IMAGEN']; ?>" alt="">
                                <div class="des">
                                    <span><?php echo $producto['CATEGORIA']; ?></span>
                                    <h5><?php echo $producto['NOMBRES']; ?></h5>
                                    <div class="precio-ofer">
                                        <h6>s/<?php echo $producto['PRECIO']; ?></h6>
                                        <h4>s/<?php echo $producto['PRECIO'] - $producto['Descuento']; ?></h4>
                                    </div>
                                </div>
                                <div class="centrar">
                                    <form method="post">
                                        <input type="hidden" name="txtProducto" value="<?php echo $producto['ID_PRODUCTO']; ?>">
                                        <?php
                                        if (in_array($producto['ID_PRODUCTO'], $carrito ?? [])) {
                                            echo '<button type="submit" disabled class="btnAgregarCarrito1">En el carrito</button>';
                                        } else {
                                            echo '<button type="submit" name="agregar" class="btnAgregarCarrito1">Agregar al Carrito</button>';
                                        }
                                        ?>
                                    </form>
                                </div>
                            </div>
                        </section>
                    <?php } ?>
                    <?php
                    foreach ($ofertas as $producto) { ?>
                        <section class="slider-section">
                            <div class="ofer">
                                <img src="<?php echo $producto['IMAGEN']; ?>" alt="">
                                <div class="des">
                                    <span><?php echo $producto['CATEGORIA']; ?></span>
                                    <h5><?php echo $producto['NOMBRES']; ?></h5>
                                    <div class="precio-ofer">
                                        <h6>s/<?php echo $producto['PRECIO']; ?></h6>
                                        <h4>s/<?php echo $producto['PRECIO'] - $producto['Descuento']; ?></h4>
                                    </div>
                                </div>
                                <div class="centrar">
                                    <form method="post">
                                        <input type="hidden" name="txtProducto" value="<?php echo $producto['ID_PRODUCTO']; ?>">
                                        <?php
                                        if (in_array($producto['ID_PRODUCTO'], $carrito ?? [])) {
                                            echo '<button type="submit" disabled class="btnAgregarCarrito1">En el carrito</button>';
                                        } else {
                                            echo '<button type="submit" name="agregar" class="btnAgregarCarrito1">Agregar al Carrito</button>';
                                        }
                                        ?>
                                    </form>
                                </div>
                            </div>
                        </section>
                    <?php } ?>
                </div>
                <div class="btn-left">&#60</div>
                <div class="btn-right">&#62</div>
            </div>
        </section>
        <br>
        <br>

        <br>

        <section id="producto">
            <h2>PRODUCTOS</h2>
            <div class="prod-container">
                <?php foreach ($productos as $producto) { ?>
                    <div class="prod">
                        <img src="<?php echo $producto['IMAGEN']; ?>" alt="">
                        <div class="des">
                            <span><b><?php echo $producto['CATEGORIA']; ?></b></span>
                            <h5><?php echo $producto['NOMBRES']; ?></h5>
                            <h4>S/<?php echo $producto['PRECIO']; ?></h4>
                        </div>
                        <div class="centrar">
                            <form method="post">
                                <input type="hidden" name="txtProducto" value="<?php echo $producto['ID_PRODUCTO']; ?>">
                                <?php
                                if (in_array($producto['ID_PRODUCTO'], $carrito ?? [])) {
                                    echo '<button type="submit" disabled class="btnAgregarCarrito1">En el carrito</button>';
                                } else {
                                    echo '<button type="submit" name="agregar" class="btnAgregarCarrito1">Agregar al Carrito</button>';
                                }
                                ?>
                            </form>
                        </div>
                        <!-- <a href="#" class="btnAgregarCarrito1">Agregar al Carrito</a> -->
                    </div>
                <?php } ?>
            </div>
        </section>

        </div>
        <div class="dos">
            <form method="POST">
                <div class="contenedorFormulario">
                    <div class="FUno">
                        <h2>Categorías</h2>
                        <input type="radio" id="perro" name="txtAnimales" value="Perro">
                        <label for="perro">Perro</label>
                        <br>
                        <input type="radio" id="gato" name="txtAnimales" value="Gato">
                        <label for="gato">Gato</label>
                        <br>
                        <input type="radio" id="otros" name="txtAnimales" value="Otros">
                        <label for="otros">Otros</label>
                        <hr>
                    </div>
                    <div class="FDos">
                        <h2>Productos</h2>
                        <input type="radio" id="comida" name="txtProductos" value="Comida">
                        <label for="comida">Comida</label>
                        <br>
                        <input type="radio" id="juguetes" name="txtProductos" value="Juguetes">
                        <label for="juguetes">Juguetes</label>
                        <br>
                        <input type="radio" id="higiene" name="txtProductos" value="Higiene">
                        <label for="higiene">Higiene</label>
                        <br>
                        <input type="radio" id="ropa" name="txtProductos" value="Ropa">
                        <label for="ropa">Ropa</label>
                        <br>
                        <input type="radio" id="otrosp" name="txtProductos" value="Otros">
                        <label for="otrosp">Otros</label>
                        <hr>
                    </div>
                    <div class="FTres">
                        <h2>Precio</h2>
                        <input type="radio" id="mayor" name="txtPrecios" value="DESC">
                        <label for="mayor">De mayor a menor</label>
                        <br>
                        <input type="radio" id="menor" name="txtPrecios" value="ASC">
                        <label for="menor">De menor a mayor</label>
                        <div class="centrar">
                            <button type="submit" name="Filtro" class="btnFiltrar">Filtrar</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
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
            <a href="" class="libro-reclamaciones-logo"><img src="imgs/libro-reclamaciones.png" alt=""></a>
        </div>
    </footer>
    <script src="js/script.js"></script>
    <script src="js/carrusel.js"></script>
</body>

</html>