<?php $titulo = "Coliflor"; ?>

<?php include('../includes/_head2.php') ?>
<title><?php echo $titulo; ?> - Hortisemillas/Semillas Seleccionadas</title>

</head>

<body>
  <?php include('../includes/_header2.php') ?>
  <div class="banner--modify">
    <div class="banner__container">
      <!-- <div class="container">
        <h2 class="banner__title"><?php echo $titulo; ?></h2>
      </div> -->
      <figure class="banner__img">
        <img src="../assets/img/semillas/b-<?php echo strtolower($titulo); ?>.png" alt="">
      </figure>
      <figure class="banner__absolute">
        <img src="../assets/img/semillas/coliflor-main.png" alt="">
      </figure>
    </div>
  </div>

  <main class="main">
    <section class="producto-semilla section">
      <div class="producto-semilla__container container">
        <nav class="producto-semilla__nav">
          <ul>
            <li><a href="../productos.php">Productos</a></li>
            <li>
              <i class="fas fa-caret-right"></i>
              <figure>
                <img src="../assets/img/icons/semillas/<?php echo strtolower($titulo); ?>.png" alt="">
              </figure>
              <?php echo strtoupper($titulo); ?>
            </li>
          </ul>
        </nav>
        <!-- <div class="producto-semilla__grid">
          <div class="producto-semilla__data">
            <?php $tituloSemilla = "LOCRIS F1"; ?>
            <h3 class="producto-semilla__title title"><?php echo strtoupper($tituloSemilla); ?></h3>
            <figure class="producto-semilla__logo">
              <img src="../assets/img/vilmorin.png" alt="">
            </figure>
            <ul class="producto-semilla__list">
              <li>Híbrido para cosechas de verano e inicio de otoño.</li>
              <li>Planta vigorosa, buena estructura, con un follaje abundante que protege bien al corazón de la planta, porte semi erecto.</li>
              <li>Cabeza de forma redonda, lisa, muy homogénea, de color blanca y muy pesada. Ciclo de vida, de 75 a 85 días.</li>
              <li>Fácil de cosechar y envasar gracias a las hojas muy envolventes.</li>
            </ul>
          </div>
          <figure class="producto-semilla__img">
            <img src="../assets/img/semillas/locris-f1.jpg" alt="">
          </figure>
        </div> -->
        <div class="producto-semilla__grid">
          <div class="producto-semilla__data">
            <?php $tituloSemilla = "MEMPHIS F1"; ?>
            <h3 class="producto-semilla__title title"><?php echo strtoupper($tituloSemilla); ?></h3>
            <figure class="producto-semilla__logo">
              <img src="../assets/img/vilmorin.png" alt="">
            </figure>
            <ul class="producto-semilla__list">
              <li>Coliflor de otoño, semi precoz.</li>
              <li>Planta muy vigorosa y rústica, follaje de limbo muy ancho, color verde azulado a verde oscuro, porte erguido, buena cobertura de la cabeza y hermosa corona de hojas.</li>
              <li>Cabeza blanca, pesada, parte inferior muy llena, redonda, regular y grano sólido.</li>
              <li>Cosecha a los 85 a 95 días. La cosecha se concentra en 10 a 12 días.</li>
              <li>Híbrido muy flexible, según el objetivo de la cosecha (cabezas grandes o pequeñas) se puede usar densidades de 15,000 a 35,000 plantas por hectárea .</li>
            </ul>
          </div>
          <figure class="producto-semilla__img">
            <img src="../assets/img/semillas/memphis-f1.jpg" alt="">
          </figure>
        </div>
        <div class="navegacion">
          <a class="navegacion__button-prev" href="col.php"><i class="fas fa-caret-left"></i>COL</a>
          <a class="navegacion__button-next" href="escarola.php">ESCAROLA<i class="fas fa-caret-right"></i></a>
        </div>
      </div>
    </section>
  </main>
  <?php include('../includes/_footer2.php') ?>
</body>

</html>