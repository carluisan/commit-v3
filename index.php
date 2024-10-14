
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
    <main class="container">
        <div class="row">
            <div class="col s1"></div>
            <div class="col s1"></div>
            <div class="col s1"></div>
                 <div class="col s3">
                 <div class="card-content">
                                <p></p>
                                <h3 class="brand-logo center">Administración del Sistema</h3>
                                <form method="post" action="registrar.php">
                                    <div class="input-field">
                                        <input type="text" name="id_usuario" placeholder="Cédula" required>
                                        <label for="id_usuario">Cédula:</label>
                                    </div>
                                    <div class="input-field">
                                        <input type="text" name="usuario" placeholder="Nombre" required>
                                        <label for="usuario">Usuario:</label>
                                    </div>
                                    <div class="input-field">
                                        <input type="text" name="contraseña" placeholder="Contraseña" required>
                                        <label for="contraseña">Contraseña:</label>
                                    </div>
                                    <div class="input-wrapper">
                                    <select name="perfil" required>
                                    <option value="" disabled selected>Selecciona un perfil</option>
                                    <option value="A">A-Administrador</option>
                                    <option value="V">V-Vendedor</option>
                                    <option value="C">C-Cliente</option>
                                    </select>
                                    <input class="btn" type="submit" name="register" value="Enviar">
                                </form>
                    </div>
                    </div>
                           
        </div>
        <div class="col s1"></div>
        <div class="col s1"></div>
        <div class="col s1"></div>
    </main>
 
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
  <!-- Compiled and minified CSS 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">-->
<!--/*-----------------------------------------*/
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Usuarios</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Registro de Usuarios</h2>
    
    <h3>Registrar Usuario</h3>
    <form method="post" action="registrar.php">
        <div class="input-wrapper">
            <input type="text" name="id_usuario" placeholder="Cédula" required>
        </div>
        <div class="input-wrapper">
            <input type="text" name="usuario" placeholder="Nombre" required>
            <img class="input-icon" src="images/name.svg" alt="">
        </div>
        <div class="input-wrapper">
            <input type="text" name="perfil" placeholder="Perfil" required>
        </div>
        <div class="input-wrapper">
            <input type="text" name="contraseña" placeholder="Contraseña" required>
            <img class="input-icon" src="images/password.svg" alt="">
        </div>
        <input class="btn" type="submit" name="register" value="Enviar">
    </form>-->

    <h3>Lista de Usuarios</h3>
    <?php include 'read.php'; ?>
</body>
</html>