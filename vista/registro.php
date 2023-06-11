<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registro</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
  <h1>Regitrarse</h1>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <label for="username">Usuario:</label>
        <input type="text" id="userreg" name="userreg"><br><br>
        <label for="password">Contraseña:</label>
        <input type="password" id="password" name="passreg"><br><br>
        <label for="username">Nombre:</label>
        <input type="text" id="nombre" name="nombre"><br><br>
        <label for="username">Apellido:</label>
        <input type="text" id="apellido" name="apellido"><br><br>
        <input type="submit" value="enviar" label = "Enviar">
    </form> 
    <br><br>
    <a href=" <?php echo $_SERVER['PHP_SELF']; ?>">Inicio</a> 
	<script src="index.js"></script>
  </body>
</html>