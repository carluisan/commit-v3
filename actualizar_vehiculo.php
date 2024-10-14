<?php
include 'db.php';

// Obtener ID del vehículo a actualizar
$id_vehiculo_placa = $_POST['id_vehiculo_placa'];

// Consulta SQL para obtener los datos del vehículo a actualizar
$sql = "SELECT * FROM vehiculo WHERE id_vehiculo_placa='$id_vehiculo_placa'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Mostrar el formulario de actualización con los datos del vehículo
    $row = $result->fetch_assoc();
?>
    <!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Actualizar Vehículo</title>
    </head>
    <body>
        <h2>Actualizar Vehículo</h2>
        <form action="guardar_actualizacion.php" method="post">
            <input type="hidden" name="id_vehiculo_placa" value="<?php echo $row['id_vehiculo_placa']; ?>">
            
            <label for="id_usuario">ID del Usuario:</label>
            <input type="text" id="id_usuario" name="id_usuario" value="<?php echo $row['id_usuario']; ?>" required><br>

            <label for="vin">VIN:</label>
            <input type="text" id="vin" name="vin" value="<?php echo $row['vin']; ?>" required><br>

            <label for="no_motor">Número de Motor:</label>
            <input type="text" id="no_motor" name="no_motor" value="<?php echo $row['no_motor']; ?>" required><br>

            <label for="marca">Marca:</label>
            <input type="text" id="marca" name="marca" value="<?php echo $row['marca']; ?>" required><br>

            <label for="modelo">Modelo:</label>
            <input type="number" id="modelo" name="modelo" value="<?php echo $row['modelo']; ?>" required><br>

            <label for="fecha_matricula">Fecha de Matrícula:</label>
            <input type="date" id="fecha_matricula" name="fecha_matricula" value="<?php echo $row['fecha_matricula']; ?>" required><br>

            <label for="fecha_rev_RTM">Fecha de Rev. Técnico-Mecánica:</label>
            <input type="date" id="fecha_rev_RTM" name="fecha_rev_RTM" value="<?php echo $row['fecha_rev_RTM']; ?>" required><br>

            <label for="soat">SOAT:</label>
            <input type="text" id="soat" name="soat" value="<?php echo $row['soat']; ?>" required><br>

            <input type="submit" value="Actualizar Vehículo">
        </form>
    </body>
    </html>
<?php
} else {
    echo "No se encontró ningún vehículo con ese ID.";
}

$conn->close();
?>
