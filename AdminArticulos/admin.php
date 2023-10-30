<?php
require 'includes/funciones.php';
incluirTemplate('header',$menu = true)
?>

<div class="centrado">
    <form method="post" action="admin/index.php" class="formulario">
        <fieldset>
            <legend>Inicio de Sesion</legend>

            <label for="email">E-mail: </label>
            <input name="email" type="email" placeholder="Email" id="email">

            <label for="password">Password: </label>
            <input name="password" type="password" placeholder="Contraseña" id="password">

        </fieldset>
        <input type="submit" value="Iniciar Sesion" class="boton">
    </form>
</div>

<?php
incluirTemplate('footer');
?>