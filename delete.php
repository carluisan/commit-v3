<?php
include 'db.php';

$id_perfil = $_GET['id_perfil'];
$sql = "DELETE FROM perfil WHERE id_perfil='$id_perfil'";

if ($conn->query($sql) === TRUE) {
    echo "Eliminación exitosa.";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>