<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ádapt</title>
  <script src="https://kit.fontawesome.com/ed0e2390af.js" crossorigin="anonymous"></script>
  <link rel="shortcut icon" href="https://adapt.es/img/favicon.png" type="image/x-icon">
  <link rel="stylesheet" href="style_index.css">
</head>

<body>
  <div id="top"></div>
  <?php
  require_once("./require/nav.php");
  ?>
  <div class="imagen">
    <div class="texto">
      <div>
        <h1>Adaptándonos hacia el equilibrio</h1>
        <h4>Acompañándote en tu desarrollo profesional y personal.</h4>
      </div>
      <a class="toFormacion"><i class="fa-solid fa-angles-down fa-beat-fade"></i></a>
    </div>
    <img class="fondo_inicio" src="img/probar.webp" alt="Montaña nevada con nieve">
  </div>
  <div class="cuerpo">
    <div id="formacion">
      <div class="columna1form">
        <h1>Formación</h1>
        <h3>El aprendizaje para el acompañamiento</h3>
        <p>El espacio de formación psicológica para profesionales sanitarios.</p>
        <a href="https://adapt.es/formacion" class="boton">Conoce nuestro método</a>
      </div>
      <div class="columna2form">
        <a href="#">
          <div class="tarjeta">
            <h4>Habilidades psicológicas para entrenadores <br> (AHP-E)</h4>
            <p>25/26 Noviembre 2023</p>
          </div>
        </a>
        <a href="#">
          <div class="tarjeta">
            <h4>Habilidades psicológicas para fisioterapeutas <br> (AHP-F)</h4>
            <p>Enero 2024</p>
          </div>
        </a>
      </div>
    </div>
    <div id="sobreNosotros">
      <div class="contenido">
        <div class="izquierda">
          <h2>Equipo</h2>
          <h4>Nuestro equipo está formado por psicólogos especializados en diversas áreas, de manera complementaria a su labor profesional, este equipo acompaña a los profesionales sanitarios en su desarrollo profesional y personal. </h4>
        </div>
        <div class="separador"></div>
        <div class="derecha">
          <h2>Nuestra filosofía</h2>
          <h4>Reconocemos los desafíos que enfrentan los profesionales de la salud. En Ádapt, ofrecemos un acompañamiento educativo a profesionales sanitarios, proporcionando herramientas tanto para el cuidado del paciente como para el bienestar personal.</h4>
        </div>
      </div>
      <a href="https://adapt.es/sobre_nosotros" class="boton_equipo">¡Conócenos!</a>
    </div>
    <div class="contacto">
      <div class="letras_form">
        <h2>¡Contacta con nosotros!</h2>
      </div>
      <div class="formulario">
        <form id="contact-form" action="./require/enviar_correo.php" method="post">
          <label for="nombre">Nombre <span class="rojo">*</span></label>
          <input type="text" id="nombre" name="nombre" required placeholder="Tu nombre">

          <label for="email">Correo electrónico <span class="rojo">*</span></label>
          <input type="email" id="email" name="email" required placeholder="Tu email">

          <label for="telefono">Teléfono</label>
          <input type="tel" id="telefono" name="telefono" placeholder="Tu teléfono">

          <label for="mensaje">Mensaje <span class="rojo">*</span></label>
          <textarea id="mensaje" name="mensaje" required placeholder="Tu mensaje"></textarea>

          <label for="politica"><input type="checkbox" id="politica" name="politica" required> He leído y acepto la <a href="https://adapt.es/politica" style="text-decoration: underline;">política de privacidad</a> <span class="rojo">*</span></label>

          <input type="submit" class="boton" id="enviar" value="Enviar mensaje">
        </form>
      </div>
    </div>
  </div>
  <a class="botonSubir">
    <i class="fa-solid fa-circle-up fa-bounce"></i>
  </a>
  <?php
  require_once("./require/footer.php");
  ?>
</body>

<script>
  document.querySelector('.toFormacion').addEventListener('click', () => {
    const navHeight = document.querySelector(".nav").offsetHeight;
    const imagenHeight = document.querySelector(".imagen").offsetHeight;
    let position = imagenHeight - navHeight;
    window.scrollTo({
      top: position,
      behavior: 'smooth'
    });
  });
  document.querySelector('.botonSubir').addEventListener('click', () => {
    window.scrollTo({
      top: 0,
      behavior: 'smooth'
    });
  });

  document.addEventListener("DOMContentLoaded", function() {
    const form = document.getElementById("contact-form");

    form.addEventListener("submit", function(event) {
      const nombre = document.getElementById("nombre").value;
      const email = document.getElementById("email").value;
      const telefono = document.getElementById("telefono").value;
      const mensaje = document.getElementById("mensaje").value;
      const politica = document.getElementById("politica").checked;

      if (!nombre || !email || !mensaje || !politica) {
        alert("Por favor, complete todos los campos requeridos.");
        event.preventDefault();
      } else {
        // Validación de email (puedes usar una expresión regular más robusta)
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailRegex.test(email)) {
          alert("Ingrese una dirección de correo electrónico válida.");
          event.preventDefault();
        }

        // Protección contra inyecciones de código en los campos de texto
        if (containsScriptTags(nombre) || containsScriptTags(mensaje)) {
          alert("No se permiten scripts en los campos de texto.");
          event.preventDefault();
        }
      }
    });

    // Función para verificar si un texto contiene etiquetas de script
    function containsScriptTags(text) {
      const scriptRegex = /<script\b[^<]*(?:(?!<\/script>)<[^<]*)*<\/script>/gi;
      return scriptRegex.test(text);
    }
  });
</script>

</html>