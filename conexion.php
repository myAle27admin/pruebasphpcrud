<?php
$host = "127.0.0.1";
$user = "root";
$pass = "#root?270205";
$db = "crud_php";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}
?>
