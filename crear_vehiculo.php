<?php
include 'db.php';

// Obtener datos del formulario
$id_vehiculo_placa = $_POST['id_vehiculo_placa'];
$id_usuario = $_POST['id_usuario'];
$vin = $_POST['vin'];
$no_motor = $_POST['no_motor'];
$marca = $_POST['marca'];
$modelo = $_POST['modelo'];
$fecha_matricula = $_POST['fecha_matricula'];
$fecha_rev_RTM = $_POST['fecha_rev_RTM'];
$soat = $_POST['soat'];

// Preparar la consulta SQL para insertar los datos en la tabla
$sql = "INSERT INTO vehiculo (id_vehiculo_placa, id_usuario, vin, no_motor, marca, modelo, fecha_matricula, fecha_rev_RTM, soat) 
        VALUES ('$id_vehiculo_placa', '$id_usuario', '$vin', '$no_motor', '$marca', $modelo, '$fecha_matricula', '$fecha_rev_RTM', '$soat')";

if ($conn->query($sql) === TRUE) {
    echo "Registro de vehículo exitoso";
} else {
    echo "Error al registrar el vehículo: " . $conn->error;
}
$conn->close();
?>
