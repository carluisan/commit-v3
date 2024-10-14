<?php
session_start();

if (!isset($_SESSION['id_usuario'])) {
    header("Location: login2.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Protegida</title>
</head>
<body>
    <?php include 'index1admin.html'; ?>
    <a href="logout.php">Cerrar Sesión</a>
</body>
</html>