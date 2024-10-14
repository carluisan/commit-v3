<?php
require 'vendor/autoload.php'; // Ruta correcta al archivo autoload.php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

include 'db.php';
include 'generar_nueva_contraseña.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id_usuario = $_POST['id_usuario'];

    $nueva_contraseña = generarNuevaContraseña();

    // Actualizar la contraseña en la base de datos
    $stmt = $conn->prepare("UPDATE perfil SET contraseña = ? WHERE id_usuario = ?");
    $stmt->bind_param("si", $nueva_contraseña, $id_usuario);
    $stmt->execute();

    // Obtener el email del usuario
    $stmt = $conn->prepare("SELECT email FROM usuario WHERE id_usuario = ?");
    $stmt->bind_param("i", $id_usuario);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();
    $email = $row['email'];

    // Enviar el correo usando PHPMailer
    $mail = new PHPMailer(true);

    try {
        // Configuración del servidor SMTP
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'carluisan@gmail.com'; // Reemplaza con tu dirección de correo
        $mail->Password = 'Americ4161215*'; // Reemplaza con tu contraseña
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;

        // Destinatario
        $mail->setFrom('carluisan@gmail.com', 'Administrador');
        $mail->addAddress($email);

        // Contenido
        $mail->isHTML(true);
        $mail->Subject = 'Recuperación de contraseña';
        $mail->Body = "Hola, tu nueva contraseña es: $nueva_contraseña";

        $mail->send();
        echo "Se ha enviado un correo con la nueva contraseña.";
    } catch (Exception $e) {
        echo "Error al enviar el correo: {$mail->ErrorInfo}";
    }

    $stmt->close();
    $conn->close();
}
?>