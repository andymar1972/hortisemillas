<?php $titulo = "Escarola"; ?>

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
        <img src="../assets/img/semillas/escarola-main.png" alt="">
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
            <?php $tituloSemilla = "CABELLO DE ANGEL"; ?>
            <h3 class="producto-semilla__title title"><?php echo strtoupper($tituloSemilla); ?></h3>
            <figure class="producto-semilla__logo">
              <img src="../assets/img/vilmorin.png" alt="">
            </figure>
            <ul class="producto-semilla__list">
              <li>Variedad de hojas largas, color verde medio, dispuestas en forma de embudo formando un buen corazón.</li>
              <li>Los peciolos son de anchura intermedia, unos 15 mm.</li>
              <li>La hoja bastante partida, con bordes finamente dentados y rizados.</li>
              <li>Es conveniente atar las hojas interiores para que blanqueen.</li>
            </ul>
          </div>
          <figure class="producto-semilla__img">
            <img src="../assets/img/semillas/cabellodeangel.jpg" alt="">
          </figure>
        </div>
        <div class="navegacion">
          <a class="navegacion__button-prev" href="coliflor.php"><i class="fas fa-caret-left"></i>COLIFLOR</a>
          <a class="navegacion__button-next" href="esparrago.php">ESPARRAGO<i class="fas fa-caret-right"></i></a>
        </div>
      </div>
    </section>
  </main>
  <?php include('../includes/_footer2.php') ?>
</body>

</html>