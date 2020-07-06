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
        <div class="contacto__grid--2">
          <form class="form" id="frmContacto" action="" method="post">
            <div class="form__group">
              <label for="nombre-contacto">Nombre:</label>
              <input class="input" type="text" name="nombre" id="nombre-contacto" placeholder="Introducir nombre">
            </div>
            <div class="form__group">
              <label for="correo-contacto">Correo electrónico:</label>
              <input class="input" type="email" name="correo" id="correo-contacto" placeholder="Introducir correo">
            </div>
            <div class="form__group">
              <label for="empresa-contacto">Empresa:</label>
              <input class="input" type="text" name="empresa" id="empresa-contacto" placeholder="Introducir correo">
            </div>
            <div class="form__group">
              <label for="mensaje-contacto">Mensaje:</label>
              <textarea class="input" name="mensaje" id="mensaje-contacto" cols="30" rows="10" placeholder="Escriba su mensaje"></textarea>
            </div>
            <div class="form__group">
              <div>
                <input class="button-submit" type="submit" value="Enviar">
              </div>
            </div>
          </form>
          <figure class="img-padding">
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
            <p class="contacto__item__text">975 499 993</p>
            <p class="contacto__item__text">951 731 490</p>
          </div>
        </div>
      </div>
      <iframe style="display: block;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3901.5005832343986!2d-76.96099768518458!3d-12.077844345767836!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105c6fea1c24223%3A0x5227f0ef13ab3c44!2sAv.%20Circunvalaci%C3%B3n%20del%20Golf%20los%20Incas%20206%2C%20Santiago%20de%20Surco%2015023!5e0!3m2!1ses!2spe!4v1593733804026!5m2!1ses!2spe" width="100%" height="350" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </section>

  </main>
  <?php include('includes/_footer.php') ?>
</body>

</html>