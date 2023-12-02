<?php 
$productos = $Con->consultar("SELECT * FROM `Productos`;");

?>

    <table class="tabla" border="1">
    <thead class="tablaH">
        <tr>
            <td>Nombre
            </td>
            <td>Categoría
            </td>
            <td>Clase del Producto
            </td>
            <td>Precio
            </td>
            <td>Imagen
            </td>
            <td colspan=2>Botones
            </td>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($productos as $producto) { ?>
        <tr>
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
                    <button type="submit" name="Editar" class="btnTablero Editar">Editar</button>
                </form>
            </td>
            <td>
                <form method="post">
                    <button type="submit" name="Eliminar" class="btnTablero Eliminar" bgcolo>Eliminar</button>
                </form>
            </td>
        </tr>
        <?php } ?>
    </tbody>
    </table>

    <table class="tabla" border="1">
    <thead>
        <tr>
            <td>Nombre
            </td>
            <td>Categoría
            </td>
            <td>Clase del Producto
            </td>
            <td>Precio
            </td>
            <td>Imagen
            </td>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($productos as $producto) { ?>
        <tr>
            <td><?php echo $producto['NOMBRES']; ?>
            </td>
            <td><?php echo $producto['CATEGORIA']; ?>
            </td>
            <td><?php echo $producto['ANIMAL']; ?>
            </td>
            <td><?php echo $producto['PRECIO']; ?>
            </td>
            <td><?php echo $producto['IMAGEN']; ?>
            </td>
        </tr>
        <?php } ?>
    </tbody>
    </table>
