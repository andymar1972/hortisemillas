<?php $titulo = "Vainita"; ?>

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
        <img src="../assets/img/semillas/b-<?php echo strtolower($titulo); ?>.png" alt="">
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
        <div class="producto-semilla__grid">
          <div class="producto-semilla__data">
            <?php $tituloSemilla = 'SORIA'; ?>
            <h3 class="producto-semilla__title title"><?php echo strtoupper($tituloSemilla); ?></h3>
            <figure class="producto-semilla__logo">
              <img src="../assets/img/vilmorin.png" alt="">
            </figure>
            <ul class="producto-semilla__list">
              <li>Planta baja, de crecimiento vertical y arquitectura abierta</li>
              <li>Vigor medio a fuerte</li>
              <li>Flor de color blanca</li>
              <li>Color de la vaina verde oscuro brillante</li>
              <li>Vainas distribuidas en la parte alta de la planta</li>
              <li>Longitud de la vaina 12.5 a 13.5 cms</li>
              <li>Vainas redondas, rectas y muy homogéneas.</li>
              <li>Para cosechas manuales</li>
              <li>Producción escalonada. Fácil de cosechar.</li>
              <li>Excelente productividad</li>
              <li>Resistente a la Roya</li>
            </ul>
          </div>
          <figure class="producto-semilla__img">
            <img src="../assets/img/semillas/soria.jpg" alt="">
          </figure>
        </div>
      </div>
    </section>
  </main>
  <?php include('../includes/_footer2.php') ?>
</body>

</html>