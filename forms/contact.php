<?php
// Conexión a la base de datos
$servername = "localhost";
$username = "u554379922_usercognify";
$password = "Passcognify1";
$database = "u554379922_cognify";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Procesamiento del formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $asunto = $_POST['asunto'];
    $mensaje = $_POST['mensaje'];

    // Guardado en la base de datos
    $sql = "INSERT INTO contacto (nombre, email, asunto, mensaje) VALUES ('$nombre', '$email', '$asunto', '$mensaje')";

    if ($conn->query($sql) === TRUE) {
        // Envío de correo electrónico
        $to = "administracion@cognifydgo.website";
        $subject_email = "Nuevo mensaje de contacto";

        // Contenido del mensaje en formato HTML
        $message_email = "
        <!DOCTYPE html>
        <html lang='es'>
        <head>
          <meta charset='UTF-8'>
          <meta name='viewport' content='width=device-width, initial-scale=1.0'>
          <title>Nuevo mensaje de contacto</title>
          <style>
            /* Aquí puedes incluir estilos CSS para personalizar el diseño del correo electrónico */
            body {
              font-family: Arial, sans-serif;
              background-color: #f4f4f4;
              color: #333;
              margin: 0;
              padding: 20px;
            }
            .container {
              max-width: 600px;
              margin: 0 auto;
              background-color: #fff;
              padding: 20px;
              border-radius: 8px;
              box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            }
            h1 {
              color: #007bff;
            }
          </style>
        </head>
        <body>
          <div class='container'>
            <h1>Nuevo mensaje de contacto</h1>
            <p><strong>Nombre:</strong> $nombre</p>
            <p><strong>Correo electrónico:</strong> $email</p>
            <p><strong>Asunto:</strong> $asunto</p>
            <p><strong>Mensaje:</strong></p>
            <p>$mensaje</p>
          </div>
        </body>
        </html>
        ";

        // Encabezados para enviar un correo HTML
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $headers .= "From: $email"; // Utiliza la dirección de correo electrónico del remitente del formulario

        // Envío del correo electrónico
        mail($to, $subject_email, $message_email, $headers);

        header("Location: ..?envio_exitoso=true");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
