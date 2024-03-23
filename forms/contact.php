<?php
// Verificar si se han enviado datos del formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recuperar datos del formulario
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    
    // Dirección de correo electrónico de destino
    $to = 'cultursas1@gmail.com';

    // Asunto del correo electrónico
    $subject = 'Nuevo mensaje de formulario de contacto';

    // Contenido del correo electrónico
    $email_content = "Nombre: $name\n";
    $email_content .= "Email: $email\n\n";
    $email_content .= "Mensaje:\n$message\n";

    // Cabeceras del correo electrónico
    $headers = "From: $name <$email>";

    // Intentar enviar el correo electrónico
    if (mail($to, $subject, $email_content, $headers)) {
        echo "¡Tu mensaje ha sido enviado correctamente!";
    } else {
        echo "¡Oops! Algo salió mal y no pudimos enviar tu mensaje.";
    }
} else {
    // Si no se envió el formulario a través de POST, mostrar un mensaje de error
    echo "Error: Formulario no enviado.";
}
?>
