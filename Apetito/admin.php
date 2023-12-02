<?php 
include("bd/conn.php");
$productos = $Con->consultar("SELECT * FROM `Productos`;");
$reclamos = $Con->consultar("SELECT * FROM `reclamos`;");
$citas = $Con->consultar("SELECT `NOMBRE_APELLIDO_CLIENTE`, `NOMBRE_MASCOTA`, `Email`, `Telefono_Cita`, `Raza_Mascota`, `NOMBRE_TIPO_BANO`, `Fecha_Cita`, `HORA_CITA_BANO` FROM `citas_servicios` C
INNER JOIN `hora_cita` H ON C.Id_Hora_Cita=H.ID_HORA_CITA
INNER JOIN `tipo_de_bano` B ON C.Tipo_Bano=B.ID_TIPO_BANO");
if (isset($_POST['Agregar'])) {
    $NOMBRES = $_POST['Nombre'];
    $CATEGORIA = $_POST['Categorias'];
    $ANIMAL = $_POST['Animal'];
    $PRECIO = $_POST['Precio'];
    $IMAGEN = "imgs/productospetshop/".$_POST['Imagen'].".jpeg";

    $insertar = "INSERT INTO productos(NOMBRES, CATEGORIA, ANIMAL, PRECIO, IMAGEN) VALUES ('$NOMBRES', '$CATEGORIA', '$ANIMAL', '$PRECIO', '$IMAGEN')";

    $sql = $connn->query($insertar);

    if ($sql) {

        echo "<script> alert('Producto Agregado con exito');
        </script>";
    } else {
        echo "<script> alert('Fallo');
        </script>";
    }
}
if (isset($_POST['Editar'])) {
    $ID_PRODUCTO = $_POST['Id'];
    $NOMBRES = $_POST['Nombre'];
    $CATEGORIA = $_POST['Categorias'];
    $ANIMAL = $_POST['Animal'];
    $PRECIO = $_POST['Precio'];
    $IMAGEN = "imgs/productospetshop/".$_POST['Imagen'].".jpeg";

    $editar = "UPDATE `productos` SET `NOMBRES` = '$NOMBRES', `CATEGORIA` = '$CATEGORIA', `ANIMAL` = '$ANIMAL', `PRECIO` = '$PRECIO', `IMAGEN` = '$IMAGEN' WHERE `productos`.`ID_PRODUCTO` = $ID_PRODUCTO;";

    $sql = $connn->query($editar);

    if ($sql) {

        echo "<script> alert('Producto editado con exito');
        </script>";
    } else {
        echo "<script> alert('Fallo');
        </script>";
    }
}
if (isset($_POST['txtItem'])) {
    $Item = $_POST['txtItem'];
    $sql = "DELETE FROM productos WHERE `ID_PRODUCTO` = $Item;";
    $Con->ejecutar($sql);
}
?>
    <div class="FondoAgregar">
        <h2>Agregar Nuevo Producto</h2>
        <form method="post" class="Form">
            <input type="text" name="Nombre" placeholder="Nombres del producto">
            <select name="Categorias">
                <option value="Comida">Comida</option>
                <option value="Juguetes">Juguetes</option>
                <option value="Higiene">Higiene</option>
                <option value="Ropa">Ropa</option>
                <option value="Otros">Otros</option>
            </select>
            <select name="Animal">
                <option value="Perro">Perro</option>
                <option value="Gato">Gato</option>
                <option value="Otros">Otros</option>
            </select>
            <input type="text" name="Precio" placeholder="Precio">
            <input type="text" name="Imagen" placeholder="Nombre de la imagen">
            <button type="submit" name="Agregar" class="btnTablero Eliminar" bgcolo>Agregar</button>
        </form>
    </div>

    <div class="FondoAgregar">
        <h2>Editar Producto</h2>
        <form method="post" class="Form">
            <input type="text" name="Id" placeholder="ID del producto">
            <input type="text" name="Nombre" placeholder="Nuevo Nombre">
            <select name="Categorias">
                <option value="Comida">Comida</option>
                <option value="Juguetes">Juguetes</option>
                <option value="Higiene">Higiene</option>
                <option value="Ropa">Ropa</option>
                <option value="Otros">Otros</option>
            </select>
            <select name="Animal">
                <option value="Perro">Perro</option>
                <option value="Gato">Gato</option>
                <option value="Otros">Otros</option>
            </select>
            <input type="text" name="Precio" placeholder="Nuevo Precio">
            <input type="text" name="Imagen" placeholder="Nuevo Nombre de la imagen">
            <button type="submit" name="Editar" class="btnTablero Eliminar" bgcolo>Editar</button>
        </form>
    </div>

    <table class="tabla" border="1">
    <thead class="tablaH">
        <tr>
            <td>ID
            </td>
            <td>Nombre del Producto
            </td>
            <td>Categoría
            </td>
            <td>Clase del Producto
            </td>
            <td>Precio
            </td>
            <td>Imagen
            </td>
            <td>Eliminar
            </td>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($productos as $producto) { ?>
        <tr>
            <td><?php echo $producto['ID_PRODUCTO']; ?>
            </td>
            <td><?php echo $producto['NOMBRES']; ?>
            </td>
            <td><?php echo $producto['CATEGORIA']; ?>
            </td>
            <td><?php echo $producto['ANIMAL']; ?>
            </td>
            <td><?php echo $producto['PRECIO']; ?>
            </td>
            <td><img src="<?php echo $producto['IMAGEN']; ?>" alt="">
            </td>
            <td>
                <form method="post">
                    <input type="hidden" name="txtItem" value="<?php echo $producto['ID_PRODUCTO']; ?>">
                    <button type="submit" name="Eliminar" class="btnTablero Eliminar" bgcolo>Eliminar</button>
                </form>
            </td>
        </tr>
        <?php } ?>
    </tbody>
    </table>

    <table class="tabla" border="1">
    <thead class="tablaH">
        <tr>
            <td>Cliente
            </td>
            <td>Mascota
            </td>
            <td>Raza
            </td>
            <td>Tipo de baño
            </td>
            <td>Fecha de la cita
            </td>
            <td>Horario
            </td>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($citas as $cita) { ?>
        <tr>
            <td><?php echo $cita['NOMBRE_APELLIDO_CLIENTE']; ?>
            </td>
            <td><?php echo $cita['NOMBRE_MASCOTA']; ?>
            </td>
            <td><?php echo $cita['Raza_Mascota']; ?>
            </td>
            <td><?php echo $cita['NOMBRE_TIPO_BANO']; ?>
            </td>
            <td><?php echo $cita['Fecha_Cita']; ?>
            </td>
            <td><?php echo $cita['HORA_CITA_BANO']; ?>
            </td>
        </tr>
        <tr style="border-bottom: 3px solid #F1BD0E">
            <td bgcolor="#FFE5A0">Correo
            </td>
            <td colspan=2><?php echo $cita['Email']; ?>
            </td>
            <td bgcolor="#FFE5A0">Telefono
            </td>
            <td colspan=2><?php echo $cita['Telefono_Cita']; ?>
            </td>
        </tr>
        <?php } ?>
    </tbody>
    </table>


    <table class="tabla" border="1">
    <thead class="tablaH">
        <tr>
            <td>ID
            </td>
            <td>Nombre del Cliente
            </td>
            <td>Correo
            </td>
            <td>Reclamo
            </td>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($reclamos as $reclamo) { ?>
        <tr>
            <td><?php echo $reclamo['idR']; ?>
            </td>
            <td><?php echo $reclamo['nombreR']; ?>
            </td>
            <td><?php echo $reclamo['correoR']; ?>
            </td>
            <td><?php echo $reclamo['reclamo']; ?>
            </td>
        </tr>
        <?php } ?>
    </tbody>
    </table> 