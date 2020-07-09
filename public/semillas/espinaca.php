<?php $titulo = "Espinaca"; ?>

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
        <img src="../assets/img/semillas/espinaca-main.png" alt="">
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
            <?php $tituloSemilla = "PARYS F1"; ?>
            <h3 class="producto-semilla__title title"><?php echo strtoupper($tituloSemilla); ?></h3>
            <figure class="producto-semilla__logo">
              <img src="../assets/img/vilmorin.png" alt="">
            </figure>
            <ul class="producto-semilla__list">
              <li>Excelente comportamiento al frío.</li>
              <li>Hojas ligeramente lanceoladas, anchas, lisas y gruesas.</li>
              <li>Peciolo bastante largo.</li>
              <li>Buen rendimiento.</li>
              <li>Alta resistencia al Mildiu cepas Pfs1 y Pfs2.</li>
              <li>Resistencia intermedia al Virus del Mosaico del Pepino.</li>
            </ul>
          </div>
          <figure class="producto-semilla__img">
            <img src="../assets/img/semillas/parys.jpg" alt="">
          </figure>
        </div>
        <div class="producto-semilla__grid">
          <div class="producto-semilla__data">
            <?php $tituloSemilla = "SHARAN F1"; ?>
            <h3 class="producto-semilla__title title"><?php echo strtoupper($tituloSemilla); ?></h3>
            <figure class="producto-semilla__logo">
              <img src="../assets/img/logo-ramiro-arnedo.png" alt="">
            </figure>
            <ul class="producto-semilla__list">
              <li>Variedad de crecimiento rápido con porte erecto y peciolos medio-largos.</li>
              <li>Hojas de color verde oscuro, de superficie bastante lisa.</li>
              <li>HR a Pfs (1-4).</li>
            </ul>
          </div>
          <figure class="producto-semilla__img">
            <img src="../assets/img/semillas/sharan.jpg" alt="">
          </figure>
        </div>
        <div class="navegacion">
          <a class="navegacion__button-prev" href="esparrago.php"><i class="fas fa-caret-left"></i>ESPARRAGO</a>
          <a class="navegacion__button-next" href="lechuga.php">LECHUGA<i class="fas fa-caret-right"></i></a>
        </div>
      </div>
    </section>
  </main>
  <?php include('../includes/_footer2.php') ?>
</body>

</html>