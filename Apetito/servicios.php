<?php
include("bd/conn.php");
include("bd/conexion.php");
//Sesión
session_start();
$Con = new conexion();
if (isset($_SESSION["txtEmail"])) {
    $correo = $_SESSION["txtEmail"];
    $usuario = $Con->consultar("SELECT * FROM `usuario` WHERE `usuario`.`Correo` = '$correo'");
    $ObtenerIdUsuario = $Con->IdUsuario($usuario);
    $IdUsuario = $ObtenerIdUsuario[0];
}
if (isset($_POST['nameh'])) {
    $NOMBRE_APELLIDO_CLIENTE = $_POST['nameh'];
    $NOMBRE_MASCOTA = $_POST['namem'];
    $Email = $_POST['email'];
    $Telefono_Cita = $_POST['phone'];
    $Raza_Mascota = $_POST['raza'];
    $Tipo_Bano = $_POST['banho'];
    $Fecha_Cita = $_POST['fecha'];
    $Id_Hora_Cita = $_POST['hora'];

    $insertar = "INSERT INTO citas_servicios(NOMBRE_APELLIDO_CLIENTE, NOMBRE_MASCOTA, Email, Telefono_Cita, Raza_Mascota, Tipo_Bano, Fecha_Cita, Id_Hora_Cita) VALUES ('$NOMBRE_APELLIDO_CLIENTE', '$NOMBRE_MASCOTA', '$Email', '$Telefono_Cita', '$Raza_Mascota', '$Tipo_Bano', '$Fecha_Cita', '$Id_Hora_Cita' )";

    $sql = $connn->query($insertar);

    if ($sql) {

        echo "<script> alert('Cita agendada con exito');
        </script>";
    } else {
        echo "<script> alert('Cita no agendada');
        </script>";
    }
}
?>
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
                <?php if (isset($_SESSION["txtEmail"])) { ?>
                        <li><a href="user.php"><img src="imgs/SesionIniciada.png" alt=""></a></li>
                    <?php } else { ?>
                        <li><a href="login.php"><img src="imgs/login.png" alt=""></a></li>
                    <?php } ?>
                <li><a href="carrito.php"><img src="imgs/shopcar.png" alt=""></a></li>
            </ul>
        </nav>

    </section>

    <div class="fondo">
        <section id="Bano">
            <div class="container-servicios">
                <div class="Informacion">
                    <h2>Baño para perros</h2>
                    <h3>Desde S/.20</h3>
                    <p>Ingresa tus datos y selecciona un horario, en breve se le confirmara la fecha.</p>
                </div>
                <div class="Formulario">
                    <h2>Datos</h2>
                    <form method="POST" autocomplete="on" class="Form">
                        <input type="text" name="nameh" placeholder="Nombres y Apellidos">
                        <input type="text" id="NOMBRE_MASCOTA" name="namem" placeholder="Nombre de la Mascota">

                        <input type="email" id="Email" name="email" placeholder="Correo">
                        <input type="tel" id="Telefono_Cita" name="phone" placeholder="Celular" pattern="[0-9]{3}[0-9]{3}[0-9]{3}">

                        <input type="text" id="Raza_Mascota" name="raza" placeholder="Raza">
                        <select id="Tipo_Bano" name="banho">
                            <option value="1">Baño cosmético</option>
                            <option value="2">Baño antipulgas</option>
                            <option value="3">Baño medicado</option>
                            <option value="4">Baño antisárnico</option>
                            <option value="5">Baño y corte de pelo</option>
                        </select>

                        <input type="date" id="Fecha_Cita" name="fecha" title="Fecha">
                        <select id="Id_Hora_Cita" name="hora" title="Horario">
                            <option value="1">9:00-10:00</option>
                            <option value="2">10:00-12:00</option>
                            <option value="3">2:00-3:00</option>
                            <option value="4">3:00-4:00</option>
                            <option value="5">4:00-5:00</option>
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
            <a href="reclamos.php" class="libro-reclamaciones-logo"><img src="imgs/libro-reclamaciones.png" alt=""></a>
        </div>
    </footer>

    <script src="js/script.js"></script>
</body>

</html>