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
        <?php if(isset($_SESSION['mensaje'])) $mensaje =$_SESSION['mensaje']; ?>
            <div class="mensaje">
                <?php  if(isset($mensaje)) echo $mensaje; ?>
            </div>
            <?php  ?>

        <!-- Eliminar Libro Formulario -->
        <h2>Eliminar Libro</h2>
        <form id="eliminar-libro-form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <input type="hidden" name="accion" value="eliminarLibro">
            <div class="form-group">
            </div>
            <div class="form-group">
                <label for="Id">Id:</label>
                <input type="text" id="Id" name="Id" required>
            </div>
            <div class="form-group">
                <button type="submit">Eliminar Libro</button>
            </div>

        </form>

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