<?php include('includes/_head.php') ?>
<title>Inicio - Hortisemillas/Semillas Seleccionadas</title>

</head>

<body>
  <?php include('includes/_header.php') ?>
  <div class="banner--principal">
    <div class="banner__container container">
      <figure class="banner__img--principal">
        <img src="assets/img/banner-principal-hortisemillas.png" alt="">
      </figure>
    </div>
  </div>
  <main class="main">
    <section class="productos section">
      <div class="productos__container container">
        <h2 class="productos__title title">Productos <i class="fas fa-forward"></i></h2>
        <div class="productos__grid">
          <a href="semillas.php" class="productos__item">
            <i class="fas fa-leaf"></i>
            <p class="productos__item__title">Semillas</p>
            <p class="productos__item__text">Amplia gama de semillas para uso agroindustrial y fresco.</p>
          </a>
          <a href="turba.php" class="productos__item">
            <i class="fas fa-seedling"></i>
            <p class="productos__item__title">Turba</p>
            <p class="productos__item__text">Amplia gama de productos para abono de uso agroindustrial.</p>
          </a>
        </div>
      </div>
    </section>
    <section class="galeria section">
      <div class="galeria__container container">
        <h2 class="galeria__title title">Empresas representadas<i class="fas fa-forward"></i></h2>
        <div class="galeria__grid">
          <figure class="galeria__img">
            <img src="assets/img/logo-ramiro-arnedo.jpg" alt="">
          </figure>
          <figure class="galeria__img">
            <img src="assets/img/vilmorin.jpg" alt="">
          </figure>
          <figure class="galeria__img">
            <img src="assets/img/eurosemillas.jpg" alt="">
          </figure>
          <figure class="galeria__img">
            <img src="assets/img/green-terra.jpg" alt="">
          </figure>
          <figure class="galeria__img">
            <img src="assets/img/agristar.jpg" alt="">
          </figure>
        </div>
      </div>
    </section>
    <section class="frases section">
      <div class="frases__container container">
        <figure class="frases__img">
          <img src="assets/img/frase1.png" alt="">
        </figure>
        <p class="frases__text">Somos especialistas en proveer semillas de alta calidad y rendimiento para asegurar las mejores cosechas incrementando su productividad.
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