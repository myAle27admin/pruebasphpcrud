<?php
include("conexion.php");

$id = $_GET['id'];
$resultado = $conn->query("SELECT * FROM usuarios WHERE id=$id");
$usuario = $resultado->fetch_assoc();

if(isset($_POST['actualizar'])){
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];

    $sql = "UPDATE usuarios 
            SET nombre='$nombre', correo='$correo'
            WHERE id=$id";

    $conn->query($sql);
    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Editar Usuario</title>
</head>
<body>

<h2>Editar Usuario</h2>

<form method="POST">
    Nombre:
    <input type="text" name="nombre" value="<?php echo $usuario['nombre']; ?>"><br>

    Correo:
    <input type="email" name="correo" value="<?php echo $usuario['correo']; ?>"><br>

    <button type="submit" name="actualizar">Actualizar</button>
</form>

</body>
</html>
