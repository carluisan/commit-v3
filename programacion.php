<!DOCTYPE html>
<html lang="es">
<head>
<link href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" rel="stylesheet">
<!--Import Google Icon Font-->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Registro de Usuarios</title>
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
            class="col s12 m12"><a href="#" class="brand-logo center">REGISTRO</a>
            </div>
            <li><a href="#">Inicio</a></li>
            <li><a href="#">Servicios</a></li>
            <li><a href="#">Acerca de</a></li>
            <li><a href="#">Contacto</a></li>
          </ul>
        </div>
      </nav>
    </header>
<?php
require 'db.php';

// Obtener los datos de la tabla 'agendamiento'
$sql = "SELECT id_vehiculo_placa, fecha, disponibilidad FROM agendamiento";
$result = $conn->query($sql);

// Inicializar arrays para almacenar datos
$fechas = [];
$disponibilidades = ['8:00-10:00', '10:00-12:00', '13:00-15:00', '15:00-17:00'];
$placas = [];

// Extraer datos y llenar arrays
while ($row = $result->fetch_assoc()) {
    $fechas[$row['fecha']] = true;
    if (!isset($placas[$row['fecha']][$row['disponibilidad']])) {
        $placas[$row['fecha']][$row['disponibilidad']] = [];
    }
    $placas[$row['fecha']][$row['disponibilidad']][] = $row['id_vehiculo_placa'];
}

// Ordenar fechas
ksort($fechas);

// Imprimir la tabla
echo "<!DOCTYPE html>
<html lang='es'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Programación</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 10px;
            text-align: center;
        }
    </style>
</head>
<body>
    <h2>Programación de Agendamiento</h2>
    <table>
        <thead>
            <tr>
                <th>Disponibilidad</th>";

foreach ($fechas as $fecha => $dummy) {
    echo "<th>$fecha</th>";
}

echo "</tr>
        </thead>
        <tbody>";

foreach ($disponibilidades as $disponibilidad) {
    echo "<tr>
            <td>$disponibilidad</td>";

    foreach ($fechas as $fecha => $dummy) {
        if (isset($placas[$fecha][$disponibilidad])) {
            echo "<td>" . implode(", ", $placas[$fecha][$disponibilidad]) . "</td>";
        } else {
            echo "<td>-</td>";
        }
    }

    echo "</tr>";
}

echo "</tbody>
    </table>

    <!-- Botón para retornar a agendamiento.php -->
    <form method='get' action='agendamiento.php' style='margin-top: 20px;'>
        <input type='submit' value='Volver a Agendamiento'>
    </form>

</body>
</html>";

$conn->close();
?>
</body>
</html>
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