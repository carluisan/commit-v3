<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $old_id_perfil = $_POST['old_id_perfil'];
    $id_usuario = $_POST['id_usuario'];
    $usuario = $_POST['usuario'];
    $perfil = $_POST['perfil'];
    $id_perfil = $perfil . '_' . $id_usuario;
    $contraseña = password_hash($_POST['contraseña'], PASSWORD_DEFAULT);

    $sql = "UPDATE perfil SET id_perfil='$id_perfil', id_usuario='$id_usuario', usuario='$usuario', perfil='$perfil', contraseña='$contraseña' WHERE id_perfil='$old_id_perfil'";

    if ($conn->query($sql) === TRUE) {
        echo "Actualización exitosa.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
} else {
    $id_perfil = $_GET['id_perfil'];
    $sql = "SELECT * FROM perfil WHERE id_perfil='$id_perfil'";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    ?>

    <form method="post">
        <input type="hidden" name="old_id_perfil" value="<?php echo $row['id_perfil']; ?>">
        <div class="input-wrapper">
            <input type="text" name="id_usuario" value="<?php echo $row['id_usuario']; ?>" placeholder="Cédula" required>
        </div>
        <div class="input-wrapper">
            <input type="text" name="usuario" value="<?php echo $row['usuario']; ?>" placeholder="Nombre" required>
        </div>
        <div class="input-wrapper">
            <input type="text" name="perfil" value="<?php echo $row['perfil']; ?>" placeholder="Perfil" required>
        </div>
        <div class="input-wrapper">
            <input type="text" name="contraseña" placeholder="Nueva Contraseña">
        </div>
        <input class="btn" type="submit" name="update" value="Actualizar">
    </form>

    <?php
}
$conn->close();
?>