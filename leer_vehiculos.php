<!DOCTYPE html>
<html lang="en">
<head>
    <title>leer vehiculos</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" rel="stylesheet">
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=0.8">
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
            class="col s12 m12"><a href="#" class="brand-logo center">VEHICULOS</a>
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
// Mostrar todos los vehículos registrados
$sql = "SELECT * FROM vehiculo";
$result = $conn->query($sql);

echo "<h2>Lista de Vehículos Registrados</h2>";
if ($result->num_rows > 0) {
    echo "<table border='1'>
            <tr>
                <th>ID Vehículo (Placa)</th>
                <th>ID Usuario</th>
                <th>VIN</th>
                <th>No de Motor</th>
                <th>Marca</th>
                <th>Modelo</th>
                <th>Fecha Matrícula</th>
                <th>Fecha RTM</th>
                <th>SOAT</th>
                <th>Acciones</th>
            </tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <form method='post' action=''>
                    <td><input type='text' name='id_vehiculo_placa' value='{$row['id_vehiculo_placa']}' readonly></td>
                    <td><input type='text' name='id_usuario' value='{$row['id_usuario']}' required></td>
                    <td><input type='text' name='vin' value='{$row['vin']}' required></td>
                    <td><input type='text' name='no_motor' value='{$row['no_motor']}' required></td>
                    <td><input type='text' name='marca' value='{$row['marca']}' required></td>
                    <td><input type='number' name='modelo' value='{$row['modelo']}' required></td>
                    <td><input type='date' name='fecha_matricula' value='{$row['fecha_matricula']}' required></td>
                    <td><input type='date' name='fecha_rev_RTM' value='{$row['fecha_rev_RTM']}' required></td>
                    <td><input type='text' name='soat' value='{$row['soat']}' required></td>
                    <td>
                        <input type='submit' name='actualizar' value='Actualizar'>
                        <input type='submit' name='eliminar' value='Eliminar'>
                    </td>
                </form>
              </tr>";
    }
    echo "</table>";
} else {
    echo "No se encontraron vehículos registrados.";
}
// Procesar la actualización si se recibe una solicitud para actualizar un vehículo
if (isset($_POST['actualizar'])) {
    $id_vehiculo_placa = $_POST['id_vehiculo_placa'];
    $id_usuario = $_POST['id_usuario'];
    $vin = $_POST['vin'];
    $no_motor = $_POST['no_motor'];
    $marca = $_POST['marca'];
    $modelo = $_POST['modelo'];
    $fecha_matricula = $_POST['fecha_matricula'];
    $fecha_rev_RTM = $_POST['fecha_rev_RTM'];
    $soat = $_POST['soat'];

    $sql = "UPDATE vehiculo 
            SET id_usuario='$id_usuario', vin='$vin', no_motor='$no_motor', marca='$marca', modelo=$modelo, fecha_matricula='$fecha_matricula', fecha_rev_RTM='$fecha_rev_RTM', soat='$soat'
            WHERE id_vehiculo_placa='$id_vehiculo_placa'";

    if ($conn->query($sql) === TRUE) {
        echo "Vehículo actualizado exitosamente.<br>";
    } else {
        echo "Error al actualizar el vehículo: " . $conn->error . "<br>";
    }
}

// Procesar la eliminación si se recibe una solicitud para eliminar un vehículo
if (isset($_POST['eliminar'])) {
    $id_vehiculo_placa = $_POST['id_vehiculo_placa'];
    $sql = "DELETE FROM vehiculo WHERE id_vehiculo_placa='$id_vehiculo_placa'";
    if ($conn->query($sql) === TRUE) {
        echo "Vehículo eliminado exitosamente.<br>";
    } else {
        echo "Error al eliminar el vehículo: " . $conn->error . "<br>";
    }
}
?>
<br>
<a href="index_vehiculo.php">Volver a la página principal</a>
<?php
$conn->close();
?>
<form method="get" action="">
<button type="submit" name="clear" value="true">Borrar Pantalla</button>
<a href="index_vehiculo.php" class="btn">Volver a la página principal</a>
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