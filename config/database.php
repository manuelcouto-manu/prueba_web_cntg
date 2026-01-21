<?php
// Configuración de la base de datos

// Para desarrollo local (si tienes MySQL instalado)
define('DB_HOST', 'vl24381.dinaserver.com');
define('DB_USER', 'comercia_user');
define('DB_PASS', 'Dinahosting2026#');
define('DB_NAME', 'alumno_comercio_db');
define("DB_CHARSET", "utf8mb4");
define('DB_PORT', 3306);

// Crear conexión usando MySQLi
$conexion = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME, DB_PORT);

// Verificar conexión
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

// Establecer charset a UTF-8
$conexion->set_charset("utf8mb4");

// Función para ejecutar queries de forma segura
function ejecutarQuery($sql, $tipos = "", $parametros = []) {
    global $conexion;
    
    if ($tipos && $parametros) {
        $stmt = $conexion->prepare($sql);
        if ($stmt === false) {
            return false;
        }
        $stmt->bind_param($tipos, ...$parametros);
        $stmt->execute();
        return $stmt;
    } else {
        return $conexion->query($sql);
    }
}

// Función para cerrar conexión
function cerrarConexion() {
    global $conexion;
    $conexion->close();
}
?>