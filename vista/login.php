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

        <!-- Agregar Usuario Formulario -->
        <h2>Iniciar Sesión</h2>
        <form id="agregar-usuario-form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <input type="hidden" name="accion" value="iniciar">
            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="nombre" required>
            </div>
            <div class="form-group">
                <label for="password">Contraseña:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="form-group">
                <button type="submit">Ingresar</button>
            </div>            
        </form>
        <div class="enlace">
            <h3><a href=" <?php echo $_SERVER['PHP_SELF']."?accion=registrarse"; ?>">Registrarse</a><h3>
        </div>
    </div>
</body>

</html>