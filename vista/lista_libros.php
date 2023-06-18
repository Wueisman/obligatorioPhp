<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Sistema de Gestión de Biblioteca</title>
    <link rel="stylesheet" href="publico/estilos.css">
</head>

<body>
    <div class="container">
        <h1>Sistema de Gestión de Biblioteca</h1>
        <?php $mensaje =$_SESSION['mensaje']; ?>
            <div class="mensaje">
                <?php  if(isset($mensaje)) echo $mensaje; ?>
            </div>
            <?php  ?>

        <!-- Agregar Usuario Formulario -->
        <h2>Lista de Libros</h2>
        <ul class="list-group">
            <?php foreach ($listaLibros as $libro) { ?>
                <li class="list-group-item">
                    <?php echo "Titulo: ".$libro['titulo']; ?> -
                    <?php echo "Autor: ". $libro['autor']; ?> -
                    <?php echo "Id: ". $libro['Id']; ?>
                </li>
            <?php } ?>
        </ul>
        <div class="enlaces">
            <div class="enlace">
                <h3><a href=" <?php echo $_SERVER['PHP_SELF']."?accion=menu"; ?>">Menú</a></h3>
            </div>
            <div class="enlace">
                <h3><a href=" <?php echo $_SERVER['PHP_SELF']."?accion=salir"; ?>">Salir</a></h3>
            </div>
        </div>
    </div>
</body>

</html>