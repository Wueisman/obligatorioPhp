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

<style>
    table {
        border-collapse: collapse;
        width: 100%;
    }

    th, td {
        padding: 8px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }

    th {
        background-color: #f2f2f2;
    }

    .no-libros {
        margin-top: 20px;
        font-style: italic;
    }
</style>

<body>
    <div class="container">
        <h1>Sistema de Gestión de Biblioteca</h1>
        <?php $mensaje = $_SESSION['mensaje']; ?>
        <div class="mensaje">
            <?php if (isset($mensaje)) echo $mensaje; ?>
        </div>

        <!-- Agregar Usuario Formulario -->
        <h2>Lista de Libros</h2>
        <?php if (empty($listaLibros)) { ?>
            <p class="no-libros">No hay libros registrados.</p>
        <?php } else { ?>
            <table class="table">
                <thead>
                    <tr>
                        <th>Título</th>
                        <th>Autor</th>
                        <th>ID</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($listaLibros as $libro) { ?>
                        <tr>
                            <td><?php echo $libro['titulo']; ?></td>
                            <td><?php echo $libro['autor']; ?></td>
                            <td><?php echo $libro['Id']; ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        <?php } ?>

        <div class="enlaces">
            <div class="enlace">
                <h3><a href="<?php echo $_SERVER['PHP_SELF'] . "?accion=menu"; ?>">Menú</a></h3>
            </div>
            <div class="enlace">
                <h3><a href="<?php echo $_SERVER['PHP_SELF'] . "?accion=salir"; ?>">Salir</a></h3>
            </div>
        </div>
    </div>
</body>




</html>