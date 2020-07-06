<?php $titulo = "Col"; ?>

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
            <?php $tituloSemilla = "FUYUKUGURI F1"; ?>
            <h3 class="producto-semilla__title title"><?php echo strtoupper($tituloSemilla); ?></h3>
            <figure class="producto-semilla__logo">
              <img src="../assets/img/logo-ramiro-arnedo.png" alt="">
            </figure>
            <ul class="producto-semilla__list">
              <li>Planta vigorosa con hojas exteriores erectas, que abrazan al cogollo. Repollo de forma ligeramente aplanado, compacto, de un peso medio de 3,2 kg y color exterior verde medio grisáceo.</li>
              <li>Resistente al reventado. Ciclo de 90-95 días.</li>
            </ul>
          </div>
          <figure class="producto-semilla__img">
            <img src="../assets/img/semillas/fukuyuguri.jpg" alt="">
          </figure>
        </div>
      </div>
    </section>
  </main>
  <?php include('../includes/_footer2.php') ?>
</body>

</html>