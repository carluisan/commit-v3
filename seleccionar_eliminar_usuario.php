<?php
include 'db.php';

$sql = "SELECT id_usuario, nombre, apellido FROM usuario";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seleccionar Usuario para Eliminar</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Seleccionar Usuario para Eliminar</h2>
    <form method="post" action="eliminar_usuario.php">
        <div>
            <label for="id_usuario">Usuario:</label>
            <select id="id_usuario" name="id_usuario" required>
                <?php if ($result->num_rows > 0) : ?>
                    <?php while ($row = $result->fetch_assoc()) : ?>
                        <option value="<?php echo $row['id_usuario']; ?>">
                            <?php echo $row['id_usuario'] . ' - ' . $row['nombre'] . ' ' . $row['apellido']; ?>
                        </option>
                    <?php endwhile; ?>
                <?php else : ?>
                    <option value="">No hay usuarios registrados</option>
                <?php endif; ?>
            </select>
        </div>
        <button type="submit">Eliminar</button>
    </form>
</body>
</html>

<?php
$conn->close();
?>