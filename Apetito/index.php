<?php include("bd/conexion.php"); ?>
<?php
    $Con = new conexion();
    if($_POST){
        $id_Producto=$_POST['txtProducto'];
        $id_Usuario=$_POST['txtUsuario'];
        $sql="INSERT INTO `carrito` (`id_Usuario`, `id_Producto`) VALUES ('$id_Usuario', '$id_Producto');";
        $Con->ejecutar($sql); 
    }
    $productos=$Con->consultar("SELECT * FROM `Productos`");
    $array2=$Con->consultar("SELECT * FROM `carrito`"); 
    $carrito=$Con->IdProducto($array2);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>aPETito Pet Shop</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/carrusel.css">
    <link rel="stylesheet" href="css/grid.css">
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
                <li><a class="active" href="index.php">Ofertas</a></li>
                <li><a href="Productos.php">Productos</a></li>
                <li><a href="servicios.php">Baño de mascotas</a></li>
                <li><a href="index.php#sobre-nosotros">Nosotros</a></li>
                <li><a href="index.php#encuentranos">Encuentranos</a></li>
                <li><a href="login.php"><img src="imgs/login.png" alt=""></a></li>
                <li><a href="carrito.php"><img src="imgs/shopcar.png" alt=""></a></li>
            </ul>
        </nav>
    </section>
    
    <section id="hero">
        <div class="video">
            <video src="videos/video_hero.mp4" autoplay loop></video>
        </div>
        <div class="overlay-video"></div>
        <div class="container-imagen">
            <img src="imgs/logopet.png" alt="logo" height="180px">
        </div>
    </section>
    
    
    <section id="oferta1">
        <div class="container-carousel">
            <div class="carruseles" id="slider">
            <?php 
                $subarray = array_slice($productos, 8);
            foreach($subarray as $producto){?>
                <section class="slider-section">
                    <div class="ofer">
                        <img src="<?php echo $producto['IMAGEN'];?>" alt="">
                        <div class="des">
                            <span><?php echo $producto['CATEGORIA'];?></span>
                            <h5><?php echo $producto['NOMBRES'];?></h5>
                            <div class="precio-ofer">
                                <h6>s/<?php echo $producto['PRECIO']*1.2;?></h6>
                                <h4>s/<?php echo $producto['PRECIO'];?></h4>
                            </div>
                        </div>
                        <form method="post">
                            <input type="hidden" name="txtProducto" value="<?php echo $producto['ID_PRODUCTO'];?>">
                            <input type="hidden" name="txtUsuario" value="1">
                            <?php
                            if (in_array($producto['ID_PRODUCTO'], $carrito ?? [])){
                                echo '<button type="submit" disabled class="btnAgregarCarrito1">En el carrito</button>';
                            }else{
                                echo '<button type="submit" name="agregar" class="btnAgregarCarrito1">Agregar al Carrito</button>';
                            }
                            ?>
                        </form>
                    </div>
                </section>
            <?php } ?>
            <?php 
                $subarray = array_slice($productos, 8);
            foreach($subarray as $producto){?>
                <section class="slider-section">
                    <div class="ofer">
                        <img src="<?php echo $producto['IMAGEN'];?>" alt="">
                        <div class="des">
                            <span><?php echo $producto['CATEGORIA'];?></span>
                            <h5><?php echo $producto['NOMBRES'];?></h5>
                            <div class="precio-ofer">
                                <h6>s/<?php echo $producto['PRECIO']*1.2;?></h6>
                                <h4>s/<?php echo $producto['PRECIO'];?></h4>
                            </div>
                        </div>
                        <form method="post">
                            <input type="hidden" name="txtProducto" value="<?php echo $producto['ID_PRODUCTO'];?>">
                            <input type="hidden" name="txtUsuario" value="1">
                            <?php
                            if (in_array($producto['ID_PRODUCTO'], $carrito ?? [])){
                                echo '<button type="submit" disabled class="btnAgregarCarrito1">En el carrito</button>';
                            }else{
                                echo '<button type="submit" name="agregar" class="btnAgregarCarrito1">Agregar al Carrito</button>';
                            }
                            ?>
                        </form>
                    </div>
                </section>
            <?php } ?>
            </div>
            <div class="btn-left">&#60</div>
            <div class="btn-right">&#62</div>
        </div>
    </section>

    <br>

    <section id="ver">
        <a href="Productos.html" class="btnVermas">Ver mas</a>
    </section>

    <br><br>
    
    <section id="NProductos">
        <h2>Nuestros Productos</h2>
        <div class="animales-container">
            
            <div class="animales">
                <img src="imgs/cute-and-happy-dog.png">
                <div class="Texto">
                    <h3>PARA PERROS</h3>
                    <p>Productos para perros, entre ellos: comida, juguetes, limpieza, otros.</p>
                </div>
            </div>

            <div class="animales">
                <img src="imgs/happy-cat-transparent-background.png">
                <div class="Texto">
                    <h3>PARA GATOS</h3>
                    <p>Productos para gatos, entre ellos: comida, juguetes, limpieza, otros.</p>
                </div>
            </div>

            <div class="animales">
                <img src="imgs/Rabbit-Transparent-Background.png">
                <div class="Texto">
                    <h3>PARA OTRO TIPO DE MASCOTAS</h3>
                    <p>Productos para otro tipo de mascotas, entre ellos: comida, juguetes, limpieza, otros.</p>
                </div>
            </div>
        </div>
    </section> 

    
    <section id="Servicios">
        <h2>Nuestros Servicios</h2>
        <a href="servicios.html">
        <div class="animales-container">
            <div class="animales">
                <img src="imgs/servicios.jpg">
                <div class="Texto">
                    <h3>Baño de mascotas</h3>
                    <br>
                    <p>Brindamos diferentes tipos de baños para mascotas dependiendo de la necesidad del cliente:
                        <ul>
                            <li>
                                Baño cosmético
                            </li>
                            <li>
                                Baño antipulgas
                            </li>
                            <li>
                                Baño medicado
                            </li>
                            <li>
                                Baño antisárnico
                            </li>
                            <li>
                                Baño y corte de pelo
                            </li>
                        </ul>

                    </p>
                </div>
            </div>
        </div></a>
    </section>

    <section id="sobre-nosotros">
        <img src="imgs/Tienda.jpeg" alt="">
        <div class="sobre-text">
            <h2>SOBRE NOSOTROS</h2>
            <P>Apetito Pet Shop es una pequeña empresa que se dedica a la venta minorista de productos para
                    mascotas, los cuales son alimentos, juguetes, correas y demás accesorios; además también se
                    especializa en el cuidado y aseo de perros. La empresa abrió hace 3 años y ya cuenta con una
                    cartera de clientes fidelizados.</P>
        </div>
    </section>

    <section id="myv">
        <div class="mision">
            <h2>MISIÓN</h2>
            <p>Brindar felicidad a las mascotas ofreciendo productos y servicios de calidad a través de una
                buena atención al cliente, humanos y mascotas.</p>
        </div>
        <div class="vision">
            <h2>VISIÓN</h2>
            <p>Ser la empresa líder del mercado aumentando los servicios que se brindan en la empresa para
                lograr dar felicidad y una buena vida a todas las mascotas del país.</p>
        </div>
    </section> 
 
    <section id="encuentranos">
        <h2>Aquí estamos📍</h2>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3279.333750313562!2d-76.96481140097565!3d-12.19352993171234!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105b974a8e5d095%3A0xa946812edb1483b8!2sApetito%20Pet%20Shop!5e0!3m2!1ses-419!2spe!4v1695263154154!5m2!1ses-419!2spe" 
        width="100%" height="400vh" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
        </iframe>
    </section> 

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
            <a href="" class="libro-reclamaciones-logo"><img src="imgs/libro-reclamaciones.png" alt=""></a>
        </div>
    </footer>

    <script src="js/script.js"></script>
    <script src="js/carrusel.js"></script>
</body>
</html>
