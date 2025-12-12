<?php
/**
 * db_connection.php
 */
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tetoris_shop";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error !== null) {
    die("❌ Error de Conexión: " . $conn->connect_error);
}
$conn->set_charset("utf8");
?>