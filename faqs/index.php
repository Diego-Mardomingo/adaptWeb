<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ádapt | Sobre nosotros</title>
  <script src="https://kit.fontawesome.com/ed0e2390af.js" crossorigin="anonymous"></script>
  <link rel="shortcut icon" href="https://adapt.es/img/favicon.png" type="image/x-icon">
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <?php
  require_once("../require/nav.php");
  ?>
  <div class="contenido">
    <h2>Preguntas frecuentes</h2>
    <div class="accordion">
      <div class="accordion-item">
        <button id="accordion-button-1" aria-expanded="false">
          <span class="accordion-title">Why is the moon sometimes out during the day?</span>
          <span class="icon" aria-hidden="true"></span>
        </button>
        <div class="accordion-content">
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
            incididunt ut labore et dolore magna aliqua. Elementum sagittis vitae et leo duis ut.
            Ut tortor pretium viverra suspendisse potenti.
          </p>
        </div>
      </div>
      <div class="accordion-item">
        <button id="accordion-button-2" aria-expanded="false">
          <span class="accordion-title">Why is the sky blue?</span>
          <span class="icon" aria-hidden="true"></span>
        </button>
        <div class="accordion-content">
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
            incididunt ut labore et dolore magna aliqua. Elementum sagittis vitae et leo duis ut.
            Ut tortor pretium viverra suspendisse potenti.
          </p>
        </div>
      </div>
      <div class="accordion-item">
        <button id="accordion-button-3" aria-expanded="false">
          <span class="accordion-title">Will we ever discover aliens?</span>
          <span class="icon" aria-hidden="true"></span>
        </button>
        <div class="accordion-content">
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
            incididunt ut labore et dolore magna aliqua. Elementum sagittis vitae et leo duis ut.
            Ut tortor pretium viverra suspendisse potenti.
          </p>
        </div>
      </div>
      <div class="accordion-item">
        <button id="accordion-button-4" aria-expanded="false">
          <span class="accordion-title">How much does the Earth weigh?</span>
          <span class="icon" aria-hidden="true"></span>
        </button>
        <div class="accordion-content">
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
            incididunt ut labore et dolore magna aliqua. Elementum sagittis vitae et leo duis ut.
            Ut tortor pretium viverra suspendisse potenti.
          </p>
        </div>
      </div>
      <div class="accordion-item">
        <button id="accordion-button-5" aria-expanded="false">
          <span class="accordion-title">How do airplanes stay up?</span>
          <span class="icon" aria-hidden="true"></span>
        </button>
        <div class="accordion-content">
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
            incididunt ut labore et dolore magna aliqua. Elementum sagittis vitae et leo duis ut.
            Ut tortor pretium viverra suspendisse potenti.
          </p>
        </div>
      </div>
    </div>

    <!-- <div class="faq1">
      <div class="pregunta">Pregunta1</div>
      <div class="respuesta">Respuesta1</div>
    </div>
    <div class="faq2">
      <div class="pregunta">Pregunta2</div>
      <div class="respuesta">Respuesta2</div>
    </div>
    <div class="faq3">
      <div class="pregunta">Pregunta3</div>
      <div class="respuesta">Respuesta3</div>
    </div>
    <div class="faq4">
      <div class="pregunta">Pregunta4</div>
      <div class="respuesta">Respuesta4</div>
    </div>
    <div class="faq5">
      <div class="pregunta">Pregunta5</div>
      <div class="respuesta">Respuesta5</div>
    </div> -->
  </div>
  <?php
  require_once("../require/footer.php");
  ?>
</body>

<script>
  const items = document.querySelectorAll('.accordion button');

  function toggleAccordion() {
    const itemToggle = this.getAttribute('aria-expanded');

    for (i = 0; i < items.length; i++) {
      items[i].setAttribute('aria-expanded', 'false');
    }

    if (itemToggle == 'false') {
      this.setAttribute('aria-expanded', 'true');
    }
  }

  items.forEach((item) => item.addEventListener('click', toggleAccordion));
</script>

<!-- <script>
  const preguntas = document.querySelectorAll('.pregunta');

  preguntas.forEach((pregunta) => {
    pregunta.addEventListener('click', () => {
      // pregunta.classList.toggle('activa');
      const respuesta = pregunta.nextElementSibling;
      respuesta.classList.toggle('activa');
      // if (respuesta.style.maxHeight) {
      //   respuesta.style.maxHeight = null;
      // } else {
      //   respuesta.style.maxHeight = respuesta.scrollHeight + 'px';
      // }
    });
  });
</script> -->

</html>