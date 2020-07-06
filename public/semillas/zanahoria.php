<?php $titulo = "Zanahoria"; ?>

<?php include('../includes/_head2.php') ?>
<title><?php echo $titulo; ?> - Hortisemillas/Semillas Seleccionadas</title>

</head>

<body>
  <?php include('../includes/_header2.php') ?>
  <div class="banner--modify">
    <div class="banner__container">
      <div class="container">
        <h2 class="banner__title"><?php echo $titulo; ?></h2>
      </div>
      <figure class="banner__img">
        <img src="../assets/img/semillas/b-<?php echo $titulo; ?>.png" alt="">
      </figure>
    </div>
  </div>
  <main class="main">
    <section class="producto-semilla section">
      <div class="producto-semilla__container container">
        <div class="producto-semilla__grid">
          <div class="producto-semilla__data">
            <?php $tituloSemilla = 'OLIMPO F1'; ?>
            <h3 class="producto-semilla__title title"><?php echo strtoupper($tituloSemilla); ?></h3>
            <figure class="producto-semilla__logo">
              <img src="../assets/img/vilmorin.png" alt="">
            </figure>
            <ul class="producto-semilla__list">
              <li>Tipo Flakkee.</li>
              <li>Raíz bastante cónica y bien rematada, buen calibre, alto potencial de rendimiento, bastante lisa, muy buen color interno como externo.</li>
              <li>Follaje verde oscuro y bien erguido, inserción foliar sólida, adaptada a la cosecha mecánica.</li>
              <li>Tiene resistencia mecánica longitudinal y transversal.</li>
              <li>Cosecha a los 110 días.</li>
              <li>Resistencia a alternaría y oídium.</li>
            </ul>
          </div>
          <figure class="producto-semilla__img">
            <img src="../assets/img/semillas/olimpo.jpg" alt="">
          </figure>
        </div>
        <div class="producto-semilla__grid">
          <div class="producto-semilla__data">
            <?php $tituloSemilla = 'RED CORED'; ?>
            <h3 class="producto-semilla__title title"><?php echo strtoupper($tituloSemilla); ?></h3>
            <figure class="producto-semilla__logo">
              <img src="../assets/img/vilmorin.png" alt="">
            </figure>
            <ul class="producto-semilla__list">
              <li>Zanahoria tipo Chantenay.</li>
              <li>Raíces lisas de 15 cm de largo y de color naranja intenso.</li>
              <li>Planta con follaje vigoroso con buena inserción.</li>
              <li>Ciclo de 120 días.</li>
              <li>Gran productividad dentro de las zanahorias de tipo chantenay 30-35 ton/ha.</li>
            </ul>
          </div>
          <figure class="producto-semilla__img">
            <img src="../assets/img/semillas/red.jpg" alt="">
          </figure>
        </div>
        <div class="producto-semilla__grid">
          <div class="producto-semilla__data">
            <?php $tituloSemilla = 'ZANAHORIA DIAMENTO F'; ?>
            <h3 class="producto-semilla__title title"><?php echo strtoupper($tituloSemilla); ?></h3>
            <figure class="producto-semilla__logo">
              <img src="../assets/img/vilmorin.png" alt="">
            </figure>
            <ul class="producto-semilla__list">
              <li>Raiz cónica, con punta roma.</li>
              <li>20 cms de largo y 5 cms de ancho aproximadamente.</li>
              <li>Muy buen color de raíz.</li>
              <li>Muy lisa.</li>
              <li>Alta resistencia al Oidium.</li>
              <li>Resistencia Intermedia a Phytium.</li>
              <li>Cosechas para fresco y procesado.</li>
            </ul>
          </div>
          <figure class="producto-semilla__img">
            <img src="../assets/img/semillas/diamento.jpg" alt="">
          </figure>
        </div>
      </div>
    </section>
  </main>
  <?php include('../includes/_footer2.php') ?>
</body>

</html>