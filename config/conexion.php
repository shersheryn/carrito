<?php
$host = getenv('MYSQL_HOST') ?: 'db'; // Utiliza 'db' como el nombre de host del servicio MySQL en Docker Compose
$user = getenv('MYSQL_USER') ?: 'root'; // Obtener la variable de entorno para el usuario de MySQL
$clave = getenv('MYSQL_PASSWORD') ?: ''; // Obtener la variable de entorno para la contraseña de MySQL
$bd = getenv('MYSQL_DATABASE') ?: 'card'; // Obtener la variable de entorno para el nombre de la base de datos

// Conectar a la base de datos
$conexion = mysqli_connect($host, $user, $clave, $bd);

// Verificar conexión
if (mysqli_connect_errno()) {
    echo "No se pudo conectar a la base de datos";
    exit();
}

// Seleccionar la base de datos
mysqli_select_db($conexion, $bd) or die("No se encuentra la base de datos");

// Establecer el juego de caracteres
mysqli_set_charset($conexion, "utf8");
?>

