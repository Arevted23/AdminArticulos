<?php 
    //importar la conexion de la base de datos
    require 'includes/db/conexion.php';
    $db = conectarDB();
    //Creacin del query para obtner los clientes
    $query = "SELECT * FROM clientes";
    //CONSULTAR LA BASE DE DATOS
    $consulta = mysqli_query($db, $query);
    //Incluir template
    require 'includes/funciones.php';
    incluirTemplate('header',$menu = true)
?>

<header>
    <a class="boton" href="/AdminArticulos/admin/clientes/crear.php">Crear Clientes</a>
</header>

<table class="tablas">
    <thead>
        <tr>
            <th>ID Cliente</th>
            <th>Nombre del Cliente</th>
            <th>Direccion</th>
        </tr>
    </thead>
    <tbody><!-- Mostrar los resultados -->
    <?php while($clientes = mysqli_fetch_assoc($consulta)): ?>
        <tr>
            <td><?php echo $clientes['idCliente']; ?></td>
            <td><?php echo $clientes['nombre']; ?></td>
            <td><?php echo $clientes['direccion']; ?></td>
        </tr>
    <?php endwhile; ?>
        
    </tbody>
</table>

<?php 
    incluirTemplate('footer');  
?>