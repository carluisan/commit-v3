<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agendamiento</title>
    <!--<style>
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
    </style>-->
<link href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" rel="stylesheet">
<!--Import Google Icon Font-->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Registro de Usuarios</title>
<link rel="stylesheet" href="assets/css/main.css" />
</head>
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
<body>
<main class="container">
        <div class="row">
            <div class="col s1"></div>
            <div class="col s1"></div>
                 <div class="col s4">
                 <div class="card-content">
                                <p></p>
                                <h3 class="brand-logo center">Registro de Agendamiento</h3>
    
    <!-- Formulario para Crear un nuevo registro -->
    <form method="post" action="agendamiento.php">
        <input type="hidden" name="action" value="create">
        <label for="id_agendamiento">ID Agendamiento:</label><br>
        <input type="text" id="id_agendamiento" name="id_agendamiento" required><br>

        <label for="id_usuario">ID Usuario:</label><br>
        <input type="text" id="id_usuario" name="id_usuario" required><br>

        <label for="id_vehiculo_placa">ID Vehículo Placa:</label><br>
        <input type="text" id="id_vehiculo_placa" name="id_vehiculo_placa" required><br>

        <label for="fecha">Fecha:</label><br>
        <input type="date" id="fecha" name="fecha" required><br>

        <label for="disponibilidad">Disponibilidad:</label><br>
        <select id="disponibilidad" name="disponibilidad" required>
            <option value="8:00-10:00">8:00-10:00</option>
            <option value="10:00-12:00">10:00-12:00</option>
            <option value="13:00-15:00">13:00-15:00</option>
            <option value="15:00-17:00">15:00-17:00</option>
        </select><br><br>

        <input type="submit" value="Registrar">
    </form>

    <!-- Formulario para Leer todos los registros -->
    <form method="post" action="agendamiento.php">
        <input type="hidden" name="action" value="read">
        <input type="submit" value="Consultar Agendamientos">
    </form>

    <!-- Botones para activar programación y refrescar pantalla -->
    <form method="get" action="programacion.php" style="display:inline;">
        <input type="submit" value="Ver Programación">
    </form>

    <form method="post" action="agendamiento.php" style="display:inline;">
        <input type="hidden" name="action" value="refresh">
        <input type="submit" value="Refresh">
    </form>
    </div>
    </div>
    
        <div class="col s1"></div>
        <div class="col s1"></div>
    </div>
</main> 
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
</body>
</html>

<?php
require 'db.php';

// Procesar el formulario al enviarlo
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $action = $_POST['action'];

    if ($action == 'create') {
        $id_agendamiento = $_POST['id_agendamiento'];
        
        // Verificar si el id_agendamiento ya existe
        $check_sql = "SELECT id_agendamiento FROM agendamiento WHERE id_agendamiento='$id_agendamiento'";
        $check_result = $conn->query($check_sql);
        
        if ($check_result->num_rows > 0) {
            // El id_agendamiento ya existe
            echo "<script>alert('El ID de agendamiento ya existe. Consulte los registros antes de intentar registrar un nuevo agendamiento.');</script>";
        } else {
            // Crear un nuevo registro
            $id_usuario = $_POST['id_usuario'];
            $id_vehiculo_placa = $_POST['id_vehiculo_placa'];
            $fecha = $_POST['fecha'];
            $disponibilidad = $_POST['disponibilidad'];

            $sql = "INSERT INTO agendamiento (id_agendamiento, id_usuario, id_vehiculo_placa, fecha, disponibilidad) 
                    VALUES ('$id_agendamiento', '$id_usuario', '$id_vehiculo_placa', '$fecha', '$disponibilidad')";

            if ($conn->query($sql) === TRUE) {
                echo "<script>alert('Registro creado exitosamente');</script>";
            } else {
                echo "Error: " . $conn->error;
            }
        }

        // Refrescar la pantalla para evitar confusión con la información anterior
        echo "<script>window.location.href = 'agendamiento.php';</script>";

    } elseif ($action == 'read') {
        // Leer registros
        $sql = "SELECT * FROM agendamiento";
        $result = $conn->query($sql);
        
        if ($result->num_rows > 0) {
            echo "<table border='1'><tr><th>ID Agendamiento</th><th>ID Usuario</th><th>ID Vehículo Placa</th><th>Fecha</th><th>Disponibilidad</th><th>Acciones</th></tr>";
            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>" . $row["id_agendamiento"] . "</td>
                        <td>" . $row["id_usuario"] . "</td>
                        <td>" . $row["id_vehiculo_placa"] . "</td>
                        <td>" . $row["fecha"] . "</td>
                        <td>" . $row["disponibilidad"] . "</td>
                        <td>
                            <form method='post' action='agendamiento.php' style='display:inline;'>
                                <input type='hidden' name='action' value='delete'>
                                <input type='hidden' name='id_agendamiento' value='" . $row["id_agendamiento"] . "'>
                                <input type='submit' value='Borrar'>
                            </form>
                            <form method='post' action='agendamiento.php' style='display:inline;'>
                                <input type='hidden' name='action' value='edit'>
                                <input type='hidden' name='id_agendamiento' value='" . $row["id_agendamiento"] . "'>
                                <input type='hidden' name='id_usuario' value='" . $row["id_usuario"] . "'>
                                <input type='hidden' name='id_vehiculo_placa' value='" . $row["id_vehiculo_placa"] . "'>
                                <input type='hidden' name='fecha' value='" . $row["fecha"] . "'>
                                <input type='hidden' name='disponibilidad' value='" . $row["disponibilidad"] . "'>
                                <input type='submit' value='Modificar'>
                            </form>
                        </td>
                      </tr>";
            }
            echo "</table>";
        } else {
            echo "No se encontraron registros.";
        }
        
    } elseif ($action == 'delete') {
        // Borrar un registro
        $id_agendamiento = $_POST['id_agendamiento'];

        $sql = "DELETE FROM agendamiento WHERE id_agendamiento='$id_agendamiento'";

        if ($conn->query($sql) === TRUE) {
            echo "<script>alert('Registro eliminado exitosamente');</script>";
        } else {
            echo "Error: " . $conn->error;
        }

        // Refrescar la pantalla
        echo "<script>window.location.href = 'agendamiento.php';</script>";

    } elseif ($action == 'edit') {
        // Mostrar formulario para modificar un registro existente
        $id_agendamiento = $_POST['id_agendamiento'];
        $id_usuario = $_POST['id_usuario'];
        $id_vehiculo_placa = $_POST['id_vehiculo_placa'];
        $fecha = $_POST['fecha'];
        $disponibilidad = $_POST['disponibilidad'];

        echo "
        <h2>Modificar Registro</h2>
        <form method='post' action='agendamiento.php'>
            <input type='hidden' name='action' value='update'>
            <input type='hidden' name='id_agendamiento' value='$id_agendamiento'>
            
            <label for='id_usuario'>ID Usuario:</label><br>
            <input type='text' id='id_usuario' name='id_usuario' value='$id_usuario' required><br>
            
            <label for='id_vehiculo_placa'>ID Vehículo Placa:</label><br>
            <input type='text' id='id_vehiculo_placa' name='id_vehiculo_placa' value='$id_vehiculo_placa' required><br>
            
            <label for='fecha'>Fecha:</label><br>
            <input type='date' id='fecha' name='fecha' value='$fecha' required><br>
            
            <label for='disponibilidad'>Disponibilidad:</label><br>
            <select id='disponibilidad' name='disponibilidad' required>
                <option value='8:00-10:00' " . ($disponibilidad == '8:00-10:00' ? 'selected' : '') . ">8:00-10:00</option>
                <option value='10:00-12:00' " . ($disponibilidad == '10:00-12:00' ? 'selected' : '') . ">10:00-12:00</option>
                <option value='13:00-15:00' " . ($disponibilidad == '13:00-15:00' ? 'selected' : '') . ">13:00-15:00</option>
                <option value='15:00-17:00' " . ($disponibilidad == '15:00-17:00' ? 'selected' : '') . ">15:00-17:00</option>
            </select><br><br>
            
            <input type='submit' value='Actualizar'>
        </form>";
        
    } elseif ($action == 'update') {
        // Actualizar el registro en la base de datos
        $id_agendamiento = $_POST['id_agendamiento'];
        $id_usuario = $_POST['id_usuario'];
        $id_vehiculo_placa = $_POST['id_vehiculo_placa'];
        $fecha = $_POST['fecha'];
        $disponibilidad = $_POST['disponibilidad'];

        $sql = "UPDATE agendamiento SET 
                    id_usuario='$id_usuario', 
                    id_vehiculo_placa='$id_vehiculo_placa', 
                    fecha='$fecha', 
                    disponibilidad='$disponibilidad' 
                WHERE id_agendamiento='$id_agendamiento'";

        if ($conn->query($sql) === TRUE) {
            echo "<script>alert('Registro actualizado exitosamente');</script>";
        } else {
            echo "Error: " . $conn->error;
        }

        // Refrescar la pantalla
        echo "<script>window.location.href = 'agendamiento.php';</script>";
    }
}
?>

