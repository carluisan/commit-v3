<!DOCTYPE html>
<html lang="en">
<head>
    <title>listar usuario</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" rel="stylesheet">
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/main.css" />
</head>
<body>
    <!-- CARGA DE LOGO CDA -->
    <nav class="nav-wrapper">
        <div class="nav-wrapper indigo text darken-4">
          <img class="responsive-img" src="images/Foto Luisca2.jpg" class="materialboxed responsive-img" alt="">
          <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
          <ul class="right hide-on-med">
            <div 
            class="col s12 m12"><a href="#" class="brand-logo center">USUARIOS</a>
            </div>
            <li><a href="#">Inicio</a></li>
            <li><a href="#">Servicios</a></li>
            <li><a href="#">Acerca de</a></li>
            <li><a href="#">Contacto</a></li>
          </ul>
        </div>
      </nav>
<?php
include 'db.php';


// Mostrar todos los usuarios registrados
$sql = "SELECT * FROM usuario";
$result = $conn->query($sql);
echo "<h2>Lista de Usuarios Registrados</h2>";
if ($result->num_rows > 0) {
    echo "<table border='1'>
            <tr>
                <th>ID Usuario</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Domicilio</th>
                <th>Teléfono</th>
                <th>email</th>
                <th>Acciones</th>
            </tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <form method='post' action=''>
                    <td><input type='text' name='id_usuario' value='{$row['id_usuario']}' readonly></td>
                    <td><input type='text' name='nombre' value='{$row['nombre']}' required></td>
                    <td><input type='text' name='apellido' value='{$row['apellido']}' required></td>
                    <td><input type='text' name='domicilio' value='{$row['domicilio']}' required></td>
                    <td><input type='text' name='telefono' value='{$row['telefono']}' required></td>
                    <td><input type='text' name='email' value='{$row['email']}' required></td>
                    <td>
                        <input type='submit' name='actualizar' value='Actualizar'>
                        <input type='submit' name='eliminar' value='Eliminar'>
                    </td>
                </form>
              </tr>";
    }
    echo "</table>";
} else {
    echo "No se encontraron usuarios registrados.";
}
// Procesar la actualización si se recibe una solicitud para actualizar un usuario
if (isset($_POST['actualizar'])) {
    $clear_screen = isset($_GET['clear']) ? true : false;
    $id_usuario = $_POST['id_usuario'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $domicilio = $_POST['domicilio'];
    $telefono = $_POST['telefono'];
    $email = $_POST['email'];

    $sql = "UPDATE usuario 
            SET nombre='$nombre', apellido='$apellido', domicilio='$domicilio', telefono='$telefono', email='$email'
            WHERE id_usuario='$id_usuario'";

    if ($conn->query($sql) === TRUE) {
        echo "Usuario actualizado exitosamente.<br>";
    } else {
        echo "Error al actualizar el usuario: " . $conn->error . "<br>";
    }
}
// Procesar la eliminación si se recibe una solicitud para eliminar un usuario
if (isset($_POST['eliminar'])) {
    $id_usuario = $_POST['id_usuario'];
    $sql = "DELETE FROM usuario WHERE id_usuario='$id_usuario'";
    if ($conn->query($sql) === TRUE) {
        echo "Usuario eliminado exitosamente.<br>";
    } else {
        echo "Error al eliminar el usuario: " . $conn->error . "<br>";
    }
}
?>
<?php
$conn->close();
?>
<form method="get" action="">
<button type="submit" name="clear" value="true">Borrar Pantalla</button>
<a href="index_usuario.php" class="btn">Volver a la página principal</a>
</form>

<!-- FOOTER O PIE DE PAGINA -->
<footer class="page-footer indigo darken-4">
    <div class="container">
        <div class="row">
            <div class="col l6 s6">
                <h3 class="white-text">Mapa de Navegación</h3>
                <ul>
                    <li><a class="grey-text text-lighten-3" href="#">Agenda de Citas</a></li>
                    <li><a class="grey-text text-lighten-3" href="#">Llamadas</a></li>
                    <li><a class="grey-text text-lighten-3" href="#">Clientes</a></li>
                    <li><a class="grey-text text-lighten-3" href="#">Vehículos</a></li>
                    <li><a class="grey-text text-lighten-3" href="#">Inicio</a></li>
                </ul>
            </div>
            <div class="col l4 offset-l2 s12">
              <h3 class="white-text">Redes Sociales</h3>
              <ul class="icons">
                  <li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
                  <li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
                  <li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
                  <li><a href="#" class="icon solid fa-rss"><span class="label">RSS</span></a></li>
                  <li><a href="#" class="icon solid fa-envelope"><span class="label">Email</span></a></li>
              </ul>
          </div>
        </div>
    </div>
    <div class="footer-copyright">
        <div class="container">
            © 2024 Todos los derechos reservados, Compañía CDA
        </div>
    </div>
</footer>

<!-- IMPORTACION DE MATERIALIZE JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var elems = document.querySelectorAll('.sidenav');
        var instances = M.Sidenav.init(elems);
    });
    <!-- Compiled and minified JavaScript -->
    src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"
    src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js" 
</script>
<script src="forind.js"></script>
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/browser.min.js"></script>
<script src="assets/js/breakpoints.min.js"></script>
<script src="assets/js/util.js"></script>
<script src="assets/js/main.js"></script>
<!-- Compiled and minified CSS 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">-->
</body>
</html>