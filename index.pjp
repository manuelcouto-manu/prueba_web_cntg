<?php
require_once 'config/database.php';

$titulo = "Gestor de Productos";
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $titulo; ?></title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <h1><?php echo $titulo; ?></h1>
        
        <nav class="navbar">
            <ul>
                <li><a href="index.php">Inicio</a></li>
                <li><a href="pages/productos.php">Productos</a></li>
                <li><a href="pages/agregar.php">Agregar Producto</a></li>
            </ul>
        </nav>

        <main class="content">
            <h2>Bienvenido</h2>
            <p>Este es un gestor simple de productos integrado con una base de datos MySQL.</p>
            
            <section class="welcome-info">
                <h3>Instrucciones:</h3>
                <ul>
                    <li>Navega a "Productos" para ver la lista completa</li>
                    <li>Usa "Agregar Producto" para insertar nuevos elementos</li>
                    <li>Puedes editar o eliminar productos directamente desde la lista</li>
                </ul>
            </section>

            <?php
            // Mostrar estadísticas
            $resultado = $conexion->query("SELECT COUNT(*) as total FROM productos");
            if ($resultado) {
                $fila = $resultado->fetch_assoc();
                echo "<p><strong>Total de productos en la base de datos: </strong>" . $fila['total'] . "</p>";
            }
            ?>
        </main>
    </div>
</body>
</html>