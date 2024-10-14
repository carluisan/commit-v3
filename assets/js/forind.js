function validateCredentials() {
    var username = document.getElementById('username').value;
    var password = document.getElementById('password').value;
    var message = document.getElementById('message');

    // DATOS ESPERADOS DE VALIDACION PARA SER APROBADO-> DEBE LLAMAR A LA BASE DE DATOS PARA VALIDAR.
    var expectedUsername = "admin";
    var expectedPassword = "admin123";
    console.log("Inicio del código");

    // ESPERA DE 3 SEGUNDOS (3000 milisegundos)
    setTimeout(function() {
     console.log("Esto se ejecutará después de 3 segundos");
    }, 3000);

     console.log("Fin del código");

    if (username === expectedUsername && password === expectedPassword) {
        message.textContent = "Bienvenido al sistema, " + username + "!";
        message.style.color = "green";
        setTimeout(función, tiempo);
        } else {
        message.textContent = "Usuario o contraseña incorrectos.";
        message.style.color = "red";
        setTimeout(función, tiempo);
    }
}