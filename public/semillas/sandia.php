<?php $titulo = "Sandia"; ?>

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
            <?php $tituloSemilla = 'MADAGA F1'; ?>
            <h3 class="producto-semilla__title title"><?php echo strtoupper($tituloSemilla); ?></h3>
            <figure class="producto-semilla__logo">
              <img src="../assets/img/logo-ramiro-arnedo.png" alt="">
            </figure>
            <ul class="producto-semilla__list">
              <li>Planta vigorosa con buena cobertura foliar.</li>
              <li>Fruto con corteza de color verde y rayas blancas.</li>
              <li>Carne de color rojo intenso.</li>
              <li>Fruto de buena calidad, muy dulce.</li>
              <li>De forma oblonga u ovalada llegando a pesar entre 11 a 13 kilos.</li>
              <li>Con semillas.</li>
              <li>Semi precoz.</li>
            </ul>
          </div>
          <figure class="producto-semilla__img">
            <img src="../assets/img/semillas/madaga.jpg" alt="">
          </figure>
        </div>
      </div>
    </section>
  </main>
  <?php include('../includes/_footer2.php') ?>
</body>

</html>