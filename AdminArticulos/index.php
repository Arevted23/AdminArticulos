<?php
require 'includes/funciones.php';
incluirTemplate('header');
?>

<div class="menuPrincipal">
    <div>
        <a href="articulos.php">
            <img src="img/redaccion-de-contenido.png" alt="iconArticulos"><br>
            <span>Articulos</span>
        </a>
    </div>
    <div>
        <a href="clientes.php">
            <img src="img/servicio-al-cliente.png" alt="iconClientes"><br>
            <span>Clientes</span>
        </a>
    </div>
    <div>
        <a href="inventarios.php">
            <img src="img/inventario.png" alt="iconInventario"><br>
            <span>Inventario</span></a>
    </div>
    <div>
        <a href="recibo.php">
            <img src="img/recibir.png" alt="iconRecibir"><br>
            <span>Recibo</span>
        </a>
    </div>
    <div>
        <a href="salida.php">
            <img src="img/salida.png" alt="iconSalida"><br>
            <span>Salida</span>
        </a>
    </div>
    <div>
        <a href="/AdminArticulos/admin.php">
            <img src="img/admin.png" alt="iconAdministrador"><br>
            <span>Administrador</span>
        </a>
    </div>
</div>

<?php
    incluirTemplate('footer');
?>