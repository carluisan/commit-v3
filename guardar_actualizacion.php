<?php
include 'db.php';

// Obtener datos del formulario de actualización
$id_vehiculo_placa = $_POST['id_vehiculo_placa'];
$id_usuario = $_POST['id_usuario'];
$vin = $_POST['vin'];
$no_motor = $_POST['no_motor'];
$marca = $_POST['marca'];
$modelo = $_POST['modelo'];
$fecha_matricula = $_POST['fecha_matricula'];
$fecha_rev_RTM = $_POST['fecha_rev_RTM'];
$soat = $_POST['soat'];

// Preparar la consulta SQL para actualizar los datos en la tabla
$sql = "UPDATE vehiculo 
        SET id_usuario='$id_usuario', vin='$vin', no_motor='$no_motor', marca='$marca', modelo=$modelo, fecha_matricula='$fecha_matricula', fecha_rev_RTM='$fecha_rev_RTM', soat='$soat'
        WHERE id_vehiculo_placa='$id_vehiculo_placa'";

if ($conn->query($sql) === TRUE) {
    echo "Actualización del vehículo exitosa";
} else {
    echo "Error al actualizar el vehículo: " . $conn->error;
}

$conn->close();
?>
