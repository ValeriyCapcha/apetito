<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>aPETito Pet Shop</title>
    <link rel="stylesheet" href="css/style.css">
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
                <li><a class="active" href="servicios.php">Baño de mascotas</a></li>
                <li><a href="index.php#sobre-nosotros">Nosotros</a></li>
                <li><a href="index.php#encuentranos">Encuentranos</a></li>
                <li><a href="login.php"><img src="imgs/login.png" alt=""></a></li>
                <li><a href="carrito.php"><img src="imgs/shopcar.png" alt=""></a></li>
            </ul>
        </nav>

    </section>

    <div class="fondo">
        <section id="Bano">
        <div class="container-servicios">
            <div class="Informacion">
                <h2>Baño para mascotas</h2>
                <h3>Desde S/.20</h3>
                <p>Ingresa tus datos y selecciona un horario, en breve se le confirmara la fecha.</p>
            </div>
            <div class="Formulario">
                <h2>Datos</h2>
                <form action="/action_page.php" autocomplete="on" class="Form">
                    <input type="text" id="nameh" name="nameh" placeholder="Nombres y Apellidos">
                    <input type="text" id="namem" name="namem" placeholder="Nombre de la Mascota">
                    
                    <input type="email" id="email" name="email" placeholder="Correo">
                    <input type="tel" id="phone" name="phone" placeholder="Celular" pattern="[0-9]{3}[0-9]{3}[0-9]{3}">
                    
                    <input type="text" id="raza" name="raza" placeholder="Raza">
                    <select id="banho" name="banho">
                        <option value="cosmetico">Baño cosmético</option>
                        <option value="antipulgas">Baño antipulgas</option>
                        <option value="medicado">Baño medicado</option>
                        <option value="antisarnico">Baño antisárnico</option>
                        <option value="corte">Baño y corte de pelo</option>
                    </select>
                    
                    <input type="date" id="fecha" name="fecha" title="Fecha">
                    <select id="hora" name="hora" title="Horario">
                        <option value="9">9:00-10:00</option>
                        <option value="10">10:00-12:00</option>
                        <option value="2">2:00-3:00</option>
                        <option value="3">3:00-4:00</option>
                        <option value="4">4:00-5:00</option>
                    </select>
                    <br><br>
                    <input type="submit" value="INGRESAR" class="Boton">
                </form>
            </div>
        </div>
        </section>
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
</body>
</html>