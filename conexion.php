<?php
$servername = "localhost";
$username = "id22199857_root";
$password = "12345.Cesar";
$dbname = "id22199857_todo_list";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>
