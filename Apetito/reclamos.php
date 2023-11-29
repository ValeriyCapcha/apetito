<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>aPETito Pet Shop</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/reclamos.css">
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

    </section>

    <section class="containerF" style="margin: 3% 5% 3% 5%;">
        <h2>Libro de Reclamaciones</h2>
        <h3>¿Qué es un reclamo?</h3>
        <p>Es la forma de expresar tu disconformidad con la experiencia que tuviste a la hora de comprar, pagar o usar
            la configuración de tu cuenta a través de nuestra página.</p>
        <hr style="margin: 2% 0;">
        <form method="post" style="padding: 0px;">
            <?php
            include("bd/conn.php");
            include("bd/controlador_reclamos.php");
            ?>
            <label for="">Nombre de Usuario</label>
            <input type="text" id="correoR" name="usuarioR" placeholder=" Ejm. Estefano">
            <label for="">Correo electrónico</label>
            <input type="text" id="correoR" name="correoR" placeholder=" Ejm. usuario@gmail.com">
            <label for="">Describa su reclamo</label>
            <textarea name=" reclamo" id="reclamo" cols="50" rows="10" placeholder=" Desahoguese :c" required style="min-width:100%; resize:none; border-radius: 8px;"></textarea>
            <input type="submit" class="button" name="btnEnviarReclamo" value="Enviar"></input>
        </form>

        <p>* El proveedor debe dar respuesta al reclamo o queja en un plazo no mayor a quince (15) días hábiles, el cual es improrrogable.</p>


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
            <a href="reclamos.php" class="libro-reclamaciones-logo"><img src="imgs/libro-reclamaciones.png" alt=""></a>
        </div>
    </footer>

    <script src="js/login.js"></script>
    <script src="js/script.js"></script>

</body>

</html>