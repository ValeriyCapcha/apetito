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
                <li><a href="login.php"><img src="imgs/login.png" alt=""></a></li>
                <li><a class="active" href="carrito.php"><img src="imgs/shopcar.png" alt=""></a></li>
            </ul>
        </nav>
    </section>

    <div class="unoo">
        <h2>Mi carrito</h2>
    </div>

    <section>

    </section>
    <div class="contenedorcar">
        <img class="imagencar" src="imgs/productospetshop/comida_perro2.jpeg" alt="">
        <p class="textocar">RICOCAN Adultos Razas Medianas y Grandes</p>
        <p class="numeroscar" id="precio1">S/109</p>
        <form action="#" class="cantidad-form">
            <label for="canti">Cantidad:</label>
            <div class="cantidad-control">
                <p id="btnResta1">-</p>
                <input type="text" id="canti1" name="canti" value="">
                <p id="btnSuma1">+</p>
            </div>
        </form>
        
        <form action="#" class="resultado-form">
            <label for="resul">Total: S/</label>
            <div class="resultado-control">
                <label type="text" id="resul1" name="resul" value="">
            </div>
        </form>
        <div id="eliminar">
            <img src="imgs/basura-eliminar.png" alt="">
        </div>  
    </div><br>
    <hr><br>
    
    <div class="contenedorcar">
        <img class="imagencar" src="imgs/productospetshop/comidaPerro3.jpg" alt="">
        <p class="textocar">ProPlan Adult Lamb - Adulto Cordero 15.9 kg</p>
        <p class="numeroscar" id="precio2">S/403</p>
        <form action="#" class="cantidad-form">
            <label for="canti">Cantidad:</label>
            <div class="cantidad-control">
                <p id="btnResta2">-</p><input type="text" id="canti2" name="canti2" value="" readonly><p id="btnSuma2">+</p>
            </div>
        </form>

        <form action="#" class="resultado-form">
            <label for="resul">Total: S/</label>
            <div class="resultado-control">
                <label type="text" id="resul2" name="resul2" value="">
            </div>
        </form>
        <div id="eliminar">
            <img src="imgs/basura-eliminar.png" alt="">
        </div>  
    </div><br>
    <hr><br>

    <div class="contenedorcar">
        <img class="imagencar" src="imgs/productospetshop/comidaPerro3.jpg" alt="">
        <p class="textocar">ProPlan Adult Lamb - Adulto Cordero 15.9 kg</p>
        <p class="numeroscar" id="precio2">S/403</p>
        <form action="carrito.php" method="post" class="cantidad-form">
            <label for="canti">Cantidad:</label>
            <div class="cantidad-control">
                <input type="submit" value="-">
                <?php
                    if($_POST){
                        //Esto realmente no sirve
                        $cantidad=$_POST['txtCantidad'];
                        echo "cantidad: ".$cantidad;
                    }
                ?>
                <input type="text" name="txtCantidad" value="1" readonly>
                <input type="submit" value="+">
            </div>
        </form>

        <form action="#" class="resultado-form">
            <label for="resul">Total: S/</label>
            <div class="resultado-control">
                <label type="text" id="resul2" name="resul2" value="">
            </div>
        </form>
        <div id="eliminar">
            <img src="imgs/basura-eliminar.png" alt="">
        </div>  
    </div><br>
    <hr><br>


    <div class="ofer-container">
        <div class="prod">
            
            <div class="des">
                <span><b>TOTAL A PAGAR</b></span>
                <form action="#" class="texto-rojo">
                    <label type="text" id="totalfinal" name="resul2" value="">
                </form>
            </div>
            <a href="../Apetito/assets/succes.html" class="btnAgregarCarrito1">Hacer pedido</a>
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
    <script src="js/script.js"></script><!-- 
    <script src="js/carrito.js"></script> -->
</body>
</html>