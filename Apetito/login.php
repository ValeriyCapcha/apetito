<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>aPETito Pet Shop</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/login.css">
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
                <li><a class="active" href="login.php"><img src="imgs/login.png" alt=""></a></li>
                <li><a href="carrito.php"><img src="imgs/shopcar.png" alt=""></a></li>
            </ul>
        </nav>

    </section>

    <?php
        if($_GET){
            $email=$_GET['txtEmail'];
            $password=$_GET['txtPassword'];
            if($email=='admin@gmail.com' && $password=='4p3t1t0'){
                print_r('<img src="imgs/logopet.png">');
            }else{
                include ('Secciones/Cuentas.php');
            }
        }else{
            include ('Secciones/Cuentas.php');
        }
    ?>

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
    
    <script src="js/login.js"></script>
    <script src="js/script.js"></script>
</body>
</html>