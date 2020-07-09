<?php $titulo = "Beterraga"; ?>

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
        <img src="../assets/img/semillas/beterraga-main.png" alt="">
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
                <img src="../assets/img/icons/semillas/beterraga.png" alt="">
              </figure>
              BETERRAGA
            </li>
          </ul>
        </nav>
        <div class="producto-semilla__grid">
          <div class="producto-semilla__data">
            <?php $tituloSemilla = "camaro f1"; ?>
            <h3 class="producto-semilla__title title"><?php echo strtoupper($tituloSemilla); ?></h3>
            <figure class="producto-semilla__logo">
              <img src="../assets/img/vilmorin.png" alt="">
            </figure>
            <ul class="producto-semilla__list">
              <li>Follaje de porte erecto.</li>
              <li>Beterraga de alto rendimiento.</li>
              <li>Excelente calidad.</li>
              <li>Se puede sembrar todo el año.</li>
              <li>Cosecha para fresco o proceso.</li>
              <li>Excelente color despues de cocinarlo.</li>
            </ul>
          </div>
          <figure class="producto-semilla__img">
            <img src="../assets/img/semillas/beterraga-camaro-f1.jpg" alt="">
          </figure>
        </div>
        <div class="producto-semilla__grid">
          <div class="producto-semilla__data">
            <?php $tituloSemilla = "darko"; ?>
            <h3 class="producto-semilla__title title"><?php echo strtoupper($tituloSemilla); ?></h3>
            <figure class="producto-semilla__logo">
              <img src="../assets/img/vilmorin.png" alt="">
            </figure>
            <ul class="producto-semilla__list">
              <li>Planta vigorosa con follaje oscuro.</li>
              <li>Floración al 14º/15º entrenudo.</li>
              <li>Vaina de color verde oscuro con sutura muy oscura y tiene una longitud de 13 cms. Grano de color verde oscuro.</li>
              <li>Variedad precoz con una producción escalonada, cómodo de cosechar y excelente productividad.</li>
              <li>Adaptada a cosechas manuales para mercado fresco.</li>
              <li>Resistente a Oidium y de muy buena presentación comercial.</li>
            </ul>
          </div>
          <figure class="producto-semilla__img">
            <img src="../assets/img/semillas/<?php echo strtolower($tituloSemilla); ?>.jpg" alt="">
          </figure>
        </div>
        <div class="navegacion">
          <a class="navegacion__button-prev" href="arveja.php"><i class="fas fa-caret-left"></i>ARVEJA</a>
          <a class="navegacion__button-next" href="brocoli.php">BROCOLI<i class="fas fa-caret-right"></i></a>
        </div>
      </div>
    </section>
  </main>
  <?php include('../includes/_footer2.php') ?>
</body>

</html>