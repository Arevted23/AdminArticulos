<?php
    //Importar la conexion a la DB
    require 'includes/db/conexion.php';
    $db = conectarDB();
    //Creacion del QUERY para obtener articulos
    $query = "SELECT * FROM articulos";
    //CONSULTAR LA BASE DE DATOS
    $consulta = mysqli_query($db, $query);
    //Importar Template
    require 'includes/funciones.php';
    incluirTemplate('header',$menu = true);
?>
<header>
    <a class="boton" href="/AdminArticulos/admin/articulos/crear.php">Crear Articulo</a>
</header>

<table class="tablas">
    <thead>
        <tr>
            <th>ID Articulo</th>
            <th>Descripcion Articulo</th>
        </tr>
    </thead>
    <tbody><!-- Mostrar los resultados -->
    <?php while($articulo = mysqli_fetch_assoc($consulta)): ?>
        <tr>
            <td><?php echo $articulo['idArticulo']; ?></td>
            <td><?php echo $articulo['descripcion']; ?></td>
        </tr>
    <?php endwhile; ?>
    </tbody>
</table>


<?php
//cerrar conexion con db
mysqli_close($db);
incluirTemplate('footer');
?>