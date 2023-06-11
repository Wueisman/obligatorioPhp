<html>
<head>
  <title>Gestion de libros</title>
</head>
<body>
<header>
    <nav>
        <ul>
		<li><a href="<?php echo $_SERVER['PHP_SELF']; ?>">Listar libros</a></li>
		<li><a href="<?php echo $_SERVER['PHP_SELF']; ?>">Alta de libro</a></li>
		<li><a href="<?php echo $_SERVER['PHP_SELF']; ?>">Baja de libro</a></l>
		<li><a href="<?php echo $_SERVER['PHP_SELF']; ?>">Otra accion</a></li>
		<li><a href="<?php echo $_SERVER['PHP_SELF']; ?>">Otra accion</a></li>
	 </ul>
    </nav>
</header>
  <h1>Gestion de libros del Administrador</h1>
  <h2>Bienvenido usuario:  <?php echo $sesion->getUsuario()  ?></h2>
  <a href=" <?php echo $_SERVER['PHP_SELF']."?accion=salir"; ?>">Salir</a>
  <a href="https://www.ejemplo.com">Enlace 2</a>
  <a href="https://www.ejemplo.com">Enlace 3</a>
</body>
</html>