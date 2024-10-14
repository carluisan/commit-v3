<!DOCTYPE html>
<html lang="es">
<head>
<link href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" rel="stylesheet">
<!--Import Google Icon Font-->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>llamadas</title>
<link rel="stylesheet" href="assets/css/main.css" />
</head>
<html>
  <body>
<!-- ENCABEZADO -->
    <header>
    <!-- CARGA DE LOGO CDA -->
      <nav class="nav-wrapper">
        <div class="nav-wrapper indigo text darken-4">
          <img class="responsive-img" src="images/Foto Luisca2.jpg" class="materialboxed responsive-img" alt="">
          <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
          <ul class="right hide-on-med">
            <div 
            class="col s12 m12"><a href="#" class="brand-logo center">LLAMADAS</a>
            </div>
            <li><a href="index1.html">Inicio</a></li>
            <li><a href="#">Servicios</a></li>
            <li><a href="#">Acerca de</a></li>
            <li><a href="#">Contacto</a></li>
          </ul>
        </div>
      </nav>
    </header>
    <main class="container">
        <div class="row">
                <div class="col s1"></div>
                <div class="col s1"></div>
                <div class="col s1"></div>
                <div class="col s4"></div>
                <div class="col s1"></div>
                <div class="col s1"></div>
                <div class="col s1"></div>
                </div>
        </div>
    </main>
    </body>
</html>
<?php
// Incluir la conexión a la base de datos
include 'db.php';

// Acción inicial
$action = isset($_POST['action']) ? $_POST['action'] : '';

// Mostrar formulario principal
if ($action === '') {
    echo "<h2>¿Qué acción deseas realizar?</h2>";
    echo "<form method='POST' action=''>
            <input type='submit' name='action' value='Crear Registro'>
            <input type='submit' name='action' value='Leer Registros'>
          </form>";
}

// Botón para volver a la acción inicial
function volver_accion_inicial() {
    echo "<br><form method='POST' action=''>
            <input type='submit' value='Volver a la Acción Inicial'>
          </form>";
}

// Crear un nuevo registro (Formulario para creación)
if ($action === 'Crear Registro') {
    echo "<h2>Crear Nuevo Registro</h2>";
    echo "<form method='POST' action=''>
            ID Usuario: <input type='text' name='id_usuario' required><br>
            Placa Vehículo: <input type='text' name='id_vehiculo_placa' required><br>
            Fecha Llamada: <input type='datetime-local' name='fecha_llamada' required><br>
            Detalles: <input type='text' name='detalles' required><br><br>
            <input type='submit' name='submit_create' value='Crear'>
          </form>";
    
    volver_accion_inicial(); // Mostrar botón para volver a la acción inicial
}

// Procesar la creación de un nuevo registro
if (isset($_POST['submit_create'])) {
    $id_usuario = $_POST['id_usuario'];
    $id_vehiculo_placa = $_POST['id_vehiculo_placa'];
    $fecha_llamada = $_POST['fecha_llamada'];
    $detalles = $_POST['detalles'];

    // Insertar el registro en la base de datos
    $sql = "INSERT INTO llamadas (id_usuario, id_vehiculo_placa, fecha_llamada, Detalles)
            VALUES ('$id_usuario', '$id_vehiculo_placa', '$fecha_llamada', '$detalles')";

    if ($conn->query($sql) === TRUE) {
        echo "Nuevo registro creado exitosamente.<br>";
    } else {
        echo "Error creando el registro: " . $conn->error;
    }

    volver_accion_inicial(); // Mostrar botón para volver a la acción inicial
}

// Leer todos los registros
if ($action === 'Leer Registros') {
    // Leer directamente todos los registros
    $sql = "SELECT * FROM llamadas";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<h2>Lista de Registros</h2>";
        echo "<table border='1'><tr><th>ID Llamada</th><th>ID Usuario</th><th>Placa Vehículo</th><th>Fecha Llamada</th><th>Detalles</th><th>Acciones</th></tr>";
        while ($row = $result->fetch_assoc()) {
            $id_llamada = $row["id_llamada"];
            echo "<tr>
                    <td>" . $id_llamada . "</td>
                    <td>" . $row["id_usuario"] . "</td>
                    <td>" . $row["id_vehiculo_placa"] . "</td>
                    <td>" . $row["fecha_llamada"] . "</td>
                    <td>" . $row["Detalles"] . "</td>
                    <td>
                        <form method='POST' action='' style='display:inline'>
                            <input type='hidden' name='id_llamada' value='$id_llamada'>
                            <input type='submit' name='action' value='Actualizar'>
                        </form>
                        <form method='POST' action='' style='display:inline'>
                            <input type='hidden' name='id_llamada' value='$id_llamada'>
                            <input type='submit' name='action' value='Eliminar'>
                        </form>
                    </td>
                  </tr>";
        }
        echo "</table><br>";
    } else {
        echo "No hay registros disponibles.<br>";
    }

    volver_accion_inicial(); // Mostrar botón para volver a la acción inicial
}

// Eliminar registro directamente desde la tabla
if ($action === 'Eliminar') {
    $id_llamada = $_POST['id_llamada'];

    // Confirmar eliminación
    echo "<h2>Eliminar Llamada ID: $id_llamada</h2>";
    echo "<p>¿Estás seguro de que deseas eliminar este registro?</p>";
    echo "<form method='POST' action=''>
            <input type='hidden' name='id_llamada' value='$id_llamada'>
            <input type='submit' name='submit_confirm_delete' value='Sí'>
            <input type='submit' name='cancel_delete' value='No'>
          </form>";
}

// Confirmar y eliminar el registro
if (isset($_POST['submit_confirm_delete'])) {
    $id_llamada = $_POST['id_llamada'];

    $sql = "DELETE FROM llamadas WHERE id_llamada='$id_llamada'";

    if ($conn->query($sql) === TRUE) {
        echo "Registro eliminado con éxito.<br>";
    } else {
        echo "Error eliminando el registro: " . $conn->error;
    }

    volver_accion_inicial(); // Mostrar botón para volver a la acción inicial
}

// Actualizar registro directamente desde la tabla
if ($action === 'Actualizar') {
    $id_llamada = $_POST['id_llamada'];

    // Buscar los datos existentes para mostrarlos en el formulario
    $sql = "SELECT * FROM llamadas WHERE id_llamada='$id_llamada'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        echo "<h2>Actualizar Llamada ID: $id_llamada</h2>";
        echo "<form method='POST' action=''>
                ID Usuario: <input type='text' name='id_usuario' value='" . $row['id_usuario'] . "' required><br>
                Placa Vehículo: <input type='text' name='id_vehiculo_placa' value='" . $row['id_vehiculo_placa'] . "' required><br>
                Fecha Llamada: <input type='datetime-local' name='fecha_llamada' value='" . date('Y-m-d\TH:i', strtotime($row['fecha_llamada'])) . "' required><br>
                Detalles: <input type='text' name='detalles' value='" . $row['Detalles'] . "' required><br><br>
                <input type='hidden' name='id_llamada' value='$id_llamada'>
                <input type='submit' name='submit_update' value='Actualizar'>
              </form>";
    } else {
        echo "No se encontró el registro con ID: $id_llamada.<br>";
    }

    volver_accion_inicial(); // Mostrar botón para volver a la acción inicial
}

// Procesar la actualización del registro
if (isset($_POST['submit_update'])) {
    $id_llamada = $_POST['id_llamada'];
    $id_usuario = $_POST['id_usuario'];
    $id_vehiculo_placa = $_POST['id_vehiculo_placa'];
    $fecha_llamada = $_POST['fecha_llamada'];
    $detalles = $_POST['detalles'];

    $sql = "UPDATE llamadas SET 
            id_usuario='$id_usuario', 
            id_vehiculo_placa='$id_vehiculo_placa', 
            fecha_llamada='$fecha_llamada', 
            Detalles='$detalles' 
            WHERE id_llamada='$id_llamada'";

    if ($conn->query($sql) === TRUE) {
        echo "Registro actualizado con éxito<br>";
    } else {
        echo "Error actualizando el registro: " . $conn->error;
    }

    volver_accion_inicial(); // Mostrar botón para volver a la acción inicial
}

$conn->close();
?>


  <!-- FOOTER O PIE DE PAGINA -->
    <footer class="page-footer indigo darken-4">
      <div class="container">
          <div class="row">
              <div class="col l6 s6">
                  <h3 class="white-text">Mapa de Navegación</h3>
                  <ul>
                     <!-- <li><a class="grey-text text-lighten-3" href="agenda2.html">Agenda de Citas</a></li>
                      <li><a class="grey-text text-lighten-3" href="llamadas.html">Llamadas</a></li>
                      <li><a class="grey-text text-lighten-3" href="usuario.html">Clientes</a></li>
                      <li><a class="grey-text text-lighten-3" href="Vehiculos.html">Vehículos</a></li>-->
                      <li><a class="grey-text text-lighten-3" href="index1.html">Inicio</a></li>
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