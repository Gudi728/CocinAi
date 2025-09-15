<?php
$host = "localhost";
$usuario = "root";
$clave = "Matias";
$base_datos = "recetas_cocina";

// Crear conexión
$conn = new mysqli($host, $usuario, $clave, $base_datos);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
} 

echo "¡Conexión exitosa a MariaDB!";
?>
