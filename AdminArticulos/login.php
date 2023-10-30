<?php
require 'includes/funciones.php';
incluirTemplate('header');
?>

<main>
    <h1 class="login">Administrador de Articulos</h1>
    <div class="centrado">
        <form method="post" action="index.php" class="formulario">
            <fieldset>
                <legend>Login</legend>

                <label for="email">E-mail: </label>
                <input name="email" type="email" placeholder="Email" id="email">

                <label for="password">Password: </label>
                <input name="password" type="password" placeholder="Contraseña" id="password">

            </fieldset>
            <input type="submit" value="Iniciar Sesion" class="boton">
        </form>
    </div>
</main>