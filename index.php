<?php
include("conexion.php");

// INSERTAR
if(isset($_POST['guardar'])){
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];

    $sql = "INSERT INTO usuarios(nombre, correo)
            VALUES('$nombre','$correo')";
    $conn->query($sql);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>CRUD PHP</title>
</head>
<body>

<h2>Agregar Usuario</h2>
<form method="POST">
    Nombre: <input type="text" name="nombre" required><br>
    Correo: <input type="email" name="correo" required><br>
    <button type="submit" name="guardar">Guardar</button>
</form>

<h2>Lista de Usuarios</h2>

<table border="1">
<tr>
    <th>ID</th>
    <th>Nombre</th>
    <th>Correo</th>
    <th>Acciones</th>
</tr>

<?php
$resultado = $conn->query("SELECT * FROM usuarios");

while($fila = $resultado->fetch_assoc()){
    echo "<tr>
        <td>{$fila['id']}</td>
        <td>{$fila['nombre']}</td>
        <td>{$fila['correo']}</td>
        <td>
            <a href='editar.php?id={$fila['id']}'>Editar</a>
            <a href='eliminar.php?id={$fila['id']}'>Eliminar</a>
        </td>
    </tr>";
}
?>

</table>

</body>
</html>
