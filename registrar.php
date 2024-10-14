<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id_usuario = $_POST['id_usuario'];
    $usuario = $_POST['usuario'];
    $perfil = $_POST['perfil'];
    $id_perfil = $perfil . '_' . $id_usuario;
    $contraseña = password_hash($_POST['contraseña'], PASSWORD_DEFAULT);

    $sql = "INSERT INTO perfil (id_perfil, id_usuario, usuario, perfil, contraseña) VALUES ('$id_perfil', '$id_usuario', '$usuario', '$perfil', '$contraseña')";

    if ($conn->query($sql) === TRUE) {
        echo "Registro exitoso.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>