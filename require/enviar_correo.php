<?php

$to = "Info@adapt.es";
$subject = " [ÁDAPT] - Nuevo mensaje de " . $_POST['nombre'];

$message = '
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Verificación de correo electrónico</title>
    <style>
      /* Estilos para el cuerpo del correo */
      body {
        background-color: #f2f2f2;
        font-family: Arial, sans-serif;
        color: #555555;
      }
      
      /* Estilos para el contenedor principal */
      .container {
        max-width: 600px;
        margin: 0 auto;
        padding: 20px;
        background-color: #ffffff;
        border-radius: 5px;
        box-shadow: 0px 2px 5px rgba(0,0,0,0.1);
      }
      
      /* Estilos para los títulos */
      h1, h2 {
        text-align: center;
        margin-bottom: 20px;
        font-size: 3em;
      }
      
      /* Estilos para los enlaces */
      a {
        color: #0078d4;
        text-decoration: none;
        font-weight: bold;
      }
      
      /* Estilos para los botones */
      .button {
        display: inline-block;
        padding: 10px 20px;
        background-color: #0078d4;
        color: #ffffff;
        font-size: 16px;
        font-weight: bold;
        text-align: center;
        border-radius: 5px;
        text-decoration: none;
      }
      
      .button:hover {
        background-color: #005a9e;
      }

      p{
        font-size: 2em;
      }
    </style>
  </head>
  <body>
    <div class="container">
      <h1>Una persona trata de ponerse en contacto contigo</h1>
      <p>Nombre: '.$_POST['nombre'].' </p>
      <p>Correo electrónico: '.$_POST['email'].' </p>
      <p>Teléfono: '.$_POST['telefono'].' </p>
      <p>Mensaje: '.$_POST['mensaje'].' </p>
    </div>
  </body>
</html>
';

$headers = "From: adapt.es\r\n";
$headers .= "Reply-To: adapt.es\r\n";
$headers .= "Content-Type: text/html\r\n";

mail($to, $subject, $message, $headers);

header("Location: https://adapt.es");
exit;

?>