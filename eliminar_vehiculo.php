<?php
include 'db.php';

// Obtener la placa del vehículo a eliminar
$id_vehiculo_placa = $_GET['id'];

// Preparar la consulta SQL para eliminar el vehículo
$sql = "DELETE FROM vehiculo WHERE id_vehiculo_placa='$id_vehiculo_placa'";

if ($conn->query($sql) === TRUE) {
    echo "Vehículo eliminado correctamente";
} else {
    echo "Error al eliminar el vehículo: " . $conn->error;
}

$conn->close();
?>
