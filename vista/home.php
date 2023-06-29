<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link rel="stylesheet" href="publico/estilos.css">
</head>

<body>
    <header>
        <nav>
            <div class="mensaje_usuario">
                <h2>
                    <?php echo $sesion->getUsuario() ?>
                </h2>
            </div>
        </nav>
    </header>
    <div class="container">
        <h1>Sistema de Gestión de Biblioteca</h1>
        <?php //$mensaje = $sesion->getMensaje(); { ?>
        <div class="mensaje">
            <?php //echo $mensaje; ?>
        </div>
        <? php // } ?>

        <!-- Agregar Usuario Formulario -->
        <h2>Menú</h2>
        <div class="enlace">
            <h3><a href=" <?php echo $_SERVER['PHP_SELF'] . "?accion=listar_libros"; ?>">Listar libros</a>
                <h3>
        </div>
        <div class="enlace">
            <h3><a href=" <?php echo $_SERVER['PHP_SELF'] . "?accion=libros_disponibles"; ?>">Listar libros
                    Disponibles</a>
                <h3>
        </div>

        <div class="enlace">
            <h3><a href=" <?php echo $_SERVER['PHP_SELF'] . "?accion=ir_prestamo"; ?>">Solicitar el préstamo de un
                    libro</a>
                <h3>
        </div>
        <div class="enlace">
            <h3><a href=" <?php echo $_SERVER['PHP_SELF'] . "?accion=ir_devolver"; ?>">Devolver un libro</a>
                <h3>
        </div>
        <div class="enlace">
            <h3><a href=" <?php echo $_SERVER['PHP_SELF'] . "?accion=salir"; ?>">Salir</a>
                <h3>
        </div>
    </div>
</body>

</html>