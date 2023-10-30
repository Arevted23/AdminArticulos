<?php
//Incluir template
require '../../includes/funciones.php';
incluirTemplate('header', true);
//Conexin a la base de datos
require '../../includes/db/conexion.php';
$db = conectarDB();
//Validador de errores de llenado
$errores = [];

$idArticulo = '';
$descripcion = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    //Evitar inyeccion sql a la base de datos
    $idArticulo = mysqli_real_escape_string($db, $_POST['idArticulo']);
    $descripcion = mysqli_real_escape_string($db, $_POST['descripcion']);

    //Validador de formulario
    if (!$idArticulo) {
        $errores[] = "Debes de añadir un id valido";
    }
    if (strlen(!$descripcion)) {
        $errores[] = "Debes de añadir una descripcion valida para el articulo";
    }
    //Revisar que el arreglo de errores este vacio
    if (empty($errores)) {
        $query = "INSERT INTO articulos (idArticulo,descripcion) VALUES ('$idArticulo','$descripcion')";
        //Almacenar en la base de datos
        $resultado = mysqli_query($db, $query);
        //Redireccionar al usuario
        if ($resultado) {
            header('Location: /AdminArticulos/articulos.php');
        }
    }
}
?>
<main>
    <h1 class="login">Creacion de Articulos</h1>

    <?php foreach ($errores as $error) : ?>
        <div class="centrado">
            <div class="alerta error">
                <?php echo $error; ?>
            </div>
        </div>
    <?php endforeach; ?>
    <div class="centrado">
        <form class="formulario" method="POST" action="/AdminArticulos/admin/articulos/crear.php" enctype="multipart/form-data">
            <fieldset>
                <legend>Llena los campos para la creacion del articulo</legend>

                <label for="idArticulo">ID del Articulo:</label>
                <input type="text" id="idArticulo" name="idArticulo" placeholder="Ingresa el id del articulo" value="<?php echo $idArticulo; ?>">

                <label for="descripcion">Descripcion del Articulo:</label>
                <input type="text" id="descripcion" name="descripcion" placeholder="Descripcion del articulo" value="<?php echo $descripcion; ?>">
            </fieldset>
            <!-- <fieldset>
            <legend>Cliente</legend>
            <select name="idCliente" id="">
                <option value=""> -- Seleccione --</option>
              
            </select>
        </fieldset> -->

            <input type="submit" value="Crear Articulo" class="boton">
        </form>
    </div>
</main>

<?php
incluirTemplate('footer');
?>