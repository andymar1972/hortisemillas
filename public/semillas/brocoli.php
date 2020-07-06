<?php $titulo = "Brocoli"; ?>

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
        <div class="producto-semilla__grid">
          <div class="producto-semilla__data">
            <?php $tituloSemilla = "BAOBAB F1"; ?>
            <h3 class="producto-semilla__title title"><?php echo strtoupper($tituloSemilla); ?></h3>
            <figure class="producto-semilla__logo">
              <img src="../assets/img/logo-ramiro-arnedo.png" alt="">
            </figure>
            <ul class="producto-semilla__list">
              <li>Planta de vigor medio y porte cerrado.</li>
              <li>Ciclo de 95-100 días.</li>
              <li>Cabeza de forma esférico-acuminada, de color verde azulado y grano de tamaño medio.</li>
              <li>No produce tallo hueco ni brotes laterales.</li>
              <li>Trasplantes de otoño, invierno (en zonas templadas) y primavera temprana.</li>
            </ul>
          </div>
          <figure class="producto-semilla__img">
            <img src="../assets/img/semillas/baoab-f1.jpg" alt="">
          </figure>
        </div>
      </div>
    </section>
  </main>
  <?php include('../includes/_footer2.php') ?>
</body>

</html>