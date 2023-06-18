<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registro</title>
    <link rel="stylesheet" href="publico/estilos.css">
  </head>
  <body>


    <div class="container">
        <h1>Sistema de Gestión de Biblioteca</h1>
        <?php //$mensaje = $sesion->getMensaje(); { ?>
            <div class="mensaje">
                <?php //echo $mensaje; ?>
            </div>
        <?php// } ?>

        <!-- Agregar Usuario Formulario -->
        <h2>Registrarse</h2>
        <form id="agregar-usuario-form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <input type="hidden" name="accion" value="altausuario">
            <div class="form-group">
                <label for="usuario">Usuario:</label>
                <input type="text" id="usuario" name="usuario" required>
            </div>
            <div class="form-group">
                <label for="password">Contraseña:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="nombre" required>
            </div>
            <div class="form-group">
                <label for="apellido">Apellido:</label>
                <input type="text" id="apellido" name="apellido" required>
            </div>
            <div class="form-group">
                <button type="submit">Envíar</button>
            </div>            
        </form>
        <div class="enlace">
            <h3><a href=" <?php echo $_SERVER['PHP_SELF']; ?>">Inicio</a><h3>
        </div>
    </div>

  </body>
</html>