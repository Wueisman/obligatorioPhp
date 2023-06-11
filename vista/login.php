<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HTML 5 Boilerplate</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
  <h1>Pagina de Ingreso</h1>
    <?php if(isset($exitoAlta)){  echo $exitoAlta ? "<h2>Alta exitosa</h2>" : "<h2>Ya existe</h2>"; }  ?>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <label for="username">Nombre de usuario:</label>
        <input type="text" id="username" name="username"><br><br>
        <label for="password">Contraseña:</label>
        <input type="password" id="password" name="password"><br><br>
        <input type="submit" value="enviar" label = "Enviar">
    </form> 
    <br><br>
    <a href=" <?php echo $_SERVER['PHP_SELF']."?accion=regusr"; ?>">Registrarse</a> 
	<script src="index.js"></script>
  </body>
</html>