<?php include('includes/_head.php') ?>
<title>Productos - Hortisemillas/Semillas Seleccionadas</title>

</head>

<body>
  <?php include('includes/_header.php') ?>
  <div class="banner--modify">
    <div class="banner__container">
      <!-- <div class="container">
        <h2 class="banner__title">Productos</h2>
      </div> -->
      <figure class="banner__img">
        <img src="assets/img/banner-productos.png" alt="">
      </figure>
    </div>
  </div>
  <main class="main">
    <section class="productos section">
      <div class="productos__container container">
        <h2 class="productos__title title">Selecciona Producto <i class="fas fa-forward"></i></h2>
        <div class="productos__grid">
          <a href="semillas.php" class="productos__item">
            <div class="centrar__align">
              <i class="fas fa-leaf"></i>
              <p class="productos__item__title">Semillas</p>
            </div>

            <div class="productos__gallery">
              <figure class="productos__img">
                <img src="assets/img/logo-ramiro-arnedo.png" alt="">
              </figure>
              <figure class="productos__img">
                <img src="assets/img/vilmorin.png" alt="">
              </figure>
              <figure class="productos__img">
                <img src="assets/img/eurosemillas.png" alt="">
              </figure>
              <figure class="productos__img">
                <img src="assets/img/agristar.png" alt="">
              </figure>
            </div>
          </a>
          <a href="turba.php" class="productos__item">
            <div class="centrar__align">
              <i class="fas fa-seedling"></i>
              <p class="productos__item__title">Turba</p>
            </div>
            <div class="productos__gallery">
              <figure class="productos__img--modify">
                <img src="assets/img/green-terra.png" alt="">
              </figure>
              </figure>
            </div>
          </a>
        </div>
      </div>
    </section>
    <section class="frases section">
      <div class="frases__container container">
        <p class="frases__text--nm">Somos especialistas en proveer semillas de alta calidad y rendimiento para asegurar las mejores cosechas incrementando su productividad.
        </p>
        <figure class="frases__img">
          <img src="assets/img/garantia.png" alt="">
        </figure>
      </div>
    </section>
  </main>
  <?php include('includes/_footer.php') ?>
</body>

</html>