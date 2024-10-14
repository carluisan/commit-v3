<!DOCTYPE html>
<html lang="es">
<head>
    <title>index vehículo</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" rel="stylesheet">
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/main.css" />
</head>
<header>
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
      </header>
    <main class="container">
        <div class="row">
                <div class="col s1"></div>
                <div class="col s1"></div>
                <div class="col s1"></div>
                <div class="col s3">
                <div class="card-content">
                <p></p>
                <h3 class="brand-logo center">OPERACIONES CRUD</h3>
                <h3 class="brand-logo center">DE VEHICULOS</h3>
                <form action="" method="get">
                    <div>
                    <label for="operacion">Seleccione una operación:</label>
                    <select name="operacion" id="operacion">
                        <option value="crear">Crear Nuevo Vehículo</option>
                        <option value="leer">Ver Vehículos Registrados</option>
                    <!--    <option value="actualizar">Actualizar Vehículo</option>
                        <option value="eliminar">Eliminar Vehículo</option>-->
                    </select>
                    </div>
                    <button type="submit">Seleccionar</button>
                </form>
                <form method="get" action="">
                <a href="index_vehiculo.php" class="btn">Volver a la página principal</a>
                </form>
                </div>
                </div>
                <div class="col s1"></div>
                <div class="col s1"></div>
                <div class="col s1"></div>
        </div>
    </main>
</header> 

    <?php
    // Verificar si se ha seleccionado una operación
    if(isset($_GET['operacion'])) {
        $operacion = $_GET['operacion'];
        // Redirigir a la página correspondiente según la operación seleccionada
        switch($operacion) {
            case 'crear':
                header('Location: formulario_vehiculo.html');
                break;
            case 'leer':
                header('Location: leer_vehiculos.php');
                break;
            /*case 'actualizar':
                header('Location: actualizar_vehiculo.html');
                break;
            case 'eliminar':
                header('Location: eliminar_vehiculo.html');
                break;*/
            default:
                echo "Operación no válida";
        }
    }
    ?>
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