<?php
include 'db.php';

$sql = "SELECT id_perfil, id_usuario, usuario, perfil FROM perfil";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>ID Perfil</th><th>Cédula</th><th>Nombre</th><th>Perfil</th><th>Acciones</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["id_perfil"]."</td><td>".$row["id_usuario"]."</td><td>".$row["usuario"]."</td><td>".$row["perfil"]."</td>
        <td><a href='update.php?id_perfil=".$row["id_perfil"]."'>Editar</a> | <a href='delete.php?id_perfil=".$row["id_perfil"]."'>Eliminar</a></td></tr>";
    }
    echo "</table>";
} else {
    echo "0 resultados";
}
$conn->close();
?>