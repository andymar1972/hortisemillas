<?php include('includes/_head.php') ?>
<title>Contáctenos - Hortisemillas/Semillas Seleccionadas</title>

</head>

<body>
  <?php include('includes/_header.php') ?>
  <div class="banner--modify">
    <div class="banner__container">
      <div class="container">
        <h2 class="banner__title">Contáctenos</h2>
      </div>
      <figure class="banner__img">
        <img src="assets/img/banner-contacto.png" alt="">
      </figure>
    </div>
  </div>
  <main class="main">
    <section class="contacto section">
      <div class="contacto__container container">
        <p class="title--2">Contáctenos</p>
        <div class="contacto__grid--2">
          <form class="form" id="frmContacto" action="" method="post">
            <div class="panel__confirmacion" id="respa"></div>
            <div class="form__group">
              <label for="nombre-contacto">Nombre:</label>
              <input class="input" type="text" name="nombre" id="nombre-contacto" placeholder="Introducir nombre" required>
            </div>
            <div class="form__group">
              <label for="correo-contacto">Correo electrónico:</label>
              <input class="input" type="email" name="correo" id="correo-contacto" placeholder="Introducir correo" required>
            </div>
            <div class="form__group">
              <label for="empresa-contacto">Empresa:</label>
              <input class="input" type="text" name="empresa" id="empresa-contacto" placeholder="Introducir nombre de empresa" required>
            </div>
            <div class="form__group">
              <label for="mensaje-contacto">Mensaje:</label>
              <textarea required class="input" name="mensaje" id="mensaje-contacto" cols="30" rows="10" placeholder="Escriba su mensaje"></textarea>
            </div>
            <div class="form__group">
              <div>
                <input class="button-submit" type="submit" value="Enviar">
              </div>
            </div>
          </form>
          <figure class="img">
            <img src="assets/img/contacto.jpg" alt="">
          </figure>
        </div>

        <div class="contacto__grid">
          <div class="contacto__item">
            <div class="contacto__item__icon">
              <i class="fas fa-envelope-open-text"></i>
            </div>
            <p class="contacto__item__text">ventas@hortisemillas.com</p>
          </div>
          <div class="contacto__item">
            <div class="contacto__item__icon">
              <i class="fas fa-map-marked-alt"></i>
            </div>
            <p class="contacto__item__text">Av. Circunvalación del Golf 206 Of. 301B Torre III, Santiago de Surco, Lima</p>
          </div>
          <div class="contacto__item">
            <div class="contacto__item__icon">
              <i class="fas fa-tty"></i>
            </div>
            <p class="contacto__item__text">(51-1) 435-8120</p>
          </div>
          <div class="contacto__item">
            <div class="contacto__item__icon">
              <i class="fas fa-mobile-alt"></i>
            </div>
            <p class="contacto__item__text">946 587 399</p>
            <p class="contacto__item__text">951 731 490</p>
          </div>
        </div>
      </div>
      <iframe style="display: block;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3901.4565479599146!2d-76.96842615722811!3d-12.080866182928432!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105c70c2f699015%3A0xb60db98d01de8494!2sCentro%20Empresarial%20Los%20Inkas!5e0!3m2!1ses!2spe!4v1594261484356!5m2!1ses!2spe" width="100%" height="350" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </section>

  </main>
  <?php include('includes/_footer.php') ?>
</body>

</html>