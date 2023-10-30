<?php
    require 'app.php';

    function incluirTemplate(string $nombre, bool $menu = false){
        include TEMPLATES_URL . "/{$nombre}.php";
    }