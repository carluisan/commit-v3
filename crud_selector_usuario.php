<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $operation = $_POST['operation'];

    switch ($operation) {
        case 'registrar':
            header("Location: registrar_usuario.php");
            break;
        case 'listar':
            header("Location: listar_usuario.php");
            break;
        /*case 'editar':
            header("Location: seleccionar_editar_usuario.php");
            break;
        case 'eliminar':
            header("Location: seleccionar_eliminar_usuario.php");
            break;*/
        default:
            echo "Operación no válida.";
    }
    exit();
}
?>