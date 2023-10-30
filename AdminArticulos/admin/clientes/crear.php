<?php
//Incluir template
require '../../includes/funciones.php';
incluirTemplate('header', true);
//Conexin a la base de datos
require '../../includes/db/conexion.php';
$db = conectarDB();
//Consulta para obtener clientes
$consulta = "SELECT * FROM clientes";
$resultado = mysqli_query($db, $consulta);
//Validador de errores de llenado
$errores = [];

$idCliente = '';
$nombre = '';
$direccion = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    //Evitar inyeccion sql a la base de datos
    $idCliente = mysqli_real_escape_string($db, $_POST['idCliente']);
    $nombre = mysqli_real_escape_string($db, $_POST['nombre']);
    $direccion = mysqli_real_escape_string($db, $_POST['direccion']);

    //Validador de formulario
    if (!$idCliente) {
        $errores[] = "Debes de añadir un id valido";
    }
    if (strlen(!$nombre)) {
        $errores[] = "Debes de añadir una nombre valida para el articulo";
    }
    if (strlen(!$direccion)) {
        $errores[] = "Debes de añadir una direccion valida para el cliente";
    }
    //Revisar que el arreglo de errores este vacio
    if (empty($errores)) {
        $query = "INSERT INTO clientes (idCliente, nombre, direccion) VALUES ('$idCliente','$nombre','$direccion')";
        //Almacenar en la base de datos
        $resultado = mysqli_query($db, $query);
        //Redireccionar al usuario
        if ($resultado) {
            header('Location: /AdminArticulos/clientes.php');
        }
    }
}
?>
<main>
    <h1 class="login">Creacion de Clientes</h1>
    <?php foreach ($errores as $error) : ?>
        <div class="alerta error">
            <?php echo $error; ?>
        </div>
    <?php endforeach; ?>
    <div class="centrado">
        <form class="formulario" method="POST" action="/AdminArticulos/admin/clientes/crear.php" enctype="multipart/form-data">
            <fieldset>
                <legend>Llena los campos para la creacion de Clientes</legend>

                <label for="idCliente">ID del Cliente:</label>
                <input type="text" id="idCliente" name="idCliente" placeholder="Ingresa el id del articulo" value="<?php echo $idCliente; ?>">

                <label for="nombre">Nombre del Cliente:</label>
                <input type="text" id="nombre" name="nombre" placeholder="nombre del articulo" value="<?php echo $nombre; ?>">

                <label for="direccion">Direccion del Cliente</label>
                <input type="text" id="direccion" name="direccion" placeholder="Direccion del cliente">
            </fieldset>
            <!-- <fieldset>
            <legend>Cliente</legend>
            <select name="idCliente" id="">
                <option value=""> -- Seleccione --</option>
              
            </select>
        </fieldset> -->

            <input type="submit" value="Crear Cliente" class="boton">
        </form>
    </div>
</main>

<?php
incluirTemplate('footer');
?>