<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['id_usuario'])) {
    $id_usuario = $_GET['id_usuario'];

    $sql = "DELETE FROM usuario WHERE id_usuario = ?";
    if ($stmt = $conn->prepare($sql)) {
        $stmt->bind_param("s", $id_usuario);

        if ($stmt->execute()) {
            header("Location: listar_usuario.php");
            exit();
        } else {
            echo "Error: " . $stmt->error;
        }

        $stmt->close();
    } else {
        echo "Error en la preparación de la declaración: " . $conn->error;
    }
    
    $conn->close();
}
?>