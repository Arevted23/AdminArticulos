    <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&family=Roboto:ital,wght@1,100&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/AdminArticulos/styles/normalize.css">
    <link rel="stylesheet" href="/AdminArticulos/styles/app.css">
    <link rel="shortcut icon" href="img/wmsIconPestaña.png" />
    <title>Administrador de Inventario</title>
</head>

<body>
    <header class="header">
        
        <nav class="navegacion">
            <a href="/AdminArticulos/index.php">
                <?php if($menu){?>
                    Regresar al menu anterior
                <?php } ?>
            </a>
            <a href="/AdminArticulos/login.php">Finalizar Sesion</a>
        </nav>

    </header>