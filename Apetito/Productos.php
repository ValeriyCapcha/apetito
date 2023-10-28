<?php include("bd/conexion.php"); ?>
<?php
    $Con = new conexion();
    $sql="INSERT INTO `carrito` (`id_Usuario`, `id_Producto`) VALUES ('1', '3');";
    $Con->ejecutar($sql);
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
                <li><a href="login.php"><img src="imgs/login.png" alt=""></a></li>
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
                    
                    <section class="slider-section">
                        <div class="ofer">
                            <img src="imgs/productospetshop/comidaPerro.jpg" alt="">
                            <div class="des">
                                <span>COMIDA</span>
                                <h5>Canbo Adulto Cordero Razas Med/Gran Alimento Seco Perro</h5>
                                <div class="precio-ofer">
                                    <h6>s/70.00</h6>
                                    <h4>s/56.90</h4>
                                </div>
                            </div>
                            <a href="#" class="btnAgregarCarrito">Agregar al Carrito</a>
                        </div>
                    </section>

                    <section class="slider-section">
                        <div class="ofer">
                            <img src="imgs/productospetshop/comida_perro.jpeg" alt="">
                            <div class="des">
                                <span>COMIDA</span>
                                <h5>Canbo Super Premiun Cachorro Hipolergenico 330gr</h5>
                                <div class="precio-ofer">
                                    <h6>s/15.00</h6>
                                    <h4>s/13.00</h4>
                                </div>
                            </div>
                            <a href="#" class="btnAgregarCarrito">Agregar al Carrito</a>
                        </div>
                    </section>

                    <section class="slider-section">
                        <div class="ofer">
                            <img src="imgs/productospetshop/comida_perro2.jpeg" alt="">
                            <div class="des">
                                <span>COMIDA</span>
                                <h5>RICOCAN Adultos Razas Medianas y Grandes Cordero</h5>
                                <div class="precio-ofer">
                                    <h6>s/115.00</h6>
                                    <h4>s/109.90</h4>
                                </div>
                            </div>
                            <a href="#" class="btnAgregarCarrito">Agregar al Carrito</a>
                        </div>
                    </section>
                    
                    <section class="slider-section">
                        <div class="ofer">
                            <img src="imgs/productospetshop/comidaPerro.jpg" alt="">
                            <div class="des">
                                <span>COMIDA</span>
                                <h5>Canbo Adulto Cordero Razas Med/Gran Alimento Seco Perro</h5>
                                <div class="precio-ofer">
                                    <h6>s/70.00</h6>
                                    <h4>s/56.90</h4>
                                </div>
                            </div>
                            <a href="#" class="btnAgregarCarrito">Agregar al Carrito</a>
                        </div>
                    </section>

                    <section class="slider-section">
                        <div class="ofer">
                            <img src="imgs/productospetshop/comida_perro.jpeg" alt="">
                            <div class="des">
                                <span>COMIDA</span>
                                <h5>Canbo Super Premiun Cachorro Hipolergenico 330gr</h5>
                                <div class="precio-ofer">
                                    <h6>s/15.00</h6>
                                    <h4>s/13.00</h4>
                                </div>
                            </div>
                            <a href="#" class="btnAgregarCarrito">Agregar al Carrito</a>
                        </div>
                    </section>

                    <section class="slider-section">
                        <div class="ofer">
                            <img src="imgs/productospetshop/comida_perro2.jpeg" alt="">
                            <div class="des">
                                <span>COMIDA</span>
                                <h5>RICOCAN Adultos Razas Medianas y Grandes Cordero</h5>
                                <div class="precio-ofer">
                                    <h6>s/115.00</h6>
                                    <h4>s/109.90</h4>
                                </div>
                            </div>
                            <a href="#" class="btnAgregarCarrito">Agregar al Carrito</a>
                        </div>
                    </section>
                </div>
                <div class="btn-left">&#60</div>
                <div class="btn-right">&#62</div>
            </div>
        </section>

        <br>

        <section id="producto">
            <h2>PRODUCTOS</h2>
            <div class="prod-container">
                <div class="prod">
                    <img src="imgs/productospetshop/antipulgas.jpeg" alt="">
                    <div class="des">
                        <span><b>HIGIENE</b></span>
                        <h5>RAZA ANTIPULGAS X 500 ML</h5>
                        <h4>S/37.99</h4>
                    </div>
                    <a href="#" class="btnAgregarCarrito1">Agregar al Carrito</a>
                </div>
    
                <div class="prod">
                    <img src="imgs/productospetshop/correa.jpeg" alt="">
                    <div class="des">
                        <span><b>OTROS</b></span>
                        <h5>Correa Nylon Perros Med/Gran</h5>
                        <h4>S/41.00</h4>
                    </div>
                    <a href="#" class="btnAgregarCarrito1">Agregar al Carrito</a>
                </div>
    
                <div class="prod">
                    <img src="imgs/productospetshop/juguete_gato.jpeg" alt="">
                    <div class="des">
                        <span><b>JUGUETES</b></span>
                        <h5>Petshow juguete de varita para Gato</h5>
                        <h4>S/12.00</h4>
                    </div>
                    <a href="#" class="btnAgregarCarrito1">Agregar al Carrito</a>
                </div>
                
                <div class="prod">
                    <img src="imgs/productospetshop/mochila_gato.jpeg" alt="">
                    <div class="des">
                        <span><b>OTROS</b></span>
                        <h5>Mochila Espacial para Mascotas</h5>
                        <h4>S/115.00</h4>
                    </div>
                    <a href="#" class="btnAgregarCarrito1">Agregar al Carrito</a>
                </div>
                <div class="prod">
                    <img src="imgs/productospetshop/fiprocan.jpeg" alt="">
                    <div class="des">
                        <span><b>HIGIENE</b></span>
                        <h5>Antipulgas, garrapataas Gato 8kg</h5>
                        <h4>S/24.00</h4>
                    </div>
                    <a href="#" class="btnAgregarCarrito1">Agregar al Carrito</a>
                </div>
    
                <div class="prod">
                    <img src="imgs/productospetshop/comidaPerro3.jpg" alt="">
                    <div class="des">
                        <span><b>COMIDA</b></span>
                        <h5>ProPlan Adult Lamb - Adulto Cordero 15.9 kg</h5>
                        <h4>S/403.50</h4>
                    </div>
                    <a href="#" class="btnAgregarCarrito1">Agregar al Carrito</a>
                </div>
    
                <div class="prod">
                    <img src="imgs/productospetshop/juguete_perro2.jpeg" alt="">
                    <div class="des">
                        <span><b>JUGUETES</b></span>
                        <h5>Pollo pequeño 15cm</h5>
                        <h4>S/4.00</h4>
                    </div>
                    <a href="#" class="btnAgregarCarrito1">Agregar al Carrito</a>
                </div>
                
                <div class="prod">
                    <img src="imgs/productospetshop/comidaPerro2.jpg" alt="">
                    <div class="des">
                        <span><b>COMIDA</b></span>
                        <h5>CANBO Adulto Cordero razas Pequeñas 7kg</h5>
                        <h4>S/123.90</h4>
                    </div>
                    <a href="#" class="btnAgregarCarrito1">Agregar al Carrito</a>
                </div>
            </div>
        </section>

    </div>

    <div class="dos">
        <form action="/action_page.php" class="form">
            <h2>Categorías</h2>
            <input type="radio" id="perro" name="animal" value="Perro">
            <label for="perro">Perro</label>
            <br>
            <input type="radio" id="gato" name="animal" value="Gato">
            <label for="gato">Gato</label>
            <br>
            <input type="radio" id="otros" name="animal" value="Otros">
            <label for="otros">Otros</label>
        </form>
        <hr>
        <form action="/action_page.php" class="form">
            <h2>Productos</h2>
            <input type="radio" id="comida" name="productos" value="Comida">
            <label for="comida">Comida</label>
            <br>
            <input type="radio" id="juguetes" name="productos" value="Juguetes">
            <label for="juguetes">Juguetes</label>
            <br>
            <input type="radio" id="higiene" name="productos" value="Higiene">
            <label for="higiene">Higiene</label>
            <br>
            <input type="radio" id="ropa" name="productos" value="Ropa">
            <label for="ropa">Ropa</label>
            <br>
            <input type="radio" id="otrosp" name="productos" value="OtrosP">
            <label for="otrosp">Otros</label>
        </form>
        <hr>
        <form action="/action_page.php" class="form">
            <h2>Precio</h2>
            S/.5
            <input type="range" id="a" name="a" value="200">
            S/.200
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